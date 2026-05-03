# Refero local cache

This folder is a local cache of public style data from https://styles.refero.design.

Purpose in this project:

- Keep Refero as a secondary design-quality source after `yeucau.md`, `100-home-styles.md`, and `docs/getdesign/*/DESIGN.md`.
- Search locally with `rg` before preparing a `des-N` brief.
- Use Refero for taste, tokens, component anatomy, spacing, and visual polish. Do not copy a brand or override the project's client requirements.

Files:

- `manifest.json`: full crawl manifest and catalog.
- `catalog.md`: human-readable index.
- `catalog.csv`: spreadsheet-friendly index.
- `styles/*/DESIGN.md`: style reference for agents.
- `styles/*/style.json`: raw style JSON with asset URLs.

Binary images/videos are not downloaded to avoid a heavy repo. Their public URLs remain in each style's files.
