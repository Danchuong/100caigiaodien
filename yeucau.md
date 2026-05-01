# Yêu cầu thiết kế 100 giao diện home, header và footer

Tài liệu này là nguồn yêu cầu chính cho toàn project. Nếu có mâu thuẫn với ghi chú cũ, ưu tiên theo file này.

## 1. Mục tiêu nghiệm thu

Thiết kế 100 giao diện mới cho website game/news/review. Mỗi giao diện là một theme hoàn chỉnh gồm:

- Trang home.
- Header dùng chung toàn site.
- Footer dùng chung toàn site.

Khách hàng không muốn 100 bản chỉ khác màu, ảnh, font, spacing hoặc bo góc. Mỗi bản phải khác rõ về form/layout để nhìn bằng mắt hoặc quét bằng tool vẫn nhận ra là giao diện riêng.

Mỗi giao diện phải đạt:

- Dùng được thật: link thật, search thật, menu thật, nội dung thật.
- Header, home và footer đồng bộ cùng concept.
- Không lỗi layout trên desktop, tablet, mobile.
- Responsive tốt từ `320px` trở lên.
- Không tạo cảm giác chỉ là skin bọc quanh source cũ.

Demo trang chủ tham khảo: https://gamenewfiz.info/

## 2. Source và restore

Mã nguồn khách gửi:

```text
https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing
```

Khách yêu cầu bước restore dùng **All-in-One WP Migration** để restore file `.wpress`.

Không thay flow restore bằng plugin khác nếu khách không yêu cầu.

## 3. Phạm vi file cần xử lý

Mỗi `des-N` cần xử lý tối thiểu:

```text
/wp-content/themes/des-N/home.php
/wp-content/themes/des-N/header.php
/wp-content/themes/des-N/footer.php
/wp-content/themes/des-N/style.css
```

Nếu làm trong SCSS, các file chính là:

```text
/wp-content/themes/des-N/css/_home.scss
/wp-content/themes/des-N/css/_header.scss
/wp-content/themes/des-N/css/_footer.scss
```

Sau khi sửa SCSS phải build ra:

```text
/wp-content/themes/des-N/style.css
```

Không yêu cầu thay đổi:

- Plugin.
- Admin WordPress.
- Database.
- Post type.
- Nội dung bài viết.
- Logic import/restore.

Không tạo dữ liệu giả chỉ để giao diện trông đầy đủ hơn.

## 4. Rule bắt buộc toàn project

Các rule này áp dụng cho mọi `des-N`:

- Header/footer là global component, phải ổn ở home, blog detail, review detail, game detail, archive và search.
- Header/footer phải đồng nhất ở mọi trang, không chỉ đẹp riêng homepage.
- Không dùng `body.home header...`, `body.home footer...`, `is_front_page()` hoặc `is_home()` để tạo header/footer riêng cho homepage.
- Chỉ dùng `body.home ...` cho spacing nhỏ của nội dung home nếu thật sự cần.
- Home phải có đủ 3 nhóm nội dung: blog, review, game/post.
- Không dùng `href="#"`, `javascript:void(0)`, Lorem, TODO/FIXME hoặc text placeholder trong bản giao khách.
- Không hardcode dữ liệu giả như score, poll, deal, price, esports table nếu không có dữ liệu thật.
- Nếu block nhìn như click được, nó phải có link/hành động thật.
- Không dùng Playwright trong project này. Kiểm tra bằng terminal, WordPress local, `curl`, WP-CLI và browser thật.

## 5. Đặt tên class

Class phải rõ nghĩa, dễ đọc, dễ audit.

Ví dụ class nền tảng:

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

Mỗi style có thể có namespace riêng, ví dụ `.des-12-score-desk`, `.des-18-game-catalog`, nhưng không đặt tên mơ hồ chỉ để trang trí.

## 6. Header, navigation và search

Header phải có mô hình điều hướng rõ:

1. Logo link về `home_url( '/' )`.
2. Primary navigation lấy từ `wp_nav_menu()` với `theme_location => 'main-menu'`.
3. Search là chức năng riêng, không tính là menu.
4. Utility strip/topic strip chỉ dùng nếu có mục đích khác menu chính và có link thật.
5. Mobile menu là cách hiển thị lại cùng `main-menu`, không hard-code menu khác.

`main-menu` là nguồn sự thật duy nhất cho điều hướng chính.

Menu chính chuẩn nên dùng:

```text
Games
Reviews
Blogs
About Us
```

Không được duplicate navigation:

- Không để `HTML5 Games` và `Games` cùng xuất hiện nếu cùng vai trò.
- Không để `Reviews Games` hoặc `Review Games` và `Reviews` cùng xuất hiện nếu cùng vai trò.
- Không lặp nguyên bộ `Blogs / Reviews / Games` ở topbar hoặc quick links.
- Không để desktop dùng một menu, mobile hard-code một menu khác.
- Không thêm dải phụ nhìn giống menu nhưng chỉ là text trang trí.

Header có thể khác giữa các style bằng anatomy, bố cục, số tầng, vị trí logo, search, sticky behavior, density, content thật hoặc mobile behavior. Sự khác biệt không được đến từ việc nhân đôi menu.

Khách muốn header của các đơn sau khác biệt thật, nhưng vẫn an toàn cho mọi page. Vì vậy:

- Ưu tiên base màu trắng, đen hoặc navy để không làm vỡ cảm giác của blog detail, review detail, game detail, archive và search.
- Có thể dùng accent ít như đỏ, vàng, cyan hoặc xanh lá nếu hợp concept, nhưng không biến header thành palette quá lạ.
- Không tính là khác biệt nếu chỉ đổi màu, shadow, border radius hoặc font mà vẫn giữ cùng anatomy.
- Có thể đổi nội dung header nếu là nội dung thật: latest link, category rail, search scope, archive CTA, issue label, metadata gọn.
- Không thêm nội dung giả hoặc dải phụ trùng menu chính.

Các archetype header nên xoay vòng:

- White editorial masthead: logo giữa, menu dưới, search phải.
- Black compact nav: logo trái, menu giữa, search icon popup phải.
- Navy utility header: metadata nhỏ, nav chính dưới, mobile drawer float.
- Search-first header: logo trái, search lớn giữa, menu/action phải.
- Magazine header: logo lớn, category rail, sticky compact nếu cần.
- Minimal header: logo/menu/search gọn, nhiều khoảng thở.

Search phải là chức năng thật:

- Form dùng `method="get"`.
- Input dùng `name="key"` nếu submit về flow search/review hiện tại đang đọc `key`.
- Giá trị input phải sanitize và escape trước khi output.
- Placeholder phải nói đúng phạm vi tìm kiếm, ví dụ `Search reviews` nếu action submit về `/reviews/`.
- Nút submit phải là hành động thật, không chỉ là icon trang trí.
- Mobile search không được mở kèm link phụ trùng menu.
- Nếu form có `<label class="screen-reader-text">`, theme phải có CSS chuẩn để ẩn `.screen-reader-text`. Không để label accessibility hiện ra như text thường và phá layout search.
- Search form custom nên ưu tiên `display: flex` cho `input + button`: input `flex: 1 1 auto; min-width: 0`, button `flex: 0 0 auto; white-space: nowrap`.
- Không dùng grid search nếu trong form còn label/hidden element có thể trở thành grid item ngoài ý muốn.

Desktop header phải align center theo chiều dọc giữa logo, nav, search và action buttons.

Mobile header nên tối giản:

```text
logo | search button | menu button
```

Khi mở search/menu trên mobile:

- Panel phải full-width hoặc nằm trong flow dưới header.
- Không lệch theo icon.
- Không chồng lên nhau kỳ.
- Input không tràn viewport từ `320px`.
- Target chạm của button tối thiểu khoảng `44px`.

Phải chọn rõ behavior của từng panel:

- Nếu gọi là panel in-flow, nó được nằm dưới header và có thể đẩy nội dung xuống.
- Nếu gọi là popup/dropdown/floating stack, nó phải là overlay/floating bằng `position: absolute` hoặc cơ chế tương đương, không được đẩy nội dung home xuống.
- Popup menu nên canh theo cạnh phải header/container, có width giới hạn, shadow/border rõ, và không tràn viewport từ `320px`.
- Mobile search ưu tiên nằm trong flow nếu cần nhập liệu thoải mái. Nếu search cũng là popup, nó phải theo cùng luật overlay và không neo theo `.head-right` hoặc cụm icon nhỏ.

## 7. Footer

Footer không được là block generic chỉ đổi màu. Footer phải là phần kết tự nhiên của concept đang dùng.

Khách muốn footer mỗi đơn cũng khác biệt thật nhưng vẫn an toàn global. Ưu tiên base trắng, đen hoặc navy; khác biệt chính đến từ anatomy, content thật, grid/cột, density và mobile behavior, không phải đổi màu mạnh.

Nền footer phải ăn với phần home và header của style. Nếu home đang theo nền sáng/warm/card mềm, footer xám đậm hoặc gradient nặng sẽ bị cảm giác lạc theme. Chọn nền footer theo concept tổng thể, không chỉ chọn màu vì muốn khác.

Mỗi footer cần có 3 lớp nội dung:

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
- Có `margin-top` hard-code để tự tạo khoảng cách với section trước. Khoảng cách trước footer nên thuộc section cuối hoặc page wrapper, để khi đổi background phần giữa không tạo dải màu lạc lõng.
- Có khoảng trắng dư xấu trước hoặc sau footer.
- Để footer trùng màu nền đến mức mất phân tách với nội dung.

Footer phải ổn trên home và các trang ngoài home.

## 8. Home và nội dung bắt buộc

Home phải trình bày đủ 3 nhóm nội dung sau. Thứ tự và bố cục có thể thay đổi theo concept.

### Blog

```php
'post_type'      => 'blog',
'posts_per_page' => 3,
'orderby'        => 'rand',
'order'          => 'DESC',
'post_status'    => 'publish',
```

### Review

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'review',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

### Game/post

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

Hero/banner không bắt buộc giữ giống source cũ. Có thể thay hình, thay text, thay cấu trúc hoặc bỏ hero lớn nếu concept cần.

Khu vực đầu trang phải có vai trò rõ, ví dụ:

- Bài viết nổi bật.
- Review nổi bật.
- Game nổi bật.
- Search/catalog.
- Ranking/top list.
- News desk.
- Editorial issue.
- Một form khác phù hợp game/news/review.

Với ảnh có text overlay, ưu tiên chỉ hiển thị category/tag và title. Bỏ excerpt nếu title dài hoặc chữ khó đọc.

Khi dùng nội dung random, phải giả định title blog/review/game có thể rất dài. Không thiết kế một module ngang ép 3 nhóm `Blogs / Reviews / Games` vào các cột hẹp nếu title là thành phần chính, vì layout sẽ dễ phô hoặc vỡ khi dữ liệu đổi. Nếu cần hiển thị đủ nhiều nội dung, ưu tiên:

- Tách blog, review và game thành section riêng.
- Blog dài nên dùng layout dọc, feature + list, hoặc news feed rộng.
- Review/game nên dùng list/card compact, chỉ giữ title và metadata thật cần thiết.
- Dùng `min-width: 0`, `overflow-wrap`, `line-clamp` hợp lý, nhưng không dùng giảm font như cách sửa chính cho layout sai.
- Muốn home dài hơn thì thêm section có nhịp đọc rõ, không nhồi thêm cột ngang hẹp.

## 9. Nội dung thật, label thật

Mọi thứ người dùng thấy phải có ý nghĩa hoặc có hành động thật.

Bắt buộc:

- Title/card bài viết, review, game phải có link.
- Tab, chip, category, shortcut, CTA nhìn như click được thì phải click được.
- Label phải đúng dữ liệu phía sau.
- Nếu block gọi là `Review`, dữ liệu bên dưới phải là review.
- Nếu block gọi là `Games`, dữ liệu bên dưới phải là game/post.
- Nếu có điểm review, điểm phải lấy từ field thật.
- Nếu không có data thật cho score, dùng label/verdict an toàn thay vì dựng số giả.

Tránh:

- Label chung chung như `Game Newsroom` nếu không có ý nghĩa cụ thể.
- Section `Review Scores` nếu không có điểm review thật.
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

## 10. Responsive và chống vỡ layout

Mobile `320px` là tiêu chí nghiệm thu thật.

Yêu cầu responsive:

- Không có horizontal overflow ngoài strip cuộn ngang có chủ đích.
- Header không quá cao, không che nội dung.
- Menu mobile mở/đóng được, nằm trong viewport, link dễ bấm.
- Search mobile mở riêng, input không tràn, submit được.
- Topbar, quick links hoặc utility strip phải ẩn/gộp nếu gây cảm giác nhiều menu.
- Hero, mosaic, sidebar, table phải stack hoặc chuyển form phù hợp.
- Card ảnh overlay trên mobile không được nhồi excerpt dài.
- Card mobile dạng ảnh + text phải có contract riêng, không dùng lại nguyên grid/height desktop.
- Thumbnail mobile phải có kích thước ổn định, ví dụ `flex-basis`/width cố định hoặc aspect-ratio rõ; tránh `height: 100%` vì title dài sẽ kéo ảnh lệch.
- Nếu desktop dùng `grid-auto-rows` để tạo mosaic, mobile phải reset về `grid-auto-rows: auto` hoặc đổi sang layout khác.
- Trong card mobile dạng row, content text phải có `min-width: 0` và width/max-width rõ theo phần còn lại sau thumbnail; không để text tự làm rộng viewport.
- Không clamp text mobile quá sớm nếu clamp tạo cảm giác bị cắt chữ. Ưu tiên giảm font/line-height hợp lý và cho title wrap tự nhiên.
- Footer xuống một cột hoặc nhóm full-width, link không làm rộng viewport.
- Header/footer vẫn ổn ở blog detail, review detail, game detail, archive và search.
- Kiểm tra thêm width trung gian như `390px`, `520px` và `768px`, không chỉ kiểm tra desktop và `320px`.

Nếu phải chọn giữa giữ signature desktop và tránh lỗi 320px, ưu tiên tránh lỗi 320px.

Các lỗi cần tránh:

- Selector PHP/CSS không khớp, ví dụ PHP dùng `.foot-*` nhưng SCSS style `.footer-*`.
- Component bị điều khiển bởi cả CSS cũ và CSS mới.
- Dùng `.form-control` Bootstrap cho input search custom đã có style riêng.
- Dùng `max-height` để ẩn/mở input khiến focus bị cắt.
- Dùng `width: 100vw`, `min-width` lớn, `margin-top` âm hoặc `left/right` âm không kiểm soát.
- Header/footer bị sửa global chỉ để vá lỗi riêng homepage.
- Thiếu rule accessibility nền tảng như `.screen-reader-text`, khiến label ẩn bị hiện ra và làm vỡ form.
- Dùng `column-count`/masonry tự do cho nội dung random, vì title/thumbnail thật dễ làm cột cao thấp mất kiểm soát.

Khi component đã sai nhiều, rewrite nguyên block component sạch theo contract class thay vì vá chồng nhiều rule nhỏ.

Với layout visual board/masonry, nếu khách cần chắc layout hơn là hiệu ứng lạ, ưu tiên CSS grid có số cột và breakpoint rõ thay vì `column-count`.

CSS của home phải được cô lập theo wrapper riêng của style, ví dụ `.des3-home-page`, `.des4-home-page`. Không để CSS home style trực tiếp các class global của theme/plugin như `.pagination`, `.page-link`, `.review-card`, `.container`, `.form-control` hoặc selector chung có thể ảnh hưởng archive/detail page. Nếu feedback liên quan trang ngoài home như `/reviews/`, sửa trong file/component của trang đó, không vá bằng CSS home.

## 11. Hai trường phái background

Trước khi code mỗi style phải chọn rõ hướng background/above-fold.

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
- Above-fold tập trung vào search, directory, game rows, review picks và cấu trúc thông tin.
- Ảnh chỉ là thumbnail trong card/list.
- Header/footer đồng bộ theo màu và nhịp spacing của layout.

Hướng này phù hợp cho directory, review hub, table/list, search-first, dashboard, score desk hoặc content-dense layout.

Lưu ý:

- Không cần GPT image trước; ưu tiên layout, density chữ, label, header/footer và mobile.
- Có thể dùng CSS gradient/pattern nhẹ để tạo signature.
- Chỉ dùng GPT image nếu background làm rõ concept như scoreboard texture, arcade wall, newsroom board.

Không ép mọi layout thành hero ảnh lớn như source gốc. Cũng không ép mọi layout thành search directory như `des-1`.

## 12. Trường phái above-fold

Background chỉ là một phần của giao diện. Trước khi code mỗi `des-N`, phải chốt vai trò first viewport: người dùng thấy gì đầu tiên và hành động chính là gì.

Các trường phái hợp lệ:

1. **Image-led hero**: ảnh lớn làm trọng tâm, overlay title/CTA.
2. **Utility/directory-led hero**: search, filter, top list, game/review directory làm trọng tâm.
3. **Editorial/news-led hero**: headline chính, lead story, rail tin phụ.
4. **Review-led hero**: review nổi bật, verdict/score thật nếu có, critic picks.
5. **Catalog/grid-led hero**: không có hero lớn; vào thẳng grid/list có tổ chức.
6. **Ticker/live-desk hero**: latest updates, ticker, carousel hoặc live desk gọn.
7. **Issue/cover-led hero**: cover story, issue index, editor picks.

Mỗi layout mới phải khác rõ ở vai trò above-fold so với các layout gần nhất. Nếu chỉ đổi background, màu, ảnh hoặc text nhưng vai trò above-fold vẫn giống nhau, chưa tính là khác đủ.

## 13. Khác biệt giữa 100 giao diện

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

Trong đó header và footer cũng cần fingerprint riêng cho từng đơn:

```text
Header = base color / logo position / menu model / search model / utility content / mobile behavior
Footer = base color / column model / content groups / CTA or archive model / density / mobile stack
```

Khách prefer header/footer dùng trắng, đen hoặc navy để an toàn toàn site. Vì vậy không cần ép màu quá lạ để tạo khác biệt. Cần tạo khác biệt bằng cấu trúc, nội dung thật, interaction và responsive behavior.

Với batch nhiều mẫu, nên kiểm tra thêm 12 chiều:

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

Tool của khách có thể quét:

- Screenshot desktop/mobile.
- DOM/tree sau render.
- Tên class và thứ tự section.
- CSS grid/flex/breakpoint.
- Text/label lặp lại.

Không dùng cùng skeleton `header -> hero -> blog grid -> review grid -> game grid -> footer` cho nhiều bản rồi chỉ đổi skin.

Có thể tham khảo ThemeForest để lấy form, bố cục và cách tổ chức nội dung cho gaming, game news, review, magazine, portal, esports hoặc editorial.

Chỉ tham khảo:

- Vai trò block.
- Quan hệ bố cục.
- Mật độ.
- Cơ chế responsive.

Không copy:

- Code HTML/CSS/JS.
- Ảnh, logo, icon, screenshot, demo text, brand name.
- Layout quá nhận diện của theme cụ thể.
- Tên class hoặc section giống theme nguồn.

## 14. GPT Image

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

## 15. QA trước khi ship

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
- Search không hiện label `screen-reader-text`, input và button nằm đúng một hàng ở desktop/mobile nếu concept là search ngang.
- Hero/banner không dùng text vô nghĩa.
- Mọi chip/tab/shortcut/CTA có link thật.
- Blog/review/game hiển thị đủ nhóm.
- Không có text dài đè ảnh.
- Footer liên quan concept và không có khoảng trắng xấu.
- Trang ngoài home vẫn có header/footer ổn.
- Mobile ở `320px`, `360px`, `390px`, `520px`, tablet khoảng `768px` không vỡ layout.

## 16. Delivery cho khách

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

## 17. Feedback khách đã chốt

Các điểm này đã được rút ra từ feedback thực tế và phải áp dụng cho các style sau:

- `des-1`: khách đã ưng phần giữa/home. Không redesign lại phần home đã được duyệt nếu không có feedback mới.
- Header/footer phải ăn nhập với concept của phần home, nhưng vẫn là global header/footer dùng chung toàn site.
- Header/footer không được chỉ đẹp riêng homepage rồi làm trang khác bung layout.
- Không duplicate menu kiểu `Reviews Games / HTML5 Games / Blogs / About Us` lặp với `Games / Reviews / Blogs / Mobile`.
- Search nên ở trên/phía phải header khi phù hợp, nhưng mobile search phải mở sạch, không lệch, không vỡ input.
- Banner/above-fold không cần giữ nguyên source cũ. Có thể đổi hình, đổi text, đổi layout hoặc biến thành tin nổi bật/bài nổi bật.
- Không nhồi description dài lên ảnh nếu làm chữ đè ảnh; title là đủ trong nhiều trường hợp.
- Không đặt section quá to khiến first viewport nặng và thô.
- Không dùng section `Review Scores` nếu không có score thật.
- Không để card lặp label `Review / Review`.
- Header phải cân giữa theo chiều dọc.
- Mobile menu và search phải nhìn gọn, không bung layout.
- Nếu menu mobile là popup/stack, nó phải float/overlay, không đẩy nội dung xuống.
- Footer không tự set `margin-top` để tạo khoảng cách; spacing trước footer thuộc về section cuối hoặc wrapper nội dung.
- Với các style mới, chỉnh cô lập đúng phạm vi. Nếu sửa header/footer thì kiểm tra mọi trang; nếu sửa home thì không làm ảnh hưởng trang khác.
- Nếu search vỡ layout, không chỉ kiểm tra popup. Phải kiểm tra chính form: label ẩn, input width, button width, grid/flex item và CSS global/Bootstrap đang đè không.
- Search ngang nên dùng flex ổn định; tránh để label hoặc hidden text thành một item làm form bị tách 2 hàng.
- Footer phải được so với toàn bộ concept của home. Footer có thể responsive đúng nhưng vẫn fail nếu nền/màu/anatomy không ăn với phần giữa.
- Layout kiểu masonry/`column-count` chỉ dùng khi đã kiểm soát được chiều cao card; với dữ liệu random của khách, grid cố định thường an toàn hơn.
- Card mobile ảnh + text phải kiểm tra với title thật rất dài. Nếu ảnh lệch, thường do `height: 100%`, `grid-auto-rows` desktop chưa reset, hoặc content flex/grid thiếu `min-width: 0`.
- Khi feedback chỉ yêu cầu gọn/cân lại layout, không tự thêm cụm nội dung hoặc component mới. Chỉ chỉnh typography, spacing, grid/card và mobile behavior trong phạm vi đang lỗi.
- Không chỉ test `320px`; nhiều lỗi search/header/footer lộ rõ ở `390px` hoặc `520px`.
