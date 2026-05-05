#!/usr/bin/env bash
set -euo pipefail

THEME="${1:-des-2}"
shift || true
WATCH=1
ACTIVATE=1
ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
SRC="$ROOT/wp-content/themes/$THEME"
DEST="$ROOT/.local-ai1wm/html/wp-content/themes/$THEME"
SCSS="$SRC/css/style.scss"
CSS="$SRC/style.css"
COMPOSE_FILE="$ROOT/.local-ai1wm/docker-compose.yml"

for arg in "$@"; do
  case "$arg" in
    --once|once)
      WATCH=0
      ;;
    --no-activate|no-activate)
      ACTIVATE=0
      ;;
    *)
      echo "Unknown option: $arg" >&2
      echo "Usage: scripts/watch-theme.sh des-N [--once] [--no-activate]" >&2
      exit 1
      ;;
  esac
done

if [ ! -d "$SRC" ]; then
  echo "Theme not found: $SRC" >&2
  exit 1
fi

fingerprint() {
  find "$SRC" \
    -type f \
    ! -name ".DS_Store" \
    ! -name "style.css" \
    ! -path "*/node_modules/*" \
    -print0 \
    | sort -z \
    | xargs -0 shasum \
    | shasum \
    | awk '{print $1}'
}

build_css() {
  if [ -f "$SCSS" ]; then
    npx sass "$SCSS" "$CSS" --no-source-map >/tmp/"$THEME"-sass.log 2>&1 || {
      cat /tmp/"$THEME"-sass.log >&2
      return 1
    }
  fi
}

sync_theme() {
  mkdir -p "$DEST"
  rsync -a --delete "$SRC/" "$DEST/"
}

activate_theme() {
  if [ "$ACTIVATE" -eq 0 ]; then
    return
  fi

  if [ ! -f "$COMPOSE_FILE" ]; then
    echo "Skipped theme activation: missing $COMPOSE_FILE" >&2
    return
  fi

  docker compose -f "$COMPOSE_FILE" run --rm wpcli wp theme activate "$THEME" >/tmp/"$THEME"-activate.log 2>&1 || {
    cat /tmp/"$THEME"-activate.log >&2
    return 1
  }
}

run_once() {
  build_css
  sync_theme
  printf '[%s] synced %s\n' "$(date '+%H:%M:%S')" "$THEME"
}

run_once
activate_theme

if [ "$WATCH" -eq 0 ]; then
  exit 0
fi

echo "Watching $THEME. Refresh http://localhost:8088/ after changes."
last="$(fingerprint)"

while true; do
  sleep 0.5
  current="$(fingerprint)"
  if [ "$current" != "$last" ]; then
    last="$current"
    run_once
  fi
done
