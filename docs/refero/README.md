# Refero local cache

This folder is a local cache of public style data from https://styles.refero.design.

## Purpose In This Project

- Keep Refero as a secondary design-quality source after `yeucau.md`, `100-home-styles.md`, `100-design-board.md`, and `docs/getdesign/*/DESIGN.md`.
- Search locally with `rg` before preparing a `des-N` brief.
- Use Refero for taste, tokens, component anatomy, spacing, and visual polish. Do not copy a brand or override the project's client requirements.

Refero is not the 100-design tracker. The tracker and per-design specs live in `100-design-board.md`.

## Files

- `manifest.json`: full crawl manifest and catalog.
- `catalog.md`: human-readable index.
- `catalog.csv`: spreadsheet-friendly index.
- `styles/*/DESIGN.md`: style reference for agents.
- `styles/*/style.json`: raw style JSON with asset URLs.

Binary images/videos are not downloaded to avoid a heavy repo. Their public URLs remain in each style's files.

## How To Use For `des-N`

Use Refero only during the brief step:

1. Pick the target style in `100-design-board.md`.
2. Pick the primary `docs/getdesign/*/DESIGN.md` source from that style block.
3. Search this Refero cache for a supporting source.
4. Write the selected local path into `100-design-board.md` and `docs/design-research/des-briefs/des-N.md`.
5. During implementation, read only that one Refero `DESIGN.md`, not the full cache.

Good brief entry:

```text
Refero source: docs/refero/styles/xbox-com-3792d0ca/DESIGN.md
Refero URL: https://styles.refero.design/style/3792d0ca-6c74-4667-a64d-76efe9f87076
Use for: square game media, sharp CTAs, compact density, white/green gaming energy.
Do not copy: Xbox brand, menu, copy, or exact layout.
```

## Search Recipes

Search the catalog:

```bash
rg -i "xbox|media|gaming|dark|command|directory|editorial|grid" docs/refero/catalog.csv
```

Search all style docs:

```bash
rg -i "game|media|dense|grid|command|masonry|portal|magazine|navigation|footer" docs/refero/styles -g "DESIGN.md"
```

Filter the manifest:

```bash
jq -r '.catalog[] | select(.industry|test("media|devtools|productivity|design"; "i")) | [.siteName,.theme,.industry,.localDesign] | @tsv' docs/refero/manifest.json
```

Use the curated pool first:

```text
docs/design-research/refero-source-pool.md
```
