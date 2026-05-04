# Des 2 Brief

## 1. Basic

- Theme: `des-2`
- Status: `Delivery Ready`
- Owner/date: Codex, 2026-05-04
- One sentence direction: A light gaming magazine desk with a strong lead story, dark trending rail, compact review picks, and box-art game shelf.
- Style family: Magazine front page
- Compare against: `des-1`, `des-3`, original `h5game`

## 2. Source Stack

- `100-design-board.md` block: `des-2 - Lead Left With Trending Rail`
- `100-home-styles.md` rules touched: banner, density, sans-serif, game stars, mobile popup, global header/footer safety
- Getdesign source: `docs/getdesign/webflow/DESIGN.md`
- Getdesign extraction:
  - Layout/form: crisp white editorial modules, strong hierarchy, tight component rhythm
  - Header idea: precise light masthead with compact nav and search tool
  - Footer idea: structured desk of latest content
  - Spacing/type/surface: sans-serif, hard borders, restrained radii, clean accent use
- Refero source: `docs/refero/styles/openweb-c38d077b/DESIGN.md`
- Refero URL: `https://styles.refero.design/style/c38d077b-3cdb-48c6-899c-e8a543508c31`
- Refero extraction:
  - Token/color: warm paper, ink, cobalt/red accent used sparingly
  - Component anatomy: editorial lead + grouped content modules
  - Density lesson: calm but scan-heavy story grouping
  - Mobile/header/footer lesson: compact navigation panels and clear footer close
- Game/news/directory fit: Convert editorial calm into a gaming portal by using thumbnail-led lead story, ranking rail, review desk, and game cards with deterministic stars.

## 3. Client Rules Affected

- Dense information: first viewport includes lead story, description, and trending rail; lower sections keep blog/review/game links compact.
- Required image banner: lead story is the banner and includes image, title, and short description.
- Sans-serif only: keep Poppins/system sans; do not use serif from OpenWeb.
- Game-appropriate treatment: stronger gaming magazine labels, review queue, and game shelf.
- Star review handling: game cards use deterministic post-ID based stars.
- Header/footer global: header/footer remain normal global components, not homepage-only.
- Do-not-touch files:

```text
reviews.php
search.php
css/_reviews.scss
```

## 4. Visual System

- Base tone: `white`
- Accent colors: crimson red, muted amber, deep navy/ink
- Typography: compact sans-serif hierarchy, uppercase utility labels
- Radius: 6px-8px, not soft SaaS blobs
- Border/shadow: crisp borders, subtle shadows only
- Spacing rhythm: dense cards, controlled section spacing, no hard footer margin
- Imagery rule: use real thumbnails first; local letter placeholder only when no thumbnail exists
- Anti-generic rule: ranking rail and game shelf must read like a gaming magazine desk, not a card pile.

## 5. Layout Contract

- Header archetype: H01/H02 hybrid, light masthead, centered nav, search right, floating mobile panels
- Footer archetype: F06 Latest Desk Footer
- Above-fold role: Editorial/news-led lead story with image banner and trending rail
- Home section order: lead/trending, blog board, review picks, game shelf
- Blog treatment: lead banner plus compact story cards
- Review treatment: ranked critic cards without fake numeric scores
- Game/post treatment: image shelf with deterministic star review
- Mobile signature: logo/search/menu row with compact floating panels; content stacks into readable cards

## 6. Banner Contract

- Uses real post/game/review image: yes, lead blog thumbnail
- Contains title: yes
- Contains short description: excerpt/content trimmed to 24 words
- Has real link: full lead card links to the post
- Fallback image strategy: local initial placeholder surface, no remote placeholder
- Overlay/text rule: text sits on a paper panel beside image, not over unreadable image

## 7. Header Contract

- Logo behavior: single-line forever with controlled truncation
- Main menu source: `wp_nav_menu(theme_location => 'main-menu')`
- Search behavior desktop: visible search form to `/reviews/?key=...`
- Search behavior mobile: floating dropdown, not in-flow
- Mobile menu behavior: compact floating menu panel, same `main-menu`
- Popup/dropdown sizing: anchored right, max-width within viewport, 44px touch targets
- Duplicate-nav prevention: no secondary nav strip repeating primary menu
- Non-home page safety: header does not use homepage-only conditions

## 8. Footer Contract

- Identity: title/logo, short site description, copyright
- Primary navigation: real Blogs, Reviews, Games links
- Theme-specific continuation: latest blogs, fresh reviews, latest games
- Footer spacing owner: footer has no hard-coded top margin; previous section/page owns spacing
- Mobile behavior: one-column stacked link groups
- Non-home page safety: footer remains global and not tied to home selectors

## 9. Anti-Similarity Fingerprint

So với 5 bản gần nhất:

- Header anatomy difference: light editorial masthead with visible desktop search
- Above-fold difference: lead-left story plus dark trending rail
- DOM section order difference: blogs first, then review, then games
- Card/media system difference: lead split card, ranked rail, compact critic cards, game shelf
- Footer anatomy difference: latest desk columns with dark closing slab
- Mobile behavior difference: compact floating menu/search panels
- CSS/layout primitive difference: scoped `.lead-left-home` grid/list system

Verdict: `Pass`

## 10. Implementation Scope

Allowed files:

```text
wp-content/themes/des-2/header.php
wp-content/themes/des-2/home.php
wp-content/themes/des-2/footer.php
wp-content/themes/des-2/css/_header.scss
wp-content/themes/des-2/css/_home.scss
wp-content/themes/des-2/css/_footer.scss
wp-content/themes/des-2/style.css
delivery/des-2-home/
```

Do not modify or copy into delivery unless explicitly requested:

```text
wp-content/themes/des-2/reviews.php
wp-content/themes/des-2/search.php
wp-content/themes/des-2/css/_reviews.scss
```

If `/reviews/`, search, or pagination breaks, fix CSS scope/build/import first. Do not edit templates outside scope.

## 11. QA Checklist

- Build `style.css`: passed.
- PHP lint `header.php`, `home.php`, `footer.php`: passed.
- `git diff --name-only` does not include `reviews.php`, `search.php`, `css/_reviews.scss`: passed.
- Scan has no `href="#"`, `javascript:void`, Lorem, TODO/FIXME`: passed.
- Header has no duplicate nav: passed.
- Logo never wraps at any width: CSS guard added.
- Mobile search/menu opens cleanly at `320px`, `360px`, `390px`: floating panel CSS added.
- Popup/dropdown is compact and does not push content: passed by CSS contract.
- Footer has no hard-coded `margin-top` or negative margin: passed.
- Home CSS is scoped to `.lead-left-home` and does not target global archive/detail selectors: passed.
- Delivery contains only allowed files: passed, `delivery/des-2-home.zip` tested OK.

## 12. Agent Context Packet

Before coding, read only:

```text
yeucau.md
100-home-styles.md global rules
100-design-board.md des-2 block
this brief
docs/getdesign/webflow/DESIGN.md
docs/refero/styles/openweb-c38d077b/DESIGN.md
theme files in implementation scope
```
