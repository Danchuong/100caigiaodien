# Kế hoạch thiết kế 100 giao diện home

## Mục tiêu mới

Thiết kế 100 giao diện cho trang home, header và footer. Mỗi giao diện phải khác nhau rõ về **form/layout tổng thể**, không chỉ đổi màu, ảnh, font hoặc spacing.

Khách có thể dùng tool để quét độ giống nhau, nên cách quản lý chính là **layout fingerprint**.

File chính để đánh dấu tiến độ:

```text
docs/100-home-styles.md
```

Không dùng thêm mã `H001`, `S001`, registry phụ hoặc nhiều file trạng thái khác.

## Layout fingerprint là gì

Mỗi design phải có một tổ hợp riêng:

```text
Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature
```

Một design mới chỉ đạt khi khác ít nhất 4/6 nhóm trên so với các design đã làm. Nếu nhìn wireframe đen trắng vẫn giống nhau thì chưa đạt.

## Quy trình làm một design

1. Mở `docs/100-home-styles.md`.
2. Chọn dòng `Todo`.
3. Đổi trạng thái sang `Doing`.
4. Clone từ `wp-content/themes/h5game`, không clone từ design cũ.
5. Đặt theme đúng số, ví dụ style 2 là `wp-content/themes/des-2`.
6. Thiết kế lại `home.php`, `header.php`, `footer.php` và SCSS theo fingerprint đã chọn.
7. Build SCSS ra `style.css`.
8. Kiểm tra desktop, tablet, mobile từ `320px`.
9. Kiểm tra header/footer trên trang ngoài home.
10. Copy file bàn giao vào `delivery/des-n-home`.
11. Commit riêng cho design đó.
12. Đổi trạng thái từ `Doing` sang `Done`.

## Phạm vi mỗi design

Mỗi design thường cần sửa và bàn giao:

```text
home.php
header.php
footer.php
css/_home.scss
css/_header.scss
css/_footer.scss
style.css
images/... nếu có ảnh riêng
```

Không thay đổi plugin, database, nội dung bài viết hoặc logic WordPress nếu không cần thiết cho giao diện.

## Nghiệm thu tối thiểu

- Trang home có đủ 3 nhóm nội dung: blog, review, post/game.
- Nội dung trên hero/banner có link thật.
- Không có label giống menu/tab nhưng không click được.
- Không dùng text vô nghĩa kiểu trang trí.
- Không có text dài đè ảnh.
- Header và footer hiển thị tốt trên toàn site.
- Responsive tốt từ `320px`, không horizontal scroll.
- Footer không dùng margin âm hoặc spacing hack.
- PHP lint sạch cho `home.php`, `header.php`, `footer.php`.
- `style.css` đã build và không rỗng.

## Tránh trùng

Không tính là khác nhau đủ nếu chỉ:

- Đổi màu.
- Đổi font.
- Đổi ảnh nền.
- Đổi shadow/border radius.
- Đổi khoảng cách nhẹ.
- Giữ nguyên header, hero, grid, footer rồi sửa text.

Mỗi design nên khác rõ ở các phần:

- Header form.
- Hero/banner form.
- Thứ tự section.
- Grid/card pattern.
- Sidebar hoặc navigation phụ.
- Footer form.
- Mobile behavior.

## Tài liệu nghiên cứu phụ

Các file trong folder dưới đây chỉ là tài liệu nghiên cứu, không dùng để đánh dấu tiến độ:

```text
docs/100-home-design-research/
```
