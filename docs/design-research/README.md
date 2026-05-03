# Design research workflow

Mục tiêu của thư mục này là nâng chất lượng thiết kế trước khi code, đặc biệt cho các `des-N` còn lại. Không bắt đầu sửa giao diện mới nếu chưa có brief ngắn theo template trong thư mục này.

## Vì sao cần bước này

Khách không muốn 100 giao diện chỉ khác màu hoặc đổi section nhẹ. Mỗi bản phải có form khác rõ, nhưng vẫn đúng luật WordPress/theme hiện tại:

- Header và footer là global, không chỉ đẹp ở homepage.
- Home dày thông tin, có ít nhất một banner/featured block có hình, title và mô tả ngắn.
- Không dùng serif/font có chân.
- Theme phải hợp game/news/review, không tạo cảm giác báo cổ.
- Không sửa `reviews.php`, `search.php`, `css/_reviews.scss` nếu khách không yêu cầu đích danh.

## Nguồn nghiên cứu bắt buộc

Mỗi `des-N` mới nên dùng 3 nguồn:

1. `docs/getdesign/*/DESIGN.md`: nguồn visual system local đã tải về.
2. `https://styles.refero.design/`: nguồn tham khảo style/token/component từ Refero.
3. Một reference game/news/directory phù hợp: dùng để kiểm tra concept có hợp game portal không.

Refero hữu ích vì có thể tìm style theo brand, mood, color, typography hoặc URL, rồi mở từng style để lấy colors, type, spacing, components và `DESIGN.md` cho agent dùng.

## Cách dùng skills/MCP

- Dùng `frontend-design` trước khi code để chốt direction, hierarchy, spacing, header/footer anatomy và anti-generic gate.
- Dùng Exa hoặc browser/search để đọc Refero/getdesign/reference mới khi cần dữ liệu ngoài local.
- Dùng `imagegen` chỉ khi layout cần ảnh/banner/background mới. Không bắt buộc mọi layout đều gen ảnh.
- Không dùng Playwright trong project này. Kiểm tra bằng local WordPress, terminal, `curl`, WP-CLI và browser thật.

## Quy trình trước khi code một `des-N`

1. Chọn style chưa dùng gần đây trong `100-home-styles.md`.
2. Chọn một `Getdesign source`.
3. Chọn một `Refero source` từ pool hoặc tìm mới trên Refero.
4. Viết brief vào `docs/design-research/des-briefs/des-N.md`.
5. Đối chiếu brief với `yeucau.md`; nếu mâu thuẫn, sửa brief theo `yeucau.md`.
6. Chỉ sau đó mới sửa theme.

## Quality gate trước khi implement

Brief phải trả lời được:

- Nhìn first viewport biết đây là style khác hẳn bản đã ship gần nhất ở điểm nào?
- Header khác ở anatomy/behavior, không chỉ đổi màu?
- Footer khác ở anatomy/content model, không chỉ đổi màu?
- Banner/featured block có hình, title, mô tả ngắn và link thật?
- Home đủ blog/review/game, dày thông tin nhưng không chật hoặc loãng?
- Mobile từ `320px` xử lý search/menu thế nào?
- Có nguy cơ ảnh hưởng route ngoài home không?

Nếu chưa trả lời được các câu trên, chưa code.
