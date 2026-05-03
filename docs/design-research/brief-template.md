# Des brief template

Copy file này thành:

```text
docs/design-research/des-briefs/des-N.md
```

## Basic

- Theme: `des-N`
- Status: `Brief`
- Getdesign source: `docs/getdesign/.../DESIGN.md`
- Refero source: `https://styles.refero.design/style/...`
- Game/news reference:
- One sentence direction:

## Client rules affected

- Dense information:
- Required image banner:
- Sans-serif only:
- Game-appropriate treatment:
- Star review handling:
- Header/footer global:
- Do-not-touch files:

## Visual system

- Base tone: `white | black | navy`
- Accent colors:
- Typography:
- Radius:
- Border/shadow:
- Spacing rhythm:
- Imagery rule:

## Layout contract

- Header archetype:
- Footer archetype:
- Above-fold role:
- Home section order:
- Blog treatment:
- Review treatment:
- Game/post treatment:
- Mobile signature:

## Banner contract

- Uses real post/game/review image:
- Contains title:
- Contains short description:
- Has real link:
- Fallback image strategy:

## Header contract

- Logo behavior:
- Main menu source:
- Search behavior desktop:
- Search behavior mobile:
- Mobile menu behavior:
- Duplicate-nav prevention:

## Footer contract

- Identity:
- Primary navigation:
- Theme-specific continuation:
- Footer spacing owner:
- Mobile behavior:

## Anti-similarity fingerprint

So với 5 bản gần nhất:

- Header anatomy difference:
- Above-fold difference:
- Section order difference:
- Card/media system difference:
- Footer anatomy difference:
- Mobile behavior difference:

Verdict: `Pass | Rework`

## Out-of-scope guard

Không sửa hoặc copy vào delivery:

```text
reviews.php
search.php
css/_reviews.scss
```

Nếu `/reviews/`, search hoặc pagination lỗi, xử lý bằng scope CSS/build/import trong file được phép trước. Không tự sửa template ngoài scope.

## QA checklist

- Build `style.css`.
- PHP lint `header.php`, `home.php`, `footer.php`.
- `git diff --name-only` không có `reviews.php`, `search.php`, `css/_reviews.scss`.
- Scan không có `href="#"`, `javascript:void`, Lorem, TODO/FIXME.
- Header không duplicate nav.
- Logo không xuống dòng ở mọi width.
- Mobile search/menu mở tốt ở `320px`, `360px`, `390px`.
- Footer không dùng `margin-top` hard-code hoặc margin âm.
- Delivery chỉ gồm file đúng scope và assets thật sự dùng.
