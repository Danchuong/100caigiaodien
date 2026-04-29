# 20 concept đầu cho 100 giao diện home

Phạm vi của file này chỉ là trang home. Tất cả concept dưới đây mặc định giữ đúng 3 nhóm nội dung bắt buộc: 5 `review` random, 5 `post/game` random và 3 `blog` random. Header và footer giữ nguyên, chỉ cần thiết kế lại `home.php`, `css/_home.scss` và build ra `style.css`.

## des-1 - Cinematic Neon Launchpad

- Tên concept: Cinematic Neon Launchpad (đã làm bản đầu).
- One-line idea: Trang chủ mở như trailer game, hero tối mạnh, review nổi bật như poster chính và các game nằm thành catalog nhanh bên dưới.
- Section order: Hero cinematic -> 5 review random -> 5 post/game random -> 3 blog random.
- Hero treatment: Full-bleed background từ featured image của page, overlay đen, headline uppercase lớn, kicker nhỏ màu neon và 1 CTA chính.
- Review treatment: Grid 3 cột, review đầu tiên chiếm 2 hàng như poster lớn, 4 review còn lại là card ảnh trên, nội dung dưới, có rating.
- Game treatment: 5 game thành grid đều 5 cột desktop, card tối màu, ảnh tỷ lệ 4:3, title clamp 2 dòng.
- Blog treatment: 3 blog thành 3 card editorial nhẹ hơn, ảnh 16:10, có label và excerpt ngắn.
- Palette: Nền #f4f1e8, text #161714, card đen #161714, neon lime #d7ff4f, cam #ff6b3d, trắng #ffffff.
- Mobile rule: Từ 768px trở xuống review/grid/game/blog stack thành 1 cột hoặc 2 cột nhỏ; hero giảm chiều cao, headline không quá 3 dòng.
- Risk/tránh trùng: Không biến các mẫu sau thành cùng một hero poster tối; nếu clone từ des-1 phải đổi cấu trúc grid, tỷ lệ ảnh và cách ưu tiên nội dung.

## des-2 - Bright Trailer Shelf

- Tên concept: Bright Trailer Shelf.
- One-line idea: Vẫn có hero cinematic nhưng chuyển sang cảm giác app store sáng, hero sáng màu và game được ưu tiên ngay sau fold.
- Section order: Hero sáng có featured game -> 5 post/game random -> 5 review random -> 3 blog random.
- Hero treatment: Hero chia 60/40, bên trái headline và CTA, bên phải là mock shelf gồm 3 thumbnail game xếp lớp trên nền trắng ấm.
- Review treatment: 5 review hiện như list đánh giá có điểm số lớn bên trái, ảnh thumbnail nhỏ bên phải, review đầu có nền màu accent.
- Game treatment: 5 game là shelf ngang có card compact, icon vuông 1:1, title, tag nhỏ và nút "Play" dạng pill.
- Blog treatment: 3 blog thành hàng "Latest notes" rất gọn, mỗi bài gồm ngày đăng, title và excerpt 1 dòng.
- Palette: Nền #fbfaf6, text #18202a, card #ffffff, border #d9e0ea, accent xanh #2f6df6, vàng #ffd166, xanh lá #39b980.
- Mobile rule: Hero đổi thành ảnh trên, text dưới; game shelf thành horizontal scroll card rộng 152px để giữ cảm giác store.
- Risk/tránh trùng: Tránh dùng overlay tối và poster lớn giống des-1; điểm khác chính là hero split sáng màu và game-first.

## des-3 - Retro Arcade Marquee

- Tên concept: Retro Arcade Marquee.
- One-line idea: Home như cửa arcade có bảng đèn marquee, border rõ và các block nội dung như máy game cổ điển.
- Section order: Hero marquee -> 5 post/game random -> 3 blog random -> 5 review random.
- Hero treatment: Hero cao vừa, headline nằm trong khung marquee có viền dày, thumbnail hero cắt thành dải ngang như bảng hiệu.
- Review treatment: 5 review là các "score ticket", mỗi card có điểm/rating ở góc, ảnh nhỏ và title đậm, review không dùng card poster lớn.
- Game treatment: 5 game thành 1 hàng cabinet card, ảnh 3:4 đứng, viền màu khác nhau, hover nâng card như bấm máy game.
- Blog treatment: 3 blog như thông báo arcade, nền vàng nhạt, title lớn, excerpt ngắn và tag dạng tem dán.
- Palette: Nền #15110f, vàng #ffd23f, đỏ #ef476f, xanh #06d6a0, xanh dương #118ab2, kem #fff6d6.
- Mobile rule: Các cabinet card đổi thành grid 2 cột; blog và review stack 1 cột, giữ viền rõ nhưng giảm padding để không bị chật.
- Risk/tránh trùng: Không dùng gradient neon cyberpunk; retro phải có border, block phẳng, nhiều màu rõ như poster arcade.

## des-4 - Editorial Cover Story

- Tên concept: Editorial Cover Story.
- One-line idea: Cinematic hero được xử lý như bìa tạp chí game, ưu tiên đọc review và tin blog theo nhịp editorial.
- Section order: Hero cover story -> 5 review random -> 3 blog random -> 5 post/game random.
- Hero treatment: Hero như trang bìa, ảnh full rộng nhưng text nằm thành cột trái có rule line, subcopy ngắn và CTA nhỏ.
- Review treatment: 5 review gồm 1 feature review lớn ngang, 4 review còn lại thành list 2x2 có excerpt và label "Review".
- Game treatment: 5 game đưa xuống cuối như "Play queue", grid nhỏ giàu text, ảnh vuông, tập trung title.
- Blog treatment: 3 blog thành 1 bài lớn + 2 bài nhỏ, giống cụm tin biên tập, có ngày đăng rõ.
- Palette: Nền #f7f3ea, mực #111111, xám #6f6a60, đỏ rượu #8f1d2c, vàng giấy #d7b56d, trắng #ffffff.
- Mobile rule: Feature review và blog lớn stack lên trước; tất cả excerpt clamp 2 dòng, không để headline ảnh hưởng chiều ngang 320px.
- Risk/tránh trùng: Không làm quá "gaming neon"; mẫu này cần cảm giác tạp chí in, spacing rộng, typography nghiêm túc.

## des-5 - Cyberpunk Signal Split

- Tên concept: Cyberpunk Signal Split.
- One-line idea: Hero cinematic được tách thành các lớp tín hiệu, game/review/blog như các màn hình trong thành phố cyberpunk.
- Section order: Hero split signal -> 5 review random -> 5 post/game random -> 3 blog random.
- Hero treatment: Hero split chéo bằng CSS clip-path, ảnh bên phải, headline bên trái, có ticker giả lập bằng text ngắn không cần JS.
- Review treatment: 5 review là panel kính tối, review đầu ngang full width, 4 review còn lại grid 4 ô có rating cyan.
- Game treatment: 5 game thành "launch pads" vuông, ảnh zoom crop, số thứ tự 01-05 lớn ở góc.
- Blog treatment: 3 blog như transmission log, card ngang có timestamp, label và title.
- Palette: Nền #08070d, tím đen #1a1028, cyan #00e5ff, magenta #ff2bd6, vàng #f7ff4a, trắng xanh #e7fbff.
- Mobile rule: Bỏ clip-path trên mobile, hero thành block dọc; ticker cho scroll ngang ngắn, card game 2 cột.
- Risk/tránh trùng: Dễ bị giống des-1 nếu chỉ dùng nền tối; phải có split chéo, ticker và panel signal để tạo nhận diện riêng.

## des-6 - Console Store Premiere

- Tên concept: Console Store Premiere.
- One-line idea: Home giống trang đầu của console store, hero là banner khuyên chơi và các nội dung nằm theo shelf sản phẩm.
- Section order: Hero store banner -> 5 post/game random -> 5 review random -> 3 blog random.
- Hero treatment: Banner rộng với ảnh cover, bên dưới hero có 3 mini stat pill như "New", "Reviewed", "Quick play".
- Review treatment: 5 review hiện như product review tiles, mỗi tile có ảnh 16:9, score badge tròn và excerpt 1-2 dòng.
- Game treatment: 5 game là catalog shelf ở đầu, card có icon/cover, title, platform badge và CTA nhỏ.
- Blog treatment: 3 blog thành "Store news" list dọc, có divider rõ, không dùng card ảnh lớn.
- Palette: Nền #eef2f7, text #172033, card #ffffff, xanh console #1769ff, xanh lá #20c997, xám #8a94a6, đen #0b1020.
- Mobile rule: Shelf game thành horizontal scroll, review grid 1 cột, stat pill trong hero wrap thành 2 hàng.
- Risk/tránh trùng: Không dùng layout review feature lớn; concept này phải đọc như store/catalog với card đều và CTA gọn.

## des-7 - Mono Impact Stage

- Tên concept: Mono Impact Stage.
- One-line idea: Hero cinematic tối giản đen trắng với một màu accent duy nhất, tạo cảm giác premium và khác hẳn các mẫu nhiều màu.
- Section order: Hero typography stage -> 5 review random -> 3 blog random -> 5 post/game random.
- Hero treatment: Hero tập trung vào chữ, ảnh hero cắt thành strip ngang dưới headline, nền trắng hoặc đen tùy viewport.
- Review treatment: 5 review là card không shadow, border đen mỏng, review đầu chiếm ngang 100% với title rất lớn.
- Game treatment: 5 game thành grid đen trắng, ảnh vuông, hover chỉ đổi border/accent, không dùng nền neon.
- Blog treatment: 3 blog dạng column editorial, có số 01/02/03 lớn và title text-only hoặc ảnh rất nhỏ.
- Palette: Nền #ffffff, text #080808, nền phụ #f1f1f1, accent đỏ #e11937, border #1a1a1a, xám #777777.
- Mobile rule: Hero text không quá 2.4rem tại 320px; các số thứ tự blog thu nhỏ và nằm trên title để tránh tràn ngang.
- Risk/tránh trùng: Tránh thêm quá nhiều màu hoặc card bo tròn; điểm nhận diện là đen/trắng/accent, border sắc và typography.

## des-8 - Soft Cloud Premiere

- Tên concept: Soft Cloud Premiere.
- One-line idea: Cinematic hero được làm mềm như portal game thân thiện, phù hợp site casual/mobile game.
- Section order: Hero soft premiere -> 3 blog random -> 5 post/game random -> 5 review random.
- Hero treatment: Hero có nền pastel, ảnh hero trong khung 8px, text thân thiện, có 2 CTA nhỏ và badge "Today".
- Review treatment: 5 review là các card mềm có icon rating và excerpt, không có poster tối; review section nằm cuối để trang kết thúc bằng uy tín.
- Game treatment: 5 game là card pastel 2 hàng desktop, card đầu rộng gấp đôi để tạo điểm nhấn.
- Blog treatment: 3 blog lên ngay sau hero như "Editor's notes", card nhỏ có ảnh tròn góc nhẹ và title dễ đọc.
- Palette: Nền #f6f7fb, lavender #e8e5ff, mint #dff8ef, coral #ff7d67, xanh #5271ff, text #243044.
- Mobile rule: Tất cả section có padding dọc ngắn; game card đầu không span trên mobile, tất cả stack thành 1 cột hoặc 2 cột nhỏ.
- Risk/tránh trùng: Không dùng neon/dark; nếu ảnh game quá tối cần overlay sáng nhẹ để tông pastel vẫn đồng nhất.

## des-9 - Esport Matchday Arena

- Tên concept: Esport Matchday Arena.
- One-line idea: Home như bảng tin trận đấu esport, hero có cảm giác sân đấu và các nội dung xếp theo ranking.
- Section order: Hero matchday -> 5 review random -> 5 post/game random -> 3 blog random.
- Hero treatment: Hero có headline lớn, strip "matchday picks", background tối đỏ/than, 2 mini card nổi bật nằm trong hero.
- Review treatment: 5 review như bảng xếp hạng, review đầu là "Top review", 4 review còn lại thành row có rank, rating và thumbnail.
- Game treatment: 5 game thành bracket/card hàng ngang, mỗi card có số thứ tự, ảnh vuông và CTA Play.
- Blog treatment: 3 blog như match report, card ngang có tag "News", thời gian và excerpt 1 dòng.
- Palette: Nền #101114, đỏ #ff3b30, vàng #ffcc00, xanh điện #25d9ff, trắng #f8f8f8, xám #2b2e35.
- Mobile rule: Ranking rows giữ dạng list dọc; bracket game đổi thành 2 cột, không dùng chữ nhỏ hơn 14px.
- Risk/tránh trùng: Tránh biến thành cyberpunk; esport cần có rank, score, bracket và nhiều block dạng bảng tin trận đấu.

## des-10 - Pocket Trailer Stack

- Tên concept: Pocket Trailer Stack.
- One-line idea: Cinematic hero nhưng thiết kế mobile-first, mỗi section ngắn, scan nhanh như ứng dụng đọc tin trên điện thoại.
- Section order: Hero compact -> 5 post/game random -> 5 review random -> 3 blog random.
- Hero treatment: Hero cao vừa, ảnh nền có overlay nhẹ, headline ngắn, CTA full-width trên mobile, desktop chỉ là bản phóng to của mobile.
- Review treatment: 5 review thành list card ngang compact, thumbnail 96-120px, rating và title ưu tiên hơn excerpt.
- Game treatment: 5 game là rail horizontal trên mobile, desktop hiện 5 cột nhưng vẫn giữ card compact.
- Blog treatment: 3 blog là list text-first, có ảnh nhỏ hoặc icon label, không dùng grid lớn.
- Palette: Nền #f9fafb, text #111827, card #ffffff, xanh #2563eb, cam #f97316, xám #e5e7eb, đen #0f172a.
- Mobile rule: 320px là breakpoint gốc; mỗi card có chiều cao ổn định, rail game có snap scroll, không để card hover là tính năng chính.
- Risk/tránh trùng: Không được chỉ thu nhỏ des-2; concept này phải có rhythm mobile app, section ngắn và list compact.

## des-11 - Dark Gaming Front Page

- Tên concept: Dark Gaming Front Page.
- One-line idea: Chuyển sang magazine grid tối màu, top fold gồm nhiều câu chuyện cùng lúc thay vì một hero duy nhất.
- Section order: Top magazine grid (1 review + 2 game + 1 blog) -> 4 review còn lại -> 3 game còn lại -> 2 blog còn lại.
- Hero treatment: Không dùng hero full-bleed; top area là grid báo chí với 1 ô lead lớn và 3 ô phụ, tất cả lấy từ nội dung random.
- Review treatment: 1 review làm lead story, 4 review còn lại thành "Review desk" 2x2 có rating và excerpt ngắn.
- Game treatment: 2 game nằm trong top grid, 3 game còn lại thành hàng "Quick play" nhỏ bên dưới.
- Blog treatment: 1 blog chen vào top grid như tin nóng, 2 blog còn lại là list ngang.
- Palette: Nền #0d0f14, card #171b23, text #f5f7fb, lime #b8ff3c, cyan #38d5ff, border #2b3340.
- Mobile rule: Top grid stack theo thứ tự lead review -> game -> blog -> game; các ô phụ không để text overlay quá 2 dòng.
- Risk/tránh trùng: Khác des-1 ở việc không có 1 hero poster; top fold phải đọc như trang báo có nhiều tin.

## des-12 - Clean Daily News Desk

- Tên concept: Clean Daily News Desk.
- One-line idea: Magazine grid sáng màu, dễ đọc như trang báo công nghệ/game hằng ngày.
- Section order: Masthead grid (1 blog + 1 review + 2 game) -> 4 review còn lại -> 3 game còn lại -> 2 blog còn lại.
- Hero treatment: Top masthead có title page nhỏ, grid 12 cột, 1 blog lead bên trái, review và game là các module bên phải.
- Review treatment: 1 review ở top grid, 4 review còn lại thành list có thumbnail 140px, divider mỏng và score text.
- Game treatment: 2 game ở top grid, 3 game còn lại thành "Playable now" card vuông đều.
- Blog treatment: 1 blog lead lớn có excerpt 3 dòng, 2 blog còn lại text-only ở cuối như related reading.
- Palette: Nền #ffffff, text #17202a, paper #f5f7fa, border #dfe5ec, xanh #1f6feb, vàng #f2b705, đỏ #d7263d.
- Mobile rule: Masthead grid thành 1 cột; giữ divider thay vì shadow để mobile nhẹ và đọc tốt.
- Risk/tránh trùng: Tránh card bo tròn dày đặc như app store; mẫu này cần cảm giác newsroom với divider, cột và hierarchy rõ.

## des-13 - Retro Zine Grid

- Tên concept: Retro Zine Grid.
- One-line idea: Magazine grid kiểu fanzine arcade, các block bật màu, title lớn và hình ảnh crop mạnh.
- Section order: Zine grid (1 review + 1 game + 1 blog) -> 4 game còn lại -> 4 review còn lại -> 2 blog còn lại.
- Hero treatment: Top grid không có hero truyền thống, gồm các block màu bất đối xứng, có sticker label và headline nghiêng nhẹ bằng CSS.
- Review treatment: 1 review là block lớn trong zine grid, 4 review còn lại như các mẩu cắt báo có viền dày.
- Game treatment: 1 game là block ảnh lớn, 4 game còn lại thành grid 2x2 cabinet mini.
- Blog treatment: 1 blog vào top grid, 2 blog còn lại là note card màu kem có title đậm.
- Palette: Nền #fff4cf, mực #1c1b18, đỏ #ff3f34, xanh #00a8cc, vàng #ffd32a, tím #7d5fff.
- Mobile rule: Bỏ các rotation lớn trên mobile; chỉ giữ sticker label, mỗi block stack và có padding tối thiểu 16px.
- Risk/tránh trùng: Không dùng card tối/cyber; retro zine phải có cảm giác in ấn, block màu phẳng, viền dày.

## des-14 - Premium Review Journal

- Tên concept: Premium Review Journal.
- One-line idea: Magazine grid sang trọng, review là trung tâm như tạp chí phân tích game.
- Section order: Review-led grid (2 review + 1 blog + 1 game) -> 3 review còn lại -> 4 game còn lại -> 2 blog còn lại.
- Hero treatment: Top area như journal cover, 2 review chiếm phần lớn, blog/game là sidebar nhỏ, không dùng CTA lớn.
- Review treatment: 2 review đầu có ảnh lớn và title editorial, 3 review còn lại thành card dọc có score badge tinh tế.
- Game treatment: 1 game chen sidebar, 4 game còn lại thành strip cover nhỏ phía sau reviews.
- Blog treatment: 1 blog là editorial note trong sidebar, 2 blog còn lại xếp thành 2 cột text và ảnh nhỏ.
- Palette: Nền #f3efe7, card #fffdf8, text #15120f, gold #b88a44, xanh mực #1f3d4d, xám #82786d.
- Mobile rule: Ưu tiên 2 review lên đầu, sau đó game strip 2 cột; không để serif/heading lớn vượt 3 dòng.
- Risk/tránh trùng: Tránh làm thành newspaper sạch giống des-12; des-14 cần tập trung review, màu premium và spacing rộng.

## des-15 - Cyber News Terminal

- Tên concept: Cyber News Terminal.
- One-line idea: Magazine grid như màn hình terminal tin game, nhiều module nhỏ, ticker và dữ liệu giả lập.
- Section order: Terminal grid (1 blog + 2 review + 2 game) -> 3 review còn lại -> 3 game còn lại -> 2 blog còn lại.
- Hero treatment: Top fold là terminal dashboard: cột trái tin blog lead, cột giữa 2 review, cột phải 2 game và ticker dọc.
- Review treatment: 2 review ở terminal grid có score dạng chip, 3 review còn lại thành log rows với border cyan.
- Game treatment: 2 game ở top grid, 3 game còn lại thành quick launch list có số ID và thumbnail.
- Blog treatment: 1 blog làm "signal lead", 2 blog còn lại thành log card text-only.
- Palette: Nền #05070a, panel #101820, text #d7fff1, cyan #00f0ff, amber #ffb020, hồng #ff4fd8, line #243746.
- Mobile rule: Terminal grid thành accordion-like sections bằng CSS stack, ticker đổi thành hàng ngang scroll.
- Risk/tránh trùng: Khác des-5 ở việc đây là magazine/dashboard nhiều module, không phải hero split cinematic.

## des-16 - Console Weekly Catalog

- Tên concept: Console Weekly Catalog.
- One-line idea: Magazine grid kiểu bản tin của console store, nhưng top fold giống catalog hằng tuần hơn là hero.
- Section order: Catalog grid (2 game + 1 review + 1 blog) -> 3 game còn lại -> 4 review còn lại -> 2 blog còn lại.
- Hero treatment: Top grid có "Weekly picks" heading, 2 game cover lớn, review/blog nằm thành cột insight bên cạnh.
- Review treatment: 1 review ở top grid như editor score, 4 review còn lại thành carousel giả lập bằng grid 4 cột.
- Game treatment: 2 game lead chiếm ưu tiên, 3 game còn lại thành shelf với icon, title và tag "New".
- Blog treatment: 1 blog insight ở top grid, 2 blog còn lại thành store update list.
- Palette: Nền #edf1f5, card #ffffff, text #111827, xanh #0057ff, xanh lá #22c55e, bạc #cbd5e1, than #263241.
- Mobile rule: 2 game lead stack trước review/blog; carousel giả lập thành scroll ngang có snap.
- Risk/tránh trùng: Không lặp lại des-6 store banner; mẫu này là magazine catalog với top grid nhiều item, không có banner hero.

## des-17 - Black Ink Dispatch

- Tên concept: Black Ink Dispatch.
- One-line idea: Magazine grid đen trắng như báo in, chỉ dùng một màu đỏ để đánh dấu nội dung nóng.
- Section order: Newspaper grid (1 blog + 2 review + 1 game) -> 4 game còn lại -> 3 review còn lại -> 2 blog còn lại.
- Hero treatment: Top fold có masthead lớn bằng text, các ô tin nằm dưới như báo in, ảnh đen trắng/duotone bằng CSS filter.
- Review treatment: 2 review đầu trong newspaper grid, 3 review còn lại thành list có score trong ô vuông đỏ.
- Game treatment: 1 game trong top grid, 4 game còn lại thành "Play column" 2x2 với ảnh monochrome.
- Blog treatment: 1 blog lead như bài xã luận, 2 blog còn lại là headline list có divider.
- Palette: Nền #fafafa, mực #050505, xám #e7e7e7, đỏ #d11124, xám phụ #666666, trắng #ffffff.
- Mobile rule: Masthead thu nhỏ, grid thành single column, filter ảnh giữ nhưng text không overlay trên ảnh.
- Risk/tránh trùng: Tránh dùng màu xanh/vàng gaming; nhận diện phải là black-white newspaper, divider và duotone.

## des-18 - Soft Sunday Bulletin

- Tên concept: Soft Sunday Bulletin.
- One-line idea: Magazine grid mềm, dễ đọc, hợp với site casual game/news cần cảm giác nhẹ và thân thiện.
- Section order: Bulletin grid (1 blog + 1 review + 2 game) -> 4 review còn lại -> 3 game còn lại -> 2 blog còn lại.
- Hero treatment: Top bulletin là grid pastel với card có nền màu khác nhau, không overlay ảnh nặng; mỗi ô có label rõ.
- Review treatment: 1 review trong top grid, 4 review còn lại thành card 2 cột với rating icon và excerpt ngắn.
- Game treatment: 2 game trong top grid có ảnh lớn, 3 game còn lại thành row card pastel nhỏ.
- Blog treatment: 1 blog lead có ảnh và excerpt, 2 blog còn lại là note card text-first.
- Palette: Nền #f8f5f0, mint #dff6ec, xanh trời #dcecff, hồng #ffe1e1, text #27313f, accent #ff7a59.
- Mobile rule: Mỗi card giữ border radius tối đa 8px, padding 14-16px; top bulletin stack theo thứ tự blog, review, game.
- Risk/tránh trùng: Dễ bị giống des-8 pastel; khác biệt là magazine grid nhiều ô tin, không có hero premiere.

## des-19 - Esport Tabloid Grid

- Tên concept: Esport Tabloid Grid.
- One-line idea: Magazine grid dạng tabloid esport, nhiều headline mạnh, rank và score nằm trong top fold.
- Section order: Tabloid grid (2 review + 2 game + 1 blog) -> 3 review còn lại -> 3 game còn lại -> 2 blog còn lại.
- Hero treatment: Top grid có headline lớn dạng breaking news, 2 review như match analysis, 2 game như picks, 1 blog như report.
- Review treatment: 2 review top có score rất lớn, 3 review còn lại thành ranking rows 01-03.
- Game treatment: 2 game top có ảnh action, 3 game còn lại thành bracket mini với border dày.
- Blog treatment: 1 blog trong top fold, 2 blog còn lại thành "Reports" list ngang.
- Palette: Nền #111111, card #1e1e1e, trắng #f4f4f4, đỏ #ff2a2a, vàng #ffd400, xanh #2de2e6.
- Mobile rule: Top fold stack, score lớn nằm trên ảnh thay vì để bên cạnh; ranking rows có min-height ổn định.
- Risk/tránh trùng: Không thành des-9 arena hero; des-19 phải như trang báo tabloid với nhiều ô tin và headline dày.

## des-20 - Compact Morning Brief

- Tên concept: Compact Morning Brief.
- One-line idea: Magazine grid mobile-first, nhiều nội dung nhưng nhẹ, phù hợp người đọc muốn scan nhanh trên điện thoại.
- Section order: Brief grid (1 blog + 1 review + 1 game) -> 4 review còn lại -> 4 game còn lại -> 2 blog còn lại.
- Hero treatment: Top brief chỉ cao ngắn, gồm 3 card lead nhỏ thay vì hero, trên desktop xếp 3 cột, trên mobile stack.
- Review treatment: 1 review lead nhỏ trong brief grid, 4 review còn lại thành list compact có thumbnail 88px và rating text.
- Game treatment: 1 game lead trong brief grid, 4 game còn lại thành grid 2 cột mobile-first, desktop 4 cột.
- Blog treatment: 1 blog lead trong brief grid, 2 blog còn lại là cards text-only ở cuối.
- Palette: Nền #f7f8fa, card #ffffff, text #1f2937, xanh #0ea5e9, tím #7c3aed, cam #fb923c, border #e5e7eb.
- Mobile rule: Thiết kế từ 320px trước, không có section cao quá 420px, mỗi card có title clamp 2 dòng và ảnh có aspect-ratio cố định.
- Risk/tránh trùng: Không chỉ là des-10 đổi sang magazine; des-20 phải có top brief 3 nội dung tích hợp và list tin dày đặc hơn.
