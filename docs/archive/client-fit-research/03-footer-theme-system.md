# Hệ thống footer theo từng theme

Phản hồi "footer không liên quan" không nên hiểu là chỉ cần đổi màu footer cho giống phần trên. Trong project này, mỗi style là một form riêng cho home, header và footer. Footer phải đóng vai trò kết thúc đúng logic của form đó: nếu home là directory thì footer là directory mở rộng; nếu home là newspaper thì footer là mục lục báo; nếu home là review hub thì footer phải nhắc lại điểm số, archive review và các lối vào theo nền tảng.

Các file đã đối chiếu: `yeucau.md`, `footer.php` và `css/_footer.scss` của `des-1` đến `des-10`, kèm bối cảnh từ `home.php` và `header.php`.

## 1. Vai trò footer theo design type

### Directory / finder

Áp dụng cho layout kiểu `des-1`: home mở đầu bằng tìm kiếm, shortcut platform, game rows và score cards. Footer không nên là khối brand chung chung. Nó phải là tầng điều hướng cuối cho người đang muốn tìm nhanh nội dung.

Footer nên có:

- Brand + mô tả ngắn về việc tìm game, review, blog.
- Cột `Explore`: Games, Reviews, Blogs.
- Cột `Platforms` hoặc `Browse by`: PC, Console, Mobile, iOS, Android nếu header/home cũng dùng filter đó.
- Cột nội dung động: Latest reviews hoặc Popular games.

Không nên có newsletter hoặc social giả nếu theme không xây luồng đăng ký thật.

### Latest / news desk

Áp dụng cho kiểu `des-2`, `des-6`: home ưu tiên tin mới, review mới, game mới theo nhiều danh sách. Footer phải giống một desk tổng hợp cuối trang, không phải sitemap tối giản.

Footer nên có:

- Brand + description lấy từ option hoặc fallback có nghĩa.
- 3 nhóm nội dung động: Latest News/Blogs, Fresh Reviews, Popular Games.
- Link archive thật cho từng nhóm.
- Có thể có ticker/latest compact nếu header có news row hoặc topbar.

Vai trò chính là giữ người đọc tiếp tục đi sang một nội dung mới sau khi đọc hết trang.

### Legal / compact editorial

Áp dụng cho kiểu `des-3`, `des-5`: newspaper/legal hoặc issue-style có nhịp gọn, editorial hơn. Footer nên là kết thúc ngắn, chắc, không kéo thêm quá nhiều danh sách làm phá nhịp.

Footer nên có:

- Logo/title.
- Mô tả rất ngắn, tốt nhất trim 15-20 từ.
- 3 link chính: Blogs, Reviews, Games.
- Copyright.

Nếu thêm bài mới, chỉ thêm 1 cột nhỏ. Không biến footer compact thành mega footer vì sẽ làm lệch form.

### Mega sitemap / portal

Áp dụng cho kiểu `des-4`: home có nhiều module và footer hiện là `mega sitemap`. Đây là loại footer phù hợp khi theme có cảm giác portal/magazine lớn.

Footer nên có:

- Brand bên trái, sitemap bên phải.
- Cột Explore cố định.
- Cột Latest Blogs.
- Cột Latest Reviews.
- Cột Popular Games.
- Bottom row có copyright và một hành động phụ liên quan, ví dụ `Search reviews`.

Loại này cần nhiều link thật nhưng phải giữ title ngắn để mobile không vỡ.

### Newsletter / search conversion

Áp dụng cho kiểu `des-7`: home là editor picks/roundup. Footer có thể mở bằng một khối newsletter-like, nhưng trong source hiện form đang submit sang review search. Vì project không có hệ thống subscribe trong phạm vi, cách đúng là coi đây là "search/roundup CTA", không giả vờ có newsletter thật.

Footer nên có:

- Kicker như Weekly Roundup hoặc Editor Picks.
- Một câu mô tả rõ về editor picks/review notes/new games.
- Form có action thật: search reviews hoặc archive phù hợp.
- Cột Explore + Latest Reviews.

Nếu label là newsletter thì form phải có chức năng đăng ký thật. Nếu không, đổi wording sang search/roundup để tránh block trang trí không có hành động.

### Newspaper / edition

Áp dụng cho kiểu `des-8`: header có edition link, tagline; home chia theo cột báo. Footer nên giống mục lục cuối tờ báo.

Footer nên có:

- Masthead/brand + tagline/copyright.
- Explore.
- Categories có tên editorial: Review Desk, Gaming News, Game Index.
- Latest Reviews hoặc Latest Headlines.

Visual nên dùng đường kẻ, typography, cột đều; không dùng CTA lớn kiểu app/game portal.

### Partner / network band

Áp dụng cho kiểu `des-9`: home dùng band magazine, archive band, các card dạng network/section. Footer có thể là network band, nhưng mỗi item phải dẫn đến section thật.

Footer nên có:

- Brand + description.
- Network cards số thứ tự: Games, Reviews, Blogs.
- Bottom links lặp lại ở dạng nhỏ.

Không nên thêm latest post list nếu home đã dùng nhiều band lớn; footer ở đây làm bản đồ section hơn là bảng tin.

### Review scoreboard / leaderboard

Áp dụng cho kiểu `des-10`: header có Review Hub, score strip; home có review score hero và review score list. Footer bắt buộc phải tiếp tục ngôn ngữ điểm số.

Footer nên có:

- Brand + mô tả review/game.
- Review Leaderboard lấy review thật.
- Điểm score nếu có field; fallback chỉ nên dùng khi cần demo.
- Explore: Reviews, Games, Blog, Mobile Reviews.
- Score Desk: PC Scores, Console Scores, Android/iOS Picks.

Footer loại này không nên chỉ là menu 3 link vì sẽ mất liên hệ với theme review-score.

## 2. Link và content model bắt buộc

Mọi footer phải có ít nhất 3 lớp nội dung:

1. **Identity**: logo/title link về home, description từ `get_field('description', 'option')` hoặc fallback có nghĩa, copyright từ option hoặc fallback năm/site name.
2. **Primary navigation**: link thật đến `/blogs`, `/reviews`, `/html5-games` hoặc field option `latest_blog`, `latest_review`, `popular_games` nếu style đang dùng field đó.
3. **Theme-specific continuation**: phần làm footer liên quan đến theme, ví dụ latest reviews cho review-heavy, latest posts cho news desk, platform filters cho directory, leaderboard cho score hub.

Quy tắc nội dung:

- Không dùng label chỉ để trang trí. `Weekly Roundup`, `Review Desk`, `Game Index`, `Score Desk` phải dẫn tới link hoặc hành động thật.
- Không có social link nếu không có URL thật.
- Không có newsletter nếu không có subscribe backend; dùng search/archive CTA thay thế.
- Post động nên giới hạn 4-5 item để tránh footer quá dài.
- Với query động, luôn có fallback link archive nếu không có post.
- Text trong footer nên ngắn hơn home. Footer là kết luận điều hướng, không phải hero thứ hai.

## 3. Căn chỉnh visual với home và header

Footer phải mượn "ngôn ngữ cấu trúc" từ home/header, không chỉ mượn màu.

Checklist căn chỉnh:

- **Tên vai trò giống nhau**: header có `Review Hub` thì footer có `Review Leaderboard` hoặc `Score Desk`; header có directory/search bar thì footer có platform/filter links; header có edition/topbar thì footer có newspaper categories.
- **Nhịp layout giống nhau**: home dạng grid dày thì footer dùng nhiều cột; home dạng issue/editorial gọn thì footer compact; home dạng band thì footer dùng network cards/band.
- **Mật độ giống nhau**: portal/news được phép nhiều link; editorial/legal phải ít link; scoreboard có badge/score.
- **Typography cùng logic**: masthead/newspaper dùng heading serif/uppercase nếu home dùng; gaming portal dùng title đậm, link rõ; directory dùng chip/filter-like links.
- **Màu và surface kế thừa**: footer có thể tối hơn hoặc lắng hơn header/home, nhưng border, card, chip, hover state nên cùng hệ.
- **Không kéo footer lên nội dung**: phải có padding top/bottom rõ, background tách được khỏi section cuối, không dùng margin âm.

## 4. Mobile behavior

Footer là shared component, nên mobile phải ổn ở mọi trang, không chỉ home.

Yêu cầu mobile:

- Từ `320px`, tất cả cột chuyển về 1 cột hoặc 2 cột rất rõ; không còn grid 3-4 cột ép chữ.
- Link có vùng chạm tối thiểu khoảng 40px chiều cao nếu là list/chip.
- Brand description trim ngắn; không để paragraph dài tạo khoảng trắng xấu.
- Bottom row chuyển thành column, align left.
- Form trong footer, nếu có, chuyển thành grid 1 cột ở màn rất nhỏ; input/button không tràn.
- Danh sách latest post giới hạn item và cho title wrap tối đa hợp lý; không dùng title quá dài gây overflow.
- Footer không được phụ thuộc vào hero/home để có khoảng cách. Trên archive/detail/search, footer vẫn phải có padding và background đầy đủ.

Các breakpoint hiện có nên tiếp tục dùng theo pattern trong theme: khoảng `980px`, `900px`, `767px`, `640px`, `560px`, `520px`, `420px`, `360px` tùy form. Không cần cùng một breakpoint cho mọi style; cần đúng với layout signature của style đó.

## 5. Audit checklist trước khi giao footer

### Fit với theme

- Footer trả lời được câu: "Vì sao footer này thuộc style này chứ không phải style khác?"
- Footer có cùng design type với home/header: directory, news desk, compact editorial, mega sitemap, newsletter/search, newspaper, partner band, score hub.
- Có ít nhất một block theme-specific, không chỉ brand + 3 link giống nhau.
- Không dùng cùng một cấu trúc footer cho nhiều style rồi chỉ đổi màu.

### Link và dữ liệu

- Logo/title link về home.
- Blogs, Reviews, Games đều là link thật.
- Shortcut/filter có query thật, ví dụ `reviews?key=mobile`, không phải text chết.
- Dynamic post query đúng post type: `blog`, `review`, `post`/game theo source hiện tại.
- Query có giới hạn item và reset post data nếu dùng `WP_Query`.
- Không có social/newsletter/CTA giả.

### Visual

- Footer có background, border, spacing và hover state đồng bộ header/home.
- Section cuối của home không dính vào footer.
- Không dư khoảng trắng lớn ở desktop.
- Không có text che ảnh hoặc decorative label vô nghĩa.
- Headings cột ngắn, dễ scan.

### Mobile

- Kiểm tra 320px, 360px, 390px, 768px.
- Grid footer chuyển đúng cột.
- Link và button dễ bấm.
- Form không tràn.
- Copyright/bottom links không nằm cùng hàng khi thiếu chỗ.
- Footer vẫn ổn trên trang detail/archive/search.

### Nội dung tiếng Anh/tiếng Việt

- Nếu theme đang dùng tiếng Anh cho toàn UI, footer dùng tiếng Anh đồng nhất.
- Không pha label Việt/Anh trong cùng style trừ khi toàn project đổi ngôn ngữ.
- Text phải có nghĩa theo game/news/review; không dùng câu brand chung chung như "Best experience for users" nếu không nói được footer dẫn đi đâu.

## 6. Gợi ý áp dụng cho 10 style hiện tại

| Style | Design type footer nên theo | Điểm cần giữ |
| --- | --- | --- |
| `des-1` | Directory/finder | Explore, Platforms, Latest reviews; liên hệ với search/filter của header và hero. |
| `des-2` | Latest/news desk | 3 cột Latest News, Fresh Reviews, Popular Games; hợp với home dạng tin mới. |
| `des-3` | Legal/compact newspaper | Gọn, brand + 3 link + copyright; tránh mega footer. |
| `des-4` | Mega sitemap/portal | Sitemap lớn 4 cột, có post động theo blog/review/game. |
| `des-5` | Compact issue footer | Brand + links đơn giản; giữ cảm giác issue/notebook. |
| `des-6` | News footer | Latest posts + Browse; đồng bộ với news row/ticker. |
| `des-7` | Roundup/search footer | CTA tìm review hoặc roundup thật; không gọi newsletter nếu không subscribe thật. |
| `des-8` | Newspaper edition footer | Explore, Categories, Latest Reviews; giống mục lục cuối báo. |
| `des-9` | Partner/network band | 3 network cards Games/Reviews/Blogs; đồng bộ archive band. |
| `des-10` | Review scoreboard | Leaderboard + Score Desk; giữ logic điểm số từ header/home. |

Kết luận vận hành: khi làm `des-11` trở đi, hãy chọn design type của home trước, rồi chọn footer role tương ứng. Footer đạt yêu cầu khi người xem che header/home đi vẫn đoán được theme thuộc nhóm nào, và khi mở lại toàn trang thì footer là phần kết tự nhiên của cùng một hệ giao diện.
