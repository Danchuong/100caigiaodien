# Quy tắc chống trùng layout fingerprint cho 100 home/header/footer

Tài liệu này dùng trước khi triển khai từng `des-N`. Mục tiêu không phải làm 100 bản khác màu, mà làm 100 form có thể phân biệt bằng mắt, bằng wireframe, bằng DOM, và bằng các tool quét độ giống nhau.

Nguồn đối chiếu chính:

- `yeucau.md`: khách yêu cầu khác rõ về form/layout tổng thể, không chỉ đổi màu, ảnh, font, spacing hoặc bo góc.
- `100-home-styles.md`: mỗi design có fingerprint gồm `Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature`.
- `des-1..des-10`: đã có các nhóm form ban đầu như search-first directory, lead + rail, newspaper, mosaic wall, issue cover, carousel, split picks, band magazine, review score hub.

## 1. Fingerprint phải đo được

Mỗi design cần có một bảng fingerprint trước khi code. Không ghi chung chung kiểu "gaming magazine dark", vì tool không đo được mood. Ghi bằng các chiều đo dưới đây.

| Chiều đo | Cách ghi | Ví dụ khác đủ |
| --- | --- | --- |
| Header anatomy | Số hàng header, thứ tự logo/menu/search/CTA, topbar, rail, sticky/normal, mobile trigger | `logo-left + search row dưới` khác `center-logo + split nav` |
| Above-fold composition | Không hero, hero full-width, split hero, mosaic, table, carousel, timeline, directory search | `mosaic 1+4` khác `score hero + media` |
| DOM section order | Thứ tự thật trong `home.php`, không chỉ thứ tự visual bằng CSS | `search/platform/games/reviews/blogs` khác `reviews/games/blogs` |
| Content emphasis | Bài viết, review, game, ranking, search, video, table, community, guide | `review score hub` khác `news portal` |
| Grid geometry | Số cột desktop/tablet/mobile, có rail/sidebar không, tỉ lệ main/side, masonry/list/table/scroll | `12-col mosaic` khác `single column feed` |
| Card anatomy | Ảnh ở đâu, title ở đâu, meta/score/rank/excerpt, overlay hay tách nền, orientation | `ranked row` khác `image tile` |
| Media ratio | Tỉ lệ ảnh chủ đạo: 16:9, 4:3, 1:1, portrait, text-only, mixed | `portrait deck` khác `wide strip` |
| Density rhythm | Số item above fold, số item mỗi section, khoảng trắng lớn/vừa/dày | `dense newswire` khác `editorial sparse` |
| Navigation/action model | Search, tab, chip, filter, table, rail, carousel control, newsletter, simple links | `platform tabs` khác `directory chips` |
| Footer anatomy | Compact/legal, multi-column, latest posts, leaderboard, newsletter, directory, partner network | `newsletter footer` khác `review leaderboard footer` |
| Mobile signature | Thứ tự mobile, có rail ngang không, table thành card, sidebar thành section, menu/search behavior | `hero rồi compact rail` khác `score card first` |
| CSS/layout primitives | Flex/grid/table/columns/sticky/horizontal scroll; container width; breakpoint behavior | `grid mosaic` khác `ordered list feed` |

Một design chỉ được bắt đầu khi có ít nhất 10/12 chiều đo được điền cụ thể. Nếu chỉ điền màu, font, ảnh, shadow, radius thì chưa có fingerprint.

## 2. Quy tắc khác biệt tối thiểu

Quy tắc hiện tại trong `100-home-styles.md` là khác ít nhất 4/6 phần lớn. Với 100 bản và nhiều agent cùng làm, nên dùng ngưỡng chặt hơn:

1. So với 10 bản đã hoàn thành gần nhất, design mới phải khác ít nhất 7/12 chiều đo ở mục 1.
2. So với mọi bản cùng nhóm, ví dụ cùng "Magazine front page" hoặc "Review hub", phải khác ít nhất 5/12 chiều đo.
3. Trong 6 phần chính, bắt buộc khác ít nhất 4 phần: header, hero/above-fold, flow/grid, card pattern, footer, mobile signature.
4. Không được dùng cùng lúc cả 3 yếu tố giống một bản cũ: cùng header anatomy, cùng hero composition, cùng section order.
5. Nếu giữ cùng content emphasis, ví dụ đều là review-first, thì phải đổi mạnh hero, card anatomy, footer và mobile signature.
6. Nếu clone từ một theme đã xong, phải đổi class namespace chính, block order, grid primitive và card anatomy. Không chỉ sửa CSS trên cùng DOM.
7. Desktop khác nhưng mobile collapse giống hệt vẫn chưa đạt. Mobile là một fingerprint riêng.
8. Footer phải đổi theo chức năng của style, không dùng lại một footer multi-column mặc định cho nhiều bản.
9. Search/menu mobile có thể dùng lại logic an toàn, nhưng vị trí, flow hiển thị và quan hệ với header cần khác theo style.
10. Nếu wireframe trắng đen bỏ ảnh/màu/font mà vẫn nhận ra cùng một bố cục, design chưa đạt.

Ngưỡng cảnh báo: nếu hai bản có cùng thứ tự `header -> hero -> blog grid -> review grid -> game grid -> multi-column footer`, dù class và màu khác, coi là trùng layout.

## 3. Những thứ tool similarity có thể bắt

Khách có thể dùng nhiều loại tool khác nhau. Không nên chỉ tối ưu theo ảnh chụp màn hình.

### 3.1 Visual screenshot similarity

Tool có thể so ảnh desktop/mobile bằng pixel diff, perceptual hash hoặc computer vision. Những điểm dễ bị bắt:

- Cùng silhouette above-fold: logo/menu/search nằm cùng chỗ, hero cùng tỉ lệ, rail cùng bên.
- Cùng số khối trên màn đầu tiên.
- Cùng card ratio và khoảng cách grid.
- Cùng footer shape, đặc biệt multi-column footer giống nhau.
- Chỉ đổi màu, ảnh nền, font, gradient, border radius.

Phòng tránh: tạo wireframe khác từ đầu. Đừng dựa vào màu hoặc ảnh để tạo cảm giác khác.

### 3.2 DOM/tree similarity

Tool có thể so HTML sau render hoặc template PHP. Những điểm dễ bị bắt:

- Cùng thứ tự `<section>`.
- Cùng depth DOM, ví dụ section/head/grid/card/media/body/meta lặp y hệt.
- Cùng tên class lặp lại trên nhiều bản: `home-section`, `section-head`, `review-score-card`, `game-shelf-card`.
- Cùng số lượng link/card trong từng section.
- Cùng vị trí query loop: blog loop trước, review loop sau, game loop cuối.

Phòng tránh: đổi thật cấu trúc template theo fingerprint. Class dùng chung như `head-wrapper` có thể tồn tại, nhưng mỗi style cần namespace chính và block anatomy riêng.

### 3.3 CSS/layout fingerprint

Tool có thể đọc CSS hoặc computed style. Những điểm dễ bị bắt:

- Cùng `grid-template-columns`, cùng max-width container, cùng breakpoint collapse.
- Cùng card dimensions, aspect-ratio, padding, gap.
- Cùng header height và footer column grid.
- Cùng responsive rule: desktop 3 cột, tablet 2 cột, mobile 1 cột cho mọi bản.
- Cùng overlay pattern ảnh + gradient + title.

Phòng tránh: thay đổi primitive layout, không chỉ biến thể giá trị. Ví dụ một bản dùng table/list, bản khác dùng mosaic, bản khác dùng horizontal rail, bản khác dùng timeline.

### 3.4 Text/content similarity

Tool có thể quét text hoặc nhãn UI. Rủi ro:

- Lặp lại các heading chung như `Latest Blogs`, `Review Scores`, `Popular Games`.
- Dùng label trang trí không có link/hành động.
- Hero dùng lại description tĩnh hoặc slogan chung.
- Button và CTA giống nhau hàng loạt.

Phòng tránh: dùng text có nghĩa theo chức năng style. Block giống menu, tab, shortcut, category phải click được hoặc bỏ.

## 4. Rủi ro DOM và thứ tự block

Khác visual bằng CSS nhưng DOM giống nhau vẫn rủi ro. Với dự án này, nhiều bản clone từ `h5game` hoặc từ `des-1..des-10`, nên cần kiểm tra các điểm sau trước khi làm:

- Không dùng lại nguyên skeleton `home.php` rồi chỉ đổi class.
- Không để mọi home có cùng 3 loop độc lập theo thứ tự `blog -> review -> game`.
- Không dùng CSS `order` để giả vờ đổi thứ tự section. DOM order phải phản ánh flow thật.
- Không để header nào cũng là `head-left logo`, `head-center nav`, `head-right search/menu`. Nếu cần giữ vì an toàn, phải thêm khác biệt mạnh ở topbar, directory row, split nav, score strip, ticker, tab row hoặc mobile flow.
- Không để footer nào cũng là brand + 3 column links. Footer phải phục vụ concept: review leaderboard, newsletter, compact legal, directory, latest posts, partner network, sitemap, console panel.
- Không dùng cùng card markup cho blog/review/game rồi đổi nhãn. Review card cần score/verdict/rank hoặc review-specific anatomy; game card cần platform/play/open/stat; blog card cần headline/date/category.
- Không để tất cả image cards là overlay text trên ảnh. Có bản text nằm cạnh ảnh, bản text-only, bản table, bản ranking row, bản card portrait, bản ledger/list.
- Không làm mọi mobile layout thành một stack giống nhau. Cần quyết định mobile signature riêng: rail ngang, accordion, table-to-card, score-first, search-first, timeline, tabs, compact list.

## 5. Quy trình trước khi implement mỗi `des-N`

Trước khi sửa file của một design, agent phụ trách phải làm nhanh các bước này.

### Bước 1: Chốt fingerprint một dòng

Viết một dòng theo mẫu:

```text
des-N = Header / Above-fold / Flow / Card / Footer / Mobile
```

Dòng này phải cụ thể hơn dòng trong `100-home-styles.md`. Ví dụ không chỉ ghi `Review Score Hero`, mà ghi:

```text
review header 2 hàng + score strip / review hero score trái, media phải / reviews -> ranked games -> latest blog / score rows + compact cards / leaderboard footer / mobile score card trước media
```

### Bước 2: So với bản gần nhất

So fingerprint mới với ít nhất:

- `des-(N-1)` nếu đã có.
- Mọi bản cùng nhóm trong `100-home-styles.md`.
- Một bản có fingerprint dễ trùng, ví dụ search-first, newspaper, band, score hub.

Nếu khác dưới 7/12 chiều đo, đổi concept trước khi code.

### Bước 3: Chọn biến thể DOM trước CSS

Quyết định trước:

- section nào render trước trong PHP;
- section nào là `aside`, `nav`, `ol/table`, `section`, `article`;
- loop nào là hero, loop nào là rail, loop nào là list;
- card nào có media, card nào text-only;
- footer lấy content động nào.

Không bắt đầu bằng đổi SCSS khi DOM vẫn giống bản cũ.

### Bước 4: Chọn mobile signature

Mobile phải được thiết kế trước, không để tự collapse mặc định. Ghi rõ:

- header mobile hiện logo/search/menu theo thứ tự nào;
- search mở inline, dropdown, full row hay dedicated section;
- hero/rail/sidebar/table chuyển thành gì;
- section nào ưu tiên xuất hiện trước trên `320px`;
- card mobile là row, stack, rail ngang, accordion hay table-card.

### Bước 5: Chặn các thay đổi không được tính

Các thay đổi sau không được cộng điểm khác biệt:

- đổi màu, gradient, font;
- đổi ảnh hoặc dùng ảnh AI mới;
- đổi shadow, border, radius;
- tăng/giảm spacing nhẹ;
- đổi text heading nhưng giữ block cũ;
- đổi class name nhưng giữ DOM và CSS grid tương tự.

Chỉ tính khác biệt khi người xem wireframe trắng đen vẫn thấy form khác.

### Bước 6: Checklist tự kiểm trước khi bàn giao

Trước khi chuyển trạng thái sang `QA Passed`, `Delivery Ready`, `Shipped` hoặc `Accepted`:

- Header khác rõ với các bản đã làm, gồm cả mobile.
- Above-fold không trùng silhouette với bản gần nhất.
- DOM section order khác fingerprint cũ, không chỉ khác bằng CSS `order`.
- Card anatomy khác, không chỉ đổi màu ảnh.
- Footer khác chức năng và cấu trúc.
- Mobile có signature riêng từ `320px`.
- Các label dạng menu/tab/chip/shortcut đều có link hoặc hành động thật.
- Không có text dài đè ảnh; overlay chỉ dùng khi đủ tương phản và ít chữ.
- Home vẫn giữ đủ nhóm nội dung cũ: blog, review, game.
- Header/footer không phá trang ngoài home.

## 6. Mẫu bảng fingerprint nên dùng trong PR hoặc ghi chú triển khai

```text
Design: des-N
Nhóm: [Magazine / Review hub / Database / Esports / ...]
Concept: [tên form]

Header anatomy:
Above-fold:
DOM order:
Grid geometry:
Card anatomy:
Footer anatomy:
Mobile signature:

Khác với des-X:
- Header:
- Above-fold:
- Flow:
- Card:
- Footer:
- Mobile:

Rủi ro giống nhau còn lại:
- ...
```

Nếu không điền được phần "Khác với des-X", không nên implement. Đây là dấu hiệu concept đang quá gần một bản có sẵn.
