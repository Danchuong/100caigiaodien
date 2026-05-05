# Yêu cầu thiết kế 100 giao diện home, header và footer

File này là nguồn yêu cầu chính của project. Nếu có mâu thuẫn với ghi chú cũ, ưu tiên theo file này.

## 1. Mục tiêu nghiệm thu

Thiết kế 100 giao diện mới cho website game/news/review. Mỗi `des-N` là một theme hoàn chỉnh gồm:

- Home.
- Header dùng chung toàn site.
- Footer dùng chung toàn site.

Khách không muốn 100 bản chỉ khác màu, ảnh, font, spacing hoặc bo góc. Mỗi bản phải khác rõ về form/layout để nhìn bằng mắt hoặc quét bằng tool vẫn nhận ra là giao diện riêng.

Mỗi giao diện phải đạt:

- Dùng được thật: link thật, search thật, menu thật, nội dung thật.
- Header, home và footer đồng bộ cùng concept.
- Header/footer ổn ở home, blog detail, review detail, game detail, archive và search.
- Không lỗi layout trên desktop, tablet, mobile.
- Responsive tốt từ `320px` trở lên.
- Dày thông tin nhưng vẫn gọn gàng: nhiều nội dung thật, nhiều entry/link hữu ích, không để spacing quá rộng làm loãng.
- Luôn có ít nhất một banner/featured block dùng hình ảnh, title và một đoạn description ngắn.
- Dùng font sans-serif, không dùng font có chân/serif cho layout chính.
- Theme phải hợp với website game/game news/review; nếu tham khảo báo/tạp chí thì phải chuyển hóa thành gaming portal hiện đại, không để cảm giác cổ, già hoặc lạc chủ đề game.
- Không tạo cảm giác chỉ là skin bọc quanh source cũ.

Demo trang chủ tham khảo: https://gamenewfiz.info/

## 2. Source, restore và phạm vi

Source khách gửi:

```text
https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing
```

Khách yêu cầu restore bằng **All-in-One WP Migration** với file `.wpress`. Không thay flow restore bằng plugin khác nếu khách không yêu cầu.

Mỗi `des-N` cần xử lý tối thiểu:

```text
/wp-content/themes/des-N/home.php
/wp-content/themes/des-N/header.php
/wp-content/themes/des-N/footer.php
/wp-content/themes/des-N/style.css
```

Nếu dùng SCSS:

```text
/wp-content/themes/des-N/css/_home.scss
/wp-content/themes/des-N/css/_header.scss
/wp-content/themes/des-N/css/_footer.scss
```

Sau khi sửa SCSS phải build ra:

```text
/wp-content/themes/des-N/style.css
```

Không thay đổi nếu không có yêu cầu rõ:

- Plugin.
- Admin WordPress.
- Database.
- Post type.
- Nội dung bài viết.
- Logic import/restore.

Không tạo dữ liệu giả chỉ để giao diện trông đầy đủ hơn.

Rule cứng về file ngoài scope:

- Khi khách chỉ yêu cầu thiết kế home/header/footer, tuyệt đối không tạo diff ở `reviews.php`, `search.php` hoặc template archive/detail ngoài scope.
- Không sửa, copy đè, format lại, hoặc đưa `reviews.php` / `search.php` vào delivery nếu khách không yêu cầu đích danh hai file đó.
- Trong source theme, `reviews.php`, `search.php` và CSS liên quan của review/search như `css/_reviews.scss` phải giữ nguyên bản khách (`h5game`) nếu không có yêu cầu riêng. Nếu phải restore, restore y chang bản khách, không tự sửa text, placeholder, spacing, escaping, format hoặc trailing whitespace.
- Nếu `/reviews/`, search hoặc pagination bị ảnh hưởng sau khi sửa home/header/footer, ưu tiên sửa bằng cách scope CSS đúng hơn hoặc kiểm tra file style build/import; không tự ý chỉnh template ngoài scope.
- Trước khi commit hoặc ship phải kiểm tra `git diff --name-only`; nếu thấy `reviews.php` hoặc `search.php` xuất hiện ngoài yêu cầu riêng thì phải dừng và loại bỏ thay đổi đó.

## 3. Rule bắt buộc

Áp dụng cho mọi `des-N`:

- Header/footer là global component, không được chỉ đẹp riêng homepage.
- Không dùng `body.home header...`, `body.home footer...`, `is_front_page()` hoặc `is_home()` để tạo header/footer riêng cho homepage.
- Chỉ dùng `body.home ...` cho spacing nhỏ của nội dung home nếu thật sự cần.
- Home phải có đủ 3 nhóm nội dung: blog, review, game/post.
- Không dùng `href="#"`, `javascript:void(0)`, Lorem, TODO/FIXME hoặc text placeholder trong bản giao khách.
- Không hardcode dữ liệu giả như poll, deal, price, esports table nếu không có dữ liệu thật.
- Không hardcode cùng một số score giả cho mọi item. Riêng game card/game page phải có star review; nếu chưa có field thật thì được dùng hàm random ổn định theo post ID để tạo sao review, không đổi lung tung mỗi lần reload.
- Nếu block nhìn như click được, nó phải có link/hành động thật.
- Chỉnh cô lập đúng phạm vi. Nếu sửa header/footer thì kiểm tra nhiều trang; nếu sửa home thì không làm ảnh hưởng archive/detail page.
- Không dùng Playwright trong project này. Kiểm tra bằng terminal, WordPress local, `curl`, WP-CLI và browser thật.

Class phải rõ nghĩa, dễ audit:

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

Mỗi style có thể có namespace riêng, ví dụ `.des4-home-page`, `.des-12-score-desk`, `.des-18-game-catalog`, nhưng không đặt tên mơ hồ chỉ để trang trí.

CSS của home phải cô lập theo wrapper riêng của style. Không để CSS home style trực tiếp các class global của theme/plugin như `.pagination`, `.page-link`, `.review-card`, `.container`, `.form-control` hoặc selector chung có thể ảnh hưởng archive/detail page.

## 4. Header, navigation và search

Header phải có mô hình điều hướng rõ:

1. Logo link về `home_url( '/' )`.
2. Primary navigation lấy từ `wp_nav_menu()` với `theme_location => 'main-menu'`.
3. Search là chức năng riêng, không tính là menu.
4. Utility strip/topic strip chỉ dùng nếu có mục đích khác menu chính và có link thật.
5. Mobile menu là cách hiển thị lại cùng `main-menu`, không hard-code menu khác.

`main-menu` là nguồn sự thật duy nhất cho điều hướng chính. Menu chính chuẩn:

```text
Games
Reviews
Blogs
About Us
```

Không duplicate navigation:

- Không để `HTML5 Games` và `Games` cùng xuất hiện nếu cùng vai trò.
- Không để `Reviews Games` hoặc `Review Games` và `Reviews` cùng xuất hiện nếu cùng vai trò.
- Không lặp nguyên bộ `Blogs / Reviews / Games` ở topbar hoặc quick links.
- Không để desktop dùng một menu, mobile hard-code một menu khác.
- Không thêm dải phụ nhìn giống menu nhưng chỉ là text trang trí.

Header có thể khác giữa các style bằng anatomy, bố cục, số tầng, vị trí logo, search, sticky behavior, density, content thật hoặc mobile behavior. Khách prefer base màu trắng, đen hoặc navy để an toàn cho mọi page; khác biệt nên đến từ cấu trúc và interaction, không chỉ đổi màu.

Archetype header nên xoay vòng:

- White editorial masthead: logo giữa, menu dưới, search phải.
- Black compact nav: logo trái, menu giữa, search icon popup phải.
- Navy utility header: metadata nhỏ, nav chính dưới, mobile drawer float.
- Search-first header: logo trái, search lớn giữa, menu/action phải.
- Magazine header: logo lớn, category rail, sticky compact nếu cần.
- Minimal header: logo/menu/search gọn, nhiều khoảng thở.

Font chữ header/body/footer:

- Không dùng serif/font có chân làm font chính cho theme.
- Ưu tiên sans-serif hiện đại, rõ chữ, hợp game/media/directory.
- Nếu concept lấy cảm hứng newspaper/editorial, vẫn phải game hóa bằng sans-serif, spacing gọn, card/game tiles rõ; không tạo cảm giác báo cổ.

Search phải là chức năng thật:

- Form dùng `method="get"`.
- Input dùng `name="key"` nếu submit về flow search/review hiện tại đang đọc `key`.
- Giá trị input phải sanitize và escape trước khi output.
- Placeholder phải nói đúng phạm vi tìm kiếm, ví dụ `Search reviews` nếu action submit về `/reviews/`.
- Nút submit phải là hành động thật, không chỉ là icon trang trí.
- Mobile search không được mở kèm link phụ trùng menu.
- Nếu form có `<label class="screen-reader-text">`, theme phải có CSS chuẩn để ẩn `.screen-reader-text`.
- Search form custom nên dùng flex: input `flex: 1 1 auto; min-width: 0`, button `flex: 0 0 auto; white-space: nowrap`.
- Không dùng grid search nếu trong form còn label/hidden element có thể thành grid item ngoài ý muốn.

Desktop header phải align center theo chiều dọc giữa logo, nav, search và action buttons.

Logo/header brand tuyệt đối không được xuống dòng ở bất kỳ width nào. Nếu thiếu chỗ, phải xử lý bằng layout responsive: giữ logo `white-space: nowrap`, giới hạn max-width, giảm font bằng breakpoint hoặc truncate có kiểm soát. Không để logo wrap thành 2 dòng vì sẽ làm header cao bất thường và phá nhịp mobile.

Mobile header nên tối giản:

```text
logo | search button | menu button
```

Mobile search/menu:

- Phải mở/đóng được, nằm trong viewport và không chồng nhau kỳ.
- Target chạm của button tối thiểu khoảng `44px`.
- Search input không tràn viewport từ `320px`.
- Phải test trạng thái đang mở, không chỉ nhìn header đóng.
- Nếu search vỡ layout, kiểm tra chính form: label ẩn, input width, button width, grid/flex item và CSS global/Bootstrap đang đè.
- Search ngang nên dùng flex ổn định; tránh để label hoặc hidden text thành một item làm form bị tách 2 hàng.

Chọn rõ behavior của từng panel:

- Panel in-flow: nằm dưới header và có thể đẩy nội dung xuống.
- Popup/dropdown/floating stack: overlay/floating bằng `position: absolute` hoặc cơ chế tương đương, không đẩy nội dung home xuống.
- Dropdown nhỏ: co theo nội dung, neo dưới/cạnh nút menu, có `min-width`, `max-width`, padding, font size và item height hợp lý.
- Drawer/panel: chỉ dùng khi có lý do rõ, kiểm soát full-width và không tạo cảm giác dư.

Nếu khách nói popup bị "dư" hoặc "phô", kiểm tra tỉ lệ thị giác trước: width, padding, radius, shadow và chiều cao item, không chỉ kiểm tra tràn viewport. Không dùng width lớn cố định cho dropdown ít item.

## 5. Footer

Footer không được là block generic chỉ đổi màu. Footer phải là phần kết tự nhiên của concept đang dùng và vẫn an toàn global.

Khách muốn footer mỗi đơn khác biệt thật. Ưu tiên base trắng, đen hoặc navy; khác biệt chính đến từ anatomy, content thật, grid/cột, density và mobile behavior, không phải đổi màu mạnh.

Footer cần có 3 lớp nội dung:

1. **Identity**: logo/title link về home, mô tả ngắn có nghĩa, copyright.
2. **Primary navigation**: link thật đến Games, Reviews, Blogs và trang chính liên quan.
3. **Theme-specific continuation**: phần riêng theo concept của style.

Ví dụ footer theo concept:

- Game directory: Explore, Platforms, Latest reviews, Popular games.
- News desk: Latest Blogs, Fresh Reviews, Popular Games.
- Editorial/newspaper: masthead gọn, issue links, categories, copyright.
- Review hub: leaderboard, review archive, critic picks.
- Portal/magazine: sitemap nhiều cột, latest posts, latest reviews.
- Roundup/search: CTA tìm review hoặc browse archive.
- White sitemap footer: nhiều link thật, phân nhóm rõ.
- Black magazine footer: brand lớn, latest content, archive links.
- Navy editorial footer: issue/category links, latest reviews, copyright gọn.
- Compact legal footer: brand nhỏ, nav chính, legal/copyright.
- Directory footer: Games, Reviews, Blogs, popular/latest thật.

Không được:

- Dùng cùng một footer cho nhiều style rồi chỉ đổi màu.
- Dùng cùng anatomy footer cho nhiều style rồi chỉ thay text rất nhẹ.
- Có social link nếu không có URL thật.
- Có newsletter nếu không có chức năng đăng ký thật.
- Có margin âm làm footer kéo ngược lên nội dung.
- Có `margin-top` hard-code để tự tạo khoảng cách với section trước.
- Có khoảng trắng dư xấu trước hoặc sau footer.
- Để footer trùng màu nền đến mức mất phân tách với nội dung.

Spacing trước footer nên thuộc section cuối hoặc page wrapper, để khi đổi background phần giữa không tạo dải màu lạc lõng.

## 6. Home, content và label

Home phải trình bày đủ 3 nhóm nội dung sau. Thứ tự và bố cục có thể thay đổi theo concept.

Khách muốn home dày thông tin:

- First viewport và các section chính phải có nhiều nội dung thật để scan, không chỉ một hero lớn rồi vài card rời.
- Gọn gàng không có nghĩa là làm mọi thứ nhỏ/chật; gọn là spacing có nhịp, section gần nhau vừa đủ, card/list đều hàng, title không bung vỡ.
- Hạn chế khoảng trắng quá nhiều giữa section/card/footer vì sẽ tạo cảm giác loãng.
- Ưu tiên list/card compact, rail, ticker, directory row, grid đều hoặc content block có hierarchy rõ.
- Không nhồi nhiều cột hẹp nếu title dài; dày thông tin phải đi kèm layout đọc được.

Blog:

```php
'post_type'      => 'blog',
'posts_per_page' => 3,
'orderby'        => 'rand',
'order'          => 'DESC',
'post_status'    => 'publish',
```

Review:

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'review',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

Game/post:

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

Luôn cho các nhóm nội dung hiển thị random như source gốc, nhưng layout phải ổn khi nội dung thay đổi sau mỗi lần load.

Mỗi home luôn cần một banner/featured block có hình ảnh:

- Banner phải có ảnh thật/fallback hợp concept, title và một đoạn description ngắn.
- Banner không bắt buộc phải là hero cực lớn; có thể là compact banner, featured strip, cover card, lead story, carousel/ticker có ảnh hoặc game highlight.
- Banner không được chỉ là một card ảnh nhỏ cho có. Khách phải nhìn thấy rõ đây là vùng nhấn bằng hình ảnh, tạo cảm giác sống động/game/media ngay ở đầu trang.
- Nếu concept là directory/search-first, banner vẫn có thể compact nhưng phải đủ hiện diện: ảnh đủ lớn, crop đẹp, title nổi bật, description 1-2 dòng và nằm trong first viewport hoặc ngay sau header.
- Không để banner bị chìm như một item phụ trong grid/list; nếu khách nói "không có banner", nghĩa là kích thước, vị trí hoặc độ nhấn hình ảnh chưa đạt.
- Text trên banner phải đọc được. Nếu đặt text overlay lên ảnh, dùng overlay/gradient có kiểm soát và không để description dài đè lên ảnh.
- Nếu title rất dài, title có thể clamp hợp lý và description chỉ 1-2 dòng.
- Banner phải có link/hành động thật nếu nhìn như click được.

Khu vực đầu trang không bắt buộc giữ giống source cũ. Có thể thay hình, text, cấu trúc hoặc bỏ hero lớn nếu concept cần, nhưng vẫn phải có một banner/featured block có hình ảnh ở first viewport hoặc ngay sau header. First viewport phải có vai trò rõ, ví dụ:

- Bài viết nổi bật.
- Review nổi bật.
- Game nổi bật.
- Search/catalog.
- Ranking/top list.
- News desk.
- Editorial issue.
- Một form khác phù hợp game/news/review.

Với ảnh có text overlay, ưu tiên chỉ hiển thị category/tag và title. Bỏ excerpt nếu title dài hoặc chữ khó đọc.

Khi dùng nội dung random, giả định title blog/review/game có thể rất dài. Không ép 3 nhóm `Blogs / Reviews / Games` vào các cột ngang hẹp nếu title là thành phần chính. Nếu cần home dài hơn, thêm section có nhịp đọc rõ thay vì nhồi cột.

Ưu tiên:

- Tách blog, review và game thành section riêng.
- Blog dài dùng layout dọc, feature + list, hoặc news feed rộng.
- Review/game dùng list/card compact, chỉ giữ title và metadata thật cần thiết.
- Dùng `min-width: 0`, `overflow-wrap`, `line-clamp` hợp lý, nhưng không dùng giảm font như cách sửa chính cho layout sai.

Mọi text/link phải có ý nghĩa:

- Title/card bài viết, review, game phải có link.
- Tab, chip, category, shortcut, CTA nhìn như click được thì phải click được.
- Label phải đúng dữ liệu phía sau.
- Nếu block gọi là `Review`, dữ liệu bên dưới phải là review.
- Nếu block gọi là `Games`, dữ liệu bên dưới phải là game/post.
- Nếu có điểm review dạng số/critic score, điểm phải lấy từ field thật.
- Game card/game page phải có star review. Nếu chưa có field thật, dùng hàm random ổn định theo post ID, ví dụ 3.5-5 sao, để cùng một game không đổi sao sau mỗi lần reload.
- Nếu không có data thật cho score số, dùng label/verdict an toàn thay vì dựng số giả.

Tránh:

- Label chung chung như `Game Newsroom` nếu không có ý nghĩa cụ thể.
- Section `Review Scores` nếu không có điểm review thật.
- Cùng một badge `4.5` hoặc score cứng lặp lại cho mọi game/review.
- Card lặp label kiểu `Review / Review / Title`.
- Button/link rỗng.
- Nội dung giả.

Tên section an toàn hơn khi không có score thật:

```text
Review Picks
Critic Picks
Latest Reviews
Review Desk
```

Nếu dùng `News`, phải nhất quán với concept editorial/news. Nếu dữ liệu thực tế là post type `blog`, ưu tiên dùng `Blogs`.

## 7. Responsive và chống vỡ layout

Mobile `320px` là tiêu chí nghiệm thu thật.

Yêu cầu responsive:

- Không có horizontal overflow ngoài strip cuộn ngang có chủ đích.
- Header không quá cao, không che nội dung.
- Menu mobile mở/đóng được, nằm trong viewport, link dễ bấm.
- Search mobile mở riêng, input không tràn, submit được.
- Topbar, quick links hoặc utility strip phải ẩn/gộp nếu gây cảm giác nhiều menu.
- Hero, mosaic, sidebar, table phải stack hoặc chuyển form phù hợp.
- Footer xuống một cột hoặc nhóm full-width, link không làm rộng viewport.
- Header/footer vẫn ổn ở blog detail, review detail, game detail, archive và search.
- Kiểm tra thêm width trung gian như `390px`, `520px` và `768px`, không chỉ kiểm tra desktop và `320px`.
- Tablet/iPad là breakpoint nghiệm thu riêng, không được xem như desktop thu nhỏ hoặc mobile phóng to.
- Grid nhiều item phải chuyển cột có nhịp trung gian hợp lý. Tránh nhảy gãy kiểu desktop `5` cột xuống tablet `2` cột nếu làm bố cục nhìn hụt, phô hoặc mất cân bằng.
- Với review/game/blog cards, ưu tiên nhịp responsive mượt như `5 -> 4 -> 3 -> 2 -> 1` hoặc dùng `auto-fit/minmax()` có min-width được tính kỹ. Không để iPad tự rơi vào layout quá ít cột trong khi desktop vẫn rất dày.
- Khi đổi breakpoint, kiểm tra cả tablet dọc và ngang: khoảng `768px`, `820px`, `834px`, `1024px`. Bố cục phải cân đối, không có section tự nhiên thành cột trống, card quá rộng, hoặc hàng cuối bị lạc.

Nếu phải chọn giữa giữ signature desktop và tránh lỗi 320px, ưu tiên tránh lỗi 320px.

Card mobile ảnh + text:

- Có contract riêng, không dùng lại nguyên grid/height desktop.
- Thumbnail có kích thước ổn định, ví dụ `flex-basis`/width cố định hoặc aspect-ratio rõ.
- Mọi image/media frame phải là square hoặc landscape. Tuyệt đối không để `height > width`, kể cả banner, thumbnail, review card, game card, rail item và mobile list.
- Nếu ảnh nằm trong grid/list có text dài, set `aspect-ratio` trực tiếp cho frame ảnh và dùng `align-items: center`; không để grid/flex stretch kéo ảnh thành portrait.
- Tránh `height: 100%` vì title dài sẽ kéo ảnh lệch.
- Nếu desktop dùng `grid-auto-rows` để tạo mosaic, mobile phải reset về `grid-auto-rows: auto` hoặc đổi layout.
- Content text phải có `min-width: 0` và width/max-width rõ theo phần còn lại sau thumbnail.
- Không clamp text mobile quá sớm nếu clamp tạo cảm giác bị cắt chữ. Ưu tiên giảm font/line-height hợp lý và cho title wrap tự nhiên.
- Kiểm tra với title thật rất dài. Nếu ảnh lệch, thường do `height: 100%`, `grid-auto-rows` desktop chưa reset, hoặc content flex/grid thiếu `min-width: 0`.

Lỗi layout cần tránh:

- Selector PHP/CSS không khớp.
- Component bị điều khiển bởi cả CSS cũ và CSS mới.
- Dùng `.form-control` Bootstrap cho input search custom đã có style riêng.
- Dùng `max-height` để ẩn/mở input khiến focus bị cắt.
- Dùng `width: 100vw`, `min-width` lớn, `margin-top` âm hoặc `left/right` âm không kiểm soát.
- Header/footer bị sửa global chỉ để vá lỗi riêng homepage.
- Thiếu rule accessibility nền tảng như `.screen-reader-text`.
- Dùng `column-count`/masonry tự do cho nội dung random, vì title/thumbnail thật dễ làm cột cao thấp mất kiểm soát.

Khi component đã sai nhiều, rewrite nguyên block component sạch theo contract class thay vì vá chồng nhiều rule nhỏ. Với layout visual board/masonry, nếu khách cần chắc layout hơn là hiệu ứng lạ, ưu tiên CSS grid có số cột và breakpoint rõ thay vì `column-count`.

Khi feedback chỉ yêu cầu gọn/cân lại layout, không tự thêm cụm nội dung hoặc component mới. Chỉ chỉnh typography, spacing, grid/card và mobile behavior trong phạm vi đang lỗi.

Không hiểu feedback "dư space" thành ép mọi thứ nhỏ/chật. Phải phân biệt khoảng trắng lỗi như global margin, `min-width` cố định, padding popup quá lớn với khoảng thở cần thiết cho đọc. Nếu layout bị chật, nới lại theo cụm bằng `gap`, `line-height`, section padding và card padding có kiểm soát; nếu popup/drawer bị dư, sửa width/padding của chính panel, không giảm toàn bộ homepage.

Khi khách báo card/ảnh bị dư space:

- Không vá bằng cách tăng/giảm ảnh, padding hoặc font rời rạc. Phải tính lại contract tổng của component: số cột, width thật của card, aspect-ratio ảnh, chiều cao title/description, padding, line-clamp và `align-items`.
- Nếu text quyết định chiều cao card nhưng ảnh bị khóa nhỏ hơn, sẽ luôn có khoảng trắng thừa. Chọn một trong hai hướng rõ: ảnh full-width phía trên với text dưới, hoặc layout ngang có thumbnail đủ cao và content được clamp để không vượt thumbnail.
- Không để `min-height` cứng của card lớn hơn media frame nếu media không có lý do stretch tương ứng.
- Với grid có số item cố định, không dùng `auto-fit/auto-fill` bừa nếu có nguy cơ sinh hàng cuối lẻ 1 item. Chọn cột chắc theo item count, ví dụ 6 item nên là `3x2`, 8 item nên là `4x2` hoặc `2x4`.
- Nếu một section có nhiều cột cùng hàng, các cột phải có cùng grid fraction khi khách muốn bằng nhau; từng cột phải `stretch`, list bên trong nên `flex: 1` hoặc chia row hợp lý để cover hết chiều cao.
- Khi đổi layout desktop, phải kiểm tra và viết lại contract mobile tương ứng. Không để mobile ăn lại rule cũ như thumbnail ngang khi desktop đã đổi thành card dọc.
- Trước khi sửa lỗi visual, xác định rõ lỗi đến từ ảnh, text, grid, `min-height`, padding hay stretch. Vá sai nguyên nhân sẽ tạo vòng sửa nhiều lần.

## 8. Background và above-fold

Trước khi code mỗi style phải chọn rõ hướng background/above-fold.

Từ yêu cầu mới của khách, mọi hướng above-fold vẫn phải có một banner/featured block có ảnh, title và description ngắn. Khác biệt giữa các style nằm ở kích thước, vị trí và vai trò của banner, không phải có/không có banner.

Nếu header đã có top strip, masthead, border hoặc rule line rõ, above-fold không được thêm một utility rule phụ ngay sát dưới header nếu không có vai trò thật sự rõ. Tránh nhiều line ngang liên tiếp ở first viewport vì sẽ tạo cảm giác header bị lặp hoặc bố cục bị vụn. Các label/CTA kiểu `Front Page / Review Archive` chỉ dùng khi giúp hierarchy; nếu không thì bỏ, hoặc đưa CTA vào section liên quan như Reviews. Above-fold nên bắt đầu bằng nội dung chính, không mở đầu bằng một mini-header trùng vai trò với header.

### Hướng content-photo giống source gốc `h5game`

Source gốc của khách dùng ảnh thật làm thị giác chính:

- Hero homepage lấy featured image của page làm `background-image`.
- Header homepage có thể trong suốt/absolute trên ảnh hero.
- Blog/game/review card dùng thumbnail thật làm `background-image`.
- Card phủ overlay tối/blur để đặt category, title và excerpt lên ảnh.
- Nền tổng thể đơn giản, sức nặng thị giác đến từ ảnh bài viết/game/review thật.

Hướng này phù hợp cho mosaic, poster, carousel, magazine wall, visual news wall.

Lưu ý:

- Ưu tiên thumbnail thật từ WordPress.
- Chỉ dùng GPT image nếu thiếu ảnh nền lớn hoặc cần background/cover đồng bộ concept.
- Không thay toàn bộ thumbnail thật bằng ảnh GPT nếu bài đã có ảnh thật.
- Header absolute chỉ dùng khi toàn site vẫn ổn; nếu gây lỗi trang khác/mobile thì chuyển header về flow thường.

### Hướng system-background giống `des-1`

`des-1` dùng nền theo hệ thống giao diện hơn là ảnh lớn:

- Nền chính là gradient/light surface, không phải poster hero lớn.
- Above-fold tập trung vào search, directory, game rows, review picks và cấu trúc thông tin, nhưng vẫn cần có banner/featured block có ảnh theo rule mới.
- Ảnh chỉ là thumbnail trong card/list.
- Header/footer đồng bộ theo màu và nhịp spacing của layout.

Hướng này phù hợp cho directory, review hub, table/list, search-first, dashboard, score desk hoặc content-dense layout.

Lưu ý:

- Không cần GPT image trước; ưu tiên layout, density chữ, label, header/footer và mobile.
- Có thể dùng CSS gradient/pattern nhẹ để tạo signature.
- Chỉ dùng GPT image nếu background làm rõ concept như scoreboard texture, arcade wall, newsroom board.

Không ép mọi layout thành hero ảnh lớn như source gốc. Cũng không ép mọi layout thành search directory như `des-1`.

Vai trò above-fold hợp lệ:

1. **Image-led hero**: ảnh lớn làm trọng tâm, overlay title/CTA.
2. **Utility/directory-led hero**: search, filter, top list, game/review directory làm trọng tâm, kèm banner/featured image compact.
3. **Editorial/news-led hero**: headline chính, lead story, rail tin phụ.
4. **Review-led hero**: review nổi bật, verdict/score thật nếu có, critic picks.
5. **Catalog/grid-led hero**: không có hero lớn; vào thẳng grid/list có tổ chức nhưng vẫn có featured tile/banner ảnh.
6. **Ticker/live-desk hero**: latest updates, ticker, carousel hoặc live desk gọn.
7. **Issue/cover-led hero**: cover story, issue index, editor picks.

Mỗi layout mới phải khác rõ ở vai trò above-fold so với các layout gần nhất. Nếu chỉ đổi background, màu, ảnh hoặc text nhưng vai trò above-fold vẫn giống nhau, chưa tính là khác đủ.

## 9. Khác biệt giữa 100 giao diện

Mã style thống nhất:

```text
des-1
des-2
...
des-100
```

Không dùng song song mã khác như `S001`.

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

Header/footer cũng cần fingerprint riêng:

```text
Header = base color / logo position / menu model / search model / utility content / mobile behavior
Footer = base color / column model / content groups / CTA or archive model / density / mobile stack
```

Với batch nhiều mẫu, kiểm tra thêm 12 chiều:

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

So với các style đã hoàn thành gần nhất, style mới nên khác ít nhất 7/12 chiều.

Tool của khách có thể quét screenshot, DOM/tree, tên class, thứ tự section, CSS grid/flex/breakpoint và text/label lặp lại. Không dùng cùng skeleton `header -> hero -> blog grid -> review grid -> game grid -> footer` cho nhiều bản rồi chỉ đổi skin.

Có thể tham khảo ThemeForest để lấy form, bố cục và cách tổ chức nội dung cho gaming, game news, review, magazine, portal, esports hoặc editorial.

Chỉ tham khảo:

- Vai trò block.
- Quan hệ bố cục.
- Mật độ.
- Cơ chế responsive.

Không copy code, ảnh, logo, icon, screenshot, demo text, brand name, tên class hoặc layout quá nhận diện của theme nguồn.

## 10. GPT Image

Không bắt buộc mọi layout phải dùng GPT image.

Chỉ dùng GPT image khi ảnh tạo ra concept signal rõ, ví dụ background, cover, poster, scoreboard, arcade wall, newsroom wall hoặc texture riêng làm layout khác biệt thật.

Không dùng GPT image để:

- Che lỗi layout.
- Thay đổi bề mặt khi form vẫn giống nhau.
- Thay thumbnail bài viết thật hàng loạt.
- Render chữ, logo, key art, nhân vật có bản quyền hoặc UI game chính thức nếu không có quyền.

Config ảnh theo Codex trên máy này:

```text
model_provider = cliproxyapi
base_url       = http://171.244.185.173:8317/v1
wire_api       = responses
image_model    = gpt-image-2
```

Không hardcode API key trong source hoặc docs. API key lấy từ `~/.codex/config.toml` tại provider `cliproxyapi`.

Setup biến môi trường, không in key ra màn hình:

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

Generate ảnh:

```bash
curl -X POST "$CODEX_IMAGE_BASE_URL/images/generations" \
  -H "Authorization: Bearer $CODEX_IMAGE_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{
    "model": "gpt-image-2",
    "prompt": "Create a modern gaming editorial background image suitable for a website. Premium cinematic atmosphere, strong focal scene, clean composition, readable negative space for HTML text, no readable text, no logos, no UI mockups, no copyrighted characters.",
    "size": "1536x1024",
    "quality": "medium",
    "output_format": "webp"
  }' \
  | jq -r '.data[0].b64_json' \
  | base64 --decode > gaming-background.webp
```

Nếu proxy trả PNG dù request `webp`, kiểm tra bằng:

```bash
file gaming-background.webp
```

## 11. QA trước khi ship

Trong vòng lặp thiết kế/preview, ưu tiên tốc độ để khách hoặc người kiểm tra xem trực tiếp:

- Agent không cần tự kiểm tra visual quá lâu bằng screenshot/headless/browser automation nếu user không yêu cầu.
- Sau khi chỉnh giao diện, làm nhanh theo flow: build CSS nếu có SCSS -> sync vào local WordPress -> mở đúng URL để user tự check bằng mắt.
- Nếu user đang ngồi check, không kéo dài bằng việc tự so sánh nhiều viewport; user sẽ báo lỗi cụ thể để sửa tiếp.
- Chỉ giữ check kỹ thuật tối thiểu trước commit/ship: file scope, build CSS, PHP syntax nếu có sửa PHP, route không fatal nếu cần.
- Khi cần kiểm tra responsive, ưu tiên mở nhanh browser thật theo width user muốn thay vì tạo thêm file HTML hoặc chạy quy trình QA dài.
- Khi đang chỉnh một style cụ thể, có thể bật watcher để tự build SCSS và sync theme vào local WordPress:

```bash
scripts/watch-theme.sh des-N
```

Sau đó chỉ cần refresh browser ở `http://localhost:8088/` để user check nhanh.

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

Kiểm tra rủi ro layout:

```bash
rg -n "margin-top:\s*-|width:\s*100vw|min-width:\s*[4-9][0-9]{2}px|left:\s*-[0-9]|right:\s*-[0-9]|white-space:\s*nowrap" wp-content/themes/des-N/css wp-content/themes/des-N/*.php
rg -n "form-control|footer-wrap|footer-menu|footer-wrapper|head-search.*position:\s*absolute|href=\"#\"|javascript:void" wp-content/themes/des-N delivery/des-N-home
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

Mở browser thật:

```bash
open "$BASE_URL/"
open "$BASE_URL/blogs/"
open "$BASE_URL/reviews/"
open "$BASE_URL/games/"
```

Bắt buộc kiểm tra bằng mắt:

- Desktop first viewport khác rõ style cũ.
- Header không duplicate navigation.
- Search dùng được, mở sạch ở mobile và không hiện label `screen-reader-text`.
- Menu mobile mở sạch, không dư/phô, không đẩy nội dung nếu là popup.
- Hero/banner không dùng text vô nghĩa.
- Mọi chip/tab/shortcut/CTA có link thật.
- Blog/review/game hiển thị đủ nhóm.
- Không có text dài đè ảnh.
- Card ảnh + text mobile không lệch thumbnail khi title dài.
- Footer liên quan concept và không có khoảng trắng xấu.
- Trang ngoài home vẫn có header/footer ổn.
- Mobile ở `320px`, `360px`, `390px`, `520px`, tablet khoảng `768px` không vỡ layout.

## 12. Delivery cho khách

Mỗi style bàn giao gọn trong folder:

```text
delivery/des-N-home/
  footer.php
  header.php
  home.php
  style.css
```

Nếu style cần SCSS hoặc asset riêng để giao diện đúng, thêm vào delivery. Không gửi toàn bộ WordPress, database, uploads, plugin, `node_modules`, file backup hoặc `.DS_Store`.

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

## 13. Ghi chú khách đã chốt

- `des-1`: khách đã ưng phần giữa/home. Không redesign lại phần home đã được duyệt nếu không có feedback mới.
- Header/footer phải ăn nhập với concept của phần home, nhưng vẫn là global header/footer dùng chung toàn site.
- Banner/above-fold không cần giữ nguyên source cũ. Có thể đổi hình, đổi text, đổi layout hoặc biến thành tin nổi bật/bài nổi bật.
- Không đặt section quá to khiến first viewport nặng và thô.
- Footer có thể responsive đúng nhưng vẫn fail nếu nền/màu/anatomy không ăn với phần giữa.
- Không chỉ test `320px`; nhiều lỗi search/header/footer lộ rõ ở `390px` hoặc `520px`.
