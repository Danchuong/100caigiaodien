# Chuẩn header/navigation sau feedback trùng menu

## Bối cảnh

Khách hàng phản hồi các giao diện có cảm giác bị trùng menu. Khi đọc `yeucau.md` và kiểm tra `wp-content/themes/des-1` đến `des-10`, vấn đề không nằm ở việc header có nhiều kiểu layout, mà ở mô hình điều hướng chưa nhất quán:

- Nhiều theme vừa render menu WordPress `main-menu`, vừa thêm topbar/rail/quick links cũng lặp lại `Blogs`, `Reviews`, `Games`.
- Một số theme hard-code menu riêng cho mobile, làm desktop và mobile có thể lệch nguồn dữ liệu.
- Có block nhìn như menu nhưng thực chất chỉ là shortcut trang trí hoặc lặp lại đúng các link đã có ở menu chính.
- Toggle search/menu dùng chung class `.active`, nhưng tên khối search phụ thay đổi theo từng theme (`.head-search`, `.head-directory-bar`, `.head-news-row`), dễ audit sót hành vi.

Chuẩn dưới đây dùng cho toàn bộ `des-N`, kể cả khi mỗi style vẫn có signature header khác nhau.

## Mô hình navigation chuẩn

Mỗi header chỉ có một mô hình canonical:

1. Logo: luôn link về `home_url( '/' )`.
2. Primary navigation: chỉ lấy từ `wp_nav_menu()` với `theme_location => 'main-menu'`.
3. Search: một form tìm kiếm thống nhất, không tính là menu.
4. Utility/shortcut tùy chọn: chỉ được dùng khi có mục đích khác menu chính và không lặp lại cùng tập link.
5. Mobile drawer/dropdown: là cách hiển thị lại chính `main-menu`, không tạo một danh sách hard-code khác.

Quy tắc quan trọng: `main-menu` là nguồn sự thật duy nhất cho điều hướng site chính. Header có thể khác form/layout, nhưng không được tạo thêm một “menu chính thứ hai”.

## Quy tắc đặt tên

Giữ bộ class chung để CSS/JS audit được nhất quán:

- Header wrapper: `.site-header` hoặc class biến thể riêng như `.site-masthead`, `.score-head`, nhưng bên trong vẫn dùng `.head-wrapper`.
- Vùng chính: `.head-left`, `.head-center`, `.head-right`.
- Logo: `.head-logo`.
- Menu chính: `<nav id="primary-menu" class="main-navigation">` và wrapper do WordPress tạo là `.head-menu`.
- Nút mobile menu: `.head-btn`.
- Search block: `.head-search`, `.head-search-wrapper`, `.head-search-submit`.
- Nút mở search mobile: `.head-search-btn`.
- Dải phụ nếu thật sự cần: dùng tên theo chức năng, ví dụ `.head-utility-bar`, `.head-topic-strip`, `.head-latest-strip`; tránh đặt tên chung như `.head-menu-secondary` nếu nó không phải menu chính.

Không nên dùng các tên làm mơ hồ vai trò:

- `.head-filter-list` cho link điều hướng cấp site.
- `.head-quick-links` nếu chỉ lặp lại `Blogs/Reviews/Games`.
- `.head-directory-bar` nếu vừa chứa search vừa chứa link trùng menu.
- Hai navigation cùng `aria-label` gần giống nhau như `Primary navigation` và `Mobile navigation` nhưng khác nội dung.

## Những điều cần tránh

- Không render `Blogs`, `Reviews`, `Games` hai lần trong cùng một header, trừ khi dải phụ có ngữ cảnh khác rõ ràng như “Trending topics” hoặc “Latest headlines”.
- Không hard-code menu mobile riêng khi desktop đã dùng `wp_nav_menu('main-menu')`.
- Không dùng shortcut/rail như một layer trang trí để tạo khác biệt layout. Khác biệt header nên đến từ bố cục, density, alignment, sticky/split behavior, không phải thêm menu phụ lặp nội dung.
- Không để topbar chỉ có cùng các link đã nằm trong primary menu.
- Không để menu phụ chiếm vai trò điều hướng chính hơn cả primary menu.
- Không dùng label chung chung như `Guides`, `Scores`, `Mobile`, `PC Picks` nếu link chỉ dẫn về `/reviews/` hoặc query không có ý nghĩa rõ với nội dung thật.
- Không tạo block có hình thức tab/category nếu không có link hoặc hành động thật.
- Không làm search submit sang một URL khác nhau giữa các style nếu không có lý do sản phẩm rõ ràng.

## Hành vi desktop

Trên desktop, header nên có cấu trúc dễ scan:

- Logo hiển thị một lần, không bị topbar cạnh tranh.
- Primary menu hiển thị trực tiếp nếu đủ không gian.
- Search có thể hiển thị inline hoặc là icon mở popover, tùy layout signature.
- Utility/shortcut chỉ xuất hiện khi bổ sung thông tin khác primary menu, ví dụ link bài mới thật, ticker bài mới thật, hoặc topic có query rõ ràng.
- Nếu có topbar, topbar nên phục vụ utility như “Latest”, “Submit game”, “Contact”, hoặc headline động; không lặp lại menu chính.
- Header sticky được phép, nhưng cần tránh các dropdown bị che nội dung hoặc tạo khoảng trắng xấu ở trang không phải home.

Desktop canonical layout có thể là:

```text
header
  .head-wrapper
    .head-left    -> logo hoặc một nhóm utility nhỏ
    .head-center  -> primary nav từ main-menu
    .head-right   -> search + action buttons
  .head-utility-bar hoặc .head-topic-strip optional, không lặp primary nav
```

Các style có thể đảo vị trí logo/menu/search để tạo signature, nhưng vẫn giữ một `primary-menu` duy nhất.

## Hành vi mobile

Mobile từ `320px` trở lên là tiêu chí nghiệm thu thật, nên chuẩn mobile cần đơn giản:

- Header hàng đầu chỉ giữ logo, nút search, nút menu.
- `.head-btn` mở/đóng `.head-menu` chứa chính `main-menu`.
- `.head-search-btn` mở/đóng `.head-search`.
- Khi mở menu thì đóng search; khi mở search thì đóng menu.
- Click ngoài menu/search đóng panel đang mở.
- Mỗi target chạm tối thiểu khoảng `44px`.
- Không hiển thị đồng thời topbar, primary nav, quick links và search trên màn hình nhỏ nếu gây cảm giác có nhiều menu.
- Nếu có utility strip, mobile nên chuyển thành horizontal scroll rất gọn hoặc ẩn nếu trùng menu chính.

Mobile không được dùng danh sách link riêng khác desktop. Nếu cần fallback khi chưa gán menu WordPress, fallback cũng phải giống cùng model `Home / Blogs / Reviews / Games` và chỉ tồn tại trong `.head-menu`.

## Hành vi search

Search nên là một hành vi thống nhất:

- Form dùng `method="get"`.
- Input name giữ là `key` vì các trang hiện có đang đọc `$_GET['key']`.
- Giá trị input phải lấy qua `sanitize_text_field( wp_unslash( $_GET['key'] ) )` trước khi output bằng `esc_attr()`.
- URL đích ưu tiên thống nhất là `/reviews/` nếu hệ thống hiện tại chỉ hỗ trợ tìm review theo `key`; nếu muốn tìm toàn site thì cần xác nhận logic backend trước, không tự đổi.
- Placeholder nói đúng phạm vi tìm kiếm, ví dụ `Search reviews` nếu submit về `/reviews/`; không ghi `Search games or reviews` nếu game archive không xử lý cùng query.
- Desktop có thể inline; mobile nên là panel/popup dưới header.
- Search không được đặt trong cùng block với shortcut lặp menu nếu điều đó làm nút search mở ra cả một “menu thứ hai”.

## Ghi nhận nhanh theo des-1 đến des-10

- `des-1`: có `main-menu` và `head-filter-list` lặp `Games/Reviews/Blogs`, search mobile mở cả `head-directory-bar`; nên tách search khỏi shortcut hoặc bỏ shortcut trùng.
- `des-2`: top kicker lặp `Latest news/Reviews/Games`; menu chính vẫn đúng nguồn. Cần đảm bảo top kicker là utility khác primary menu hoặc bỏ bớt.
- `des-3`: desktop dùng `main-menu`, fallback hard-code hợp lý; ít trùng hơn, nhưng cần đảm bảo mobile không tạo menu riêng.
- `des-4`: có topline links và portal rail đều trùng nhóm nội dung chính; đây là mẫu dễ bị khách xem là duplicate menu.
- `des-5`: tương đối sạch: một `main-menu`, một search. Đây là hướng gần chuẩn nhất.
- `des-6`: có quick links `Blogs/Reviews/Games` và ticker bài mới. Ticker là hợp lý nếu lấy bài thật; quick links nên bỏ nếu trùng menu.
- `des-7`: desktop hard-code nav trái/phải và mobile hard-code menu riêng, không dùng `wp_nav_menu` làm nguồn chính. Cần chuẩn hóa về một `main-menu`.
- `des-8`: có `main-menu` và quick links lặp `Reviews/Games/Blogs`; cần bỏ hoặc đổi quick links thành nội dung khác menu.
- `des-9`: topbar lặp `Latest blogs/Reviews/HTML5 games` bên cạnh primary menu; cần xác định là utility thật hoặc bỏ.
- `des-10`: có `main-menu`, `Review Hub`, `Scores`, và score strip nhiều link cùng về `/reviews/`; cần giảm trùng và chỉ giữ shortcut có query/nội dung thật.

## Checklist audit cho từng des-N

Dùng checklist này trước khi giao mỗi style:

- Header chỉ có một `nav#primary-menu.main-navigation` cho điều hướng chính.
- `nav#primary-menu` render từ `wp_nav_menu('main-menu')`; nếu có fallback thì fallback nằm trong `.head-menu` và không tạo thêm menu song song.
- Không có danh sách hard-code desktop/mobile khác nội dung với `main-menu`.
- Không có topbar/rail/quick links lặp lại cùng bộ `Blogs / Reviews / Games` khi primary menu đã có các link đó.
- Mọi link trong utility/shortcut có mục đích riêng, text đúng đích đến, không phải label trang trí.
- Logo link về trang chủ và chỉ xuất hiện một lần trong header.
- Search form có `method="get"`, input `name="key"`, value được sanitize/escape đúng.
- Placeholder search đúng phạm vi URL submit.
- Mobile tại `320px` chỉ thấy logo, search button, menu button trước khi mở panel.
- Menu mobile mở đúng `.head-menu` của primary menu, không mở nhầm utility strip.
- Search mobile mở đúng `.head-search`, không mở kèm một dải link trùng menu.
- Mở menu thì search đóng; mở search thì menu đóng; click ngoài đóng panel.
- Button menu/search có `aria-label`; nên có `aria-expanded` nếu JS đang cập nhật được.
- Target chạm của nút và link mobile tối thiểu khoảng `44px`.
- Header không che nội dung trang khác home; kiểm tra blog detail, review detail, game detail, archive/search.
- Nếu có sticky header, dropdown/search panel có `z-index` đủ cao và không bị cắt bởi container.
- Không có block giống tab/category/menu mà không click được.
- Tên class giữ theo chuẩn `.head-*` để các agent khác dễ audit và sửa đồng loạt.

## Kết luận chuẩn

Chuẩn nên áp dụng là “một menu chính, nhiều layout khác nhau”. Mỗi `des-N` vẫn có thể khác biệt rõ về form header, nhưng sự khác biệt không được đến từ việc nhân đôi menu. Primary navigation lấy từ `main-menu`; search là một chức năng riêng; utility strip chỉ tồn tại khi nó bổ sung nội dung thật, không lặp lại điều hướng chính.
