#!/usr/bin/env bash
set -euo pipefail

THEME="${1:-des-2}"
MODE="${2:-watch}"
ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
SRC="$ROOT/wp-content/themes/$THEME"
DEST="$ROOT/.local-ai1wm/html/wp-content/themes/$THEME"
SCSS="$SRC/css/style.scss"
CSS="$SRC/style.css"

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

run_once() {
  build_css
  sync_theme
  printf '[%s] synced %s\n' "$(date '+%H:%M:%S')" "$THEME"
}

run_once

if [ "$MODE" = "--once" ] || [ "$MODE" = "once" ]; then
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
