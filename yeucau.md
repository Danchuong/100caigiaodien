# Yêu cầu thiết kế 100 giao diện home, header và footer

Tài liệu này là nguồn yêu cầu chính cho toàn bộ project. Khi có mâu thuẫn giữa các ghi chú cũ và file này, ưu tiên theo `yeucau.md`.

## Mục tiêu nghiệm thu

Thiết kế 100 giao diện mới cho website game/news/review. Mỗi giao diện gồm:

- Trang home.
- Header dùng chung toàn site.
- Footer dùng chung toàn site.

Khách hàng không muốn 100 bản chỉ khác màu, ảnh, font, spacing hoặc bo góc. Mỗi bản phải là một **form/layout khác rõ**, đủ khác để nhìn bằng mắt hoặc quét bằng tool vẫn nhận ra là một giao diện riêng.

Mỗi giao diện phải đạt cảm giác:

- Là một theme hoàn chỉnh, không phải lớp skin bọc quanh source cũ.
- Dùng được thật: link thật, search thật, menu thật, nội dung thật.
- Header, home, footer đồng bộ theo cùng concept.
- Không lỗi desktop, tablet, mobile.
- Responsive tốt từ `320px` trở lên.

Demo trang chủ tham khảo: https://gamenewfiz.info/

## Source và restore

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing

Khách yêu cầu bước restore dùng **All-in-One WP Migration** để restore file `.wpress`.

Không thay đổi flow restore bằng plugin khác nếu không được yêu cầu.

## Phạm vi công việc

Mỗi `des-N` cần xử lý tối thiểu các phần sau trong theme:

```text
/wp-content/themes/des-N/home.php
/wp-content/themes/des-N/header.php
/wp-content/themes/des-N/footer.php
/wp-content/themes/des-N/style.css
```

Nếu làm trực tiếp trong source SCSS thì các file chính là:

```text
/wp-content/themes/des-N/css/_home.scss
/wp-content/themes/des-N/css/_header.scss
/wp-content/themes/des-N/css/_footer.scss
```

Build SCSS ra CSS và đảm bảo CSS cuối cùng nằm ở:

```text
/wp-content/themes/des-N/style.css
```

Header và footer là phần dùng chung, nên mọi chỉnh sửa phải an toàn cho các trang ngoài home như blog detail, review detail, game detail, archive và search.

Header và footer cũng phải **đồng nhất ở mọi trang**. Không được làm header/footer chỉ đẹp ở homepage nhưng khác bố cục, khác màu, khác cảm giác hoặc thiếu chức năng ở các trang còn lại.

## Feedback hiện tại cho des-1

Khách báo phần giữa/trang home hiện tại của `des-1` đã đẹp và phù hợp. Không revert hoặc redesign lại phần home đã được duyệt nếu không có feedback mới.

Vấn đề còn lại của `des-1` là:

- Header đang hơi lạc lõng so với phần giữa.
- Footer đang hơi lạc lõng so với phần giữa.
- Bản mới trên mobile đang bị đổ layout.
- Những chỉnh sửa global làm các trang ngoài home bị bung layout.
- Khách yêu cầu header và footer ở mọi trang phải giống nhau, không chỉ riêng homepage.
- Cần điều chỉnh header/footer để ăn nhập với concept, màu sắc, nhịp spacing và bố cục của phần home hiện tại, nhưng phải áp dụng thành một global header/footer ổn định cho toàn site.

Hướng xử lý đúng:

- Giữ nguyên cấu trúc và cảm giác chính của phần home/giữa đã được khách chấp nhận.
- Header/footer là global component; khi sửa thì sửa thành một bản dùng chung cho homepage, blog detail, review detail, game detail, archive và search.
- Không dùng `body.home header...`, `body.home footer...`, `is_front_page()` hoặc `is_home()` để tạo header/footer khác riêng homepage.
- Chỉ dùng selector `body.home ...` cho khoảng cách tiếp giáp nội dung trang chủ nếu thật sự cần, không dùng để đổi cấu trúc, màu nền, navigation, search hoặc footer anatomy.
- Nếu sửa `header.php` hoặc `footer.php`, phải giữ cấu trúc chung ổn cho toàn site và kiểm tra regression trên các trang ngoài home.
- Nếu buộc phải đụng `home.php` hoặc `_home.scss`, chỉ sửa phần liên quan trực tiếp đến khoảng cách tiếp giáp header/footer, không đổi form layout chính.
- Header/footer phải giống như cùng một theme với home, không như một block generic gắn thêm vào, nhưng vẫn giữ cùng hình thức trên mọi trang.
- Các trang ngoài home như blog detail, review detail, game detail, archive và search là vùng regression bắt buộc; sửa header/footer không được làm các trang này bung layout.
- Sau khi sửa, cập nhật lại `delivery/des-1-home` từ source thật.

Quy tắc quan trọng cho feedback này: **header/footer phải global và đồng nhất toàn site; chỉ phần nội dung home mới được khác riêng homepage**.

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

Không tạo dữ liệu giả chỉ để làm giao diện trông đầy đủ hơn.

## Chuẩn đặt tên và tổ chức class

Class phải rõ nghĩa, dễ đọc, dễ audit. Ưu tiên namespace theo khu vực và style, nhưng vẫn giữ các class chung để kiểm tra nhanh header/footer.

Ví dụ class nên có:

```text
.head-wrapper
.head-left
.head-center
.head-right
.head-logo
.head-menu
.head-search
.head-search-btn
.head-btn

.footer-wrapper
.footer-brand
.footer-nav
.footer-section
.footer-links

.home-wrapper
.home-section
.home-featured
.home-blog-list
.home-review-list
.home-game-list
```

Mỗi style có thể có namespace riêng, ví dụ `.des-12-score-desk`, `.des-18-game-catalog`, nhưng không được đặt tên mơ hồ kiểu chỉ để trang trí.

## Chuẩn header và navigation

Header phải có một mô hình điều hướng rõ ràng:

1. Logo link về `home_url( '/' )`.
2. Primary navigation lấy từ `wp_nav_menu()` với `theme_location => 'main-menu'`.
3. Search là chức năng riêng, không tính là menu.
4. Utility strip, topic strip hoặc shortcut chỉ được dùng nếu có mục đích khác menu chính và có link thật.
5. Mobile menu là cách hiển thị lại cùng `main-menu`, không tạo danh sách hard-code khác.

`main-menu` là nguồn sự thật duy nhất cho điều hướng chính.

Menu chính chuẩn nên dùng các nhãn:

```text
Games
Reviews
Blogs
About Us
```

Không được để header bị duplicate kiểu:

- Vừa có `HTML5 Games` vừa có `Games` nếu cùng dẫn về một nội dung.
- Vừa có `Reviews Games` vừa có `Reviews` nếu cùng vai trò.
- Vừa có `Blogs / Reviews / Games` trong menu chính, vừa lặp lại nguyên bộ đó ở topbar hoặc quick links.
- Desktop dùng một menu, mobile hard-code một menu khác.
- Dải phụ nhìn giống menu nhưng chỉ là text trang trí.

Header có thể khác nhau giữa các style bằng bố cục, số tầng, vị trí logo, search, sticky behavior, density hoặc mobile behavior. Sự khác biệt không được đến từ việc nhân đôi menu.

### Search

Search phải là chức năng thật:

- Form dùng `method="get"`.
- Input dùng `name="key"` nếu submit về flow search/review hiện tại đang đọc `key`.
- Giá trị input phải sanitize và escape trước khi output.
- Placeholder phải nói đúng phạm vi tìm kiếm, ví dụ `Search reviews` nếu action submit về `/reviews/`.
- Nút submit phải là hành động thật, không chỉ là icon trang trí.
- Mobile search không được mở kèm một dải link phụ trùng menu.

## Chuẩn footer theo concept

Footer không được là một khối generic đổi màu. Footer phải là phần kết tự nhiên của concept đang dùng.

Mỗi footer cần có 3 lớp nội dung:

1. **Identity**: logo/title link về home, mô tả ngắn có nghĩa, copyright.
2. **Primary navigation**: link thật đến Games, Reviews, Blogs và các trang chính liên quan.
3. **Theme-specific continuation**: phần riêng theo concept của style.

Ví dụ footer theo concept:

- Game directory: Explore, Platforms, Latest reviews, Popular games.
- News desk: Latest Blogs, Fresh Reviews, Popular Games.
- Editorial/newspaper: masthead gọn, issue links, categories, copyright.
- Review hub: leaderboard, score desk, review archive.
- Portal/magazine: sitemap nhiều cột, latest posts, latest reviews.
- Roundup/search: CTA tìm review hoặc browse archive, không giả newsletter nếu không có backend subscribe.
- Community/board: topic links, latest discussions được map bằng bài thật.

Không được:

- Dùng cùng một footer cho nhiều style rồi chỉ đổi màu.
- Có social link nếu không có URL thật.
- Có newsletter nếu không có chức năng đăng ký thật.
- Có text kỹ thuật hoặc placeholder.
- Có margin âm làm footer kéo ngược lên nội dung.
- Có khoảng trắng dư xấu trước hoặc sau footer.

Footer phải ổn trên home và các trang ngoài home.

## Chuẩn home

Home phải giữ đủ 3 nhóm nội dung chính:

- Blog.
- Review.
- Game/post.

Thứ tự, bố cục và vai trò có thể thay đổi theo concept. Có thể dùng blog làm tin nổi bật, review làm score hub, game làm catalog, hoặc đảo flow để tạo form khác biệt. Tuy nhiên không được làm mất nhóm nội dung chính.

Hero/banner không bắt buộc giữ giống source cũ. Có thể thay hình, thay text, thay cấu trúc hoặc bỏ hero lớn nếu concept cần. Điều bắt buộc là khu vực đầu trang phải có vai trò rõ:

- Bài viết nổi bật.
- Review nổi bật.
- Game nổi bật.
- Search/catalog.
- Ranking/top list.
- News desk.
- Editorial issue.
- Một form khác phù hợp game/news/review.

Không dùng lại đoạn description cũ chỉ để lấp banner. Với ảnh có text overlay, ưu tiên chỉ hiển thị category/tag và title; bỏ excerpt nếu làm chữ đè ảnh hoặc khó đọc.

## Content-first và functional-first

Mọi thứ người dùng thấy phải có ý nghĩa hoặc có hành động thật.

Bắt buộc:

- Title/card bài viết, review, game phải có link.
- Tab, chip, category, shortcut, CTA nhìn như click được thì phải click được.
- Label phải đúng với nội dung phía sau.
- Nếu block gọi là `Review`, dữ liệu bên dưới phải là review.
- Nếu block gọi là `Games`, dữ liệu bên dưới phải là game/post.
- Nếu có điểm review, điểm phải lấy từ field thật; không hardcode điểm như `4.5` để trang trí.
- Nếu không có data thật cho score, dùng label/verdict an toàn hơn là dựng số giả.

Tránh:

- Label chung chung như `Game Newsroom` nếu không có ý nghĩa cụ thể.
- Button/link rỗng, `href="#"`, `javascript:void(0)` trong bản giao khách.
- Nội dung giả kiểu Lorem/TODO/FIXME.
- Bảng số liệu esports, deal, price, poll hoặc newsletter giả nếu không có backend hoặc dữ liệu thật.

## Chuẩn responsive và mobile từ 320px

Mobile `320px` là tiêu chí nghiệm thu thật, không phải phần phụ.

Ở `320px`, header nên tối giản:

```text
logo | search button | menu button
```

Yêu cầu mobile:

- Không có horizontal overflow ngoài strip cuộn ngang có chủ đích.
- Header không quá cao, không che nội dung.
- Menu mobile mở/đóng được, nằm trong viewport, link dễ bấm.
- Search mobile mở riêng, input không tràn, submit được.
- Target chạm của nút menu/search/CTA tối thiểu khoảng `44px`.
- Topbar, quick links hoặc utility strip phải ẩn/gộp nếu gây cảm giác nhiều menu.
- Hero, mosaic, sidebar, table phải stack hoặc chuyển form phù hợp.
- Card ảnh overlay trên mobile không được nhồi excerpt dài.
- Footer xuống một cột hoặc nhóm full-width, link không làm rộng viewport.
- Header/footer vẫn ổn ở blog detail, review detail, game detail, archive và search.

Nếu phải chọn giữa giữ signature desktop và tránh lỗi 320px, ưu tiên tránh lỗi 320px.

## Luật chống vỡ layout từ kinh nghiệm des-1

Các lỗi vừa gặp ở `des-1` chủ yếu đến từ việc sửa chồng lên source cũ, selector không khớp PHP/CSS, và trạng thái mobile/search chưa được kiểm tra kỹ. Từ các style sau, bắt buộc áp dụng các luật sau.

### 1 source of truth cho header/footer

- Header/footer phải có một hệ class rõ ràng và CSS phải khớp đúng class đang render trong PHP.
- Không để PHP dùng `.foot-*` nhưng SCSS vẫn style `.footer-*`, hoặc ngược lại.
- Khi đổi layout header/footer, phải kiểm tra và dọn selector cũ không còn dùng.
- Header/footer là vùng dùng chung toàn site, nên không để nhiều agent hoặc nhiều nhánh sửa chồng cùng lúc nếu chưa có người tổng hợp cuối.

Các selector cũ cần soi kỹ nếu style mới không dùng:

```bash
rg -n "footer-wrap|footer-menu|footer-wrapper|footer-brand|footer-section|footer-links|head-directory|head-filter|form-control" wp-content/themes/des-N
```

### Mobile search và input

- Mobile search nên nằm trong flow dưới header nếu layout cho phép: hidden bằng `display: none`, active bằng `display: block`.
- Nếu mobile search mở dạng popup dùng `position: absolute`, popup phải neo theo container/header ổn định, không neo theo `.head-right` hoặc cụm icon button nhỏ.
- Không đặt `.head-right { position: relative; }` nếu popup search đang cần canh theo toàn header/container; rule này dễ làm popup lệch sang phải khi màn hình hẹp.
- Popup search mobile phải có `left`/`right` theo gutter header để không tràn viewport từ `320px`.
- Wrapper bên trong popup không được bị CSS legacy làm hỏng bằng `opacity: 0`, `pointer-events: none`, `max-width` hẹp, `margin` lệch hoặc `backdrop-filter`/transition không phù hợp.
- Tránh ẩn/mở input bằng `max-height` vì input focus có thể bị cắt hoặc nhìn lỗi.
- Không dùng Bootstrap `.form-control` cho input search custom nếu component đã có style riêng.
- Input search custom nên dùng class riêng, ví dụ `.head-search-input`, và reset rõ:

```scss
.head-search-input {
    min-width: 0;
    border: 0;
    outline: 0;
    box-shadow: none;
}
```

### Không vá CSS chồng lớp

- Khi một component đã sai nhiều, rewrite nguyên block component thay vì thêm vài rule vá lên trên.
- Footer nên rewrite nguyên `_footer.scss` nếu đổi concept/footer anatomy.
- Header search/menu nên rewrite nguyên cụm `.head-search`, `.head-search-wrapper`, `.head-search-input`, `.head-search-submit`.
- Không để một component bị điều khiển bởi cả CSS cũ trong `style.scss` và CSS mới trong `_header.scss`/`_footer.scss`.

### Cô lập thay đổi theo trang

- Nếu feedback chỉ nằm ở trang home, ưu tiên sửa trong `home.php`, `_home.scss` hoặc selector scope `body.home ...`.
- Không dùng selector global như `header.site-header`, `footer.site-footer`, `.head-wrapper`, `.foot-wrapper` để sửa riêng content home nếu selector đó sẽ tác động toàn site.
- Không dùng selector home-only để tạo header/footer khác homepage. Header/footer phải giống nhau trên mọi trang.
- Nếu cần chỉnh khoảng cách tiếp giáp giữa home và header/footer, chỉ scope phần spacing nhỏ, không đổi cấu trúc/cảm giác header/footer:

```scss
body.home .directory-hero { ... }
body.home .home-directory { ... }
```

- Không tạo markup header/footer chỉ riêng homepage bằng điều kiện như:

```php
if ( is_front_page() || is_home() ) {
    // home-only header/footer markup: tránh dùng cho header/footer
}
```

- Sau khi sửa trang home hoặc header/footer, vẫn phải kiểm tra các trang ngoài home vì header/footer/CSS là tài nguyên dùng chung.

### Checklist trạng thái phải bấm thật

Trước khi commit một layout có header/footer/search, phải kiểm tra bằng browser thật:

- Desktop: mở menu/search nếu có.
- Mobile `390px`, `360px`, `320px`: mở menu, mở search, focus input, submit search.
- Scroll xuống footer trên home và ít nhất một trang ngoài home.
- Kiểm tra không có horizontal overflow, không có text/button/input bị cắt.

### Grep lỗi layout trước commit

Chạy thêm các lệnh kiểm tra rủi ro layout:

```bash
rg -n "margin-top:\s*-|width:\s*100vw|min-width:\s*[4-9][0-9]{2}px|left:\s*-[0-9]|right:\s*-[0-9]|white-space:\s*nowrap" wp-content/themes/des-N/css wp-content/themes/des-N/*.php
rg -n "form-control|footer-wrap|footer-menu|footer-wrapper|head-search.*position:\s*absolute|href=\"#\"|javascript:void" wp-content/themes/des-N delivery/des-N-home
```

Nếu grep ra kết quả trong file đang sửa, phải đọc lại và xác nhận đó là chủ đích an toàn trước khi commit.

### Quy trình chống vỡ layout

Quy trình đúng cho mỗi style:

1. Chốt contract class cho header/home/footer.
2. Rewrite component chính sạch theo contract, không vá chồng.
3. Build `style.css`.
4. Sync sang local WordPress.
5. Test bằng browser thật ở desktop/tablet/mobile.
6. Bấm trạng thái menu/search/input/footer.
7. Grep selector cũ và layout risk.
8. Commit.
9. Copy sang `delivery/des-N-home`.

## Chuẩn khác biệt giữa 100 giao diện

Mỗi style dùng mã thống nhất:

```text
des-1
des-2
...
des-100
```

Không dùng song song mã khác như `S001` để tránh rối khi đánh dấu.

Trước khi code mỗi style, phải có fingerprint một dòng:

```text
des-N = Header / Above-fold / Flow / Card / Footer / Mobile
```

Một style mới phải khác rõ ít nhất 4/6 phần lớn:

- Header.
- Above-fold/hero.
- Flow/thứ tự section.
- Card/grid pattern.
- Footer.
- Mobile signature.

Với batch nhiều mẫu, nên kiểm tra thêm 12 chiều fingerprint:

```text
Header anatomy
Above-fold composition
DOM section order
Content emphasis
Grid geometry
Card anatomy
Media ratio
Density rhythm
Navigation/action model
Footer anatomy
Mobile signature
CSS/layout primitives
```

So với các style đã hoàn thành gần nhất, style mới nên khác ít nhất 7/12 chiều. Nếu chỉ đổi màu, font, ảnh, shadow, border radius, spacing nhẹ hoặc class name nhưng giữ cùng DOM/layout, không tính là khác đủ.

Tool của khách có thể quét:

- Screenshot desktop/mobile.
- DOM/tree sau render.
- Tên class và thứ tự section.
- CSS grid/flex/breakpoint.
- Text/label lặp lại.

Vì vậy không được dùng cùng skeleton `header -> hero -> blog grid -> review grid -> game grid -> footer` cho nhiều bản rồi chỉ đổi skin.

## Hướng layout nên tham khảo

Được tham khảo ThemeForest để lấy **form, bố cục và cách tổ chức nội dung** cho nhóm gaming, game news, review, magazine, portal, esports hoặc editorial.

Chỉ được lấy:

- Vai trò block: lead story, ticker, score table, playlist, directory, ranking.
- Quan hệ bố cục: main/side, rail/content, table/card, timeline/list.
- Mật độ: airy editorial, balanced magazine, dense portal.
- Cơ chế responsive: rail thành scroll, table thành card, sidebar thành section.

Không được copy:

- Code HTML/CSS/JS.
- Ảnh, logo, icon, screenshot, demo text, brand name.
- Tổ hợp layout quá nhận diện của theme cụ thể.
- Tên class hoặc section giống theme nguồn.

Các archetype phù hợp:

- Magazine lead + side rail.
- Mosaic/news wall.
- Dense newsroom.
- Review score desk.
- Game catalog/search-first.
- Esports scoreboard.
- Video/trailer channel.
- Affiliate/recommendation hub.
- Editorial issue/cover.
- Community board.
- Ranking/top list.
- Console/dashboard.

Khi dùng các archetype có vẻ giả lập chức năng như esports, affiliate, community, poll hoặc dashboard, phải map về nội dung thật đang có. Không tạo dữ liệu giả vô nghĩa.

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

Luôn cho các nhóm nội dung hiển thị random như source gốc, nhưng layout vẫn phải ổn khi nội dung thay đổi sau mỗi lần load.

## QA trước khi ship

Không dùng Playwright trong project này. Kiểm tra bằng terminal, WordPress local, `curl`, WP-CLI và browser thật.

Trước khi giao mỗi style:

```bash
git status --short
git diff --check
git diff --stat
find wp-content/themes/des-N -maxdepth 1 -name "*.php" -print -exec php -l {} \;
test -s wp-content/themes/des-N/style.css
```

Kiểm tra text/link rủi ro:

```bash
rg -n "Game Newsroom|Responsive from 320px|Lorem|TODO|FIXME|href=\"#\"|javascript:void|href=\"\"" wp-content/themes/des-N delivery/des-N-home
rg -n "Blogs|Reviews|Games|HTML5 Games|Reviews Games|Mobile" wp-content/themes/des-N/header.php
```

Nếu WordPress local đang chạy:

```bash
BASE_URL="http://localhost:8088"
curl -I "$BASE_URL/"
curl -L "$BASE_URL/" -o /tmp/des-N-home.html
curl -L "$BASE_URL/blogs/" -o /tmp/des-N-blogs.html
curl -L "$BASE_URL/reviews/" -o /tmp/des-N-reviews.html
curl -L "$BASE_URL/games/" -o /tmp/des-N-games.html
rg -n "Fatal error|Warning:|Notice:|Deprecated|Undefined|Parse error" /tmp/des-N-*.html
```

Mở browser thật để kiểm tra:

```bash
open "$BASE_URL/"
open "$BASE_URL/blogs/"
open "$BASE_URL/reviews/"
open "$BASE_URL/games/"
```

Bắt buộc kiểm tra bằng mắt:

- Desktop first viewport khác rõ style cũ.
- Header không duplicate navigation.
- Search dùng được.
- Hero/banner không dùng text vô nghĩa.
- Mọi chip/tab/shortcut/CTA có link thật.
- Blog/review/game hiển thị đủ nhóm.
- Không có text dài đè ảnh.
- Footer liên quan concept và không có khoảng trắng xấu.
- Trang ngoài home vẫn có header/footer ổn.
- Mobile ở `320px`, `360px`, `390px`, tablet khoảng `768px` không vỡ layout.

## Delivery cho khách

Mỗi style bàn giao gọn trong folder:

```text
delivery/des-N-home/
  footer.php
  header.php
  home.php
  style.css
```

Nếu style có asset riêng bắt buộc để giao diện đúng, thêm asset đó vào folder delivery và ghi rõ. Không gửi toàn bộ WordPress, database, uploads, plugin, `node_modules`, file backup hoặc `.DS_Store`.

Zip theo mẫu:

```text
delivery/des-N-home.zip
```

Kiểm tra trước khi zip:

```bash
find delivery/des-N-home -maxdepth 2 -type f | sort
test -s delivery/des-N-home/home.php
test -s delivery/des-N-home/header.php
test -s delivery/des-N-home/footer.php
test -s delivery/des-N-home/style.css
diff -q wp-content/themes/des-N/home.php delivery/des-N-home/home.php
diff -q wp-content/themes/des-N/header.php delivery/des-N-home/header.php
diff -q wp-content/themes/des-N/footer.php delivery/des-N-home/footer.php
diff -q wp-content/themes/des-N/style.css delivery/des-N-home/style.css
```

Tạo zip:

```bash
cd delivery
zip -r des-N-home.zip des-N-home -x "*.DS_Store"
```

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

- Tạo ảnh background mới theo style của từng giao diện.
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

Ví dụ tạo ảnh background:

```bash
curl -X POST "$CODEX_IMAGE_BASE_URL/images/generations" \
  -H "Authorization: Bearer $CODEX_IMAGE_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "model": "gpt-image-2",
    "prompt": "Create a modern cinematic gaming editorial background image. Premium dark atmosphere, energetic console-game mood, one strong focal scene, clean negative space for website text, no readable text, no logos, no UI mockups, no copyrighted characters.",
    "size": "1536x1024",
    "quality": "medium",
    "output_format": "webp"
  }' \
  | jq -r '.data[0].b64_json' \
  | base64 --decode > gaming-background.webp
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
  -F "prompt=Redesign this into a fresh gaming editorial background image. Keep the same general topic, but create a new composition, cinematic lighting, clean background, no readable text, no logos." \
  -F "size=1536x1024" \
  -F "quality=medium" \
  -F "output_format=webp" \
  | jq -r '.data[0].b64_json' \
  | base64 --decode > new-background.webp
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
- Ảnh background nên ưu tiên tỷ lệ ngang như `1536x1024`.
- Ảnh card có thể dùng `1024x1024` hoặc `1536x1024` tuỳ bố cục.
- Sau khi tạo ảnh, lưu vào theme hoặc media folder rõ ràng và cập nhật đường dẫn trong template/CSS.

### Prompt mẫu chung cho ảnh background

```text
Create a modern gaming editorial background image suitable for a website. Premium cinematic atmosphere, strong focal scene, clean composition, readable negative space for HTML text, no readable text, no logos, no UI mockups, no copyrighted characters.
```

Khi dùng ảnh background, phần nội dung đặt lên ảnh vẫn phải là nội dung thật, có title và link rõ ràng. Không dùng ảnh chỉ như trang trí.
