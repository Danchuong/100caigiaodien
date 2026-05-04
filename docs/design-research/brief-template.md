# Des Brief Template

Copy file này thành:

```text
docs/design-research/des-briefs/des-N.md
```

Brief là hợp đồng trước khi code. Nếu brief còn mơ hồ, chưa sửa source.

## 1. Basic

- Theme: `des-N`
- Status: `Brief | Building | Built | QA Passed | Delivery Ready | Rework`
- Owner/date:
- One sentence direction:
- Style family:
- Compare against:

## 2. Source Stack

- `100-design-board.md` block:
- `100-home-styles.md` rules touched:
- Getdesign source: `docs/getdesign/.../DESIGN.md`
- Getdesign extraction:
  - Layout/form:
  - Header idea:
  - Footer idea:
  - Spacing/type/surface:
- Refero source: `docs/refero/styles/.../DESIGN.md`
- Refero URL:
- Refero extraction:
  - Token/color:
  - Component anatomy:
  - Density lesson:
  - Mobile/header/footer lesson:
- Game/news/directory fit:

## 3. Client Rules Affected

- Dense information:
- Required image banner:
- Sans-serif only:
- Game-appropriate treatment:
- Star review handling:
- Header/footer global:
- Do-not-touch files:

```text
reviews.php
search.php
css/_reviews.scss
```

## 4. Visual System

- Base tone: `white | black | navy`
- Accent colors:
- Typography:
- Radius:
- Border/shadow:
- Spacing rhythm:
- Imagery rule:
- Anti-generic rule:

## 5. Layout Contract

- Header archetype:
- Footer archetype:
- Above-fold role:
- Home section order:
- Blog treatment:
- Review treatment:
- Game/post treatment:
- Mobile signature:

## 6. Banner Contract

- Uses real post/game/review image:
- Contains title:
- Contains short description:
- Has real link:
- Fallback image strategy:
- Overlay/text rule:

## 7. Header Contract

- Logo behavior:
- Main menu source:
- Search behavior desktop:
- Search behavior mobile:
- Mobile menu behavior:
- Popup/dropdown sizing:
- Duplicate-nav prevention:
- Non-home page safety:

## 8. Footer Contract

- Identity:
- Primary navigation:
- Theme-specific continuation:
- Footer spacing owner:
- Mobile behavior:
- Non-home page safety:

## 9. Anti-Similarity Fingerprint

So với 5 bản gần nhất:

- Header anatomy difference:
- Above-fold difference:
- DOM section order difference:
- Card/media system difference:
- Footer anatomy difference:
- Mobile behavior difference:
- CSS/layout primitive difference:

Verdict: `Pass | Rework`

## 10. Implementation Scope

Allowed files:

```text
wp-content/themes/des-N/header.php
wp-content/themes/des-N/home.php
wp-content/themes/des-N/footer.php
wp-content/themes/des-N/css/_header.scss
wp-content/themes/des-N/css/_home.scss
wp-content/themes/des-N/css/_footer.scss
wp-content/themes/des-N/style.css
delivery/des-N-home/
```

Do not modify or copy into delivery unless explicitly requested:

```text
wp-content/themes/des-N/reviews.php
wp-content/themes/des-N/search.php
wp-content/themes/des-N/css/_reviews.scss
```

If `/reviews/`, search, or pagination breaks, fix CSS scope/build/import first. Do not edit templates outside scope.

## 11. QA Checklist

- Build `style.css`.
- PHP lint `header.php`, `home.php`, `footer.php`.
- `git diff --name-only` does not include `reviews.php`, `search.php`, `css/_reviews.scss`.
- Scan has no `href="#"`, `javascript:void`, Lorem, TODO/FIXME.
- Header has no duplicate nav.
- Logo never wraps at any width.
- Mobile search/menu opens cleanly at `320px`, `360px`, `390px`.
- Popup/dropdown is compact and does not push content unless brief explicitly chose in-flow behavior.
- Footer has no hard-coded `margin-top` or negative margin.
- Home CSS is scoped to its wrapper and does not target global archive/detail selectors.
- Delivery contains only allowed files and actually used assets.

## 12. Agent Context Packet

Before coding, read only:

```text
yeucau.md
100-home-styles.md global rules
100-design-board.md relevant des-N block
this brief
Getdesign source
Refero source
theme files in implementation scope
```

Do not load the full Refero cache while implementing.
