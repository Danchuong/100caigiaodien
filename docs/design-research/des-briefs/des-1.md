# des-1 Retro Brief

Status: Rework active for new-standard uplift.

## Locked Direction

- Design board slot: `des-1 - Search First Directory`.
- Getdesign source: `docs/getdesign/airtable/DESIGN.md`.
- Refero source: `docs/refero/styles/parallel-web-systems-32845f27/DESIGN.md`.
- Secondary cue: `docs/refero/styles/raycast-3b6a17f0/DESIGN.md` for command-search behavior only.
- Concept: light game directory/search portal, not poster cinema and not SaaS/dev docs.

## Current Client Feedback

- Banner currently reads too weak; it feels like there is no real banner.
- The first visual block needs stronger image presence and a more lively game/media feeling.
- Latest client note: des-1 needs one large article at the top like a banner.
- Latest client note: banner text should overlay the image, not sit in a separate side panel.
- Latest client note: move the `Game directory / search / quick links / Review picks` block down near the footer.
- iPad/tablet layout feels awkward when grids jump too sharply, especially `Review picks` moving from desktop `5` columns to tablet `2` columns.

## Rework Contract

- Keep search-first directory fingerprint.
- Make above-fold banner a standalone large article/banner block, with image, title, and short description overlaying the image.
- Keep search/browse as first signal; do not turn the page into a giant poster hero.
- Use real links and real post data. If no featured post exists, fallback banner links to the games archive.
- Review cards must not show fake numeric scores.
- Game cards need stable star treatment by post ID if no real field exists.
- Tablet/iPad must have its own grid rhythm, not a broken desktop/mobile jump.
- Do not edit `reviews.php`, `search.php`, or `css/_reviews.scss`.

## Target Responsive Rhythm

- Above fold desktop: search panel + visual banner visible together, with review picks still in the first module.
- Tablet/iPad: preserve a balanced two-column hero where possible; grids step down smoothly.
- Review grid: `5 -> 4 -> 3 -> 2 -> 1` or equivalent controlled rhythm.
- Mobile: search first, banner immediately after search, then review picks; no horizontal overflow at `320px`.
- Current accepted order after latest feedback: banner first, content sections next, directory/search/review-picks near footer.
