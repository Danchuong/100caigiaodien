# Kế hoạch thiết kế 100 giao diện home

## Mục tiêu

Khách yêu cầu 100 giao diện khác nhau cho trang home. Yêu cầu thật không chỉ là đủ số lượng, mà là khi nhìn qua nhiều mẫu, khách không thấy cảm giác "cùng một template đổi màu".

Vì vậy không dùng công thức cứng:

```text
10 layout x 10 style
```

Công thức này chỉ dùng như seed nội bộ để không bị bí ý tưởng. Kế hoạch chính chuyển sang cách quản lý bằng `design genome`: mỗi mẫu là một concept có cá tính riêng, được mô tả bằng nhiều trục thiết kế và phải qua scoring chống trùng.

## Tài liệu nghiên cứu liên quan

Folder nghiên cứu chính:

```text
docs/100-home-design-research/
```

Đọc theo thứ tự:

1. `03-anti-duplicate-taxonomy.md`: framework chống trùng và design genome.
2. `05-quality-review-and-rules.md`: luật reject/accept từng mẫu.
3. `04-first-20-concepts.md`: 20 concept đầu để triển khai ngay.
4. `01-real-site-inspiration.md`: pattern từ website thật.
5. `02-visual-language-systems.md`: các hướng visual language.

File này là kế hoạch vận hành tổng thể. Các file research là nguồn chi tiết.

## Phạm vi

Chỉ thiết kế lại trang home.

Các file thường bàn giao cho mỗi mẫu:

```text
home.php
css/_home.scss
style.css
```

Không thiết kế lại header/footer nếu không có lỗi trực tiếp làm home hiển thị sai.

## Bất biến bắt buộc

Mọi giao diện home, dù khác nhau đến đâu, vẫn phải giữ:

- 3 bài `blog`, random.
- 5 bài `review`, random.
- 5 bài `post/game`, random.
- Responsive tốt từ `320px`.
- Class rõ ràng, ưu tiên scope home như `.home-wrapper`, `.home-hero`, `.home-review-card`.
- Header/footer hiện có vẫn hoạt động bình thường.

Không được bỏ section chỉ để mẫu nhìn khác.

## Quy ước folder theme

Mỗi mẫu vẫn là một theme clone riêng:

```text
wp-content/themes/des-1/
wp-content/themes/des-2/
wp-content/themes/des-3/
...
wp-content/themes/des-100/
```

Lý do giữ cách này:

- Dễ active từng mẫu trong WordPress local.
- Dễ zip riêng từng mẫu cho khách.
- Dễ commit riêng từng giao diện.
- Không làm rối theme gốc `h5game`.

## Cách đặt tên concept

Mỗi mẫu cần có ID kỹ thuật và tên concept:

```text
des-1  = H001 - Cinematic Neon Launchpad - S096 Hero Poster Cinema
des-2  = H002 - Bright Trailer Shelf - S037 Mobile App Store Cards
des-3  = H003 - Retro Arcade Marquee - S001 Arcade Cabinet Neon
...
des-100 = H100 - [Codename] - S### [Primary Style]
```

Quy tắc:

- `des-*` là tên folder theme.
- `H###` là số concept trong registry.
- `S###` là style chính lấy từ `docs/100-home-design-research/06-100-style-pool.md`.
- Codename phải gợi được cá tính, không dùng tên chung như `Modern Home`, `Dark Layout`, `Design 12`.
- Mỗi concept phải có mô tả riêng: hero, section order, card treatment, mobile behavior.
- Mỗi mẫu chỉ có 1 style chính để khách dễ kiểm soát. Accent phụ không được tính là style chính.

Danh sách 20 concept đầu nằm trong:

```text
docs/100-home-design-research/04-first-20-concepts.md
```

## Design genome

Mỗi concept được mô tả bằng 8 trục:

```text
ID | Codename | IA | Hero | Rhythm | Metaphor | Density | HomeNav | Card | Responsive
```

Các trục chính:

- `Information Architecture`: home vận hành như front page, hub, ranking board, dashboard, map, feed...
- `Hero Treatment`: lead story, cover, terminal, rank board, anti-hero, random pick...
- `Content Rhythm`: pulse, ladder, zigzag, stack, mosaic, stream, levels...
- `Visual Metaphor`: arcade, newsroom, inventory, terminal, magazine, lab, stadium...
- `Density`: airy, balanced, dense, focused, controlled chaos.
- `Navigation Within Home`: anchor, tabs, filter, rail, map node, mode dial...
- `Card Mechanics`: score card, ticket, inventory slot, poster, compare strip...
- `Responsive Behavior`: priority rewrite, horizontal shelf, mobile tabs, dense list...

Một mẫu mới không được duyệt chỉ vì đổi màu. Nó phải khác đủ nhiều trục so với các mẫu đã có.

## Scoring chống trùng

Khi tạo concept mới, so với các concept đã có và chấm điểm khác biệt.

Ngưỡng duyệt:

- Khác tối thiểu `>= 54/100` với mọi concept cũ.
- Khác tối thiểu `>= 64/100` với 20 concept gần nhất.
- Khác ít nhất 4 trong 8 trục genome.
- Trong 4 trục trọng yếu `IA`, `Hero`, `Rhythm`, `Metaphor`, phải khác ít nhất 2 trục.
- Không trùng bộ ba `IA + Hero + Rhythm`.
- Không trùng bộ ba `Metaphor + Card + Responsive`.

Nếu một mẫu chỉ đổi palette, font, radius, shadow hoặc thứ tự section thì reject.

Chi tiết scoring nằm trong:

```text
docs/100-home-design-research/03-anti-duplicate-taxonomy.md
```

## Workflow làm 1 giao diện

1. Chọn concept tiếp theo trong registry.
2. Kiểm tra concept có khác đủ so với các mẫu đã làm chưa.
3. Clone theme nền sang folder mới, ví dụ `des-2`.
4. Chỉ sửa `home.php` và `css/_home.scss` nếu không có lý do khác.
5. Build SCSS ra `style.css`.
6. Active theme ở local.
7. Kiểm tra desktop và mobile `320px`.
8. Kiểm tra đủ 3 blog, 5 review, 5 post/game.
9. Commit riêng cho mẫu đó.
10. Copy file bàn giao ra folder zip nếu cần gửi khách.

## Workflow theo batch

Không nên làm 100 mẫu một mạch. Nên chia batch:

```text
Batch 01: des-1 đến des-10
Batch 02: des-11 đến des-20
...
Batch 10: des-91 đến des-100
```

Với mỗi batch 10 mẫu:

- Trước khi code: chốt 10 concept bằng `design genome`.
- Trong khi code: mỗi mẫu commit riêng.
- Sau khi code: review lại 10 mẫu bằng checklist trong `05-quality-review-and-rules.md`.
- Nếu có 2 mẫu nhìn gần nhau, sửa ngay trong batch đó, không để dồn cuối.

Sau mỗi 20 mẫu nên audit lớn:

- Có mẫu nào giống nhau quá không.
- Mobile có bị collapse giống nhau hết không.
- Review/game/blog có bị dùng cùng card quá nhiều không.
- Có style nào bị lạm dụng không.

## Registry cần duy trì

Registry chính:

```text
docs/100-home-design-registry.md
```

Mỗi dòng nên có:

```text
Theme | Concept ID | Codename | Primary Style | Status | Notes
```

Ví dụ:

```text
des-1 | H001 | Cinematic Neon Launchpad | S096 - Hero Poster Cinema | Done | Đã triển khai
des-2 | H002 | Bright Trailer Shelf | S037 - Mobile App Store Cards | Planned | Làm tiếp
```

## Hướng triển khai gần nhất

`des-1` đã làm theo hướng:

```text
H001 - Cinematic Neon Launchpad
```

Style chính của `des-1` trong pool:

```text
S096 - Hero Poster Cinema
```

Lime/cam neon trong `des-1` chỉ là accent để tạo năng lượng gaming, không tính là style chính.

Các mẫu tiếp theo nên lấy từ:

```text
docs/100-home-design-research/04-first-20-concepts.md
```

Không nên tiếp tục bằng cách "copy des-1 rồi đổi màu". Với `des-2`, cần đổi rõ:

- Section order.
- Card mechanics.
- Visual metaphor.
- Mobile behavior.

## Checklist nghiệm thu ngắn

Trước khi coi một mẫu là xong:

- Home load HTTP `200`.
- Không có PHP fatal/warning mới.
- Có đủ 3 blog, 5 review, 5 post/game.
- Mobile `320px` không horizontal overflow.
- Text không tràn card/button.
- Ảnh không làm layout vỡ nếu thiếu thumbnail.
- Không sửa header/footer ngoài scope.
- Giao diện khác rõ ít nhất 4 trục genome so với mẫu gần nhất.
- Commit riêng, message rõ.

## Bàn giao cho khách

Nếu khách chỉ cần file thay vào theme hiện tại, mỗi mẫu bàn giao tối thiểu:

```text
home.php
css/_home.scss
style.css
```

Nếu có chỉnh thêm file nào ngoài 3 file trên, phải ghi rõ trong note bàn giao.
