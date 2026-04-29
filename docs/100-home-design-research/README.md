# Research index cho 100 giao diện home

Folder này gom kết quả nghiên cứu từ 5 agent để xử lý bài toán: làm 100 giao diện home khác nhau cho website game/news mà không bị trùng lặp hoặc nhìn như đổi màu template.

## Cách dùng nhanh

Đọc theo thứ tự này:

1. `03-anti-duplicate-taxonomy.md` để hiểu framework chống trùng.
2. `05-quality-review-and-rules.md` để biết luật reject/accept từng mẫu.
3. `04-first-20-concepts.md` để lấy 20 concept đầu triển khai ngay.
4. `01-real-site-inspiration.md` khi cần thêm pattern layout từ site thật.
5. `02-visual-language-systems.md` khi cần đổi visual direction sâu hơn.
6. `06-100-style-pool.md` khi cần chọn nhanh 100 style direction.

## Các file nghiên cứu

| File | Vai trò |
| --- | --- |
| `01-real-site-inspiration.md` | 30 pattern layout rút từ website game/news/store/editorial thật. |
| `02-visual-language-systems.md` | 32 hướng style khác nhau, có palette, typography, card, background, mobile behavior. |
| `03-anti-duplicate-taxonomy.md` | Framework design genome, scoring chống trùng, naming system cho 100 concept. |
| `04-first-20-concepts.md` | Concept cụ thể cho `des-1` đến `des-20`, đủ section order và treatment. |
| `05-quality-review-and-rules.md` | Luật kiểm duyệt visual/kỹ thuật, batch review và tiêu chí khác biệt đủ. |
| `06-100-style-pool.md` | Danh sách 100 style direction để chọn visual language cho từng mẫu. |

## Kết luận chính

Không nên làm 100 mẫu bằng công thức cứng kiểu:

```text
10 layout x 10 style
```

Cách đó dễ quản lý nhưng khách sẽ nhận ra mẫu bị lặp. Nên dùng nó như khung nội bộ ban đầu, sau đó chuyển sang cách quản lý bằng `design genome`.

Mỗi mẫu mới cần khác mẫu trước ở nhiều trục:

- Information architecture.
- Hero treatment.
- Content rhythm.
- Visual metaphor.
- Density.
- Card mechanics.
- Responsive behavior.

## Rule làm mẫu mới

Một giao diện mới chỉ nên được accept khi:

- Vẫn đủ 3 blog, 5 review, 5 post/game.
- Không sửa header/footer nếu không cần.
- Mobile từ 320px không vỡ.
- Khác rõ concept gần nhất, không chỉ đổi màu.
- Có tên concept và mô tả cá tính riêng.
- Qua checklist trong `05-quality-review-and-rules.md`.
