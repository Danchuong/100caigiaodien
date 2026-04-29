# Kế hoạch thiết kế 100 giao diện home

## Mục tiêu

Khách yêu cầu 100 giao diện khác nhau cho trang home. Cách làm nên gọn, có hệ thống, dễ kiểm soát và hạn chế trùng lặp.

Không nên thiết kế từng mẫu theo cảm tính. Nên dùng ma trận:

```text
100 giao diện = 10 layout x 10 style
```

Mỗi giao diện phải khác nhau tối thiểu ở 2 điểm:

- Bố cục tổng thể.
- Phong cách màu sắc, typography, spacing, card style.

## Quy ước đặt tên

Tiếp tục theo dạng clone theme:

```text
des-1
des-2
des-3
...
des-100
```

Mỗi theme clone chỉ tập trung thiết kế lại home. Các file bàn giao tối thiểu:

```text
home.php
css/_home.scss
style.css
```

Không chỉnh header/footer nếu không có lỗi trực tiếp làm home hiển thị sai.

## 10 nhóm layout

### Layout 01: Cinematic hero

Hero lớn, ảnh nền mạnh, text lớn, bên dưới là review nổi bật rồi game/blog.

Phù hợp cho các mẫu có cảm giác gaming, trailer, tin nóng.

### Layout 02: Magazine grid

Trang home giống trang báo game: nhiều block tin, review lớn, blog dạng editorial.

Phù hợp cho style báo chí, review, cập nhật game.

### Layout 03: App store catalog

Game/post là trung tâm, trình bày như kho ứng dụng. Review và blog là các section phụ.

Phù hợp cho website game HTML5 hoặc app/game directory.

### Layout 04: Bento grid

Các block kích thước khác nhau, tạo cảm giác hiện đại. Review/blog/game xen kẽ trong grid.

Phù hợp cho mẫu trẻ, hiện đại, khác rõ bản gốc.

### Layout 05: Sidebar editorial

Một cột nội dung chính lớn, một sidebar chứa game/review nhỏ.

Phù hợp cho mẫu đọc tin, desktop đẹp, vẫn responsive mobile.

### Layout 06: Featured carousel style

Hero hoặc section đầu có cảm giác slider/carousel, dù có thể không cần JS thật.

Phù hợp cho mẫu giống gaming portal.

### Layout 07: Dashboard gaming

Bố cục giống dashboard: panel, stats, list dọc, card tối màu.

Phù hợp cho style esports, power user, game ranking.

### Layout 08: Minimal news feed

Ít hiệu ứng, nhiều khoảng trắng, tập trung đọc nội dung.

Phù hợp cho style sạch, nhẹ, dễ dùng mobile.

### Layout 09: Poster wall

Ảnh lớn, card như poster game/movie, tiêu đề đặt đè hoặc bên dưới.

Phù hợp cho mẫu nhiều hình ảnh, tạo khác biệt mạnh.

### Layout 10: Masonry/stacked feed

Các card xếp dạng masonry hoặc stacked sections. Không cần JS masonry thật nếu CSS grid đủ ổn.

Phù hợp cho mẫu blog/game collection.

## 10 nhóm style

### Style 01: Dark neon gaming

Nền tối, xanh neon/lime/cyan, card tối, text mạnh.

### Style 02: Clean light app

Nền sáng, card trắng, border nhẹ, màu accent rõ.

### Style 03: Retro arcade

Màu đậm, cảm giác arcade, heading lớn, border rõ.

### Style 04: Editorial magazine

Typography giống tạp chí, section rõ, ảnh lớn, spacing rộng.

### Style 05: Cyberpunk

Tối, vàng/cyan/magenta, contrast mạnh, block sắc cạnh.

### Style 06: Console store

Cảm giác giống cửa hàng console/game: card gọn, grid đều, icon/rating rõ.

### Style 07: Minimal black-white-accent

Đen trắng là chính, chỉ một màu accent. Rất khác các mẫu màu mè.

### Style 08: Soft modern

Màu nhẹ, nền dịu, card mềm, phù hợp mobile.

### Style 09: Esport bold

Heading lớn, layout mạnh, màu đỏ/cam/vàng hoặc xanh điện.

### Style 10: Mobile-first compact

Thiết kế ưu tiên mobile trước: section ngắn, card gọn, text không dài.

## Cách ghép thành 100 mẫu

Mỗi layout ghép với đủ 10 style:

```text
des-1  = Layout 01 + Style 01
des-2  = Layout 01 + Style 02
des-3  = Layout 01 + Style 03
...
des-10 = Layout 01 + Style 10

des-11 = Layout 02 + Style 01
des-12 = Layout 02 + Style 02
...
des-20 = Layout 02 + Style 10

...

des-91  = Layout 10 + Style 01
des-100 = Layout 10 + Style 10
```

## Bảng triển khai

| Theme | Layout | Style | Ghi chú |
| --- | --- | --- | --- |
| des-1 | Layout 01 | Style 01 | Đã bắt đầu: cinematic hero + dark gaming |
| des-2 | Layout 01 | Style 02 | Cinematic hero + clean light app |
| des-3 | Layout 01 | Style 03 | Cinematic hero + retro arcade |
| des-4 | Layout 01 | Style 04 | Cinematic hero + editorial magazine |
| des-5 | Layout 01 | Style 05 | Cinematic hero + cyberpunk |
| des-6 | Layout 01 | Style 06 | Cinematic hero + console store |
| des-7 | Layout 01 | Style 07 | Cinematic hero + minimal black-white-accent |
| des-8 | Layout 01 | Style 08 | Cinematic hero + soft modern |
| des-9 | Layout 01 | Style 09 | Cinematic hero + esport bold |
| des-10 | Layout 01 | Style 10 | Cinematic hero + mobile-first compact |
| des-11 đến des-20 | Layout 02 | Style 01 đến 10 | Magazine grid |
| des-21 đến des-30 | Layout 03 | Style 01 đến 10 | App store catalog |
| des-31 đến des-40 | Layout 04 | Style 01 đến 10 | Bento grid |
| des-41 đến des-50 | Layout 05 | Style 01 đến 10 | Sidebar editorial |
| des-51 đến des-60 | Layout 06 | Style 01 đến 10 | Featured carousel style |
| des-61 đến des-70 | Layout 07 | Style 01 đến 10 | Dashboard gaming |
| des-71 đến des-80 | Layout 08 | Style 01 đến 10 | Minimal news feed |
| des-81 đến des-90 | Layout 09 | Style 01 đến 10 | Poster wall |
| des-91 đến des-100 | Layout 10 | Style 01 đến 10 | Masonry/stacked feed |

## Checklist để tránh trùng lặp

Trước khi làm một mẫu mới, cần xác định:

- Mẫu này thuộc layout số mấy.
- Mẫu này thuộc style số mấy.
- Hero khác mẫu trước thế nào.
- Review 5 bài hiển thị khác mẫu trước thế nào.
- Game 5 bài hiển thị khác mẫu trước thế nào.
- Blog 3 bài hiển thị khác mẫu trước thế nào.
- Mobile 320px có vỡ layout không.

Nếu chỉ đổi màu mà bố cục giống hoàn toàn thì chưa đủ khác biệt.

Nếu chỉ đổi layout nhưng màu/card/heading giống hoàn toàn thì cũng chưa đủ khác biệt.

## Quy trình làm mỗi giao diện

1. Clone theme gốc hoặc theme nền sang folder mới, ví dụ `des-2`.
2. Chỉ sửa `home.php` và `css/_home.scss`.
3. Build SCSS ra `style.css`.
4. Active theme ở local để xem.
5. Kiểm tra desktop và mobile từ `320px`.
6. Commit riêng cho từng giao diện.
7. Copy 3 file bàn giao ra folder riêng để zip gửi khách nếu cần.

## Nội dung bắt buộc không được mất

Mỗi home vẫn phải có đủ:

- 3 bài `blog`, random.
- 5 bài `review`, random.
- 5 bài `post/game`, random.

Không được bỏ section chỉ vì layout mới.

