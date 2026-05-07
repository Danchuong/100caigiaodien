# Des 5 Brief

## 1. Basic

- Theme: `des-5`
- Status: `Delivery Ready`
- Owner/date: Codex, 2026-05-06
- One sentence direction: A hard-edge gaming broadsheet with a visual game spotlight, compact review radar, and playable queue.
- Style family: Magazine front page
- Compare against: `des-3`, `des-4`, `des-6`

## 2. Source Stack

- `100-design-board.md` block: `des-5 - WIRED Broadsheet Front Page`
- `100-home-styles.md` rules touched: dense information, sans-serif only, image banner, star review handling, scoped home CSS.
- Getdesign source: `docs/getdesign/wired/DESIGN.md`
- Getdesign extraction:
  - Layout/form: dense broadsheet grid, hard rules, image plus headline hierarchy.
  - Header idea: black desk strip over white masthead, one real primary menu.
  - Footer idea: dark magazine index with real latest links.
  - Spacing/type/surface: square media, flat surfaces, no shadows, compact rules.
- Refero source: `docs/refero/styles/hle-5abe1239/DESIGN.md`
- Refero URL: `https://styles.refero.design/style/5abe1239-79b9-4ebc-b4d1-9b2a85dc29a4`
- Refero extraction:
  - Token/color: grayscale, black/white/navy-safe surfaces, small blue accent only for links.
  - Component anatomy: terminal-like labels, hard-edged panels, compact text actions.
  - Density lesson: use rule-separated story rows instead of empty card spacing.
  - Mobile/header/footer lesson: compact floating menu/search, no push-down stack unless explicitly chosen.
- Game/news/directory fit: Keep the broadsheet discipline but replace old newspaper cues with sans-serif gaming review/news labels, image cards, and game star ratings.

## 3. Client Rules Affected

- Dense information: use more real blog/review/game entries than the original minimum, but keep even grids.
- Required image banner: game spotlight in first viewport uses real/fallback image, title, short description, star rating, and link.
- Sans-serif only: no Georgia, Times New Roman, or serif stack in custom des-5 home/header/footer CSS.
- Game-appropriate treatment: labels and sections read as `Game Spotlight`, `Review Radar`, `Play Queue`, `Game Briefing`, and `Playable Grid`.
- Star review handling: game cards use a stable post-ID-based star rating, not one repeated hard-coded score.
- Header/footer global: keep header/footer outside home-only conditions.
- Do-not-touch files:

```text
reviews.php
search.php
css/_reviews.scss
```

## 4. Visual System

- Base tone: `white` with black desk strip and dark footer.
- Accent colors: `#057dbc` for links, `#151515` for rules, `#f2b84b` for stars.
- Typography: Poppins/system sans for all display, body, labels, nav, and footer text.
- Radius: `0`.
- Border/shadow: hairline and hard black rules, no card shadows.
- Spacing rhythm: compact 8px-based section rhythm, no large empty gaps.
- Imagery rule: square or landscape only; no portrait media frames.
- Anti-generic rule: no rounded SaaS cards, no decorative gradients, no fake issue/newsletter/social modules.

## 5. Layout Contract

- Header archetype: H15/H01 hybrid, black desk strip plus white masthead.
- Footer archetype: F10/F02 hybrid, dark magazine footer with real latest links.
- Above-fold role: image-led game spotlight with real game thumbnail, stars, review radar, and play queue.
- Home section order: game spotlight/front grid, game briefing ledger, review radar, playable grid.
- Blog treatment: numbered game briefing rows with excerpts and dates.
- Review treatment: even image grid, no fake review scores.
- Game/post treatment: even grid with image, title, category, and stable star review.
- Mobile signature: cover first, stack queues below, review/game cards become compact square-thumbnail rows.

## 6. Banner Contract

- Uses real post/game/review image: yes, lead game thumbnail with fallback `images/android.png`.
- Contains title: yes.
- Contains short description: yes, short trimmed excerpt.
- Has real link: yes, image and title link to the post.
- Fallback image strategy: use existing theme fallback image only when post thumbnail is missing.
- Overlay/text rule: no text overlay; text stays beside/below image for readability.

## 7. Header Contract

- Logo behavior: single-line, no wrap, controlled truncation at small widths.
- Main menu source: `wp_nav_menu(theme_location => 'main-menu')`.
- Search behavior desktop: inline right-side `GET /reviews/?key=...` form.
- Search behavior mobile: compact floating popup, does not push content.
- Mobile menu behavior: compact floating dropdown from the same `main-menu`.
- Popup/dropdown sizing: content-sized, max viewport width, small padding.
- Duplicate-nav prevention: no hard-coded duplicate menu links in header.
- Non-home page safety: no `body.home` or homepage-only header structure.

## 8. Footer Contract

- Identity: brand/home link, short description, date/copyright.
- Primary navigation: real Blogs, Reviews, Games, About Us links.
- Theme-specific continuation: latest reviews, blogs, and games.
- Footer spacing owner: footer has no hard-coded top margin; preceding page content owns spacing.
- Mobile behavior: single column, no horizontal overflow.
- Non-home page safety: footer is global and does not rely on home wrapper.

## 9. Anti-Similarity Fingerprint

So voi 5 ban gan nhat:

- Header anatomy difference: black strip plus compact white desk masthead differs from des-4 dark channel and des-6 search-first.
- Above-fold difference: broadsheet cover grid with side wires, not poster mosaic or discovery board.
- DOM section order difference: front grid, blog ledger, review grid, game shelf.
- Card/media system difference: square-edged rule-separated media/list system.
- Footer anatomy difference: dark magazine index with real latest content.
- Mobile behavior difference: cover/read list stack with compact floating controls.
- CSS/layout primitive difference: strict hard-rule CSS grid/list system.

Verdict: `Pass after rework`

## 10. Implementation Scope

Allowed files:

```text
wp-content/themes/des-5/header.php
wp-content/themes/des-5/home.php
wp-content/themes/des-5/footer.php
wp-content/themes/des-5/css/_header.scss
wp-content/themes/des-5/css/_home.scss
wp-content/themes/des-5/css/_footer.scss
wp-content/themes/des-5/style.css
delivery/des-5-home/
```

Do not modify or copy into delivery unless explicitly requested:

```text
wp-content/themes/des-5/reviews.php
wp-content/themes/des-5/search.php
wp-content/themes/des-5/css/_reviews.scss
```

If `/reviews/`, search, or pagination breaks, fix CSS scope/build/import first. Do not edit templates outside scope.

## 11. QA Checklist

- Build `style.css`.
- PHP lint `header.php`, `home.php`, `footer.php`.
- `git diff --name-only` does not include `reviews.php`, `search.php`, `css/_reviews.scss`.
- Scan has no `href="#"`, `javascript:void`, Lorem, TODO/FIXME`.
- Header has no duplicate nav.
- Logo never wraps at any width.
- Mobile search/menu opens cleanly at `320px`, `360px`, `390px`.
- Popup/dropdown is compact and does not push content.
- Footer has no hard-coded `margin-top` or negative margin.
- Home CSS is scoped to `.des5-home-page` and does not target global archive/detail selectors.
- Delivery contains only allowed files and actually used assets when shipping is requested.

## 12. Agent Context Packet

Before coding, read only:

```text
yeucau.md
100-home-styles.md global rules
100-design-board.md relevant des-5 block
this brief
docs/getdesign/wired/DESIGN.md
docs/refero/styles/hle-5abe1239/DESIGN.md
theme files in implementation scope
```
