# Checklist QA trước khi bàn giao từng style

Tài liệu này dùng để chặn các lỗi đã bị khách phản hồi: layout chỉ đổi màu nhưng không đổi form, label trang trí không click được, hero không dùng nội dung thật, search/menu mobile lỗi, text đè ảnh, header/footer phá trang khác, delivery thiếu file hoặc zip sai.

Áp dụng cho mỗi style `des-N` trước khi đổi trạng thái trong `100-design-board.md` sang `QA Passed`, `Delivery Ready`, `Shipped` hoặc `Accepted`, copy vào `delivery/des-N-home`, hoặc commit.

## Nguyên tắc pass/fail

Một style bị giữ lại nếu có một trong các lỗi sau:

- Không khác rõ fingerprint trong `100-design-board.md`; nếu bỏ màu/ảnh/font ra mà wireframe vẫn giống style gần nhất thì chưa đạt.
- Thiếu home, header hoặc footer trong scope bàn giao.
- Header, menu hoặc search mobile lỗi ở `320px`.
- Có text trang trí kiểu category/shortcut/tab nhưng không có link hoặc hành động thật.
- Hero/banner chỉ là mô tả tĩnh, không có nội dung thật và link rõ.
- Text/excerpt đè ảnh quá nhiều, đặc biệt trên card nhỏ.
- Header/footer chỉ đẹp ở home nhưng vỡ ở detail/archive/search.
- Delivery folder thiếu đúng 4 file: `home.php`, `header.php`, `footer.php`, `style.css`.

## Quy trình QA bắt buộc

1. **Xác nhận brief của style**
   - Mở block `des-N` trong `100-design-board.md`.
   - Ghi lại 6 phần: `Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature`.
   - So với ít nhất 2 style đã `Delivery Ready`, `Shipped` hoặc `Accepted` gần nhất. Style mới phải khác tối thiểu 4/6 phần.

2. **Chạy kiểm tra terminal**
   - Kiểm tra chỉ đụng đúng theme và delivery của style đang làm:

```bash
git status --short
git diff --stat
git diff --name-only
```

   - Không được có sửa ngoài `wp-content/themes/des-N/`, `delivery/des-N-home/`, `delivery/des-N-home.zip`, và dòng trạng thái trong `100-design-board.md` nếu người phụ trách style được phép cập nhật.
   - Với QA research hoặc reviewer, không sửa `yeucau.md`.

3. **Kiểm tra PHP/CSS cơ bản**

```bash
find wp-content/themes/des-N -maxdepth 1 -name '*.php' -print -exec php -l {} \;
php -l wp-content/themes/des-N/home.php
php -l wp-content/themes/des-N/header.php
php -l wp-content/themes/des-N/footer.php
test -s wp-content/themes/des-N/style.css
```

   - Nếu có `composer install`/vendor sẵn trong theme thì có thể chạy thêm:

```bash
cd wp-content/themes/des-N
composer run lint:php
```

   - Không bắt buộc chạy `npm install` cho mọi style nếu repo chưa có `node_modules`. Nếu đã có môi trường build, chạy lệnh build/lint CSS tương ứng và xác nhận `style.css` được cập nhật.

4. **Audit nhanh bằng tìm kiếm text rủi ro**

```bash
rg -n "Game Newsroom|Responsive from 320px|Blogs / Reviews / Games|Lorem|TODO|FIXME|#|javascript:void|href=\"\"" wp-content/themes/des-N delivery/des-N-home
rg -n "position:\\s*absolute|overflow-x|!important|z-index" wp-content/themes/des-N/css wp-content/themes/des-N/style.css
```

   - Text trang trí, placeholder, link rỗng, `javascript:void(0)` phải được sửa hoặc bỏ.
   - `position:absolute`, `overflow-x:hidden`, `!important`, `z-index` cao không tự động sai, nhưng phải kiểm tra kỹ vì thường gây lỗi header/search/mobile.

## WP-CLI và curl

Local Docker chính hiện có WordPress ở `http://localhost:8088` và service `wpcli` trong `.local-ai1wm/docker-compose.yml`.

### Chuẩn bị

```bash
cd .local-ai1wm
docker compose ps
docker compose run --rm wpcli wp theme list
docker compose run --rm wpcli wp theme activate des-N
docker compose run --rm wpcli wp option get home
```

Nếu đang dùng môi trường khác, thay `BASE_URL` theo URL đang mở được.

```bash
BASE_URL="http://localhost:8088"
```

### Kiểm tra WordPress render không lỗi

```bash
curl -I "$BASE_URL/"
curl -L "$BASE_URL/" -o /tmp/des-N-home.html
curl -L "$BASE_URL/blogs/" -o /tmp/des-N-blogs.html
curl -L "$BASE_URL/reviews/" -o /tmp/des-N-reviews.html
curl -L "$BASE_URL/games/" -o /tmp/des-N-games.html
curl -L "$BASE_URL/?s=game" -o /tmp/des-N-search.html
```

Pass khi:

- HTTP home trả `200`.
- Không có PHP warning/fatal trong HTML.
- Header/footer xuất hiện ở home và các trang ngoài home.
- Search page có nội dung hoặc empty state hợp lý, không trắng trang.

Kiểm tra lỗi rõ trong HTML:

```bash
rg -n "Fatal error|Warning:|Notice:|Deprecated|Undefined|Parse error" /tmp/des-N-*.html
rg -n "<header|<footer|wp-content/themes/des-N/style.css" /tmp/des-N-home.html
```

### Kiểm tra link/action quan trọng

```bash
rg -n "href=" /tmp/des-N-home.html | sed -n '1,120p'
rg -n "Blogs|Reviews|Games|Tin|Bài|Review|Game" /tmp/des-N-home.html
```

Reviewer phải xác nhận bằng mắt trong HTML/browser:

- Logo link về home.
- Menu chính có link thật.
- Search form có `action` hợp lệ và input `name="s"`.
- Mọi chip/tab/shortcut/category trông như click được phải có link thật.
- Card bài viết/review/game có anchor chứa title hoặc text có nghĩa.

## Manual browser checks

Không dùng Playwright trong project này. Mở browser thật cho QA thủ công:

```bash
open "$BASE_URL/"
open "$BASE_URL/blogs/"
open "$BASE_URL/reviews/"
open "$BASE_URL/games/"
open "$BASE_URL/?s=game"
```

Kiểm tra desktop trước:

- First viewport thể hiện đúng fingerprint, không chỉ đổi màu từ style khác.
- Hero dùng bài/review/game thật, có title và link rõ.
- Người xem hiểu đây là site game/news, không phải blog generic.
- Đủ nhóm nội dung home: blog, review, game và khu random/featured nếu style yêu cầu.
- Card ảnh nhỏ chỉ nên có category/title; excerpt dài không được che ảnh.
- Không có khoảng trắng bất thường trước footer hoặc footer bị kéo lên sát nội dung.
- Không có horizontal scroll ngoài ý muốn.

Kiểm tra thêm ít nhất 4 trang ngoài home:

- `blogs`
- `reviews`
- `games`
- search result
- một trang detail nếu có link mở được từ home

Pass khi header/footer vẫn đúng layout, không phụ thuộc class chỉ có ở home.

## Nav/footer audit

### Header/nav

- Desktop có đủ logo, menu, search hoặc CTA đúng theo fingerprint.
- Mobile có trạng thái rõ: logo, nút menu, nút/search field.
- Menu mở/đóng được bằng tay; không che mất logo/search; không tràn khỏi viewport.
- Search mở/submit được; input không bị đè, không lọt ra ngoài màn hình.
- Header không absolute/overlay nếu làm hero hoặc mobile khó đọc. Nếu dùng overlay, phải kiểm tra đủ desktop/tablet/mobile.
- Focus/hover của link và button nhìn thấy được.

### Footer

- Footer đồng bộ với style nhưng không chứa text kỹ thuật hoặc placeholder.
- Link footer là link thật hoặc text tĩnh có lý do rõ; không để item giả như menu.
- Footer không có khoảng trắng xấu phía trên/dưới.
- Footer không phá các trang ngoài home.
- Trên mobile, cột footer stack gọn, không gây scroll ngang.

## Checklist mobile 320 không dùng Playwright

Mở browser thật, dùng DevTools device toolbar hoặc kéo cửa sổ về `320px` width. Bắt buộc test các width:

- `320px`
- `360px`
- `390px`
- tablet khoảng `768px`

Ở `320px`, pass khi:

- Không có scroll ngang toàn trang.
- Header không cao quá mức; first screen vẫn có nội dung thật, không chỉ logo/menu/ảnh.
- Menu mobile mở được, đóng được, link bấm được.
- Search mobile nhập được và submit được.
- Hero title dài 2-3 dòng không đè nút, ảnh hoặc metadata.
- Card tap target đủ lớn; các link gần nhau không dính nhau.
- Text không bị cắt mất chữ quan trọng.
- Horizontal rail nếu có phải cuộn được bằng tay và không khóa scroll dọc.
- Footer stack rõ từng nhóm, không tràn text.

Lệnh hỗ trợ phát hiện scroll ngang bằng HTML/CSS không thay thế kiểm tra mắt, nhưng nên dùng:

```bash
rg -n "width:\\s*100vw|min-width:\\s*[4-9][0-9]{2}px|left:\\s*-[0-9]|right:\\s*-[0-9]" wp-content/themes/des-N/css wp-content/themes/des-N/style.css
```

## Delivery folder checks

Folder bàn giao cho khách phải chỉ gồm file khách cần cho home/header/footer:

```text
delivery/des-N-home/
  footer.php
  header.php
  home.php
  style.css
```

Kiểm tra:

```bash
find delivery/des-N-home -maxdepth 1 -type f | sort
test -s delivery/des-N-home/home.php
test -s delivery/des-N-home/header.php
test -s delivery/des-N-home/footer.php
test -s delivery/des-N-home/style.css
diff -q wp-content/themes/des-N/home.php delivery/des-N-home/home.php
diff -q wp-content/themes/des-N/header.php delivery/des-N-home/header.php
diff -q wp-content/themes/des-N/footer.php delivery/des-N-home/footer.php
diff -q wp-content/themes/des-N/style.css delivery/des-N-home/style.css
zipinfo -1 delivery/des-N-home.zip | sort
```

Zip pass khi:

- Có đúng thư mục/file bàn giao, không kèm `.DS_Store`, `node_modules`, source SCSS, file backup, database, upload hoặc toàn bộ theme.
- File trong zip trùng với `delivery/des-N-home`.
- Tên zip đúng mẫu `delivery/des-N-home.zip`.

Nếu cần tạo lại zip:

```bash
cd delivery
zip -r des-N-home.zip des-N-home -x "*.DS_Store"
```

## Git và commit rules

Trước commit:

```bash
git status --short
git diff --check
git diff --stat
git diff --name-only
```

Rules:

- Mỗi style commit riêng.
- Không commit thay đổi của agent khác.
- Không commit file local WordPress/Docker, database, uploads, `.DS_Store`, backup ngoài scope.
- Không commit nếu `git diff --check` còn whitespace error.
- Không đổi `yeucau.md`.
- Chỉ đổi `100-design-board.md` khi style đã pass toàn bộ QA và người phụ trách được phép chuyển trạng thái.
- Commit message dùng conventional commit, ví dụ `feat: add des-11 home layout` hoặc `fix: refine des-1 mobile header`.

## Mẫu biên bản QA ngắn

Copy vào PR/commit note hoặc comment nội bộ:

```text
Style: des-N
Fingerprint checked: pass/fail
Terminal PHP/CSS checks: pass/fail
WP-CLI active theme: pass/fail
curl pages: home/blogs/reviews/games/search pass/fail
Manual desktop: pass/fail
Manual mobile 320/360/390/768: pass/fail
Nav/search: pass/fail
Footer: pass/fail
Delivery folder + zip: pass/fail
Files changed reviewed: pass/fail
Known risk:
```

Không bàn giao nếu còn mục `fail` mà chưa có quyết định chấp nhận rủi ro rõ ràng.
