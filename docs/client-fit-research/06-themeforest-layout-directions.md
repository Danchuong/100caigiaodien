# Hướng layout ThemeForest phù hợp cho game/news/review

## 1. Mục tiêu nghiên cứu

Tài liệu này tổng hợp các hướng bố cục thường thấy ở nhóm ThemeForest liên quan tới gaming, game news, review, esports, magazine, portal và affiliate. Mục tiêu là rút ra **form/layout concept** để áp dụng cho các batch `des-N`, không sao chép code, asset, screenshot, logo, tên thương hiệu hoặc chi tiết nhận diện độc quyền của theme khác.

Nguồn nội bộ đã đọc:

- `yeucau.md`
- `100-home-styles.md`

Nguồn tham khảo công khai đã rà soát ở mức định hướng:

- ThemeForest gaming WordPress search: `https://themeforest.net/category/wordpress?term=gaming`
- ThemeForest game news search: `https://themeforest.net/category/wordpress?term=game+news`
- ThemeForest esports search: `https://themeforest.net/category/wordpress?term=esports`
- Gamxo: `https://themeforest.net/item/gamxo-wordpress-gaming-news-blog-theme/37514171`
- Gameleon: `https://themeforest.net/item/gameleon-wordpress-magazine-arcade-theme/3271091`
- SmartMag: `https://themeforest.net/item/smartmag-responsive-retina-wordpress-magazine/6652608`
- Overworld: `https://themeforest.net/item/overworld-esports-and-gaming-theme/25622953`
- Playvibe: `https://themeforest.net/item/playvibe-esports-gaming-wordpress-theme/57815887`
- LevelX: `https://themeforest.net/item/levelx-gaming-affiliate-wordpress-theme/46555640`
- Foxiz: `https://themeforest.net/item/foxiz-wordpress-newspaper-and-magazine/34617430`

## 2. Tín hiệu chung từ ThemeForest

Các theme bán tốt hoặc đúng ngách thường không chỉ có một homepage. Chúng bán một **hệ module**: nhiều kiểu header, nhiều hero, nhiều card post, sidebar, widget ranking, review score, video, category block, dark mode, mega menu, sticky rail, newsletter và footer sitemap. Vì vậy khi chuyển vào dự án này, hướng đúng không phải là "bắt chước một demo", mà là lấy từng **cơ chế bố cục** rồi phối lại thành layout signature riêng.

Các form phổ biến nhất:

- Magazine lead: một tin lớn hoặc review lớn dẫn đầu, kèm 2-5 tin phụ.
- News portal: nhiều block nhỏ, headline dày, sidebar/ticker/trending.
- Review hub: điểm số, bảng top rated, verdict, pros/cons hoặc comparison.
- Game directory: search, filter, genre/platform tabs, card catalog.
- Esports desk: lịch đấu, standings, bracket, live ticker, team spotlight.
- Video/trailer first: media hero, playlist rail, thumbnail wall.
- Affiliate/deal guide: buyer guide, deal cards, comparison table, recommendation block.
- Dark cinematic gaming: poster hero, image strips, panel tối, card có cảm giác console.
- Community/forum: thread list, poll, event board, user picks, Q&A style.
- Newspaper/editorial: masthead, column text, issue cover, date-grouped reading flow.

## 3. Layout archetypes nên dùng

| Archetype | Form bố cục | Phù hợp nhất | Cách dùng cho dự án |
| --- | --- | --- | --- |
| Magazine lead + side rail | Hero gồm 1 bài lớn bên trái, cột phải là trending/latest. | Game news, review nổi bật, blog editorial. | Dùng bài/review/game thật làm lead; rail chỉ chứa link thật. Tránh overlay quá nhiều chữ lên ảnh. |
| Mosaic/news wall | 1 ô lớn + nhiều ô nhỏ bất đối xứng. | News portal, gaming magazine, bài hot. | Thay đổi tỷ lệ ô, thứ tự review/game/blog để mỗi `des-N` không lặp lại. |
| Dense newsroom | Không hero lớn; mở bằng headline grid, ticker, latest rows. | Site tin tức cập nhật nhanh. | Phù hợp batch dense newswire `des-58` tới `des-66`; mobile nên thành list scan nhanh. |
| Review score desk | Hero/band đầu là review có score lớn hoặc verdict board. | Review site, game rating, top picks. | Dùng score badge, bảng top rated, pros/cons mini; không dùng score trang trí nếu dữ liệu không có. |
| Game catalog/search-first | Search/filter/genre/platform là trọng tâm đầu trang. | Game database, arcade/casual game portal. | Phù hợp `des-18` tới `des-25`; mobile ưu tiên search và chip rail. |
| Esports scoreboard | Hero là lịch đấu, bảng xếp hạng, bracket hoặc live strip. | Esports, tournament, live desk. | Dù không có dữ liệu trận thật, có thể map thành "trending match/report" bằng post thật, tránh dữ liệu giả vô nghĩa. |
| Video channel | Media hero, playlist sidebar, trailer grid, shorts column. | Trailer, recap, gameplay video/news. | Dùng thumbnail/post image như media card; không cần video thật nếu chỉ là form home. |
| Affiliate/recommendation hub | Comparison, buyer guide, deals, guide categories. | Review + game recommendation. | Phù hợp khi card có lý do chọn, score, tag hoặc CTA đọc review/chơi game. |
| Editorial issue/cover | Hero như bìa tạp chí, typography lớn, ít card. | Review chuyên sâu, bài phân tích, special issue. | Dùng cho batch minimal/editorial và dark cinematic; không biến thành landing page marketing. |
| Community board | Thread/poll/event/Q&A/user picks. | Site cộng đồng hoặc game portal có tương tác. | Nếu chưa có forum thật, dùng post/blog/review thành "discussion prompts" có link bài thật. |
| Ranking/top list | Top 10, tier list, monthly chart, platform leaderboard. | Game lists, reviews, trending. | Phù hợp `des-67` tới `des-74`; số thứ tự và bảng phải là cấu trúc chính, không chỉ là badge. |
| Console/dashboard | Module hóa như app/console UI, nhiều panel chức năng. | Gaming portal, tool-like home, command center. | Phù hợp `des-84`, `des-92`, `des-95`; giữ rõ nội dung thật, không làm UI giả rối mắt. |

## 4. Archetype theo loại site

### Game news / magazine

Nên ưu tiên:

- Magazine lead + side rail.
- Mosaic/news wall.
- Dense newsroom.
- Newspaper/editorial.
- Video channel nếu site có nhiều trailer hoặc recap.

Lý do: người đọc tin cần nhận ra ngay bài nổi bật, bài mới, chủ đề nóng và category. Các form này giúp giữ đủ blog/review/game nhưng vẫn đọc như trang báo game.

Không nên lạm dụng:

- Full poster hero lặp lại quá nhiều batch.
- Card overlay ảnh dày chữ.
- Grid 3 cột giống nhau cho mọi section.

### Review site

Nên ưu tiên:

- Review score desk.
- Top rated table.
- Comparison desk.
- Ranking/top list.
- Editorial issue/cover cho review dài.

Lý do: review cần tín hiệu tin cậy, điểm số, verdict, so sánh và thứ bậc. Layout phải để người dùng scan "game nào đáng chơi" nhanh hơn layout tin tức thông thường.

Điều cần giữ:

- Score/verdict phải nằm ở vị trí có ý nghĩa.
- Review card nên khác game card và blog card.
- Mobile nên đưa score hoặc verdict lên trước excerpt.

### Game database / portal

Nên ưu tiên:

- Game catalog/search-first.
- Genre wall.
- Platform tabs catalog.
- Library shelf.
- A-Z/index hoặc release calendar.

Lý do: người dùng game portal thường đến để tìm game, lọc theo thể loại/platform hoặc mở nhanh game. Search/filter phải là một phần của form, không chỉ là input trang trí.

Điều cần giữ:

- Mọi chip/category/shortcut có dạng link hoặc anchor thật.
- Card game ưu tiên ảnh, title, category/platform, CTA ngắn.
- Mobile nên có chip rail hoặc shelf kéo ngang có kiểm soát.

### Esports / live desk

Nên ưu tiên:

- Esports scoreboard.
- Match schedule hero.
- Standings board.
- Bracket home.
- Live blog feed.
- Video recap lead.

Lý do: esports cần cảm giác cập nhật, nhịp thời gian và cạnh tranh. Bố cục dạng bảng, ticker, bracket, timeline giúp khác hẳn magazine grid thường.

Điều cần cẩn trọng:

- Nếu không có dữ liệu live thật, đổi nhãn thành "latest reports", "tournament notes", "matchday picks" và link tới nội dung thật.
- Không tạo bảng số liệu giả quá cụ thể.

### Community / guide / affiliate

Nên ưu tiên:

- Community board.
- Poll first.
- Q&A/guide home.
- Buyer guide.
- Recommendation quiz style.
- Deal/price tracker form nếu nội dung cho phép.

Lý do: các form này tạo khác biệt mạnh so với news/review thuần, phù hợp các batch sau khi đã có nhiều magazine layout. Tuy nhiên phải giữ functional-first: block giống tương tác thì phải có hành động/link rõ.

## 5. Cách chuyển hóa mà không copy

Chỉ được lấy:

- Vai trò thông tin của block: lead story, ticker, score table, playlist, directory.
- Quan hệ bố cục: lớn/nhỏ, trái/phải, rail/main, table/card, timeline/list.
- Mật độ: airy editorial, balanced magazine, dense portal.
- Cơ chế responsive: rail thành scroll, table thành card, sidebar thành section.
- Kiểu điều hướng: mega/menu/category tabs/search-first/anchor.

Không được lấy:

- Code HTML/CSS/JS từ theme.
- Ảnh, icon, logo, screenshot, demo text hoặc brand name.
- Tổ hợp layout quá nhận diện của một theme cụ thể.
- Cách đặt tên class/section giống theme nguồn.
- Component độc quyền như một block đặc trưng được bê nguyên hình dáng.

Quy tắc chuyển hóa thực tế:

1. Đổi ít nhất 4/6 phần fingerprint: `Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature`.
2. Dùng dữ liệu thật từ WordPress hiện có: post/game, review, blog, random.
3. Nếu block trông như menu, tab, category, shortcut hoặc CTA thì phải click được.
4. Với card ảnh, chỉ giữ category/title/meta ngắn; excerpt nên nằm dưới ảnh nếu dễ che ảnh.
5. Với desktop có sidebar, mobile phải có quyết định riêng: chuyển thành section, accordion, chip rail hoặc list.
6. Không dùng cùng công thức "hero lớn + 3 card + section grid" quá nhiều lần.
7. Mỗi batch nên đổi cả nhịp đọc, không chỉ đổi skin.

## 6. Mapping đề xuất cho các batch `des-N`

### Batch gần tiếp theo: `des-11` tới `des-17`

Nên đi theo hướng **review hub** vì `des-1` tới `des-10` đã hoàn thành nhóm magazine/front page khá nhiều.

- `des-11`: Top Rated Table, lấy cảm hứng chung từ review/ranking theme. Trọng tâm là bảng điểm, mobile thành score cards.
- `des-12`: Platform Review Lanes, hợp game review đa nền tảng. Header platform tabs và lane cards là điểm khác.
- `des-13`: Critic/User Split, tạo khác biệt bằng dual-score thay vì một score.
- `des-14`: Review Timeline, chuyển nhịp sang chronological editorial.
- `des-15`: Comparison Desk, phù hợp review + buyer guide.
- `des-16`: Pros/Cons Review Board, card review có verdict rõ.
- `des-17`: Sidebar Score Chart, dùng sticky score/sidebar trên desktop, mobile thành score block.

### Batch `des-18` tới `des-25`

Nên map sang **game database portal**.

- Ưu tiên search-first, genre wall, platform tabs, release calendar, A-Z index.
- Đây là nhóm giúp khác rõ với magazine/review vì hero không nhất thiết là bài viết; có thể là công cụ khám phá game.
- Mobile signature nên là search + chips + shelf, tránh chỉ stack card.

### Batch `des-26` tới `des-33`

Nên map sang **esports/live desk**.

- Dùng ticker, schedule, standings, bracket, team spotlight, live feed.
- Nếu thiếu dữ liệu thể thao điện tử thật, nội dung vẫn lấy post/review/game hiện có nhưng đặt vai trò là report, preview, recap hoặc spotlight.
- Đây là nhóm nên có nhiều table/list, không dùng poster hero lặp lại.

### Batch `des-34` tới `des-41`

Nên map sang **video/trailer channel**.

- Dùng full video hero, trailer grid, playlist sidebar, cinema layout, media wall, stream channel.
- Ảnh đại diện bài viết có thể đóng vai thumbnail video.
- Cần tránh nhúng video giả không hoạt động; CTA nên là link bài/game thật.

### Batch `des-42` tới `des-49`

Nên map sang **community/forum style**.

- Dùng trending threads, forum board blocks, poll, user picks, Q&A, events.
- Nếu block giống forum/poll, nên trình bày như gateway tới bài thật thay vì giả lập form tương tác không xử lý.
- Footer có thể là community footer hoặc sitemap footer.

### Batch `des-50` tới `des-57`

Nên map sang **minimal/editorial**.

- Dùng single story cover, text-first editorial, issue index, date stack, quiet review journal.
- Phù hợp làm các layout thoáng, ít card, typography rõ.
- Cần kiểm soát font size mobile để headline dài tiếng Việt không tràn.

### Batch `des-58` tới `des-66`

Nên map sang **dense newswire**.

- Dùng compact four-column desk, latest-first list, ticker small cards, no-hero grid, chronological feed, sidebar-heavy portal.
- Đây là nhóm đối trọng với editorial airy: nhiều headline, nhiều link, ít ảnh lớn.
- Mobile nên thành dense list hoặc timeline, không thành grid ảnh lớn.

### Batch `des-67` tới `des-74`

Nên map sang **ranking/top list**.

- Dùng top 10, tier list, genre ranking, monthly chart, platform leaderboard, comparison table.
- Số thứ tự, tier, chart hoặc table phải là cấu trúc chính.
- Rất hợp review/game site vì người dùng muốn biết "nên chơi gì".

### Batch `des-75` tới `des-82`

Nên map sang **store/deal/guide hybrid**.

- Dùng deal cards, guide categories, buyer guide, price tracker, recommendation quiz, hardware/games shelf.
- Nếu không có giá/deal thật, đổi thành "recommendation", "guide", "best for" thay vì dựng dữ liệu thương mại giả.
- CTA phải dẫn tới bài/game/review thật.

### Batch `des-83` tới `des-90`

Nên map sang **dark cinematic gaming**.

- Dùng poster hero rail, split screen console, diagonal blocks, full-bleed stack, image strips, character deck, theater review.
- Nhóm này dễ trùng nếu chỉ dùng nền tối; phải khác bằng cấu trúc hero/card/mobile, không dựa vào màu neon.
- Nên giới hạn text overlay để tránh lỗi đọc trên ảnh.

### Batch `des-91` tới `des-100`

Nên map sang **experimental/special issue**.

- Dùng horizontal issue, command center, map navigation, swipe deck, OS window, magazine cover archive, timeline, radial hub, collage, newsletter-first.
- Đây là nhóm tạo độ khác biệt cuối cùng, nhưng phải giữ responsive thật từ 320px.
- Các layout mang tính "interface giả" chỉ nên dùng nếu vẫn đọc được như home page thật.

## 7. Hướng nên ưu tiên cao

1. `des-11` tới `des-17`: làm review hub trước để cân bằng với 10 mẫu đầu đã thiên magazine/news.
2. `des-18` tới `des-25`: làm game directory/search-first để đáp ứng đúng bản chất website game.
3. `des-26` tới `des-33`: làm esports/live desk để tăng khác biệt form bằng table, schedule, ticker.
4. `des-58` tới `des-66`: làm dense newswire sau vài batch visual mạnh để tránh portfolio chỉ toàn hero ảnh.
5. `des-67` tới `des-74`: làm ranking/top list vì rất phù hợp game/review và dễ tạo fingerprint rõ.

## 8. Hướng nên hạn chế hoặc dùng có kiểm soát

- Full-bleed dark poster hero: đẹp nhưng dễ trùng giữa nhiều mẫu; chỉ dùng khi flow/card/footer/mobile khác mạnh.
- Slider/carousel auto: ThemeForest dùng nhiều, nhưng với scope bàn giao nên ưu tiên carousel tĩnh hoặc rail scroll đơn giản.
- Demo esports quá nhiều số liệu: nếu không có data thật, chỉ giữ form schedule/standings ở mức editorial.
- Affiliate/deal layout có giá/khuyến mãi giả: chỉ dùng nếu đổi sang recommendation/guide hoặc có dữ liệu thật.
- Community/forum giả tương tác: tránh form nhập/poll nếu không xử lý; dùng block link tới nội dung thật.
- Mega menu phức tạp: header/footer dùng chung toàn site, nên chỉ làm khi không phá mobile và trang khác.

## 9. Checklist áp dụng trước khi triển khai một `des-N`

- Layout có khác ít nhất 4/6 phần fingerprint so với batch gần nhất không?
- Hero có vai trò mới không, hay chỉ đổi ảnh?
- Review/game/blog có card pattern khác nhau đủ rõ không?
- Section order có phục vụ logic site không?
- Các tab/chip/shortcut/CTA có link thật không?
- Mobile có signature riêng không?
- Có dùng text thật, link thật, không dùng label trang trí rỗng không?
- Có tránh copy asset/code/brand từ ThemeForest không?
- Header/footer có hợp style nhưng vẫn an toàn cho toàn site không?
