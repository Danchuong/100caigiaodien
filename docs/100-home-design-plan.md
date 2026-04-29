# Kế hoạch thiết kế 100 giao diện home

## Mục tiêu

Thiết kế 100 giao diện khác nhau cho trang home, không để khách thấy cảm giác cùng một template đổi màu.

## Cách quản lý đơn giản

Chỉ dùng một file để đánh dấu style đã làm:

```text
docs/100-home-styles.md
```

Quy ước:

```text
Style 1   = theme des-1
Style 2   = theme des-2
Style 3   = theme des-3
...
Style 100 = theme des-100
```

Không dùng thêm mã `H001`, `S001`, registry riêng hay style pool phụ.

## Phạm vi mỗi giao diện

Chỉ thiết kế lại trang home.

Mỗi mẫu thường chỉ cần sửa và bàn giao:

```text
home.php
css/_home.scss
style.css
```

Không thiết kế lại header/footer nếu không có lỗi trực tiếp làm home hiển thị sai.

## Nội dung bắt buộc

Mỗi home vẫn phải có đủ:

- 3 bài `blog`, random.
- 5 bài `review`, random.
- 5 bài `post/game`, random.
- Responsive tốt từ `320px`.
- Class rõ ràng, ưu tiên scope home như `.home-wrapper`, `.home-hero`, `.home-review-card`.

## Quy trình làm một style

1. Mở `docs/100-home-styles.md`.
2. Chọn dòng có trạng thái `Todo`.
3. Clone theme theo đúng số style, ví dụ style 2 thì clone ra `des-2`.
4. Thiết kế home theo style của dòng đó.
5. Build SCSS ra `style.css`.
6. Active theme ở local để xem.
7. Kiểm tra desktop và mobile `320px`.
8. Kiểm tra đủ 3 blog, 5 review, 5 post/game.
9. Commit riêng cho style đó.
10. Đổi trạng thái trong `docs/100-home-styles.md` từ `Todo` sang `Done`.

## Tránh bị trùng

Không chỉ đổi màu. Một style mới cần khác rõ ở ít nhất vài điểm:

- Hero.
- Thứ tự section.
- Cách hiển thị review.
- Cách hiển thị game/post.
- Cách hiển thị blog.
- Card style.
- Mobile behavior.

Nếu nhìn nhanh vẫn giống mẫu trước, chưa đạt.

## Mẫu đã làm

Hiện tại:

```text
Style 1 = des-1 = Hero Poster Cinema = Done
```

Các style tiếp theo xem trực tiếp trong:

```text
docs/100-home-styles.md
```

## Tài liệu nghiên cứu phụ

Các file trong folder dưới đây chỉ là tài liệu nghiên cứu, không dùng để đánh dấu tiến độ:

```text
docs/100-home-design-research/
```

Khi cần ý tưởng sâu hơn, đọc:

- `01-real-site-inspiration.md`
- `02-visual-language-systems.md`
- `03-anti-duplicate-taxonomy.md`
- `04-first-20-concepts.md`
- `05-quality-review-and-rules.md`
