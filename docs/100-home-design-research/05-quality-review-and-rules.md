# Agent 5 - Review chất lượng và luật kiểm duyệt 100 mẫu home

## Phạm vi kiểm duyệt

Tài liệu này dùng để phản biện và nghiệm thu các hướng thiết kế lại **trang home** cho WordPress game/news site. Không mở rộng scope sang header/footer, trừ khi lỗi ở header/footer trực tiếp làm hỏng trải nghiệm home.

Mỗi mẫu home được accept phải giữ đủ hợp đồng nội dung:

- 3 bài blog.
- 5 bài review.
- 5 post/game.
- 1 khu vực random.

Các file triển khai dự kiến thường nằm ở `home.php`, `css/_home.scss`, `style.css`. Review không được chấp nhận mẫu chỉ đẹp trong mockup nhưng không có đường triển khai rõ ràng trong cấu trúc WordPress này.

## Vì sao cách 10x10 rất dễ chán

Cách làm 10 layout nhân 10 skin màu nghe có vẻ đủ 100 mẫu, nhưng người xem sẽ nhận ra template rất nhanh. Lý do không nằm ở màu, mà nằm ở "xương sống" giao diện: cùng hero, cùng lưới card, cùng sidebar, cùng thứ tự section, cùng nhịp ảnh chữ. Đổi màu xanh sang đỏ không đổi cách người đọc quét trang.

Với game/news site, home phải tạo cảm giác có biên tập: bài nào là điểm nóng, review nào đáng tin, game nào nên chơi, random có lý do tồn tại. Nếu 100 mẫu đều là biến thể của một khung gồm hero lớn, 3 card nhỏ, danh sách review, grid game, random cuối trang, khách sẽ thấy đây là một bộ template bị nhân bản.

Rủi ro lớn nhất của 10x10:

- **Khác màu nhưng cùng bố cục**: người dùng không nhớ màu, họ nhớ vị trí, kích thước, nhịp scan và cấu trúc nội dung.
- **Khác ảnh nhưng cùng hierarchy**: nếu mẫu nào cũng đẩy một bài lớn lên trên và các bài còn lại thành card bằng nhau, cảm giác biên tập bị phẳng.
- **Khác font nhưng cùng pattern card**: title, thumbnail, meta, excerpt lặp lại với cùng tỷ lệ làm mọi mẫu giống nhau.
- **Random bị dùng như đồ trang trí**: random đặt cuối trang hoặc chỉ là một card phụ không tạo được khác biệt thật.
- **Khách nhìn ra hệ thống sinh template**: khi 100 mẫu có cùng thứ tự module, cùng gutter, cùng breakpoint và chỉ thay skin, độ tin cậy thiết kế giảm.

Kết luận: 100 mẫu không nên là 10 bố cục nhân 10 màu. Nên là 100 "ý tưởng home" có premise riêng, trong đó màu chỉ là một trục nhỏ.

## Rủi ro cần soi trước khi accept

### 1. Rủi ro template hóa

Một mẫu bị reject nếu sự khác biệt chỉ đến từ palette, border radius, shadow, icon, ảnh hero hoặc spacing nhẹ. Những thứ đó là lớp trang điểm, không phải hướng thiết kế.

Dấu hiệu khách sẽ nhìn ra template:

- Cùng first viewport với mẫu trước đó.
- Cùng thứ tự 4 khối nội dung bắt buộc.
- Cùng kiểu card cho blog, review và game.
- Cùng một hero chiếm 50-70% màn hình.
- Cùng sidebar hoặc rail phụ xuất hiện ở vị trí giống nhau.
- Cùng mobile order dù desktop khác màu.

### 2. Rủi ro SEO và content

Home game/news không chỉ cần đẹp. Nó phải giúp Google và người đọc hiểu site đang có gì mới, gì đáng đọc, gì đáng chơi.

Các lỗi cần chặn:

- Section heading mơ hồ như "Featured", "Latest", "More" lặp lại ở mọi mẫu mà không có ngữ nghĩa biên tập.
- Cấu trúc heading loạn: nhiều `h1`, bỏ qua cấp heading, hoặc title card dùng heading chỉ để làm to chữ.
- Nội dung chính bị đẩy xuống quá sâu vì hero quá lớn hoặc animation quá nhiều.
- Random hiển thị bài không liên quan, trùng với blog/review/game trong cùng trang, hoặc làm loãng internal link.
- 13 item bắt buộc bị render như danh sách card y hệt nhau, khiến trang home không có ưu tiên nội dung.
- Excerpt bị cắt vô nghĩa, không giúp người đọc quyết định click.
- Link nội bộ nghèo: toàn bộ card click nhưng thiếu text link rõ, thiếu category/tag có ích.

### 3. Rủi ro accessibility

Game/news site thường dùng màu mạnh, ảnh dày và hover effect nhiều. Đây là nơi accessibility dễ bị hy sinh.

Các lỗi không được accept:

- Text trên ảnh không đủ contrast.
- Chỉ hover mới thấy CTA, category hoặc trạng thái focus.
- Card click toàn bộ nhưng không có focus state rõ ràng.
- Carousel/ticker tự chạy không dừng được.
- Mobile order khác desktop đến mức keyboard/screen reader đọc sai logic.
- Khu random refresh bằng JS nhưng không báo trạng thái hoặc không có fallback.
- Icon dùng thay text nhưng thiếu accessible name.

### 4. Rủi ro performance

Home có ít nhất 13 item nội dung, thường kèm thumbnail. Nếu mỗi mẫu thêm slider, animation, font, blur và script riêng, 100 mẫu sẽ thành 100 nguồn nợ kỹ thuật.

Các lỗi cần chặn:

- Ảnh không có `width`/`height` hoặc aspect ratio gây CLS.
- Tải eager quá nhiều ảnh dưới fold.
- Dùng `orderby => 'rand'` trực tiếp trên site lớn mà không cache.
- Query lặp lại cùng taxonomy hoặc post meta không cần thiết.
- JS chỉ để làm thứ CSS có thể làm.
- Hiệu ứng blur/filter lớn trên ảnh grid dày.
- SCSS rò rỉ global, ảnh hưởng header/footer hoặc template khác.

### 5. Rủi ro WordPress maintainability

Mẫu phải sống được trong theme WordPress thật, không chỉ là HTML tĩnh.

Các lỗi cần chặn:

- Hardcode category ID, post ID, URL hoặc text không có đường thay đổi hợp lý.
- Không `wp_reset_postdata()` sau query phụ.
- Output title, URL, class, image alt không escape.
- Query random có thể trùng với 3 blog, 5 review, 5 game.
- Logic lọc content trộn trực tiếp quá nhiều vào markup khiến `home.php` khó review.
- CSS đặt selector quá rộng như `.card`, `.section`, `.title` làm vỡ trang khác.

## Luật kiểm duyệt trước khi accept mẫu mới

### Luật reject ngay

Một mẫu bị reject ngay nếu vi phạm một trong các điều sau:

- Thiếu 1 trong 4 khối bắt buộc: 3 blog, 5 review, 5 post/game, random.
- Sửa header/footer dù lỗi không phát sinh trực tiếp từ home.
- Chỉ là recolor/reskin của mẫu đã có.
- Mobile dưới 390px bị vỡ layout, chồng text, hoặc mất nội dung.
- Có output WordPress chưa escape.
- Dùng random query tốn kém mà không có cơ chế giới hạn/cache.
- Nội dung chính chỉ render bằng JS, không có HTML server-rendered.
- Không có focus state cho link/button tương tác.
- Text quan trọng nằm trong ảnh nhưng không có text HTML tương đương.

### Luật accept cơ bản

Một mẫu chỉ được accept khi đạt đủ:

- Giữ đúng hợp đồng nội dung: 3 blog, 5 review, 5 game/post, random.
- Có premise thiết kế rõ trong 1-2 câu: mẫu này khác vì tổ chức home theo logic gì.
- First viewport thể hiện được ít nhất 2 nhóm nội dung, hoặc 1 nhóm chính cộng tín hiệu rõ về nhóm kế tiếp.
- Blog, review, game và random có vai trò thị giác khác nhau, không dùng một card component y hệt.
- Có responsive order hợp lý cho mobile, không chỉ co nhỏ desktop.
- Không tạo dependency mới nếu CSS/HTML hiện có giải quyết được.
- Không làm style rò ra ngoài scope home.

## Tiêu chí "khác biệt đủ"

Mỗi mẫu phải được chấm theo thang 100 điểm. Pass khi đạt **tối thiểu 72/100**, đồng thời không có mục nào dưới ngưỡng tối thiểu.

| Trục đánh giá | Điểm tối đa | Ngưỡng tối thiểu | Cách chấm |
| --- | ---: | ---: | --- |
| Bố cục first viewport | 20 | 12 | Cách mở trang, tỷ lệ nội dung, điểm nhấn đầu tiên có khác mẫu gần nhất không |
| Luồng biên tập nội dung | 20 | 12 | 3 blog, 5 review, 5 game, random được tổ chức theo câu chuyện khác không |
| Hệ card và media | 15 | 8 | Thumbnail, meta, excerpt, badge, density, ratio có khác thật không |
| Visual language | 15 | 8 | Typography, màu, texture, nhịp khoảng trắng, độ nặng nhẹ có tạo mood riêng không |
| Mobile behavior | 10 | 6 | Mobile không chỉ là stack card, có thứ tự và tương tác phù hợp không |
| Accessibility/SEO | 10 | 8 | Heading, link, contrast, focus, text semantics đạt mức cơ bản không |
| Performance/WordPress | 10 | 8 | Query, image, CSS scope, escape output, cache random đạt yêu cầu không |

Ngoài điểm số, mẫu phải khác mẫu đã accept gần nhất ở ít nhất **4/7 trục DNA** sau:

1. Kiểu first viewport: spotlight, dashboard, timeline, split editorial, dense portal, game shelf, ranking board, newspaper, console UI, live feed.
2. Thứ tự ưu tiên nội dung: blog dẫn dắt, review dẫn dắt, game dẫn dắt, random dẫn dắt, hoặc cân bằng nhiều cụm.
3. Mô hình layout: grid, rail, stack, mosaic, magazine, kanban, ticker, index, board, map.
4. Treatment media: poster lớn, thumbnail nhỏ dày, ảnh crop ngang, cover dọc, no-image editorial, icon/stat first.
5. Treatment metadata: score, platform, genre, author, date, reading time, rating, tag, status.
6. Tương tác random: slot machine nhẹ, pick-of-the-day, shuffle rail, dice card, surprise drawer, editorial wildcard.
7. Mobile order: ưu tiên feed, ưu tiên review, ưu tiên game, sticky filter, horizontal shelf, compact index.

Rule cứng: nếu mẫu mới có cùng first viewport, cùng thứ tự section và cùng kiểu card với một mẫu đã accept, điểm tối đa chỉ được 55 dù màu sắc đẹp.

## Checklist nghiệm thu visual cho từng mẫu

Trước khi accept, reviewer phải kiểm tra bằng mắt ở desktop và mobile.

### Desktop

- First viewport không giống mẫu đã accept gần nhất.
- Người xem hiểu ngay site là game/news, không phải blog generic.
- Có điểm nhấn biên tập rõ: bài hot, review đáng chú ý, game đáng chơi hoặc random có chủ ý.
- 3 blog, 5 review, 5 game/post, random đều nhìn ra được bằng nhãn, layout hoặc hierarchy.
- Không có vùng trắng/vùng ảnh quá lớn làm home thiếu nội dung.
- Không có card nào quá giống nhau đến mức 13 item hòa thành một mảng.
- Title dài 2-3 dòng không phá layout.
- Thumbnail thiếu ảnh vẫn có fallback không làm vỡ grid.
- Metadata đủ đọc nhưng không tranh với title.
- CTA/link nhìn như link, không phụ thuộc hover.
- Màu accent không lấn át nội dung chính.
- Không dùng quá nhiều badge, icon, shadow hoặc border khiến trang ồn.

### Mobile

- Chiều rộng 390px và 360px không chồng text, không tràn ngang.
- First screen vẫn có nội dung thật, không chỉ header/hero ảnh.
- Thứ tự đọc hợp lý: người dùng thấy phần quan trọng trước, random không chen vô nghĩa.
- Card tap target đủ lớn, khoảng cách giữa link gần nhau không gây bấm nhầm.
- Horizontal scroll nếu có phải có dấu hiệu rõ và không khóa trang.
- Section heading không chiếm quá nhiều chiều cao.
- 5 review và 5 game không biến thành danh sách quá dài mà không có nhịp chia cụm.
- Random trên mobile vẫn có vai trò, không bị đẩy thành block rác cuối trang.

## Checklist nghiệm thu kỹ thuật cho từng mẫu

### WordPress/PHP

- Query tách bạch cho blog, review, game/post, random.
- Mỗi query có `posts_per_page` đúng với hợp đồng nội dung.
- Random loại trừ ID đã xuất hiện ở 3 nhóm chính.
- Không dùng `orderby => 'rand'` trực tiếp nếu không cache hoặc không giới hạn tập ứng viên.
- Sau query phụ có `wp_reset_postdata()`.
- Output dùng `esc_html()`, `esc_url()`, `esc_attr()` hoặc API WordPress tương đương.
- Image dùng API thumbnail của WordPress, có alt text hợp lý.
- Không hardcode domain, post ID, category ID nếu có thể dùng slug/option/query args rõ hơn.
- Không chạm header/footer nếu không có lỗi home trực tiếp.

### HTML/SEO

- Home có cấu trúc landmark/section rõ.
- Heading không nhảy cấp bừa bãi.
- Link card có text đọc được, không chỉ bọc div trống.
- Category/tag nếu hiển thị phải là link thật hoặc text có nghĩa.
- Excerpt không bị cắt mất ngữ cảnh.
- Random không trùng nội dung với các block chính.
- Nội dung server-rendered, không phụ thuộc JS để Google/người dùng thấy item.

### CSS/SCSS

- Style được scope theo class home riêng, tránh selector global.
- Không dùng `!important` trừ trường hợp có lý do rõ.
- Grid có min/max, aspect ratio, gap ổn định.
- Title dài, ảnh lỗi, thiếu excerpt không làm layout nhảy.
- Breakpoint có chủ đích, không chỉ thêm một media query cuối file để chữa cháy.
- Không dùng palette một màu đơn điệu cho toàn trang.
- Không tạo hiệu ứng đắt đỏ trên danh sách nhiều item.

### Accessibility

- Contrast text/body đạt tối thiểu 4.5:1; text lớn tối thiểu 3:1.
- Focus visible cho link, button, random control.
- Icon-only control có accessible name.
- Không có auto-play carousel/ticker không thể pause.
- Không dùng hover-only để lộ thông tin quan trọng.
- Thứ tự DOM phù hợp thứ tự đọc chính.

### Performance

- Ảnh trên fold được ưu tiên hợp lý; ảnh dưới fold lazy-load.
- Mỗi ảnh có kích thước/aspect ratio để giảm CLS.
- Không thêm JS nếu chỉ cần layout CSS.
- Không thêm font ngoài nặng cho từng mẫu.
- Không query thừa cùng một nhóm nội dung nhiều lần.
- Không dùng animation liên tục trên nhiều card.

## Quy trình batch để làm 100 mẫu mà vẫn giữ chất lượng

Không nên sản xuất 100 mẫu theo kiểu làm xong mới review. Review muộn sẽ phát hiện trùng quá trễ và phải sửa hàng loạt. Nên làm theo batch 10 mẫu.

### Trước batch đầu tiên

Tạo bảng DNA cho 100 concept trước khi code hoặc mockup chi tiết. Mỗi concept cần có:

- Premise 1 câu.
- Kiểu first viewport.
- Nhóm nội dung dẫn dắt.
- Mô hình layout.
- Treatment media.
- Cách dùng random.
- Mobile order dự kiến.

Nếu hai concept giống nhau ở hơn 4/7 trục DNA, phải gộp hoặc viết lại trước khi triển khai.

### Với mỗi batch 10 mẫu

Quy trình đề xuất:

1. **Brief gate**: reviewer đọc 10 premise trước. Reject premise mơ hồ như "modern gaming layout", "news portal clean", "dark card grid".
2. **Diversity gate**: lập ma trận 10x10 trong batch. Không để quá 2 mẫu cùng family layout.
3. **Build gate**: mỗi mẫu sau khi dựng phải tự chấm theo thang 100 và ghi mẫu gần nhất nó đang cố khác.
4. **Pair review**: reviewer so từng mẫu với 3 mẫu gần nhất trong toàn bộ kho đã accept, không chỉ trong batch.
5. **Worst-two rewrite**: mỗi batch phải chọn ít nhất 2 mẫu yếu nhất để sửa premise/layout trước khi sang batch tiếp theo.
6. **Technical spot check**: kiểm tra kỹ thuật đầy đủ ít nhất 3/10 mẫu trong batch; nếu 1 mẫu fail reject ngay, tăng kiểm tra lên 10/10 cho batch đó.
7. **Batch retrospective**: ghi lại pattern đang bị lặp để cấm ở batch sau.

### Mốc audit lớn

- Sau 10 mẫu: khóa taxonomy DNA, loại các family quá giống.
- Sau 30 mẫu: kiểm tra khách có thể mô tả từng mẫu bằng một câu khác nhau không.
- Sau 60 mẫu: rà lại mobile, vì mẫu khác desktop nhưng mobile thường bị stack giống nhau.
- Sau 80 mẫu: cấm thêm biến thể an toàn; chỉ nhận concept có rủi ro sáng tạo nhưng vẫn đạt checklist.
- Sau 100 mẫu: chạy audit trùng lặp toàn bộ, chọn lại hoặc viết lại 10 mẫu yếu nhất.

## Mẫu phiếu review cho mỗi giao diện

Reviewer nên lưu phiếu ngắn cho từng mẫu:

```text
Tên mẫu:
Premise:
Mẫu gần nhất đã accept:
Điểm khác biệt: __/100
4/7 DNA khác ở các trục:
- 
- 
- 
- 

Content contract:
- 3 blog: pass/fail
- 5 review: pass/fail
- 5 game/post: pass/fail
- random: pass/fail

Lỗi visual:
- 

Lỗi kỹ thuật:
- 

Kết luận: accept / revise / reject
Điều kiện để accept nếu revise:
- 
```

## Quan điểm review cuối cùng

100 home chỉ đáng làm nếu mỗi mẫu có một quyết định biên tập riêng. Nếu reviewer không thể mô tả mẫu bằng câu cụ thể hơn "grid card dark mode" hoặc "magazine layout màu đỏ", mẫu đó chưa đủ khác.

Luật thực dụng: **khác biệt phải nằm ở cách home tổ chức sự chú ý, không chỉ ở cách nó được trang trí**.
