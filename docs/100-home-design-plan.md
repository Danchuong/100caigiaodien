# Kế hoạch thiết kế 100 giao diện home

File này là kế hoạch lịch sử. Nguồn điều phối hiện tại là:

```text
100-home-styles.md
docs/design-research/README.md
docs/design-research/100-design-board.md
```

Không dùng file này để đánh dấu tiến độ.

## Mục tiêu mới

Thiết kế 100 giao diện cho trang home, header và footer. Mỗi giao diện phải khác nhau rõ về **form/layout tổng thể**, không chỉ đổi màu, ảnh, font hoặc spacing.

Khách có thể dùng tool để quét độ giống nhau, nên cách quản lý chính là **layout fingerprint**.

File chính để đánh dấu tiến độ:

```text
docs/design-research/100-design-board.md
```

Không dùng thêm mã `H001`, `S001`, registry phụ hoặc nhiều file trạng thái khác.

## Layout fingerprint là gì

Mỗi design phải có một tổ hợp riêng:

```text
Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature
```

Một design mới chỉ đạt khi khác ít nhất 4/6 nhóm trên so với các design đã làm. Nếu nhìn wireframe đen trắng vẫn giống nhau thì chưa đạt.

## Quy trình làm một design

1. Mở `docs/design-research/100-design-board.md`.
2. Đọc block đúng `des-N`.
3. Đọc rule chung trong `100-home-styles.md`.
4. Tạo hoặc cập nhật brief trong `docs/design-research/des-briefs/des-N.md`.
5. Chọn source stack: getdesign chính, Refero phụ, direction game/news/directory.
6. Chỉ sau khi brief đủ rõ mới sửa source theme.
7. Thiết kế lại `home.php`, `header.php`, `footer.php` và SCSS theo fingerprint đã chọn.
8. Build SCSS ra `style.css`.
9. Kiểm tra desktop, tablet, mobile từ `320px`.
10. Kiểm tra header/footer trên trang ngoài home.
11. Copy file bàn giao vào `delivery/des-N-home`.
12. Chỉ đổi status trong `docs/design-research/100-design-board.md` khi đã pass QA/delivery.

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
docs/client-fit-research/
```

Workflow hiện tại nằm ở:

```text
docs/design-research/README.md
docs/design-research/brief-template.md
docs/design-research/refero-source-pool.md
```
