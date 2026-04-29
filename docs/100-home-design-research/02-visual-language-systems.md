# 02 - Visual language systems cho 100 home WordPress game/news

Tài liệu này tập trung vào ngôn ngữ thị giác để làm 100 mẫu home khác nhau nhưng vẫn triển khai được trong theme WordPress hiện tại. Phạm vi chỉ là trang home: `home.php`, `css/_home.scss`, `style.css` hoặc biến thể tương đương. Header/footer chỉ nên đụng tới khi lỗi trực tiếp với home.

Inventory nội dung phải giữ: 3 blog, 5 review, 5 post/game, dữ liệu lấy random như hiện tại. Khác biệt giữa các mẫu nên đến từ bố cục, nhịp card, texture, typography, hình khối, cách xử lý ảnh, nhãn category/rating, chứ không chỉ đổi màu.

## Nguyên tắc tránh trùng lặp

- Mỗi mẫu chọn một direction chính, không trộn quá nhiều phong cách.
- Mỗi direction phải có ít nhất 3 thay đổi cấu trúc: layout rhythm, card treatment, background treatment hoặc typography.
- Dùng CSS/SCSS là chính: `grid`, `aspect-ratio`, `clip-path`, pseudo-element, gradient, border, shadow, texture nhẹ. Không phụ thuộc JS phức tạp.
- Ảnh thumbnail hiện có phải vẫn là trung tâm vì site game/news cần scan nhanh.
- Mobile không được chỉ là "co lại"; cần đổi nhịp đọc, thứ tự section, chiều cao card, và cách hiện excerpt.

## 32 style direction khả thi

### 01. Arcade Cabinet Neon
- **Cảm giác:** Mặt máy arcade cũ, vui, sáng, có năng lượng game rõ rệt.
- **Palette gợi ý:** Nền than `#101014`, viền neon cyan `#00e5ff`, hồng punch `#ff2ea6`, vàng coin `#ffd447`, trắng hơi xanh `#eafcff`.
- **Typography gợi ý:** Heading dùng `Bebas Neue` hoặc `Teko`; body dùng `Poppins`. Label nhỏ có thể dùng uppercase, tracking nhẹ.
- **Card treatment:** Card ảnh như màn hình arcade, viền dày 2-3 lớp, góc bo vừa, bóng neon mỏng. Category badge thành nút coin tròn hoặc pill sáng.
- **Background treatment:** Nền tối với radial glow sau hero, pattern scanline rất nhẹ bằng `repeating-linear-gradient`.
- **Mobile behavior:** Hero cao vừa, blog lớn full width, review/game thành 2 cột. Giảm glow và bỏ excerpt ở card nhỏ để không rối.
- **Điều cần tránh để không giống mẫu khác:** Không dùng glassmorphism hoặc nền tím gradient chung chung; phải có cảm giác "máy chơi game" qua viền, scanline, badge coin.

### 02. Newspaper Game Desk
- **Cảm giác:** Trang báo game nghiêm túc, editorial, đọc tin nhanh như chuyên mục review.
- **Palette gợi ý:** Giấy ngà `#f4efe4`, mực đen `#191714`, đỏ báo `#b3261e`, xám chì `#77736b`, vàng note `#d6a536`.
- **Typography gợi ý:** Heading dùng `Merriweather` hoặc `Libre Baskerville`; body dùng `Source Sans 3` hoặc `Poppins`.
- **Card treatment:** Card ít bo, nền giấy, ảnh có border 1px, tiêu đề giống headline. Review card có rating đặt như tem biên tập.
- **Background treatment:** Texture giấy bằng noise nhẹ hoặc gradient mịn; section chia bằng line ngang như cột báo.
- **Mobile behavior:** Một cột đọc dọc, section title sticky nhẹ không cần JS, card nhỏ chuyển thành media object ảnh trái chữ phải.
- **Điều cần tránh để không giống mẫu khác:** Không dùng neon, shadow sâu, overlay tối; trọng tâm là chữ, line, giấy và nhịp báo.

### 03. Esports Tactical Board
- **Cảm giác:** Bảng chiến thuật đội tuyển, chính xác, căng, nhiều dữ liệu nhưng vẫn rõ.
- **Palette gợi ý:** Nền navy đen `#07111f`, xanh field `#123d32`, lime `#b8ff3d`, đỏ alert `#ff4d4d`, trắng lạnh `#eef6ff`.
- **Typography gợi ý:** Heading dùng `Rajdhani` hoặc `Barlow Condensed`; body dùng `Inter`.
- **Card treatment:** Card như module chiến thuật: viền mảnh, góc 4px, số thứ tự, tag dạng tactical chip. Review rating có thể thành thanh segmented.
- **Background treatment:** Grid line như bản đồ, đường chéo mảnh, dấu crosshair bằng pseudo-element.
- **Mobile behavior:** Giữ section theo stack; mỗi card có meta line rõ, ảnh ratio 16:9 để scan. Game list dùng 2 cột với số thứ tự lớn.
- **Điều cần tránh để không giống mẫu khác:** Không biến thành dashboard công ty; cần motif chiến thuật như grid map, marker, tactical label.

### 04. Pixel Cartridge Library
- **Cảm giác:** Thư viện băng game retro, hoài cổ nhưng sạch và dễ code.
- **Palette gợi ý:** Nền kem `#f3ead7`, xanh cartridge `#2b6f6a`, đỏ 8-bit `#e94040`, vàng nhãn `#f7c94b`, đen pixel `#202020`.
- **Typography gợi ý:** Heading dùng `Press Start 2P` rất tiết chế cho label/section; title dài dùng `Poppins` hoặc `Rubik`.
- **Card treatment:** Card ảnh có khung pixel bằng `box-shadow` nhiều lớp hoặc border vuông, góc 0-2px. Badge category dạng nhãn cartridge.
- **Background treatment:** Pattern pixel/dot rất nhỏ, không lặp quá đậm. Hero như hộp băng game lớn.
- **Mobile behavior:** Bỏ font pixel ở tiêu đề dài; giữ pixel cho badge. Grid card 2 cột cho game, blog/review 1 cột để không vỡ chữ.
- **Điều cần tránh để không giống mẫu khác:** Không chỉ thêm font pixel; phải có cartridge frame, nhãn dán, viền vuông.

### 05. Manga Panel News
- **Cảm giác:** Tạp chí manga/game Nhật, giàu nhịp, nhiều khung ảnh bất đối xứng.
- **Palette gợi ý:** Trắng `#fffaf2`, đen mực `#111111`, đỏ manga `#e6002d`, xanh phụ `#1c65ff`, vàng highlight `#ffd400`.
- **Typography gợi ý:** Heading dùng `Oswald` hoặc `Bangers` cho section; body dùng `Noto Sans` hoặc `Poppins`.
- **Card treatment:** Card như panel truyện: border đen 2px, `clip-path` chéo nhẹ cho card lớn, caption block trắng đè lên ảnh.
- **Background treatment:** Halftone dots bằng radial gradient, speed lines quanh hero bằng pseudo-element.
- **Mobile behavior:** Tắt các góc chéo phức tạp, chuyển panel thành card vuông/rectangle rõ. Chỉ giữ halftone ở heading để nhẹ.
- **Điều cần tránh để không giống mẫu khác:** Không dùng neon arcade; khác biệt nằm ở panel border, halftone và bố cục truyện tranh.

### 06. Console Dashboard Dark
- **Cảm giác:** Home giống dashboard console/launcher, hiện đại, cao cấp, dễ scan game.
- **Palette gợi ý:** Nền đen xanh `#080b12`, surface `#151b27`, xanh điện `#48a7ff`, tím rất ít `#8f65ff`, chữ `#f5f7fb`.
- **Typography gợi ý:** Heading dùng `Space Grotesk`; body dùng `Inter` hoặc `Poppins`.
- **Card treatment:** Card ảnh lớn, bo 12px, overlay gradient dưới, focus ring rõ. Review card có rating pill nổi trên ảnh.
- **Background treatment:** Nền phẳng tối với gradient lớn rất mềm, section dùng band surface khác nhau.
- **Mobile behavior:** Hero thành carousel giả bằng một featured card tĩnh; game grid 2 cột, review list 1 cột có ảnh rộng.
- **Điều cần tránh để không giống mẫu khác:** Không thêm quá nhiều glass/blur; cần cảm giác hệ điều hành console sạch và focused.

### 07. VHS Late Night Gaming
- **Cảm giác:** Chương trình game đêm trên TV/VHS, retro, hơi nhiễu, giàu cảm xúc.
- **Palette gợi ý:** Đen tím `#120d18`, magenta `#ff3b8d`, xanh TV `#25d7ff`, cam VHS `#ff8a3d`, trắng mờ `#f3eef8`.
- **Typography gợi ý:** Heading dùng `Anton` hoặc `Archivo Black`; body dùng `IBM Plex Sans`.
- **Card treatment:** Card có border lệch màu như chromatic aberration bằng shadow đỏ/xanh. Ảnh có overlay scanline và timestamp label.
- **Background treatment:** Grain/noise rất nhẹ, horizontal line lặp, gradient TV glow sau hero.
- **Mobile behavior:** Giảm shadow lệch để chữ rõ; chỉ giữ timestamp ở card lớn. Card nhỏ bỏ excerpt.
- **Điều cần tránh để không giống mẫu khác:** Không biến thành cyberpunk sạch; VHS phải có nhiễu, timestamp và cảm giác broadcast cũ.

### 08. Indie Cozy Shelf
- **Cảm giác:** Ấm, thân thiện, dành cho game casual/indie, ít căng thẳng.
- **Palette gợi ý:** Kem ấm `#fbf3e4`, xanh sage `#8aa68b`, cam đất `#d97845`, nâu chữ `#3e3128`, xanh mực `#2d5168`.
- **Typography gợi ý:** Heading dùng `Fraunces` hoặc `Recoleta` nếu có; body dùng `Nunito Sans` hoặc `Poppins`.
- **Card treatment:** Card như thẻ bìa sách nhỏ, bo 10-12px, shadow mềm, ảnh không overlay quá tối. Category badge như sticker giấy.
- **Background treatment:** Nền giấy/linen nhẹ, section có block màu pastel rộng.
- **Mobile behavior:** Một cột rộng với spacing thoáng, game cards 2 cột nếu title ngắn. Không dùng layout quá dày.
- **Điều cần tránh để không giống mẫu khác:** Không dùng beige đơn điệu; phải có contrast xanh mực/cam đất và nhịp shelf rõ.

### 09. Brutalist Scoreboard
- **Cảm giác:** Thô, trực diện, giống bảng điểm giải đấu hoặc trang tin underground.
- **Palette gợi ý:** Trắng `#f7f7f2`, đen `#080808`, xanh scoreboard `#00a86b`, đỏ lỗi `#ff2b2b`, vàng cảnh báo `#ffe100`.
- **Typography gợi ý:** Heading dùng `Archivo Black`; body dùng `Arial`/`Inter` với weight mạnh.
- **Card treatment:** Card vuông góc, border đen dày, shadow cứng offset 6px. Section title rất lớn, số thứ tự to.
- **Background treatment:** Nền phẳng, line kẻ lớn, không texture tinh tế. Có thể dùng blocks đen/trắng xen kẽ.
- **Mobile behavior:** Giữ border dày nhưng giảm shadow offset. Cards full width cho blog/review, game 2 cột có số lớn.
- **Điều cần tránh để không giống mẫu khác:** Không bo tròn mềm, không blur, không gradient; khác biệt nằm ở độ cứng và tương phản.

### 10. Sci-Fi Hologram Index
- **Cảm giác:** Bảng chỉ mục hologram trong game sci-fi, lạnh, kỹ thuật.
- **Palette gợi ý:** Nền đen xanh `#03131a`, cyan hologram `#44f6ff`, teal `#00bfa6`, tím lạnh `#8b7dff`, chữ `#e6fbff`.
- **Typography gợi ý:** Heading dùng `Orbitron` vừa phải hoặc `Exo 2`; body dùng `Inter`.
- **Card treatment:** Card trong suốt nhẹ, border cyan 1px, góc cắt bằng `clip-path`, overlay line kỹ thuật. Rating như module HUD.
- **Background treatment:** Grid phối cảnh nhẹ, radial glow, pseudo corner brackets.
- **Mobile behavior:** Bỏ clip-path phức tạp ở card nhỏ, giữ border/corner bracket. Tăng độ đậm nền card để đọc tốt.
- **Điều cần tránh để không giống mẫu khác:** Không lẫn với console dashboard; direction này phải có HUD, góc cắt và technical line.

### 11. Game Store Front Window
- **Cảm giác:** Trang chủ như storefront bán game, rõ sản phẩm, giàu thumbnail.
- **Palette gợi ý:** Nền sáng `#f5f7fa`, surface `#ffffff`, xanh store `#2563eb`, xanh lá sale `#16a34a`, cam tag `#f97316`, chữ `#111827`.
- **Typography gợi ý:** Heading dùng `Inter Tight`; body dùng `Inter` hoặc `Poppins`.
- **Card treatment:** Card như product tile: ảnh trên, title dưới, meta/rating gọn, badge category như sale tag. Review nổi bằng border accent.
- **Background treatment:** Nền sạch với band section nhạt, không quá trang trí.
- **Mobile behavior:** Game grid 2 cột như app store, blog/review thành list card có ảnh trái. CTA/view more luôn rõ.
- **Điều cần tránh để không giống mẫu khác:** Không biến thành SaaS landing page; phải giữ cảm giác store/game shelf bằng tile sản phẩm.

### 12. Comic Sticker Collage
- **Cảm giác:** Zine trẻ, nhiều sticker, vui, hơi lộn xộn có kiểm soát.
- **Palette gợi ý:** Nền trắng ngà `#fff7e8`, hồng `#ff4f9a`, vàng `#ffd23f`, xanh `#00b8a9`, đen outline `#171717`.
- **Typography gợi ý:** Heading dùng `Luckiest Guy` hoặc `Baloo 2`; body dùng `Poppins`.
- **Card treatment:** Card ảnh có outline đen, rotate rất nhẹ bằng class biến thể, badge sticker tròn/sao. Shadow cứng màu.
- **Background treatment:** Doodle pattern nhỏ bằng CSS hoặc asset nhẹ, tape strip ở góc card bằng pseudo-element.
- **Mobile behavior:** Bỏ rotate trên mobile để không tạo khoảng trống; giữ sticker badge và shadow màu.
- **Điều cần tránh để không giống mẫu khác:** Không giống manga panel: ở đây ưu tiên sticker, tape, collage, không dùng panel truyện nghiêm ngặt.

### 13. Fantasy Quest Codex
- **Cảm giác:** Sổ nhiệm vụ RPG/fantasy, cổ điển, phù hợp game phiêu lưu.
- **Palette gợi ý:** Giấy parchment `#efe0bd`, nâu mực `#3a2718`, xanh rêu `#476747`, đỏ rượu `#8c2f39`, vàng đồng `#c69c45`.
- **Typography gợi ý:** Heading dùng `Cinzel` hoặc `Cormorant Garamond`; body dùng `Lora` hoặc `Poppins`.
- **Card treatment:** Card như trang sách/nhiệm vụ: border đôi, corner ornament đơn giản CSS, rating như huy hiệu đồng.
- **Background treatment:** Texture parchment nhẹ, section divider như rule trang sách, không cần illustration phức tạp.
- **Mobile behavior:** Card full width, ornament giảm về border đơn, font heading không quá nhỏ. Game grid 2 cột nếu ảnh vuông.
- **Điều cần tránh để không giống mẫu khác:** Không thành medieval quá nặng; tránh icon rồng/kiếm lặp lại gây sến, tập trung vào codex và huy hiệu.

### 14. Racing Pit Lane
- **Cảm giác:** Nhanh, thể thao, phù hợp game racing/action và tin hot.
- **Palette gợi ý:** Đen carbon `#101010`, đỏ racing `#e10600`, trắng `#ffffff`, vàng pit `#ffd000`, xám thép `#8b8f98`.
- **Typography gợi ý:** Heading dùng `Barlow Condensed` hoặc `Oswald`; body dùng `Inter`.
- **Card treatment:** Card có cạnh chéo nhẹ, label như biển pit lane, ảnh crop mạnh. Blog lớn như poster race.
- **Background treatment:** Pattern checker flag hoặc carbon fiber rất nhẹ, line chéo tạo tốc độ.
- **Mobile behavior:** Tắt nhiều đường chéo trên card nhỏ, giữ checker accent ở section title. Scroll dọc nhanh, ít excerpt.
- **Điều cần tránh để không giống mẫu khác:** Không dùng neon arcade; tốc độ đến từ line chéo, checker, đỏ/đen thể thao.

### 15. Strategy Map Room
- **Cảm giác:** Phòng bản đồ chiến lược, trầm, phù hợp game chiến thuật và news phân tích.
- **Palette gợi ý:** Nền olive đậm `#20251d`, giấy map `#d8c9a5`, đỏ pin `#c43a31`, xanh sông `#3f7f8f`, vàng cũ `#d1a84c`.
- **Typography gợi ý:** Heading dùng `Alegreya Sans SC` hoặc `Roboto Condensed`; body dùng `Merriweather Sans`.
- **Card treatment:** Card như thẻ tọa độ: ảnh có overlay grid map, badge category như pin, review rating thành tọa độ/score block.
- **Background treatment:** Contour lines, grid tọa độ, subtle map paper texture.
- **Mobile behavior:** Các contour line chỉ ở hero/section header; card list dùng pin badge nhỏ. Tránh nền quá tối làm mệt mắt.
- **Điều cần tránh để không giống mẫu khác:** Không giống esports tactical: map room ấm, giấy, tọa độ; không phải HUD điện tử.

### 16. Noir Detective Archive
- **Cảm giác:** Hồ sơ điều tra, bí ẩn, hợp review/game dark hoặc news phân tích.
- **Palette gợi ý:** Đen than `#111111`, vàng đèn `#d8a33f`, giấy hồ sơ `#d9c8a9`, đỏ stamp `#a82424`, xám khói `#565656`.
- **Typography gợi ý:** Heading dùng `Playfair Display` hoặc `Cormorant`; body dùng `IBM Plex Serif`/`Inter`.
- **Card treatment:** Card như folder/case file, ảnh monochrome hoặc giảm saturation bằng CSS filter, badge như stamp "review"/"blog".
- **Background treatment:** Nền tối có light cone gradient, texture giấy cho card, line mảnh như hồ sơ.
- **Mobile behavior:** Bỏ hiệu ứng ảnh quá tối; tăng contrast text. Card full width, folder tab vẫn giữ ở đầu card.
- **Điều cần tránh để không giống mẫu khác:** Không thành newspaper; noir cần ánh đèn, stamp, ảnh giảm màu và mood điều tra.

### 17. Morning Cartoon Channel
- **Cảm giác:** Kênh cartoon sáng cuối tuần, vui, phù hợp game casual/kids.
- **Palette gợi ý:** Xanh trời `#8ed8ff`, vàng bơ `#ffe066`, đỏ kẹo `#ff5c5c`, tím grape `#8e6cff`, trắng `#fffdf5`.
- **Typography gợi ý:** Heading dùng `Fredoka` hoặc `Baloo 2`; body dùng `Nunito`.
- **Card treatment:** Card bo lớn nhưng ổn định, shadow mềm màu, badge category như bubble. Ảnh sáng, ít overlay đen.
- **Background treatment:** Pattern cloud/blob đơn giản bằng radial gradients nhỏ, band màu sáng.
- **Mobile behavior:** Cards lớn, khoảng cách rộng, 2 cột chỉ dùng cho game thumbnails. Chữ phải to hơn bình thường.
- **Điều cần tránh để không giống mẫu khác:** Không dùng sticker collage quá lộn xộn; direction này sạch, tròn, sáng như kênh TV trẻ em.

### 18. Minimal Grid Gallery
- **Cảm giác:** Gallery biên tập rất sạch, premium, để thumbnail game tự nổi bật.
- **Palette gợi ý:** Trắng `#ffffff`, xám nền `#f2f3f5`, đen `#121212`, accent xanh `#1f6feb` hoặc đỏ `#d72638`, border `#d9dde3`.
- **Typography gợi ý:** Heading dùng `Neue Haas Grotesk` nếu có hoặc `Inter Tight`; body dùng `Inter`.
- **Card treatment:** Card gần như không shadow, border 1px, ảnh ratio chuẩn, caption đặt ngoài ảnh. Badge nhỏ, không trang trí.
- **Background treatment:** Nền phẳng, grid line hoặc section spacing là chính.
- **Mobile behavior:** Một cột cho blog/review, game 2 cột rất gọn. Giữ khoảng trắng, không nén quá dày.
- **Điều cần tránh để không giống mẫu khác:** Không gọi là "modern clean" chung chung; phải có grid chính xác, caption ngoài ảnh và kỷ luật spacing.

### 19. Vaporwave Mall Arcade
- **Cảm giác:** Trung tâm thương mại ảo thập niên 90, hoài cổ, mơ màng.
- **Palette gợi ý:** Hồng pastel `#ff8bd1`, cyan `#69e7ff`, tím đêm `#2b194f`, kem sáng `#fff2d8`, cam sunset `#ff9b54`.
- **Typography gợi ý:** Heading dùng `Monoton` rất tiết chế hoặc `Righteous`; body dùng `Inter`.
- **Card treatment:** Card có frame pastel, shadow màu mềm, category như biển cửa hàng. Hero có ảnh lớn với overlay sunset gradient nhẹ.
- **Background treatment:** Grid phối cảnh ở đáy hero, sun stripe CSS, gradient pastel nhưng kiểm soát saturation.
- **Mobile behavior:** Giữ sunset/header, bỏ grid phối cảnh nếu chiếm chỗ. Cards stack để không loạn màu.
- **Điều cần tránh để không giống mẫu khác:** Không dùng cyberpunk neon đậm; vaporwave phải pastel, mall, sunset, grid retro.

### 20. Lab Review Bench
- **Cảm giác:** Phòng lab test game, phân tích, đáng tin cậy cho review.
- **Palette gợi ý:** Nền sáng lạnh `#eef3f8`, trắng `#ffffff`, xanh lab `#0ea5e9`, xanh lá kết quả `#22c55e`, đỏ cảnh báo `#ef4444`, chữ `#0f172a`.
- **Typography gợi ý:** Heading dùng `IBM Plex Sans Condensed`; body dùng `IBM Plex Sans`.
- **Card treatment:** Review card như report: score lớn, metric chips, ảnh trong khung sạch. Blog/game card có label "tested"/"new".
- **Background treatment:** Grid paper nhẹ, divider như bảng thông số, icon không cần phức tạp.
- **Mobile behavior:** Score đặt trên đầu card, metric chips wrap. Card nhỏ bỏ mô tả dài để tránh bảng quá chật.
- **Điều cần tránh để không giống mẫu khác:** Không biến thành SaaS analytics; vẫn phải có thumbnail game và cảm giác review bench.

### 21. Broadcast Sports Desk
- **Cảm giác:** Trường quay thể thao/esports, nhiều headline, nhịp tin nóng.
- **Palette gợi ý:** Navy `#071b33`, đỏ broadcast `#e31b23`, trắng `#ffffff`, bạc `#cbd5e1`, xanh highlight `#38bdf8`.
- **Typography gợi ý:** Heading dùng `Roboto Condensed` hoặc `Barlow Condensed`; body dùng `Roboto`.
- **Card treatment:** Card có lower-third caption, ticker-like category bar, review score như bảng điểm. Hero như headline chính trên màn hình lớn.
- **Background treatment:** Nền band ngang, diagonal light streak nhẹ, không cần animation.
- **Mobile behavior:** Lower-third ngắn lại, section title thành bar full width. Game grid 2 cột, blog headline full width.
- **Điều cần tránh để không giống mẫu khác:** Không giống racing; broadcast tập trung vào lower-third, ticker, studio headline chứ không phải tốc độ xe.

### 22. Toy Box Packaging
- **Cảm giác:** Kệ hộp đồ chơi/game, sinh động nhưng có hệ thống.
- **Palette gợi ý:** Trắng sữa `#fff8ef`, xanh hộp `#2dd4bf`, đỏ nhãn `#ef4444`, vàng `#facc15`, tím `#a78bfa`, chữ `#202124`.
- **Typography gợi ý:** Heading dùng `Rubik Mono One` cho section ngắn hoặc `Rubik`; body dùng `Poppins`.
- **Card treatment:** Card giống hộp sản phẩm: ảnh trong window, khung dày màu, sticker age/rating giả lập. Bo vừa, không quá tròn.
- **Background treatment:** Pattern kệ hộp hoặc diagonal stripe nhẹ, section như shelf ngang.
- **Mobile behavior:** Shelf chuyển thành grid 2 cột cho game, blog/review 1 cột với window ảnh lớn.
- **Điều cần tránh để không giống mẫu khác:** Không thành cartoon channel; toy packaging cần khung hộp, sticker sản phẩm, shelf.

### 23. Hacker Patch Notes
- **Cảm giác:** Terminal dev/game patch notes, kỹ thuật, hợp news cập nhật.
- **Palette gợi ý:** Đen `#050807`, xanh terminal `#39ff88`, amber `#ffbf3f`, xám code `#718096`, trắng xanh `#d8ffe8`.
- **Typography gợi ý:** Heading dùng `IBM Plex Mono` hoặc `JetBrains Mono`; body có thể dùng mono nhẹ hoặc `Inter`.
- **Card treatment:** Card như terminal pane: border 1px, heading prefix `>` hoặc `#`, timestamp/category mono. Ảnh thumbnail giữ trong khung scan.
- **Background treatment:** Code grid, noise tối, cursor block tĩnh bằng pseudo-element ở section title.
- **Mobile behavior:** Không dùng mono quá nhỏ; tăng line-height. Card list 1 cột, game thumbnail 2 cột với title ngắn.
- **Điều cần tránh để không giống mẫu khác:** Không giống sci-fi hologram; terminal phải phẳng, mono, patch-note, ít glow.

### 24. Premium Magazine Cover
- **Cảm giác:** Tạp chí game cao cấp, nhiều khoảng thở, hero mạnh.
- **Palette gợi ý:** Nền off-white `#f8f5ef`, đen `#151515`, đỏ editorial `#c1121f`, vàng champagne `#d4af37`, xám `#8a8a8a`.
- **Typography gợi ý:** Heading dùng `Canela` nếu có hoặc `Playfair Display`; body dùng `Inter`/`Poppins`.
- **Card treatment:** Card tối giản, ảnh lớn, title ngoài ảnh hoặc overlay rất nhẹ. Review card có score tròn như seal.
- **Background treatment:** Nền phẳng premium, section divider mảnh, hero như cover spread.
- **Mobile behavior:** Hero title chuyển dưới ảnh nếu overlay khó đọc; spacing vẫn rộng, không nhồi quá nhiều card trên màn đầu.
- **Điều cần tránh để không giống mẫu khác:** Không giống newspaper; magazine cao cấp dùng ảnh lớn, khoảng thở, seal, không nhiều cột chữ nhỏ.

### 25. Jungle Adventure Map
- **Cảm giác:** Phiêu lưu, khám phá, hợp game platform/adventure.
- **Palette gợi ý:** Xanh rừng `#1f4d35`, xanh lá sáng `#73c76b`, vàng bản đồ `#e2bd67`, nâu đất `#7a4f2a`, trắng ấm `#fff6df`.
- **Typography gợi ý:** Heading dùng `Bree Serif` hoặc `Alegreya Sans`; body dùng `Nunito Sans`.
- **Card treatment:** Card như waypoint: ảnh có khung map, badge như marker, title có underline dạng trail. Review card như logbook.
- **Background treatment:** Leaf silhouette rất nhẹ, contour map, texture giấy/đất.
- **Mobile behavior:** Tắt leaf pattern dày, giữ marker badge. Card full width cho blog/review để ảnh adventure rõ.
- **Điều cần tránh để không giống mẫu khác:** Không lẫn fantasy codex; jungle tập trung vào khám phá, map trail, xanh rừng, không parchment cổ điển quá nhiều.

### 26. City Pop Game Guide
- **Cảm giác:** Đô thị Nhật thập niên 80, sáng, nhạc tính, retro tinh tế.
- **Palette gợi ý:** Kem `#fff1df`, coral `#ff6f61`, teal `#1fb6aa`, navy `#22324a`, vàng đèn `#ffd166`.
- **Typography gợi ý:** Heading dùng `Poppins` bold hoặc `Outfit`; body dùng `Noto Sans`.
- **Card treatment:** Card poster nhỏ, viền mảnh, ảnh có overlay màu ấm, category badge như ticket tàu.
- **Background treatment:** Stripe mặt trời, line skyline tối giản bằng CSS border/gradient.
- **Mobile behavior:** Poster cards stack, ticket badge đặt trên ảnh. Hạn chế skyline để không che nội dung.
- **Điều cần tránh để không giống mẫu khác:** Không thành vaporwave; city pop ấm, poster/ticket/skyline, ít tím và ít grid 3D.

### 27. Blueprint Builder
- **Cảm giác:** Bản vẽ thiết kế game, cấu trúc, phù hợp site hướng dẫn/game mechanics.
- **Palette gợi ý:** Xanh blueprint `#0f3d5e`, cyan line `#79d8ff`, trắng `#f4fbff`, vàng marker `#facc15`, xám xanh `#9bb7c9`.
- **Typography gợi ý:** Heading dùng `Space Grotesk`; body dùng `Inter`; meta dùng mono nhẹ.
- **Card treatment:** Card như module bản vẽ: border dashed, corner coordinate, ảnh nằm trong khung crop có label kích thước.
- **Background treatment:** Blueprint grid, line đo, số tọa độ rất mờ.
- **Mobile behavior:** Grid nền giảm opacity, dashed border giữ. Bỏ coordinate nhỏ nếu card dưới 320px.
- **Điều cần tránh để không giống mẫu khác:** Không giống lab review; blueprint là bản vẽ layout/measurement, không phải bảng test metric.

### 28. Festival Game Fair
- **Cảm giác:** Hội chợ game, rực rỡ, nhiều quầy, phù hợp portal giải trí.
- **Palette gợi ý:** Nền sáng `#fff7ed`, đỏ hội chợ `#ef233c`, xanh `#2ec4b6`, vàng `#ffbe0b`, tím phụ `#8338ec`, chữ `#1f2937`.
- **Typography gợi ý:** Heading dùng `Cooper Black` nếu có hoặc `Bree Serif`; body dùng `Poppins`.
- **Card treatment:** Card như booth: mái sọc ở đầu card bằng pseudo-element, badge vé, shadow mềm. Game cards như quầy nhỏ.
- **Background treatment:** Stripe lều hội chợ, confetti rất ít, section band màu.
- **Mobile behavior:** Mái sọc chỉ giữ ở card lớn, card nhỏ dùng badge vé. Giảm số màu trong một viewport.
- **Điều cần tránh để không giống mẫu khác:** Không thành sticker collage; festival phải có booth, vé, mái sọc, nhịp hội chợ.

### 29. Ice Tech Minimal
- **Cảm giác:** Lạnh, sạch, futuristic nhưng không tối; hợp review công nghệ/game mobile.
- **Palette gợi ý:** Nền băng `#eef7fb`, trắng `#ffffff`, xanh băng `#7dd3fc`, xanh đậm `#0f4c81`, bạc `#b6c5d1`, accent coral `#ff6b6b`.
- **Typography gợi ý:** Heading dùng `Sora`; body dùng `Inter`.
- **Card treatment:** Card trắng, border xanh rất nhạt, shadow trong suốt, ảnh có bo 8px. Badge như chip trong UI thiết bị.
- **Background treatment:** Gradient lạnh mịn, line wave hoặc mesh cực nhẹ; không dùng orbs rời.
- **Mobile behavior:** Giữ nền sáng, card 1 cột cho text dài. Game grid 2 cột có ảnh lớn và title ngắn.
- **Điều cần tránh để không giống mẫu khác:** Không dùng glass blur quá đà; ice tech là sáng, sắc, viền mảnh, không phải console dark.

### 30. Graffiti Battle Wall
- **Cảm giác:** Đường phố, cạnh tranh, hợp game đối kháng/action.
- **Palette gợi ý:** Nền bê tông `#2c2c2c`, trắng sơn `#f5f5f5`, xanh spray `#00d084`, hồng `#ff2d75`, vàng `#ffd400`, đen `#0b0b0b`.
- **Typography gợi ý:** Heading dùng `Anton` hoặc `Permanent Marker` rất tiết chế; body dùng `Inter`.
- **Card treatment:** Card ảnh như poster dán tường, border rách giả bằng `clip-path` nhẹ hoặc shadow cứng, badge như spray tag.
- **Background treatment:** Texture concrete, spray marks mờ bằng radial gradients, tape/sticker ở góc.
- **Mobile behavior:** Tắt clip rách trên card nhỏ, giữ poster/tape. Chữ title dùng font dễ đọc thay vì marker nếu dài.
- **Điều cần tránh để không giống mẫu khác:** Không thành comic sticker; graffiti phải tối hơn, có bê tông, poster, spray tag.

### 31. Library Index Cards
- **Cảm giác:** Kho lưu trữ game có tổ chức, học thuật, nhẹ và tin cậy.
- **Palette gợi ý:** Giấy thư viện `#f6f0df`, xanh catalog `#315c5b`, đỏ tab `#b0443e`, nâu gỗ `#8a6848`, mực `#2a2520`.
- **Typography gợi ý:** Heading dùng `Crimson Pro`; body dùng `Source Sans 3`; meta dùng `IBM Plex Mono`.
- **Card treatment:** Card như index card: tab trên, line kẻ nhẹ, ảnh thumbnail nhỏ hơn, nhiều meta rõ. Review rating như dấu phân loại.
- **Background treatment:** Nền giấy, line kẻ ngang rất mờ, divider như ngăn kéo catalog.
- **Mobile behavior:** Card list một cột, ảnh thumbnail trái hoặc trên tùy chiều rộng. Tab vẫn giữ nhưng không chiếm quá cao.
- **Điều cần tránh để không giống mẫu khác:** Không giống newspaper; index cards thiên về catalog/meta/tab, không phải headline báo.

### 32. High Contrast Accessibility Pop
- **Cảm giác:** Rất rõ, thân thiện accessibility, màu mạnh nhưng không rối.
- **Palette gợi ý:** Nền trắng `#ffffff`, chữ đen `#000000`, xanh link `#005fcc`, vàng highlight `#ffd500`, hồng action `#d1006f`, xám border `#444444`.
- **Typography gợi ý:** Heading dùng `Atkinson Hyperlegible` hoặc `Inter`; body dùng cùng family để tối ưu đọc.
- **Card treatment:** Card border 2px rõ, focus state lớn, badge có text/icon đơn giản, không dựa vào màu duy nhất. Overlay ảnh phải đủ contrast.
- **Background treatment:** Nền phẳng, pattern rất nhẹ hoặc không dùng. Khác biệt nằm ở contrast, nhịp block và affordance.
- **Mobile behavior:** Font lớn, hit area rộng, card stack rõ. Game grid 2 cột chỉ khi title không bị cắt khó hiểu.
- **Điều cần tránh để không giống mẫu khác:** Không làm thành brutalist; vẫn mềm và thực dụng, nhưng contrast/focus/accessibility là điểm nhớ.

## Style tokens nên chuẩn hóa

Để làm 100 mẫu mà vẫn kiểm soát được, nên chuẩn hóa token ở cấp home rồi mỗi mẫu chỉ override token hoặc thêm class modifier như `.home-style-arcade`, `.home-style-newspaper`.

### Color tokens

- `$home-bg`: nền tổng của home.
- `$home-surface`: nền card/section.
- `$home-surface-alt`: band nền xen kẽ cho section.
- `$home-text`: màu chữ chính.
- `$home-muted`: chữ phụ/excerpt/meta.
- `$home-border`: màu viền.
- `$home-primary`: accent chính.
- `$home-secondary`: accent phụ.
- `$home-danger` hoặc `$home-hot`: dùng cho nhãn hot/breaking/rating nổi bật.
- `$home-overlay-start` và `$home-overlay-end`: gradient overlay trên ảnh.

### Typography tokens

- `$home-font-body`: font nội dung.
- `$home-font-heading`: font heading/section.
- `$home-font-meta`: font label, score, timestamp.
- `$home-heading-transform`: uppercase/normal/capitalize theo style.
- `$home-heading-weight`, `$home-title-weight`, `$home-meta-weight`.
- `$home-title-line-height`, `$home-excerpt-line-height`.
- `$home-letter-spacing-tight`: mặc định `0`; chỉ style retro/mono dùng tracking dương nhẹ.

### Layout tokens

- `$home-container-max`: mặc định theo theme hiện tại khoảng `1240px`.
- `$home-section-gap`: khoảng cách giữa blog/review/game.
- `$home-grid-gap`: gap chung của card grid.
- `$home-hero-height-desktop`, `$home-hero-height-mobile`.
- `$home-card-ratio-lg`, `$home-card-ratio-md`, `$home-card-ratio-sm`.
- `$home-card-padding`, `$home-card-padding-sm`.
- `$home-section-title-align`: left/center/split.
- `$home-density`: `compact`, `standard`, `editorial`, `poster`.

### Shape and surface tokens

- `$home-radius-none`, `$home-radius-sm`, `$home-radius-md`, `$home-radius-lg`.
- `$home-border-width`: 0/1/2/4px tùy style.
- `$home-shadow-soft`, `$home-shadow-hard`, `$home-shadow-glow`.
- `$home-card-overflow`: hidden/visible cho sticker hoặc shadow offset.
- `$home-card-frame-style`: none, outline, double, inset, tape, folder, panel, terminal.
- `$home-image-filter`: none, saturate, grayscale, sepia, contrast, brightness.
- `$home-overlay-opacity`: mức overlay để đọc text trên ảnh.

### Component tokens

- `$home-badge-shape`: pill, square, sticker, tab, coin, ticket, stamp.
- `$home-badge-position`: top-left, top-right, bottom-left, inline-meta.
- `$home-rating-style`: stars, score-pill, segmented-bar, seal, metric-row.
- `$home-viewmore-style`: text-link, pill-button, tab-button, ticker-link.
- `$home-section-divider`: none, line, thick-rule, dashed, ornamental, band.
- `$home-card-title-placement`: overlay, below-image, split-caption, lower-third.
- `$home-excerpt-lines-lg`, `$home-excerpt-lines-md`, `$home-excerpt-lines-sm`.

### Background and texture tokens

- `$home-bg-pattern`: none, grid, dots, scanline, paper, concrete, map, checker, stripe.
- `$home-bg-pattern-opacity`: nên trong khoảng 0.03-0.12 để không phá thumbnail.
- `$home-hero-treatment`: cover-photo, poster, dashboard, magazine-cover, map, terminal.
- `$home-section-band-radius`: dùng cho band nền nếu style cần.
- `$home-texture-asset`: optional, chỉ dùng khi texture CSS không đủ; asset phải nhẹ.

### Responsive tokens

- `$home-mobile-columns-game`: thường 2, riêng style đọc nhiều thì 1.
- `$home-mobile-card-radius`: có thể nhỏ hơn desktop để đỡ chiếm diện tích.
- `$home-mobile-hide-excerpt-sm`: true cho card nhỏ.
- `$home-mobile-section-gap`: giảm 20-35% so với desktop.
- `$home-mobile-hero-order`: hero-first hoặc content-first nếu mẫu editorial cần headline trước.
- `$home-mobile-decoration-level`: full, reduced, minimal.

### Quy tắc kiểm soát 100 mẫu

- Mỗi mẫu ghi rõ direction chính, token overrides, và 1-2 motif không được dùng lại trong mẫu gần kề.
- Không để 5 mẫu liên tiếp cùng một kiểu: dark neon, editorial paper, dashboard, pastel, brutalist.
- Mỗi 10 mẫu nên có ít nhất: 2 dark, 2 bright editorial, 2 playful, 2 technical, 1 retro, 1 premium/minimal.
- Những motif dễ trùng cần giới hạn: glass blur, purple gradient, card bo lớn, sticker random, neon glow.
- Nếu chỉ thay palette mà giữ cùng card/background/type/layout thì không tính là direction mới.
