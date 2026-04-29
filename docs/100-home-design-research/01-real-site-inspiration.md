# 01. Inspiration từ website thật cho 100 home WordPress game/news

Ngày nghiên cứu: 2026-04-29

Phạm vi: chỉ nghiên cứu pattern cho trang home. Header/footer không nằm trong scope, trừ khi layout home cần một điểm neo trực tiếp bên dưới header hoặc trước footer.

Yêu cầu nội dung cần giữ khi biến thành giao diện:
- 3 bài blog.
- 5 bài review.
- 5 post/game.
- 1 khối random.

Mục tiêu của file này là tạo kho pattern để 100 home khác nhau không bị rơi vào công thức 10x10: cùng một hero, cùng một grid, cùng một list card. Không copy nguyên layout hoặc nội dung của site tham khảo; chỉ rút nguyên tắc bố cục.

## Nguồn tham khảo chính

- IGN: https://www.ign.com/
- GameSpot: https://www.gamespot.com/
- Eurogamer: https://www.eurogamer.net/
- Nintendo Life: https://www.nintendolife.com/
- GamesRadar+: https://www.gamesradar.com/
- Polygon: https://www.polygon.com/
- Kotaku: https://kotaku.com/
- Game Informer: https://gameinformer.com/
- PC Gamer: https://www.pcgamer.com/
- Rock Paper Shotgun: https://www.rockpapershotgun.com/
- TheGamer: https://www.thegamer.com/
- Gematsu: https://www.gematsu.com/
- VGC: https://www.videogameschronicle.com/
- Steam Store: https://store.steampowered.com/store
- Steam Discovery Update: https://store.steampowered.com/about/newstore?l=english
- Epic Games Store: https://store.epicgames.com/en-US
- itch.io: https://itch.io/games
- GOG: https://www.gog.com/en/games
- Apple App Store discoverability: https://developer.apple.com/app-store/discoverability/
- Google Play Games: https://play.google.com/store/games
- The Verge: https://www.theverge.com/
- The Verge Entertainment: https://www.theverge.com/entertainment
- Vulture: https://www.vulture.com/
- Vulture Streamliner: https://www.vulture.com/streaming/
- Netflix Tudum: https://www.netflix.com/tudum
- Letterboxd: https://letterboxd.com/
- Pitchfork: https://pitchfork.com/
- Rolling Stone Culture: https://www.rollingstone.com/culture/

## Pattern cụ thể

### 1. Lead Story + Latest Rail

- Nguồn cảm hứng: IGN, The Verge, Polygon.
- Mô tả ngắn: một bài chủ lực chiếm 55-65% chiều ngang, bên cạnh là rail "mới nhất" dạng headline ngắn.
- Vì sao khác biệt: home có nhịp editorial rõ thay vì toàn bộ card bằng nhau; người đọc thấy ngay bài quan trọng nhưng vẫn có dòng tin nhanh.
- Áp dụng cho home: chọn 1 post/game làm lead, 2 post/game còn lại vào rail; 3 blog thành dải phụ bên dưới; 5 review thành strip điểm số; random là slot "đọc tiếp bất ngờ" trong rail.

### 2. Top Story Stack Nhiều Tầng

- Nguồn cảm hứng: The Verge, Polygon, Game Informer.
- Mô tả ngắn: hero không phải một card lớn mà là một stack gồm lead lớn, story phụ, quote/deck ngắn và nhãn chuyên mục.
- Vì sao khác biệt: cùng một vùng đầu trang nhưng có cảm giác như bìa tạp chí, không giống grid thương mại.
- Áp dụng cho home: dùng 1 blog làm lead phân tích, 2 blog còn lại làm story phụ; 5 post/game đặt thành hàng "tin nhanh"; 5 review thành module riêng ngay sau stack; random là một card nhỏ đổi mỗi lần tải trang.

### 3. Latest vs Popular Toggle Rail

- Nguồn cảm hứng: GameSpot, The Verge, Polygon.
- Mô tả ngắn: một cột phụ có tab "Mới nhất" và "Phổ biến" để đổi danh sách headline.
- Vì sao khác biệt: cùng một diện tích nhưng tạo cảm giác động, nhất là với home có ít item cố định.
- Áp dụng cho home: tab mặc định hiển thị 5 post/game; tab còn lại hiển thị 5 review hoặc 3 blog kèm random. Nếu không làm JS, có thể dựng thành hai cột nhỏ song song.

### 4. Deals Lane Kiểu Store

- Nguồn cảm hứng: GameSpot deals, Epic Games Store, Steam specials.
- Mô tả ngắn: một lane ngang cho bài có tính mua, tải, khuyến mãi hoặc gợi ý chơi.
- Vì sao khác biệt: game/news site thường chỉ có tin; lane deal làm home giống nơi discovery, không chỉ đọc tin.
- Áp dụng cho home: 5 post/game nằm trong lane ngang có badge "free", "new", "hot" hoặc "update"; 5 review đặt phía dưới như kiểm chứng chất lượng; 3 blog là bài giải thích/bối cảnh; random là "deal/game may mắn".

### 5. Review Score Strip

- Nguồn cảm hứng: Eurogamer, GameSpot, Game Informer.
- Mô tả ngắn: 5 review nằm trong một strip chuyên dụng, mỗi card có score hoặc verdict badge nổi bật.
- Vì sao khác biệt: review được nhận diện như một loại nội dung có trọng lượng riêng, không bị trộn lẫn với news card.
- Áp dụng cho home: giữ đủ 5 review trong strip; 3 blog làm phần "analysis"; 5 post/game làm phần "latest games"; random có thể là một review cũ được kéo lại với nhãn "đáng đọc lại".

### 6. For You Không Cần Cá Nhân Hóa Thật

- Nguồn cảm hứng: Steam recommendations, The Verge "Just For You", Apple App Store Today.
- Mô tả ngắn: module được đặt tên như một đề xuất riêng cho người đọc, nhưng dữ liệu có thể là curated/random.
- Vì sao khác biệt: tăng cảm giác khám phá mà không cần xây thuật toán cá nhân hóa.
- Áp dụng cho home: random trở thành block trung tâm "Có thể bạn muốn thử"; 5 post/game là đề xuất chính; 5 review làm bằng chứng; 3 blog làm phần đọc sâu.

### 7. Discovery Queue

- Nguồn cảm hứng: Steam Discovery Queue.
- Mô tả ngắn: một block tuyến tính mời người dùng xem từng game/bài theo thứ tự, giống hàng đợi khám phá.
- Vì sao khác biệt: random không còn là card rời vô nghĩa, mà thành một cơ chế điều hướng.
- Áp dụng cho home: random là card đầu của queue; 5 post/game là các item tiếp theo; 5 review dùng badge "đã được đánh giá"; 3 blog nằm ở cuối queue như phần đọc thêm.

### 8. Tag Explorer

- Nguồn cảm hứng: Steam tags, itch.io filters, Google Play categories.
- Mô tả ngắn: mở home bằng cụm tag/pill thể loại, sau đó nội dung bên dưới thay đổi theo cảm giác từng tag.
- Vì sao khác biệt: giao diện bắt đầu từ nhu cầu người đọc thay vì bắt đầu từ bài mới nhất.
- Áp dụng cho home: dùng tag để chia 5 post/game theo genre/platform; 5 review có tag score/genre; 3 blog dùng tag "guide", "opinion", "news"; random là tag "surprise".

### 9. Free/Hot Countdown Grid

- Nguồn cảm hứng: Epic Games Store free games và sales spotlight.
- Mô tả ngắn: card có deadline, badge thời gian hoặc nhãn sự kiện để tạo tính cấp bách.
- Vì sao khác biệt: layout có nhịp thời gian, không chỉ là danh sách tĩnh.
- Áp dụng cho home: 5 post/game có badge "mới cập nhật", "đang hot", "sắp ra"; 5 review có ngày review; 3 blog là bài nền; random là "hôm nay thử gì".

### 10. App Store Today Cards

- Nguồn cảm hứng: Apple App Store Today, Apple App Store discoverability.
- Mô tả ngắn: các card lớn giống story editorial, nhiều khoảng thở, mỗi card tập trung vào một lý do đọc/chơi.
- Vì sao khác biệt: game/news home có cảm giác tuyển chọn cao cấp, không như archive post.
- Áp dụng cho home: 3 blog thành 3 story card lớn; 5 review thành row "được biên tập chọn"; 5 post/game thành collection nhỏ; random là "Game of the visit".

### 11. What To Play This Weekend

- Nguồn cảm hứng: Game Informer, Vulture picks, Vulture Streamliner.
- Mô tả ngắn: home xoay quanh một câu hỏi cụ thể như cuối tuần chơi gì, đọc gì, tải gì.
- Vì sao khác biệt: thay vì trang tin chung, home có một tình huống sử dụng rõ.
- Áp dụng cho home: 5 post/game là danh sách chơi; 5 review cung cấp verdict nhanh; 3 blog là bài bối cảnh; random là lựa chọn táo bạo "nếu muốn đổi vị".

### 12. Platform Lanes

- Nguồn cảm hứng: Kotaku PlayStation/Xbox/Nintendo/PC sections, Nintendo Life.
- Mô tả ngắn: home chia theo platform hoặc hệ máy, mỗi lane có 1-2 card.
- Vì sao khác biệt: cùng số lượng bài nhưng cảm giác đa chiều hơn vì người đọc quét theo thiết bị họ quan tâm.
- Áp dụng cho home: 5 post/game rải vào các lane platform; 5 review dùng lane "đã chấm"; 3 blog là lane "phân tích"; random nằm trong lane "khám phá".

### 13. Guide Hub Spotlight

- Nguồn cảm hứng: GameSpot guide hubs, IGN walkthroughs.
- Mô tả ngắn: một game/chủ đề được gom thành hub với nhiều link phụ xung quanh.
- Vì sao khác biệt: home có chiều sâu theo chủ đề, không chỉ bắn nhiều item rời.
- Áp dụng cho home: chọn 1 post/game làm hub; 4 post/game còn lại là link phụ; 3 blog là phân tích quanh hub; 5 review đặt thành "đã chơi/đã chấm"; random là bài không cùng chủ đề để tránh quá hẹp.

### 14. Review vs Preview Twin Columns

- Nguồn cảm hứng: Eurogamer review/preview labeling, Game Informer previews.
- Mô tả ngắn: hai cột cân nhau: một bên "đã chơi và đánh giá", một bên "sắp tới/đang chờ".
- Vì sao khác biệt: tạo căng thẳng giữa hiện tại và tương lai, rất hợp site game.
- Áp dụng cho home: 5 review vào cột trái; 5 post/game vào cột phải; 3 blog chạy ngang dưới hai cột; random là card chen giữa như wildcard.

### 15. Community Recommends

- Nguồn cảm hứng: Steam community recommends, itch.io community/collections, Letterboxd social discovery.
- Mô tả ngắn: card được đóng gói như đề xuất từ cộng đồng, có microcopy ngắn hoặc avatar/initial giả lập nếu theme cho phép.
- Vì sao khác biệt: giảm cảm giác newsroom một chiều; tăng cảm giác có người thật đang chọn.
- Áp dụng cho home: 5 post/game là đề xuất cộng đồng; 5 review là "đội ngũ đã kiểm chứng"; 3 blog là bài tranh luận; random là "đề xuất ngẫu nhiên từ kho".

### 16. Magazine Cover Front

- Nguồn cảm hứng: Game Informer, Pitchfork longform, Rolling Stone culture.
- Mô tả ngắn: phần đầu trang như bìa số báo, có masthead mini, ảnh lớn, một lead và vài headline phụ.
- Vì sao khác biệt: tạo bản sắc editorial mạnh, không giống store hay portal.
- Áp dụng cho home: 1 blog làm cover story; 2 blog làm side story; 5 review thành "reviews in this issue"; 5 post/game thành "news in brief"; random là sticker nhỏ trên cover.

### 17. Daily Digest

- Nguồn cảm hứng: The Verge Daily, newsletter blocks của các site editorial.
- Mô tả ngắn: một block gom tin theo "bản tin hôm nay", compact và dễ quét.
- Vì sao khác biệt: cùng item nhưng cảm giác có biên tập và lịch xuất bản.
- Áp dụng cho home: 5 post/game thành digest; 3 blog là "đọc sâu"; 5 review là "verdict mới"; random là "mục cuối bản tin".

### 18. Live/Storystream Block

- Nguồn cảm hứng: The Verge storystream, live update blocks.
- Mô tả ngắn: một chủ đề nóng được trình bày như dòng cập nhật, có timestamp hoặc thứ tự.
- Vì sao khác biệt: home có năng lượng thời sự dù dữ liệu chỉ là bài post thường.
- Áp dụng cho home: 5 post/game là các cập nhật trong stream; 3 blog là bài phân tích bên cạnh; 5 review thành block ổn định bên dưới; random là "ngoài luồng".

### 19. Most Popular Compact List

- Nguồn cảm hứng: The Verge, Polygon, Vulture.
- Mô tả ngắn: danh sách số thứ tự 1-5, rất ít ảnh, nhấn vào title và thứ hạng.
- Vì sao khác biệt: phá nhịp card ảnh liên tục; tạo một vùng đọc nhanh, tiết kiệm diện tích.
- Áp dụng cho home: 5 post/game hoặc 5 review vào list đánh số; 3 blog dùng ảnh lớn hơn để cân bằng; random đặt sau list như item không được xếp hạng.

### 20. Watch/Read/Play Triad

- Nguồn cảm hứng: Polygon "what to watch/what to read", Vulture Streamliner.
- Mô tả ngắn: ba cột theo hành động: đọc, xem, chơi.
- Vì sao khác biệt: taxonomy dựa trên hành vi, không dựa trên category WordPress quen thuộc.
- Áp dụng cho home: 3 blog vào "Read"; 5 review chia giữa "Read" và "Decide"; 5 post/game vào "Play"; random làm "Try".

### 21. Ranking Board

- Nguồn cảm hứng: Vulture lists, Steam charts, Kotaku top games.
- Mô tả ngắn: home có bảng xếp hạng lớn với số thứ tự, trend marker hoặc badge tăng/giảm.
- Vì sao khác biệt: biến danh sách bài thành một vật thể editorial có luật riêng.
- Áp dụng cho home: 5 review thành top 5 verdict; 5 post/game thành top 5 trending; 3 blog là "vì sao bảng này đáng chú ý"; random là "ngoài bảng".

### 22. New Releases Calendar

- Nguồn cảm hứng: IGN "Out This Week", Steam upcoming, Nintendo Life release/sale posts.
- Mô tả ngắn: các item được đặt trên timeline theo ngày hoặc tuần.
- Vì sao khác biệt: layout dựa trên thời gian, rất khác grid card.
- Áp dụng cho home: 5 post/game đặt theo lịch phát hành/cập nhật; 5 review dùng ngày đăng; 3 blog là phân tích tuần; random là ô "không theo lịch".

### 23. Franchise/Game Hub Spotlight

- Nguồn cảm hứng: GameSpot hubs, IGN game pages, Gematsu topic coverage.
- Mô tả ngắn: một franchise hoặc game được spotlight như mini landing page trong home.
- Vì sao khác biệt: home có focus theo chủ đề, hợp khi site muốn đẩy game hot.
- Áp dụng cho home: 1 post/game làm spotlight; 4 post/game làm related; 5 review là "đánh giá cùng thể loại"; 3 blog là góc nhìn; random là "nếu thích game này".

### 24. Poster Wall

- Nguồn cảm hứng: Netflix Tudum, streaming home, Letterboxd posters.
- Mô tả ngắn: dùng tile/poster dọc hoặc cover art làm mặt tiền thay vì thumbnail ngang.
- Vì sao khác biệt: thị giác giống thư viện giải trí hơn là blog news.
- Áp dụng cho home: 5 post/game dùng poster dọc; 5 review dùng score overlay ở góc; 3 blog dùng card chữ tối giản; random là poster xoay vòng.

### 25. Indie Zine Grid

- Nguồn cảm hứng: itch.io, Rock Paper Shotgun, indie editorial sites.
- Mô tả ngắn: grid lệch nhịp với card nhỏ/lớn khác nhau, dùng nhiều tag và text ngắn.
- Vì sao khác biệt: cảm giác thủ công, hơi zine, không corporate.
- Áp dụng cho home: 3 blog là các ô text-heavy; 5 review là card có nhãn verdict; 5 post/game rải lệch kích thước; random là ô phá bố cục.

### 26. Topic Follow Cloud

- Nguồn cảm hứng: The Verge topic suggestions, Steam category hubs, Google Play categories.
- Mô tả ngắn: một cụm topic/keyword đặt giữa trang hoặc sau hero để người đọc tự chọn hướng.
- Vì sao khác biệt: khoảng chuyển giữa section trở thành công cụ điều hướng, không chỉ divider.
- Áp dụng cho home: gắn topic vào 3 blog, 5 review, 5 post/game; random là một topic pill nổi bật "random"; khi không có filter động, pill chỉ cần link category/tag.

### 27. Compact News Ticker

- Nguồn cảm hứng: Vulture "The Feed", Gematsu news feed, VGC news cadence.
- Mô tả ngắn: một dải tin nhỏ, headline ngắn, có thời gian hoặc category.
- Vì sao khác biệt: tạo mật độ cao mà không làm toàn bộ home dày đặc.
- Áp dụng cho home: 5 post/game vào ticker; 5 review và 3 blog giữ card lớn hơn; random có thể là ticker item cuối với icon khác.

### 28. Verdict Matrix

- Nguồn cảm hứng: review sites, buying guides, app-store comparison lists.
- Mô tả ngắn: 5 review được trình bày như ma trận: tên game, điểm mạnh, điểm yếu, verdict.
- Vì sao khác biệt: review không chỉ là ảnh và title, mà thành công cụ quyết định.
- Áp dụng cho home: 5 review vào matrix; 5 post/game là card discovery; 3 blog là đọc sâu; random là một dòng "đáng thử nếu thích rủi ro".

### 29. Event Spotlight

- Nguồn cảm hứng: Epic events, Apple in-app events, Steam seasonal sales.
- Mô tả ngắn: home xoay quanh một event/sale/update/season với nền màu và nhãn thời gian riêng.
- Vì sao khác biệt: mỗi home có thể mang một campaign khác nhau, giảm cảm giác template.
- Áp dụng cho home: 5 post/game là item trong event; 5 review là "đáng chơi trong event"; 3 blog là bài hướng dẫn hoặc bình luận; random là "event pick".

### 30. Split Mood Layout

- Nguồn cảm hứng: Pitchfork/Rolling Stone editorial tone, Netflix/Tudum entertainment mood, PC Gamer feature pages.
- Mô tả ngắn: chia home theo mood như "serious", "fun", "deep dive", "quick hit" thay vì category kỹ thuật.
- Vì sao khác biệt: cùng content có thể đổi cảm xúc mạnh giữa các mẫu home.
- Áp dụng cho home: 3 blog vào "deep dive"; 5 review vào "decide"; 5 post/game vào "quick hit"; random vào "wild card".

## Cách phối pattern để tạo 100 home không máy móc

- Không dùng một pattern làm toàn bộ trang. Mỗi home nên phối 2-3 pattern: ví dụ "Magazine Cover Front" + "Review Score Strip" + "Discovery Queue".
- Đổi trục phân loại giữa các mẫu: có mẫu theo thời gian, có mẫu theo platform, có mẫu theo mood, có mẫu theo hành động đọc/xem/chơi.
- Đổi vị trí random: hero sticker, queue đầu trang, card giữa trang, ticker cuối section, hoặc poster xoay vòng.
- Đổi tỷ lệ ảnh/chữ: có mẫu ảnh lớn, có mẫu text-heavy, có mẫu bảng/matrix, có mẫu rail compact.
- Đổi nhịp mobile: không phải mẫu nào cũng stack hero trước. Một số mẫu có thể đưa ticker, tag cloud hoặc review strip lên trước nếu đó là điểm khác biệt.

## Rủi ro trùng lặp

1. Rủi ro: 100 home đều bắt đầu bằng hero lớn + 3 card phụ.
   - Cách tránh: ít nhất 30-40% mẫu không dùng hero ảnh lớn; thay bằng ranking board, tag explorer, digest, matrix hoặc calendar.

2. Rủi ro: luôn theo thứ tự blog, review, post/game, random.
   - Cách tránh: mỗi pattern chọn một "nhân vật chính" khác nhau. Có mẫu review làm trung tâm, có mẫu random làm trung tâm, có mẫu post/game làm trung tâm.

3. Rủi ro: card giống nhau, chỉ đổi màu.
   - Cách tránh: đổi cấu trúc card: poster dọc, headline-only, score badge, timeline item, matrix row, compact rail, zine tile.

4. Rủi ro: random luôn bị đặt cuối trang nên không có giá trị thiết kế.
   - Cách tránh: biến random thành cơ chế: discovery queue, wild card, surprise topic, event pick, game of the visit.

5. Rủi ro: copy quá sát site tham khảo.
   - Cách tránh: mỗi mẫu phải trộn ít nhất 2 nguồn cảm hứng. Ví dụ lấy "review strip" từ Eurogamer nhưng đặt trong "App Store Today Cards" thay vì sao chép trang review.

6. Rủi ro: mọi mẫu đều cùng density.
   - Cách tránh: chia bộ 100 thành nhóm density: thoáng/editorial, dày/newsroom, store/catalog, utility/matrix, playful/random.

7. Rủi ro: màu sắc hoặc badge tạo cảm giác cùng một theme.
   - Cách tránh: định nghĩa mood theo pattern trước khi chọn màu. Store có thể dùng badge giá/sale; editorial dùng type scale; zine dùng tag; review dùng score/verdict.

8. Rủi ro: mobile layout bị giống nhau vì tất cả section chỉ stack từ trên xuống.
   - Cách tránh: một số pattern trên mobile nên ưu tiên rail ngang, bảng compact, accordion topic hoặc poster carousel thay vì stack card lớn.

9. Rủi ro: 5 review và 5 post/game thành hai grid 5 item lặp lại.
   - Cách tránh: review có thể là strip, matrix, ranking, twin column hoặc badge rail; post/game có thể là queue, calendar, platform lane, poster wall hoặc ticker.

10. Rủi ro: pattern chỉ đẹp khi có ảnh tốt.
    - Cách tránh: luôn có biến thể text-first cho từng nhóm: compact list, verdict matrix, digest, topic cloud, timeline.

