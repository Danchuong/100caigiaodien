# Taxonomy chống trùng cho 100 mẫu home WordPress game/news

## 1. Mục tiêu

Tài liệu này định nghĩa framework để tạo 100 concept home khác nhau cho site game/news mà không rơi vào công thức "10 layout x 10 style". Scope chỉ là trang home. Header/footer không thuộc phạm vi, trừ khi lỗi trực tiếp làm hỏng trải nghiệm home.

Mỗi concept phải giữ đủ khối nội dung bắt buộc:

- 3 bài blog
- 5 bài review
- 5 post/game
- 1 khối random

Các file triển khai thường gặp sau này: `home.php`, `css/_home.scss`, `style.css`.

## 2. Vì sao không dùng ma trận 10 x 10

Cách "10 layout x 10 style" tạo cảm giác đủ số lượng nhưng dễ bị lộ công thức:

- Chỉ đổi màu, font, radius hoặc thứ tự block nhưng nhịp đọc vẫn giống nhau.
- Hero khác hình nhưng vai trò thông tin giống nhau.
- Card cùng cấu trúc, chỉ đổi skin.
- Mobile vẫn collapse về một column giống hệt.
- Người xem nhận ra cùng một template được reskin.

Framework tốt hơn là xem mỗi home như một "design genome": một tổ hợp quyết định về kiến trúc thông tin, cách mở màn, nhịp nội dung, ẩn dụ thị giác, mật độ, điều hướng nội bộ, cơ chế card và hành vi responsive. Một concept mới chỉ được chấp nhận khi genome của nó đủ xa các concept đã có.

## 3. Các bất biến của mọi concept

Mọi concept có thể rất khác nhau về cá tính, nhưng không được phá các bất biến sau:

| Bất biến | Yêu cầu |
| --- | --- |
| Phạm vi | Chỉ thiết kế home, không thiết kế lại toàn site. |
| Nội dung bắt buộc | Có đủ 3 blog, 5 review, 5 post/game, random. |
| Khả năng scan | Người dùng nhận ra đâu là game/post chính, đâu là review, đâu là blog. |
| Không phụ thuộc header/footer | Home tự có nhịp và điều hướng nội bộ, không dựa vào sửa header/footer. |
| WordPress-friendly | Có thể map sang loop/query block rõ ràng, không cần dữ liệu giả quá đặc thù. |
| Responsive thật | Mobile không chỉ là desktop xếp dọc; phải có quyết định riêng về ưu tiên nội dung. |

## 4. Trục phân loại chính

Mỗi concept được mô tả bằng 8 trục. Khi tạo mẫu mới, phải chọn giá trị cụ thể cho từng trục và ghi lại vào registry.

### 4.1 Information Architecture

Trục này quyết định "người dùng hiểu trang bằng cấu trúc nào", không chỉ là grid mấy cột.

| Mã | Kiểu IA | Mô tả | Phù hợp khi |
| --- | --- | --- | --- |
| `IA-FRONT` | Front page newspaper | Tin/game chính dẫn dắt, các mục khác là nhánh phụ. | Site thiên về cập nhật nhanh. |
| `IA-HUB` | Category hub | Home như trung tâm đi vào Review, Game, Blog, Random. | Site có nhiều nhóm độc giả. |
| `IA-RANK` | Ranking board | Nội dung được tổ chức theo top, hot, mới, đáng thử. | Game/news có yếu tố cạnh tranh. |
| `IA-FEED` | Editorial feed | Một dòng đọc liên tục, xen kẽ module theo nhịp biên tập. | Site muốn cảm giác magazine. |
| `IA-QUEST` | Quest path | Người dùng đi theo hành trình: khám phá, đánh giá, chơi, đọc thêm. | Site game muốn cảm giác nhiệm vụ. |
| `IA-DASH` | Player dashboard | Home như bảng điều khiển: trạng thái, danh sách, quick access. | Site game utilitarian, scan nhanh. |
| `IA-MAP` | World map | Nội dung nằm theo vùng/đảo/khu vực chủ đề. | Site có thể dùng ẩn dụ thế giới game. |
| `IA-SHELF` | Library shelf | Nội dung như kệ sưu tập, phân tầng theo loại và độ mới. | Site có nhiều bài evergreen. |
| `IA-TIMELINE` | Timeline | Home kể theo thời gian phát hành/cập nhật. | Site news hoặc release tracking. |
| `IA-MIXER` | Slot/mixer | Random và discovery là trọng tâm, nhưng vẫn giữ các mục bắt buộc. | Site cần cảm giác vui, bất ngờ. |

### 4.2 Hero Treatment

Hero không chỉ là ảnh lớn. Nó quyết định "lý do mở trang".

| Mã | Hero | Mô tả |
| --- | --- | --- |
| `HE-LEAD` | Lead story | Một bài/game chính rất rõ, có hierarchy báo chí. |
| `HE-CAROUSEL` | Curated carousel | 3-5 nội dung xoay nhưng có nhãn biên tập, không auto-scroll vô nghĩa. |
| `HE-SPLIT` | Split decision | Hai lựa chọn ngang sức, ví dụ "Chơi ngay" và "Đọc review". |
| `HE-RANK` | Top board | Hero là bảng xếp hạng hoặc top picks. |
| `HE-MAP` | Interactive map | Hero là bản đồ/zone dẫn vào cụm nội dung. |
| `HE-TERMINAL` | Console/terminal | Hero như màn hình điều khiển, log, command center. |
| `HE-COVER` | Magazine cover | Hero như bìa tạp chí, giàu typography và ảnh. |
| `HE-RANDOM` | Mystery pick | Hero đẩy random/discovery lên trước, có cảm giác "rút thăm". |
| `HE-CALENDAR` | Release calendar | Hero mở bằng lịch phát hành/sự kiện. |
| `HE-NO-HERO` | Anti-hero | Không có hero lớn; mở bằng dashboard hoặc lưới dày. |

### 4.3 Content Rhythm

Trục này làm trang có nhịp riêng thay vì chỉ đổi thứ tự section.

| Mã | Nhịp | Mô tả |
| --- | --- | --- |
| `RY-PULSE` | Pulse | Cụm lớn - nhỏ - lớn - nhỏ, tạo nhịp năng lượng. |
| `RY-LADDER` | Ladder | Từ nội dung chính xuống các cụm phụ theo độ quan trọng. |
| `RY-ZIGZAG` | Zigzag | Các module đổi hướng đọc trái/phải, tránh đều đều. |
| `RY-STACK` | Stack | Các band ngang rõ, mỗi band một vai trò. |
| `RY-MOSAIC` | Mosaic | Lưới bất đối xứng, card có kích thước khác nhau. |
| `RY-STREAM` | Stream | Feed liên tục, xen kẽ review/blog/random như insert biên tập. |
| `RY-LEVELS` | Levels | Mỗi cụm như một level/game stage. |
| `RY-TABS` | Tabbed rhythm | Ít section hơn, chuyển nội dung bằng tab trong home. |
| `RY-PAIRS` | Pairing | Mỗi review đi kèm game/post hoặc blog liên quan. |
| `RY-BURST` | Burst | Nhiều micro-card quanh một điểm nhấn lớn. |

### 4.4 Visual Metaphor

Ẩn dụ thị giác là nguồn cá tính chính. Không nên chỉ chọn "style dark/neon".

| Mã | Ẩn dụ | Cách thể hiện |
| --- | --- | --- |
| `VM-ARCADE` | Arcade cabinet | Panel, marquee, coin-slot, điểm số, nút bấm. |
| `VM-NEWSROOM` | Newsroom | Column báo chí, label biên tập, deadline, ticker. |
| `VM-CONTROLLER` | Game controller | Cụm điều hướng như cụm nút, analog, shortcut. |
| `VM-MAP` | Adventure map | Đảo, node, route, vùng khám phá. |
| `VM-INVENTORY` | Inventory | Slot, item card, rarity, compare stat. |
| `VM-TERMINAL` | Command center | Console, log, command palette, status light. |
| `VM-MAGAZINE` | Print magazine | Cover line, spread, editorial typography. |
| `VM-STREAM` | Live stream overlay | Chat strip, live badge, queue, clips. |
| `VM-LAB` | Review lab | Score bench, test result, specimen card. |
| `VM-CALENDAR` | Release calendar | Date blocks, event strips, schedule. |
| `VM-CARDTABLE` | Trading card table | Deck, hand, featured card, rarity frame. |
| `VM-RADIO` | Broadcast/radio | Frequency, now playing, bulletin, station IDs. |
| `VM-STADIUM` | Esports stadium | Bracket, scoreboard, match panels. |
| `VM-LIBRARY` | Game library | Shelves, catalog numbers, collection rows. |
| `VM-PORTAL` | Portal/gateway | Doorways into categories, dimensional layers. |

### 4.5 Density

Mật độ không chỉ là "thoáng" hay "dày"; nó ảnh hưởng tới người dùng và loại site.

| Mã | Mật độ | Quy tắc |
| --- | --- | --- |
| `DE-AIRY` | Airy editorial | Ít card trên viewport, nhiều khoảng thở, ảnh lớn. |
| `DE-BALANCED` | Balanced | Mỗi viewport có 1 điểm nhấn và 4-8 điểm scan. |
| `DE-DENSE` | Dense utility | Nhiều liên kết, bảng, list, phù hợp người đọc quay lại. |
| `DE-FOCUSED` | Focused | Ít lựa chọn ở đầu trang, tăng dần phía dưới. |
| `DE-CHAOTIC` | Controlled chaos | Nhiều mảnh nhỏ nhưng có trục neo rõ ràng. |

### 4.6 Navigation Within Home

Home phải có cơ chế điều hướng nội bộ riêng, không phụ thuộc vào menu site.

| Mã | Điều hướng | Mô tả |
| --- | --- | --- |
| `NA-ANCHOR` | Section anchors | Thanh neo tới Blog, Review, Game, Random. |
| `NA-TABS` | Content tabs | Tab đổi cụm nội dung trong cùng một vùng. |
| `NA-FILTER` | Quick filters | Bộ lọc nhanh: mới, hot, review cao, random. |
| `NA-RAIL` | Side rail | Rail dọc chứa category/state/quick jump. |
| `NA-MAPNODE` | Map nodes | Node trong hero hoặc map dẫn xuống section. |
| `NA-QUEUE` | Reading queue | Người dùng có luồng "tiếp theo nên xem gì". |
| `NA-DIAL` | Mode dial | Chuyển mode: News, Reviews, Games, Random. |
| `NA-NONE` | No explicit nav | Không có nav riêng, nhịp layout tự dẫn dắt. Chỉ dùng khi IA đủ rõ. |

### 4.7 Card Mechanics

Card là nơi dễ bị trùng nhất. Mỗi concept cần cơ chế card riêng, không chỉ đổi màu.

| Mã | Cơ chế card | Mô tả |
| --- | --- | --- |
| `CM-STANDARD` | Editorial card | Ảnh, title, excerpt, meta; dùng tiết chế. |
| `CM-SCORE` | Score card | Review card có điểm, pros/cons mini, verdict. |
| `CM-STAT` | Stat card | Game/post card có platform, genre, duration, tags. |
| `CM-TICKET` | Ticket | Card như vé arcade/sự kiện, hợp news hoặc random. |
| `CM-SLOT` | Inventory slot | Card có rarity/frame/status. |
| `CM-MINI` | Micro card | Card rất nhỏ cho dense dashboard. |
| `CM-FLIP` | Flip/reveal | Hover/tap lật thông tin phụ; mobile phải có fallback rõ. |
| `CM-STACK` | Stacked deck | Card chồng lớp, dùng cho random hoặc top picks. |
| `CM-COMPARE` | Compare strip | Review/game có chỉ số để so sánh ngang. |
| `CM-POSTER` | Poster | Card thiên về ảnh/poster, title overlay hoặc dưới ảnh. |

### 4.8 Responsive Behavior

Responsive là một trục concept, không phải bước cuối.

| Mã | Responsive | Mô tả |
| --- | --- | --- |
| `RB-PRIORITY` | Priority rewrite | Mobile đổi thứ tự theo nhu cầu: hero, quick nav, game, review, blog, random. |
| `RB-CAROUSEL` | Horizontal shelves | Một số cụm thành shelf kéo ngang có snap. |
| `RB-COLLAPSE` | Smart collapse | Card lớn rút gọn thành list có thumbnail và meta chính. |
| `RB-TABS` | Mobile tabs | Desktop nhiều cụm, mobile gom bằng tab. |
| `RB-DASH` | App-like dashboard | Mobile giống app dashboard, nhiều shortcut nhỏ. |
| `RB-STORY` | Story stack | Mobile thành chuỗi đọc editorial, ít grid. |
| `RB-MAPTOSTACK` | Map to route | Desktop map/node, mobile thành route/quest list. |
| `RB-DENSELIST` | Dense list | Mobile ưu tiên danh sách scan nhanh, ít ảnh lớn. |

## 5. Genome concept

Mỗi mẫu được ghi bằng một vector:

```text
ID | Codename | IA | Hero | Rhythm | Metaphor | Density | HomeNav | Card | Responsive | Notes
```

Ví dụ:

```text
H017 | Arcade Bulletin | IA-FRONT | HE-LEAD | RY-PULSE | VM-ARCADE | DE-BALANCED | NA-ANCHOR | CM-TICKET | RB-PRIORITY
H042 | Inventory Dispatch | IA-SHELF | HE-NO-HERO | RY-MOSAIC | VM-INVENTORY | DE-DENSE | NA-FILTER | CM-SLOT | RB-DENSELIST
```

Concept không được duyệt chỉ vì tên khác. Genome phải đủ khác.

## 6. Scoring chống trùng lặp

Khi đề xuất concept mới, so với từng concept cũ và tính điểm khác biệt tối đa 100. Điểm càng cao càng khác.

| Trục | Điểm khác biệt tối đa | Cách chấm |
| --- | ---: | --- |
| Information Architecture | 16 | Khác hẳn kiểu IA: 16. Cùng họ nhưng khác biến thể: 8. Giống: 0. |
| Hero Treatment | 14 | Hero có vai trò khác: 14. Cùng vai trò nhưng trình bày khác: 7. Giống: 0. |
| Content Rhythm | 14 | Nhịp đọc khác rõ: 14. Chỉ khác thứ tự section: 5. Giống: 0. |
| Visual Metaphor | 16 | Ẩn dụ khác họ: 16. Cùng họ game UI nhưng khác motif: 8. Giống: 0. |
| Density | 10 | Khác mức mật độ: 10. Lệch nhẹ: 5. Giống: 0. |
| Navigation Within Home | 10 | Cơ chế điều hướng khác: 10. Cùng cơ chế, khác vị trí: 4. Giống: 0. |
| Card Mechanics | 10 | Cơ chế card khác: 10. Cùng card, khác skin: 3. Giống: 0. |
| Responsive Behavior | 10 | Mobile có chiến lược khác: 10. Chỉ đổi breakpoint/grid: 3. Giống: 0. |

### Ngưỡng duyệt

Một concept mới phải đạt đồng thời các điều kiện:

- Điểm khác biệt tối thiểu với mọi concept cũ: `>= 54/100`.
- Điểm khác biệt với 20 concept gần nhất: `>= 64/100`.
- Phải khác ít nhất 4 trong 8 trục.
- Trong 4 trục trọng yếu `IA`, `Hero`, `Rhythm`, `Metaphor`, phải khác ít nhất 2 trục.
- Không được trùng bộ ba `IA + Hero + Rhythm` với bất kỳ concept cũ nào.
- Không được trùng bộ ba `Metaphor + Card + Responsive` với bất kỳ concept cũ nào.
- Nếu cùng `Visual Metaphor` với concept cũ, phải khác cả `IA` và `Card Mechanics`.

### Luật cảnh báo

Concept cần xem lại nếu có một trong các dấu hiệu:

- Chỉ đổi palette, font, radius, shadow, icon set.
- Desktop khác nhưng mobile collapse giống mẫu cũ.
- Vẫn dùng cùng công thức: hero lớn, 3 card dưới, 3 section grid.
- Random chỉ là một card phụ cuối trang, không có vai trò trong nhịp home.
- Review và game/post dùng cùng card, chỉ khác label.
- Tên concept nghe khác nhưng wireframe có thể tráo CSS với mẫu cũ.

## 7. Naming system cho 100 concept

Tên cần giúp quản lý, không chỉ nghe hay. Dùng 3 lớp:

```text
H### - Codename - Genome short
```

Trong đó:

- `H###`: số thứ tự cố định từ `H001` đến `H100`.
- `Codename`: 2-3 từ, mô tả cá tính dễ nhớ.
- `Genome short`: 4 tag chính gồm IA, Hero, Metaphor, Density.

Format đề xuất:

```text
H001 - Arcade Bulletin - FRONT/LEAD/ARCADE/BALANCED
H002 - Quest Dispatch - QUEST/MAP/MAP/FOCUSED
H003 - Review Lab Desk - DASH/NOHERO/LAB/DENSE
```

Quy tắc đặt tên:

- Không dùng tên chung như "Modern News", "Gaming Home 1", "Dark Grid".
- Codename phải gợi được hành vi hoặc ẩn dụ, ví dụ `Arcade Bulletin`, `Patch Radar`, `Inventory Weekly`.
- Hai concept không được có cùng danh từ chính nếu cùng metaphor, ví dụ không có `Arcade Bulletin` và `Arcade Digest` nếu cả hai đều `VM-ARCADE`.
- Nếu concept là biến thể có chủ đích, thêm hậu tố rõ: `H034 - Patch Radar Compact`, nhưng vẫn phải qua scoring.

## 8. Workflow chọn mẫu tiếp theo

Quy trình dùng khi chọn concept `H###` mới:

1. Cập nhật registry concept đã có.
   - Ghi đủ 8 trục, không chỉ ghi tên.
   - Đánh dấu 20 concept gần nhất để kiểm tra chống lặp mạnh hơn.

2. Chọn khoảng trống trong taxonomy.
   - Tìm trục đang ít dùng, ví dụ `IA-MAP`, `HE-CALENDAR`, `RB-MAPTOSTACK`.
   - Không bắt buộc cân bằng tuyệt đối; ưu tiên khoảng trống tạo concept có cá tính.

3. Viết concept brief một đoạn.
   - Nêu người dùng sẽ cảm thấy home này là gì: báo mới, dashboard, bản đồ nhiệm vụ, kệ thư viện.
   - Nêu vai trò của 3 blog, 5 review, 5 game/post, random.

4. Tạo genome nháp.
   - Chọn 8 tag.
   - Kiểm tra các bộ ba cấm trùng: `IA + Hero + Rhythm`, `Metaphor + Card + Responsive`.

5. Chấm điểm với concept cũ.
   - So với mọi concept đã có: phải `>= 54`.
   - So với 20 concept gần nhất: phải `>= 64`.
   - Nếu không đạt, đổi trục trọng yếu trước, không đổi màu trước.

6. Phác wireframe bằng vai trò module.
   - Hero hoặc vùng mở màn.
   - Vị trí 5 game/post.
   - Vị trí 5 review.
   - Vị trí 3 blog.
   - Vai trò random.
   - Cơ chế nav nội bộ.

7. Phác responsive behavior.
   - Ghi rõ mobile ưu tiên gì trước.
   - Ghi rõ module nào thành horizontal shelf, tab, list, route hoặc collapsed card.

8. Duyệt tên.
   - Đặt `H### - Codename - Genome short`.
   - Kiểm tra tên không trùng nghĩa với concept gần đó.

9. Khóa concept.
   - Sau khi khóa, không reskin thành concept khác.
   - Nếu đổi `IA`, `Hero`, `Rhythm` hoặc `Metaphor`, phải chấm lại từ đầu.

## 9. Công thức phân bổ để tránh đều đều

Không cần mỗi trục xuất hiện đúng 10 lần. Nên dùng phân bổ mềm:

| Nhóm trục | Mục tiêu phân bổ |
| --- | --- |
| IA | Không kiểu IA nào vượt 15/100. Ít nhất 8 kiểu IA được dùng. |
| Hero | Không kiểu hero nào vượt 14/100. `HE-NO-HERO` nên có ít nhất 6 mẫu. |
| Rhythm | Không nhịp nào vượt 14/100. Mỗi 10 mẫu liên tiếp nên có ít nhất 5 nhịp khác nhau. |
| Metaphor | Không metaphor nào vượt 10/100. Cùng metaphor không xuất hiện quá 2 lần trong 10 mẫu liên tiếp. |
| Density | `DE-BALANCED` không vượt 35/100 để tránh an toàn quá mức. |
| Responsive | Không để quá 25 mẫu chỉ dùng collapse/grid thông thường. |

## 10. Ví dụ 12 concept seed

Các seed này không phải danh sách cuối cùng, chỉ minh họa cách taxonomy tạo cá tính khác nhau.

| ID | Codename | Genome | Vai trò random |
| --- | --- | --- | --- |
| H001 | Arcade Bulletin | FRONT/LEAD/PULSE/ARCADE/BALANCED/ANCHOR/TICKET/PRIORITY | Vé may mắn trong cụm arcade. |
| H002 | Patch Radar | TIMELINE/CALENDAR/STACK/RADIO/DENSE/FILTER/MINI/DENSELIST | Tín hiệu ngẫu nhiên trong radar cập nhật. |
| H003 | Inventory Weekly | SHELF/NOHERO/MOSAIC/INVENTORY/DENSE/FILTER/SLOT/CAROUSEL | Slot vật phẩm bất ngờ. |
| H004 | Quest Map Home | MAP/MAP/LEVELS/MAP/FOCUSED/MAPNODE/POSTER/MAPTOSTACK | Node phụ mở ra nội dung bất ngờ. |
| H005 | Review Lab Desk | DASH/NOHERO/PAIRS/LAB/BALANCED/TABS/COMPARE/TABS | Mẫu thử random trên bàn lab. |
| H006 | Magazine Boss Fight | FEED/COVER/ZIGZAG/MAGAZINE/AIRY/QUEUE/POSTER/STORY | Trang phụ "wild pick" như sidebar tạp chí. |
| H007 | Stadium Board | RANK/RANK/BURST/STADIUM/DENSE/RAIL/SCORE/DASH | Wildcard match ở cuối bảng. |
| H008 | Portal Switchboard | HUB/SPLIT/STACK/PORTAL/BALANCED/DIAL/STANDARD/PRIORITY | Cổng random cạnh các cổng chính. |
| H009 | Controller Picks | MIXER/RANDOM/BURST/CONTROLLER/CHAOTIC/DIAL/STACK/CAROUSEL | Random là cơ chế chính của hero. |
| H010 | Library Index | SHELF/LEAD/LADDER/LIBRARY/BALANCED/ANCHOR/STANDARD/COLLAPSE | Sách/bài bất ngờ trong kệ phụ. |
| H011 | Newsroom Rush | FRONT/LEAD/STREAM/NEWSROOM/DENSE/QUEUE/MINI/DENSELIST | Breaking random như tin xen luồng. |
| H012 | Card Table | HUB/SPLIT/MOSAIC/CARDTABLE/BALANCED/TABS/STACK/CAROUSEL | Lá bài úp để rút nội dung random. |

## 11. Checklist duyệt nhanh

Trước khi bắt đầu triển khai một home concept:

- Có đủ 8 tag genome.
- Có đủ 3 blog, 5 review, 5 post/game, random trong brief.
- Không trùng `IA + Hero + Rhythm`.
- Không trùng `Metaphor + Card + Responsive`.
- Điểm khác biệt đạt ngưỡng.
- Mobile có chiến lược riêng, không chỉ xếp dọc.
- Card review và card game/post có khác biệt chức năng.
- Random có vai trò rõ trong trải nghiệm home.
- Tên concept theo format `H### - Codename - Genome short`.
