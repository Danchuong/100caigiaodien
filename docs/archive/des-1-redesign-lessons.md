# Kinh nghiệm làm lại des-1

File này ghi lại bài học sau lần thiết kế `des-1` bị sai hướng. Mục tiêu là khi làm lại thì giữ được cái đẹp của bản gốc `h5game`, chỉ nâng cấp home một cách có kiểm soát.

## Sai ở lần trước

- Đổi bố cục quá mạnh trong một lần, làm mất nhịp đẹp sẵn có của bản gốc.
- Header được chuyển sang kiểu overlay tối, tạo cảm giác sai so với phần còn lại.
- Khoảng cuối trang bị xử lý theo cảm giác. Footer đang có `margin-top: 5rem` tương đương khoảng `75px`, nên nếu cộng thêm margin của section cuối sẽ dễ tạo khoảng trống xấu.
- Khi thấy dư khoảng cách gần footer, việc bỏ thẳng `margin-bottom` của section cuối làm bố cục tụt chất lượng hơn.
- Chưa so sánh đủ kỹ bản cũ và bản mới ngay sau từng thay đổi nhỏ.

## Cách làm lại đúng

1. Bắt đầu từ clone sạch của `h5game`.
2. Chỉ sửa trang home trước: `home.php`, `css/_home.scss`, `style.css`.
3. Không sửa header/footer global nếu không bắt buộc.
4. Giữ nhịp layout gốc trước, sau đó đổi từng lớp:
   - hero,
   - review section,
   - game section,
   - blog section,
   - card style,
   - mobile behavior.
5. Sau mỗi lớp thay đổi phải mở browser thật để so sánh với bản gốc.
6. Nếu cần chỉnh khoảng cách với footer, đo nguyên nhân trước:
   - `footer { margin-top: 5rem; }` là khoảng cách global.
   - `.home-section { margin-bottom: ... }` là khoảng cách nội dung home.
   - Không bỏ margin theo cảm giác; chỉ chọn một nguồn spacing chính.
7. Class mới phải rõ ràng và scoped vào home, ví dụ `.home-wrapper`, `.home-hero`, `.home-review-list`.

## Nguyên tắc thiết kế des-1

- Bản gốc đang đẹp ở sự cân bằng, không nên phá cấu trúc toàn trang.
- Des-1 nên là một biến thể nâng cấp từ gốc, không phải thay toàn bộ cảm giác website.
- Ưu tiên đẹp, rõ, responsive, ít rủi ro hơn là làm quá nhiều hiệu ứng.
- Header và footer phải hiển thị ổn trên mọi trang, nên home không được kéo chúng vào một layout lạ.
- Mobile từ `320px` phải được kiểm tra thật, không chỉ nhìn desktop.

## Checklist trước khi commit thiết kế lại

- So sánh desktop bản gốc và `des-1`.
- Kiểm tra tablet.
- Kiểm tra mobile `320px`.
- Kiểm tra header không bị bóng/overlay sai.
- Kiểm tra footer không bị dư khoảng hoặc bị kéo lên/xuống vô lý.
- Kiểm tra đủ nội dung: 3 blog, 5 review, 5 post/game.
- Kiểm tra không có text overlap, card vỡ layout, ảnh trống bất thường.
- Chỉ commit khi giao diện nhìn tốt hơn bản gốc, không chỉ khác bản gốc.
