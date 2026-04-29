# Phân tích feedback khách hàng cho des-1

## Khách đang muốn gì

Khách không chỉ muốn mình đổi màu hoặc đổi bố cục nhẹ từ source gốc. Ý chính là `des-1` hiện vẫn còn cảm giác lấy lại cấu trúc cũ, thay đổi chưa đủ có chủ đích, một số phần nhìn như trang trí nhưng không có chức năng thật.

Khách muốn bản mới:

- Có nội dung hero/banner có ý nghĩa rõ ràng.
- Header và search mobile dùng được, không lỗi.
- Các block hiển thị phải có lý do, có link hoặc có hành động rõ ràng.
- Card bài viết không bị nhồi text lên ảnh.
- Bố cục khác bản gốc rõ hơn, nhưng vẫn không vỡ layout.

## Feedback cụ thể và cách hiểu

### 1. `Blogs / Reviews / Games` không link thì vô nghĩa

Hiện 3 nhãn này đang nằm trong hero như metadata/trang trí. Khách thấy không click được nên coi là vô nghĩa.

Cách xử lý:

- Hoặc biến chúng thành link thật tới trang `Blogs`, `Reviews`, `Games`.
- Hoặc bỏ hẳn khỏi hero.
- Nếu giữ, nên thiết kế như 3 shortcut rõ ràng, có hover/click và link đúng.

Ưu tiên: bỏ hoặc đổi thành shortcut có link thật. Không để text đứng một mình.

### 2. Search trên mobile bị lỗi

Khách báo lỗi ở khu vực search mobile. Đây là vấn đề bắt buộc sửa vì thuộc header dùng chung.

Cách xử lý:

- Kiểm tra lại trạng thái mobile khi bấm icon search.
- Search box phải hiện đúng vị trí, không bị che, không tràn màn `320px`.
- Không để search overlay đè menu hoặc trôi khỏi viewport.
- Header mobile cần có trạng thái rõ: logo, search button, menu button.

Ưu tiên: sửa trước khi làm tiếp visual.

### 3. `Game Newsroom` không có ý nghĩa

Label này là text trang trí, không lấy từ nội dung thật và không giúp người dùng hiểu gì thêm. Khách muốn bỏ hoặc thay bằng thứ có nghĩa hơn.

Cách xử lý:

- Đổi thành `Tin nổi bật`, `Bài viết nổi bật`, hoặc `Featured`.
- Tốt hơn: hero nên lấy một bài viết thật làm tin nổi bật, có category/title/link rõ ràng.
- Không dùng label chung chung kiểu marketing nếu không liên quan trực tiếp tới nội dung.

Ưu tiên: đổi hero thành nội dung thật.

### 4. Banner cần khác đi, không dùng lại nguyên nội dung cũ

Khách nói có thể thay hình, thay text, hoặc làm thành tin nổi bật. Ý là banner hiện đang giống lấy nguyên phần cũ rồi bọc lại style mới.

Cách xử lý:

- Không dùng ACF `description` làm headline chính nữa.
- Dùng một bài nổi bật/random làm hero:
  - ảnh đại diện bài viết làm background,
  - tag/category làm label,
  - title làm headline,
  - nút đọc bài/link tới bài.
- Có thể lấy bài từ `blog` hoặc `review`, nhưng phải giữ đủ yêu cầu home: 3 blog, 5 review, 5 game.

Ưu tiên: hero nên trở thành `Featured Story`, không phải banner tĩnh.

### 5. Header có thể không cần absolute

Khách gợi ý header có thể bỏ kiểu absolute. Ý là header đang overlay lên hero, dễ gây lỗi và làm hero/header dính nhau.

Cách xử lý:

- Cho header về layout bình thường hoặc sticky, không absolute trên home.
- Hero bắt đầu sau header, không bị header đè.
- Header vẫn phải đồng bộ dark/premium với style `Hero Poster Cinema`.

Ưu tiên: bỏ absolute trên home để giảm lỗi layout.

### 6. Text trên card đè lên hình quá nhiều

Khách chỉ rõ card dạng:

```text
NEWS
Elden Ring Nightreign DLC Unleashed...
FromSoftware’s Unprecedented Move...
```

Vấn đề là card đang có category + title + description cùng nằm trên ảnh, làm ảnh bị che và card nặng chữ.

Cách xử lý:

- Card ảnh overlay chỉ nên hiển thị category + title.
- Bỏ excerpt/description trên card ảnh, nhất là card nhỏ.
- Nếu cần excerpt, đặt bên ngoài ảnh hoặc chỉ dùng ở card lớn có đủ không gian.

Ưu tiên: với `des-1`, bỏ description khỏi blog cards trong hero/grid.

## Kết luận ngắn

Khách muốn `des-1` được làm lại theo hướng có ý nghĩa nội dung hơn, không phải chỉ đổi lớp giao diện quanh layout cũ.

Hướng sửa đúng:

1. Sửa header mobile/search trước.
2. Bỏ header absolute trên home.
3. Làm hero thành `Bài viết nổi bật` có link thật.
4. Bỏ `Game Newsroom`.
5. Bỏ hoặc link thật `Blogs / Reviews / Games`.
6. Card ảnh chỉ giữ title, không đè excerpt lên hình.
7. Sau khi sửa, cập nhật lại folder `delivery/des-1-home` đủ file cho khách.

## Checklist sửa des-1 tiếp theo

- Header không absolute trên home.
- Search mobile không tràn, không bị che, dùng được từ `320px`.
- Hero dùng bài viết thật, có link.
- Không còn text `Game Newsroom`.
- Không còn `Blogs / Reviews / Games` dạng text không click.
- Blog cards không hiển thị description đè trên ảnh.
- Footer không chứa text mô tả kỹ thuật như `Responsive from 320px`.
- Home vẫn có đủ 3 blog, 5 review, 5 game.
- Header/footer kiểm tra trên home và ít nhất một trang detail.
