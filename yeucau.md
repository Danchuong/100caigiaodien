# Yêu cầu thiết kế 100 giao diện trang home, header và footer

## Mục tiêu

Tạo 100 giao diện mới cho **trang home**, đồng thời thiết kế lại **header** và **footer** để giao diện đồng bộ trên toàn website.

Yêu cầu mới từ khách hàng: các giao diện không chỉ khác nhau một chút, mà phải **khác nhau rõ ràng về form/layout tổng thể**. Khách có thể dùng tool để quét độ giống nhau, nên không được tạo nhiều bản cùng một khung rồi chỉ đổi màu, ảnh, font, spacing hoặc bo góc.

Trang home vẫn phải giữ đầy đủ các nhóm nội dung cũ. Header và footer cần đồng bộ với style của từng giao diện. Mỗi giao diện cần đủ chỉn chu để dùng thật: không lỗi layout, responsive tốt, nội dung có ý nghĩa, link hoạt động đúng.

Demo trang chủ tham khảo: https://gamenewfiz.info/

Khách yêu cầu tham khảo thêm nhiều mẫu trên ThemeForest, đặc biệt các theme phù hợp với website game, gaming news, blog, review, magazine, portal hoặc editorial. Chỉ tham khảo **form, bố cục và cách tổ chức nội dung**; không copy nguyên code, asset, hình ảnh, logo, thương hiệu hoặc thiết kế độc quyền của theme khác.

## Source và restore

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing

Dùng **All-in-One WP Migration** để restore file `.wpress`.

## Phạm vi công việc

Thiết kế lại:

- **Trang home**.
- **Header** dùng chung.
- **Footer** dùng chung.

File PHP chính cần xử lý:

```text
/wp-content/themes/h5game/home.php
/wp-content/themes/h5game/header.php
/wp-content/themes/h5game/footer.php
```

File SCSS chính cần xử lý:

```text
/wp-content/themes/h5game/css/_home.scss
/wp-content/themes/h5game/css/_header.scss
/wp-content/themes/h5game/css/_footer.scss
```

Build SCSS ra CSS và đặt file CSS build ở:

```text
/wp-content/themes/h5game/style.css
```

## Không thuộc phạm vi

Không yêu cầu thay đổi:

```text
Plugin
Admin WordPress
Database
Post type
Nội dung bài viết
Logic import/restore
```

Không thay đổi chức năng WordPress nếu không cần thiết cho giao diện.

Không làm hỏng các trang đang có như blog detail, review detail, game detail, archive, search.

## Yêu cầu giao diện home, header và footer

Giao diện cần:

- Hiện đại, responsive, hỗ trợ tốt mobile từ `320px` trở lên.
- Không vỡ layout trên desktop, tablet, mobile.
- Class đặt tên rõ ràng, dễ hiểu.
- Header và footer phải hiển thị tốt ở tất cả các trang, không chỉ trang home.
- Header phải rõ ràng trên desktop và mobile, có menu/search hoạt động đúng như source gốc.
- Footer phải gọn, không bị dư khoảng trắng xấu, không bị kéo ngược lên nội dung phía trên.
- Ưu tiên class rõ nghĩa theo từng khu vực, ví dụ:

```text
.head-wrapper
.head-left
.head-center
.head-right
.footer-wrapper
.footer-info
.footer-menu
.home-wrapper
.home-hero
.home-section
.home-blog-list
.home-blog-card
.home-review-list
.home-review-card
.home-game-list
.home-game-card
```

Header/footer là phần dùng chung, nên khi chỉnh cần kiểm tra thêm các trang khác ngoài home để tránh lỗi layout toàn site.

## Yêu cầu khác nhau hoàn toàn giữa 100 giao diện

Mỗi giao diện phải có một **layout signature** riêng, nhìn vào phải nhận ra đây là một form khác, không phải biến thể nhỏ của giao diện trước.

Các yếu tố cần thay đổi có chủ đích giữa các giao diện:

- Cấu trúc header: vị trí logo, menu, search, CTA, kiểu mobile menu, sticky/normal/split/header bar.
- Cấu trúc hero/banner: full-bleed, split layout, featured post, carousel, magazine lead, ranking lead, video-first, no-hero, multi-column lead.
- Thứ tự section: blog/review/game có thể đảo thứ tự hoặc nhóm lại theo logic mới.
- Cách trình bày card: list, grid, masonry, editorial row, compact table, ranking list, horizontal scroll, large/small mixed cards.
- Tỷ lệ ảnh và text: có giao diện thiên ảnh lớn, có giao diện thiên text/news, có giao diện compact như portal.
- Sidebar hoặc không sidebar; nếu có sidebar thì nội dung phải hợp lý và có link thật.
- Footer: có thể là compact footer, multi-column footer, directory footer, newsletter-style footer, sitemap footer, hoặc footer tối giản tuỳ form.
- Nhịp spacing và density: có layout thoáng editorial, có layout dày kiểu news portal, có layout gọn kiểu review hub.

Không tính là khác nhau đủ nếu chỉ:

- Đổi màu.
- Đổi font.
- Đổi ảnh nền.
- Đổi shadow/border radius.
- Đổi khoảng cách nhẹ.
- Giữ nguyên header/hero/card/footer rồi chỉ sửa text.

Mục tiêu là tạo 100 form có thể đứng riêng trong pool thiết kế, dễ đánh dấu `des-1`, `des-2`, ... `des-100`, và đủ khác biệt để khách quét độ giống nhau vẫn thấy mỗi bản là một bố cục riêng.

## Nguyên tắc từ feedback khách hàng

Các giao diện sau cần đi theo hướng **content-first** và **functional-first**:

- Mọi text hiển thị trên giao diện phải có ý nghĩa thật, không dùng label trang trí chung chung.
- Những block giống menu, category, shortcut hoặc tab phải click được. Nếu không có link/hành động rõ ràng thì bỏ.
- Hero/banner nên dùng nội dung thật như bài viết nổi bật, review nổi bật hoặc game nổi bật; không chỉ dùng lại đoạn description cũ.
- Có thể thay ảnh, thay text, thay cấu trúc banner miễn vẫn lấy từ nội dung thật và có link rõ ràng.
- Không nhồi quá nhiều text lên ảnh. Với card ảnh, ưu tiên chỉ hiện category và title; bỏ excerpt/description nếu làm che ảnh hoặc khó đọc.
- Header không bắt buộc phải absolute. Nếu absolute/overlay làm layout rối hoặc gây lỗi mobile thì chuyển về header thường hoặc sticky.
- Mobile là tiêu chí nghiệm thu thật, đặc biệt phần header, menu và search từ `320px`.
- Mỗi style phải khác bản gốc rõ ràng về ý tưởng và cách trình bày, không chỉ đổi màu hoặc đổi spacing nhẹ.
- Thiết kế có thể đơn giản hơn nếu giúp giao diện rõ ràng, dễ dùng và không lỗi.

## Tạo hoặc thay ảnh bằng GPT Image API theo config Codex

Có thể dùng cùng config API mà Codex trên máy này đang dùng để tạo ảnh mới hoặc thay ảnh/banner cho từng giao diện.

Config Codex hiện tại trên máy này:

```text
model_provider = cliproxyapi
base_url       = http://171.244.185.173:8317/v1
wire_api       = responses
```

Model ảnh dùng khi call API:

```text
gpt-image-2
```

Không hardcode API key trong source hoặc trong docs. API key lấy từ `~/.codex/config.toml` tại provider `cliproxyapi`.

### Khi nào dùng

- Tạo ảnh banner/hero mới theo style của từng giao diện.
- Tạo thumbnail minh hoạ cho bài nổi bật, review nổi bật hoặc game nổi bật.
- Dùng ảnh cũ làm reference để tạo ảnh mới đồng bộ style.
- Không dùng ảnh sinh ra chỉ để trang trí vô nghĩa; ảnh phải phục vụ nội dung thật.

### Setup biến môi trường từ config Codex

Chạy lệnh này trong terminal để lấy `base_url` và `api_key` từ config Codex, không in key ra màn hình:

```bash
eval "$(
node <<'NODE'
const fs = require('fs');
const config = fs.readFileSync(`${process.env.HOME}/.codex/config.toml`, 'utf8');
const provider = (config.match(/^model_provider\s*=\s*"([^"]+)"/m) || [])[1];
const section = provider && config.match(new RegExp(`\\[model_providers\\.${provider}\\]([\\s\\S]*?)(?=\\n\\[|$)`));
const body = section ? section[1] : '';
const baseUrl = (body.match(/base_url\s*=\s*"([^"]+)"/) || [])[1];
const apiKey = (body.match(/api_key\s*=\s*"([^"]+)"/) || [])[1];
if (!baseUrl || !apiKey) process.exit(1);
console.log(`export CODEX_IMAGE_BASE_URL=${JSON.stringify(baseUrl)}`);
console.log(`export CODEX_IMAGE_API_KEY=${JSON.stringify(apiKey)}`);
NODE
)"
```

### Generate ảnh mới từ prompt

Endpoint theo config Codex:

```text
POST $CODEX_IMAGE_BASE_URL/images/generations
```

Ví dụ tạo ảnh banner hero:

```bash
curl -X POST "$CODEX_IMAGE_BASE_URL/images/generations" \
  -H "Authorization: Bearer $CODEX_IMAGE_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "model": "gpt-image-2",
    "prompt": "Create a modern cinematic gaming news hero image for a featured article. Dark premium editorial style, strong focal subject, no readable text, no logos, no UI mockups.",
    "size": "1536x1024",
    "quality": "medium",
    "output_format": "webp"
  }' \
  | jq -r '.data[0].b64_json' \
  | base64 --decode > hero-featured.webp
```

### Edit hoặc tạo ảnh mới từ ảnh tham chiếu

Endpoint theo config Codex:

```text
POST $CODEX_IMAGE_BASE_URL/images/edits
```

Ví dụ dùng một ảnh cũ làm reference để tạo ảnh mới cùng chủ đề:

```bash
curl -X POST "$CODEX_IMAGE_BASE_URL/images/edits" \
  -H "Authorization: Bearer $CODEX_IMAGE_API_KEY" \
  -F "model=gpt-image-2" \
  -F "image[]=@old-banner.png" \
  -F "prompt=Redesign this into a fresh gaming editorial hero image. Keep the same general topic, but create a new composition, cinematic lighting, clean background, no readable text, no logos." \
  -F "size=1536x1024" \
  -F "quality=medium" \
  -F "output_format=webp" \
  | jq -r '.data[0].b64_json' \
  | base64 --decode > new-banner.webp
```

Nếu proxy `cliproxyapi` không hỗ trợ endpoint ảnh, mới chuyển sang OpenAI official endpoint bằng key riêng. Không tự đổi endpoint khi chưa kiểm tra.

Trạng thái kiểm tra trên máy hiện tại:

```text
GET  $CODEX_IMAGE_BASE_URL/models             -> 200
POST $CODEX_IMAGE_BASE_URL/images/generations -> 200
```

Lưu ý: proxy có thể trả file PNG dù request đặt `output_format` là `webp`, nên sau khi decode cần kiểm tra lại file bằng lệnh `file`.

### Quy tắc prompt ảnh cho project này

- Không yêu cầu model render chữ trên ảnh nếu không cần thiết; text nên để HTML/CSS xử lý.
- Không yêu cầu copy logo, key art, nhân vật có bản quyền hoặc giao diện game chính thức nếu không có quyền sử dụng.
- Prompt nên mô tả style, mood, bố cục và mục đích nội dung.
- Ảnh hero nên ưu tiên tỷ lệ ngang như `1536x1024`.
- Ảnh card có thể dùng `1024x1024` hoặc `1536x1024` tuỳ bố cục.
- Sau khi tạo ảnh, lưu vào theme hoặc media folder rõ ràng và cập nhật đường dẫn trong template/CSS.

### Prompt mẫu cho ảnh background

Ảnh đã tạo thử:

```text
wp-content/themes/des-1/images/des-1-generated-hero.png
```

Ảnh này phù hợp để làm background vì có vùng tối rộng, dễ đặt nội dung bằng HTML/CSS; phần hình ảnh chính nằm lệch một bên nên không che nội dung. Ảnh không có chữ/logo nên dễ dùng lại cho nhiều bố cục.

Prompt đã dùng:

```text
Create a fresh hero image for a gaming news website featured story. Cinematic dark premium editorial composition, energetic console game atmosphere, one strong focal scene, clean negative space on the left for HTML headline overlay, no readable text, no logos, no UI mockups, no copyrighted characters.
```

Khi dùng ảnh background, phần nội dung đặt lên ảnh vẫn phải là nội dung thật, có title và link rõ ràng. Không dùng ảnh chỉ như trang trí.

## Nội dung bắt buộc trên trang home

Trang home phải trình bày đủ 3 nhóm nội dung sau. Thứ tự và bố cục có thể thay đổi giữa các giao diện, miễn hấp dẫn, khác biệt và đầy đủ.

### Bài blog

```php
'post_type'      => 'blog',
'posts_per_page' => 3,
'orderby'        => 'rand',
'order'          => 'DESC',
'post_status'    => 'publish',
```

### Bài review

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'review',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

### Bài post/game

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'post__not_in'   => $game_ids,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

Luôn cho các nhóm nội dung hiển thị random.

## Nghiệm thu

Mỗi giao diện cần bàn giao các file liên quan đến home, header và footer, tối thiểu gồm:

```text
home.php
header.php
footer.php
css/_home.scss
css/_header.scss
css/_footer.scss
style.css
```

Nếu có chỉnh thêm file nào để giao diện không lỗi, cần ghi rõ file đó.
