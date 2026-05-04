# 100 home implementation specs

File này là rulebook chính để giao việc và nghiệm thu 100 theme `des-1` tới `des-100`.

Mục tiêu không phải tạo 100 bản đổi màu. Mỗi theme phải có **home + header global + footer global** khác rõ về cấu trúc, nhưng vẫn an toàn cho các trang ngoài home. Nếu mâu thuẫn với ghi chú cũ, ưu tiên `yeucau.md`, sau đó tới file này.

Tracking status và spec/fingerprint của từng design nằm ở:

```text
docs/design-research/100-design-board.md
```

## AI Operating Model

Để AI làm 100 design ổn định, chỉ dùng một luồng nguồn như sau:

1. `yeucau.md`: luật khách hàng và guardrail cứng. Không bỏ qua.
2. `100-home-styles.md`: rulebook chung, QA, archetype, rubric.
3. `docs/design-research/100-design-board.md`: nơi tracking status và per-design spec/fingerprint.
4. `docs/design-research/des-briefs/des-N.md`: brief thực thi cho đúng `des-N`.
5. `docs/getdesign/*/DESIGN.md`: nguồn form/layout chính.
6. `docs/refero/styles/*/DESIGN.md`: nguồn token/polish/component phụ.
7. Source theme `wp-content/themes/des-N`: chỉ sửa sau khi brief đã chốt.

Không để agent tự đọc toàn bộ `docs/refero` hoặc toàn bộ `docs/getdesign`. Mỗi lần làm `des-N`, context tối thiểu chỉ gồm:

```text
yeucau.md
100-home-styles.md: rule chung + rubric + QA
docs/design-research/100-design-board.md: Current Truth + block đúng des-N
docs/design-research/des-briefs/des-N.md
Getdesign source trong brief
Refero source trong brief
Source theme des-N cần sửa
```

Nếu chưa có brief cho `des-N`, dừng ở bước tạo brief. Không code từ cảm tính.

## Tracking And Design Board

Tracking status, current truth, and per-design specs now live in:

```text
docs/design-research/100-design-board.md
```

Use `100-home-styles.md` as the global rulebook. Use the board file to update `Status:` for each `des-N` and to read the specific design fingerprint before creating a brief.

## Definition Of Done

Một `des-N` chỉ được xem là xong khi:

- Có brief đúng tên trong `docs/design-research/des-briefs/des-N.md` nếu là build/rework từ thời điểm áp dụng workflow này trở đi.
- Brief có đủ `Getdesign source`, `Refero source`, direction, fingerprint và out-of-scope guard.
- Header, home, footer khác rõ ít nhất 8/12 fingerprint dimensions so với style đã ship gần nhất.
- Header/footer là global, dùng được ở home, blog detail, review detail, game detail, archive và search.
- Header/footer ưu tiên base trắng, đen hoặc navy; khác biệt đến từ anatomy/content/behavior, không phải màu lạ.
- Không duplicate nav; primary nav lấy từ `wp_nav_menu(theme_location => 'main-menu')`.
- Search thật: `method="get"`, input đúng name theo flow hiện tại, submit được.
- Menu/search mobile không vỡ ở `320px`, `360px`, `390px`.
- Nếu mobile menu/search là popup/dropdown/floating stack thì phải overlay/floating, không đẩy content xuống.
- Home có đủ blog/review/game-post thật, card/title có link thật.
- Không fake score, social, newsletter, poll, deal, price, standings hoặc partner.
- Không có `href="#"`, `javascript:void`, Lorem, TODO/FIXME.
- Delivery folder sync đúng source và zip test OK.

## Required Files

Mỗi theme thường chỉ được sửa trong:

```text
wp-content/themes/des-N/home.php
wp-content/themes/des-N/header.php
wp-content/themes/des-N/footer.php
wp-content/themes/des-N/css/_home.scss
wp-content/themes/des-N/css/_header.scss
wp-content/themes/des-N/css/_footer.scss
wp-content/themes/des-N/style.css
delivery/des-N-home/
```

Không sửa theme khác, database, plugin, admin hoặc post type nếu không được yêu cầu.

## Content Contract

Mỗi home phải dùng đủ 3 nhóm nội dung thật:

```text
Blog:      post_type=blog,   posts_per_page khoảng 3+, random/publish, linked cards.
Review:   post_type=review, posts_per_page khoảng 5+, random/publish, linked cards.
Game/Post: post_type=post,  posts_per_page khoảng 5+, random/publish, linked cards.
```

Nếu style giả lập chức năng như score, standings, poll, deal, price, newsletter hoặc social:

- Chỉ dùng nếu có field/action/link thật.
- Nếu không có, đổi thành label an toàn: `Review Picks`, `Latest Reviews`, `Browse Games`, `Popular Reads`, `Editor's Queue`, `Archive`.

## Getdesign Source Standard

Mỗi `des-N` phải có một dòng `Getdesign source` trỏ tới `docs/getdesign/*/DESIGN.md`.

- `Getdesign source` là nguồn visual direction bắt buộc: dùng để lấy tinh thần layout, type, spacing, surface, header/footer anatomy và interaction pattern.
- Không copy y nguyên brand/source site. Luôn chuyển hóa cho nội dung game/blog/review thật của h5game.
- Vì hiện có ít nguồn hơn 100 design, một source có thể reuse, nhưng không được reuse cùng một `Header Archetype + Footer Archetype + Above-fold role` trong các design gần nhau.
- Nếu `Getdesign source` mâu thuẫn với `yeucau.md`, ưu tiên `yeucau.md`.
- Với `des-1`, `des-2`, `des-3` đã `Accepted`, source chỉ là mốc chuẩn hóa/đối chiếu khi audit về sau, không tự ý redesign lại.

## Source Stack Standard

Trước khi build hoặc redesign một `des-N`, phải có brief ngắn trong `docs/design-research/des-briefs/des-N.md`.

Các bản `Accepted` hoặc `Delivery Ready` trước workflow này vẫn giữ status hiện tại. Nếu mở lại để sửa, audit hoặc rework, tạo retro-brief trước khi đụng source.

Brief tối thiểu phải chọn và khóa:

- Một `Getdesign source` local.
- Một `Refero source` local từ `docs/refero/styles/*/DESIGN.md` kèm URL gốc nếu có.
- Một hướng game/news/directory để đảm bảo style không lạc chủ đề game.
- Một cặp header/footer archetype không trùng quá gần.
- Một above-fold role có banner hình, title và description ngắn.
- Một mobile behavior cho search/menu.
- Một danh sách file không được chạm.

Refero không thay thế getdesign. Getdesign quyết định form lớn; Refero chỉ bổ sung:

- token màu/type/spacing/radius;
- anatomy component;
- cách xử lý density;
- polish cho header/footer/mobile;
- mood vừa đủ để tránh generic AI UI.

Không copy nguyên brand/source site. Không dùng cùng `Getdesign source + Refero source + Header Archetype + Footer Archetype + Above-fold role` cho hai style gần nhau.

## AI Build Protocol

Khi bắt đầu một `des-N`, làm theo thứ tự:

1. Đọc `yeucau.md`.
2. Đọc rule chung trong file này.
3. Đọc block `des-N` trong `docs/design-research/100-design-board.md`.
4. Nếu chưa có brief, tạo `docs/design-research/des-briefs/des-N.md` từ `docs/design-research/brief-template.md`.
5. Chọn `Getdesign source` theo block `des-N` trong board; chỉ đổi nếu có lý do rõ và update lại board.
6. Chọn `Refero source` từ `docs/design-research/refero-source-pool.md` hoặc tìm bằng `docs/refero/catalog.csv`.
7. Viết fingerprint khác biệt trước khi sửa code.
8. Sửa đúng file trong scope.
9. Build `style.css`.
10. Chạy QA checklist và forbidden scan.
11. Copy delivery nếu đã pass.

Nếu trong lúc code phát hiện brief sai, sửa brief trước rồi mới code tiếp. Không để source và brief lệch nhau.

## Batch Planning Rule

Mỗi batch 4 design nên chia vai trò khác nhau để tránh giống nhau:

```text
1 media-heavy gaming portal
1 white compact directory/search-first
1 dark command/review hub
1 editorial/newswire hoặc blueprint/archive
```

Trong cùng batch không reuse:

- cùng `Getdesign source`;
- cùng `Refero source`;
- cùng cặp header/footer archetype;
- cùng first-viewport composition;
- cùng card/media primitive.

## Refero Rotation Rule

Không gán cứng Refero source cho toàn bộ 100 style trong file này, vì source phụ có thể cần đổi theo feedback khách. Tuy nhiên mỗi brief phải chọn Refero theo vòng xoay sau để agent không lặp mood:

| Batch slot | Refero group | Dùng cho |
| --- | --- | --- |
| A | Direct gaming/media | Banner hình, game portal, media-heavy homepage. |
| B | Command and review desk | Review hub, dark dashboard, dense queue. |
| C | Directory and compact utility | Search-first, archive, game catalog, table/list. |
| D | Editorial/media typography hoặc visual discovery | Blog/newswire, magazine, visual board, product grid. |

Ví dụ:

```text
des-8  -> slot A hoặc nhóm khác nếu block des-8 yêu cầu editorial rõ hơn
des-9  -> slot B/C tùy source getdesign
des-10 -> slot C/B nếu review hub
des-11 -> slot D/A nếu cần đổi silhouette
```

Quy tắc chọn cuối cùng:

- Nếu `Getdesign source` đã media/game-heavy, Refero nên bổ sung token/component chứ không chọn thêm source quá giống.
- Nếu `Getdesign source` là SaaS/dev/product, Refero nên kéo concept về game/media.
- Nếu layout có nguy cơ cổ/báo giấy, Refero phải là source sans-serif hiện đại hoặc gaming/media.
- Nếu 2 design gần nhau dùng cùng source family, đổi Refero group trước khi code.

Pool đã lọc nằm ở:

```text
docs/design-research/refero-source-pool.md
```

## Header Archetypes

Base màu ưu tiên: `white`, `black`, `navy`. Accent chỉ dùng ít.

| Code | Name | Contract |
| --- | --- | --- |
| H01 | White Editorial Masthead | Logo giữa, menu hàng dưới, search phải. |
| H02 | Black Compact Nav | Logo trái, menu giữa, search icon popup phải. |
| H03 | Navy Utility Stack | Top metadata thật, nav chính dưới, search riêng. |
| H04 | Search First Bar | Logo trái, search lớn giữa, menu/action phải. |
| H05 | Category Rail Header | Logo trên, category/topic rail thật dưới, search icon. |
| H06 | Split Masthead | Logo trái, nav chia hai cụm, search cuối. |
| H07 | Center Logo Drawer | Logo giữa, menu button trái, search phải. |
| H08 | Topline News Header | Dòng latest thật phía trên, nav dưới, search phải. |
| H09 | App Dock Header | Action/icon dock gọn, menu chính ngắn. |
| H10 | Sidebar Trigger Header | Desktop nav ngắn, menu mở panel phải. |
| H11 | Sticky Compact Header | Masthead lớn + compact sticky nếu làm sạch. |
| H12 | Breadcrumb Header | Nav gọn + context/breadcrumb strip an toàn ngoài home. |
| H13 | Scoreboard Header | Navy/black board strip bằng content thật, không score giả. |
| H14 | Magazine Logo Wall | Logo lớn, menu chia hàng, search nhỏ trên cùng. |
| H15 | Minimal Text Header | Logo text, menu text, search icon, rất ít noise. |
| H16 | Command Header | Search/action là trọng tâm, menu như control bar. |
| H17 | Floating Overlay Header | Overlay trên hero ảnh, fallback nền an toàn ngoài home. |
| H18 | Two Rail Header | Primary nav + topic rail link thật, không lặp menu. |

Không dùng cùng cặp `Header Archetype + Footer Archetype` trong vòng 12 design gần nhất nếu có thể tránh.

## Footer Archetypes

Footer không tự set `margin-top` để tạo khoảng cách với nội dung. Spacing trước footer thuộc section cuối hoặc page wrapper.

| Code | Name | Contract |
| --- | --- | --- |
| F01 | White Sitemap Footer | Brand + 3-4 cột link thật. |
| F02 | Black Magazine Footer | Brand lớn, latest posts thật, archive links. |
| F03 | Navy Editorial Footer | Issue/category links, latest thật, copyright gọn. |
| F04 | Compact Legal Footer | Một hàng brand/nav/copyright cho layout minimal. |
| F05 | Directory Footer | Browse Games/Reviews/Blogs, popular/latest thật. |
| F06 | Latest Desk Footer | 3 cột latest blogs/reviews/games lấy data thật. |
| F07 | Archive Index Footer | Archive/category index rõ, không newsletter giả. |
| F08 | Review Hub Footer | Latest reviews + review archive, không score giả. |
| F09 | Game Catalog Footer | Platform/genre links nếu thật, latest games. |
| F10 | Newspaper Footer | Masthead nhỏ, section index, copyright. |
| F11 | Dark Utility Footer | Nav chính + search/browse CTA thật. |
| F12 | Minimal Brand Footer | Logo/title + một nav row + copyright. |
| F13 | Split Brand Content Footer | Brand trái lớn, content links phải. |
| F14 | Footer With Top Story | Một featured/latest article thật + link grid. |
| F15 | Mobile Accordion Footer | Desktop nhiều nhóm, mobile stacked/accordion. |
| F16 | Dense Portal Footer | Nhiều nhóm link typography nhỏ cho newswire. |
| F17 | Visual Strip Footer | Thumb strip thật từ latest content + sitemap. |
| F18 | Search Directory Footer | Search/browse CTA thật + link groups. |

## Anti-Similarity Rubric

Chấm nhanh 100 điểm khi so với style đã ship:

```text
Header anatomy + behavior: 15
Above-fold role + composition: 20
DOM section order + content emphasis: 15
Grid/card/media system: 20
Footer anatomy + content model: 15
Mobile signature: 10
CSS/layout primitive: 5
```

Pass khi:

- `>= 70/100` so với từng style đã ship.
- `>= 80/100` so với 5 style gần nhất.
- Header + footer đạt ít nhất `20/30` điểm khác biệt.
- Above-fold + section/card đạt ít nhất `40/55` điểm khác biệt.

Auto fail nếu có duplicate nav, fake data, layout mobile vỡ, header/footer chỉ đẹp homepage, hoặc delivery không sync source.

## QA Checklist

Build:

```bash
npx sass wp-content/themes/des-N/css/style.scss wp-content/themes/des-N/style.css --no-source-map
test -s wp-content/themes/des-N/style.css
git diff --check
```

PHP lint bằng local WP container:

```bash
docker compose -f .local-ai1wm/docker-compose.yml run --rm wpcli sh -lc 'php -l wp-content/themes/des-N/header.php && php -l wp-content/themes/des-N/home.php && php -l wp-content/themes/des-N/footer.php'
```

Route check:

```bash
BASE_URL="http://localhost:8088"
for p in "/" "/blogs/" "/reviews/" "/html5-games/" "/?key=test"; do
  out="/tmp/desN-${p//\//_}.html"
  curl -fsSL "$BASE_URL$p" -o "$out"
done
rg -n "Fatal error|Warning:|Notice:|Deprecated|Undefined|Parse error" /tmp/desN-*.html
```

Forbidden scan:

```bash
rg -n "Game Newsroom|Responsive from 320px|Lorem|TODO|FIXME|href=\"#\"|javascript:void|href=\"\"|Review Scores|form-control" wp-content/themes/des-N delivery/des-N-home
rg -n "margin-top:\s*-|width:\s*100vw|min-width:\s*[4-9][0-9]{2}px|left:\s*-[0-9]|right:\s*-[0-9]" wp-content/themes/des-N/css wp-content/themes/des-N/*.php
```

Manual browser:

- Desktop first viewport.
- `768px` tablet.
- `390px`, `360px`, `320px`.
- Open menu/search/focus input.
- Scroll footer on home and one non-home page.

## Delivery Checklist

```bash
mkdir -p delivery/des-N-home/css
cp wp-content/themes/des-N/header.php delivery/des-N-home/header.php
cp wp-content/themes/des-N/home.php delivery/des-N-home/home.php
cp wp-content/themes/des-N/footer.php delivery/des-N-home/footer.php
cp wp-content/themes/des-N/style.css delivery/des-N-home/style.css
cp wp-content/themes/des-N/css/_header.scss delivery/des-N-home/css/_header.scss
cp wp-content/themes/des-N/css/_home.scss delivery/des-N-home/css/_home.scss
cp wp-content/themes/des-N/css/_footer.scss delivery/des-N-home/css/_footer.scss
find delivery/des-N-home -name ".DS_Store" -delete
cd delivery && rm -f des-N-home.zip && zip -r des-N-home.zip des-N-home -x "*.DS_Store" && unzip -t des-N-home.zip
```

Required delivery files:

```text
delivery/des-N-home/header.php
delivery/des-N-home/home.php
delivery/des-N-home/footer.php
delivery/des-N-home/style.css
delivery/des-N-home/css/_header.scss
delivery/des-N-home/css/_home.scss
delivery/des-N-home/css/_footer.scss
delivery/des-N-home.zip
```

## Per-Design Specs

Per-design specs and tracking live in:

```text
docs/design-research/100-design-board.md
```
