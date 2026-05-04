# 100 Giao Diện - Start Here

Mở file này trước. Project chỉ có 4 file active cần nhớ:

| File | Vai trò |
| --- | --- |
| `yeucau.md` | Yêu cầu khách hàng và luật cứng. |
| `100-design-board.md` | Tracking chính: xong/chưa xong/cần audit, spec từng `des-N`. |
| `100-home-styles.md` | Rulebook kỹ thuật: scope, archetype, QA, delivery. |
| `docs/design-research/refero-source-pool.md` | Pool Refero đã lọc để chọn nguồn phụ khi viết brief. |

## Tracking Ở Đâu

Tracking chỉ sửa ở:

```text
100-design-board.md
```

Trong file đó:

- Xem bảng `Status Dashboard` để biết tổng quan.
- Tìm `### des-N` để xem chi tiết từng design.
- Đổi dòng `Status:` trong block `des-N` khi trạng thái thay đổi.

## Trạng Thái Hiện Tại

| Nhóm | Trạng thái | Ý nghĩa | Việc tiếp theo |
| --- | --- | --- | --- |
| `des-1` tới `des-3` | `Accepted` | Khách đã duyệt. | Không sửa nếu khách không yêu cầu. |
| `des-4` tới `des-7` | `Delivery Ready` | Đã có bản giao. | Chờ khách duyệt hoặc ship lại khi cần. |
| `des-8` tới `des-10` | `Needs Audit` | Có source cũ, chưa kiểm theo workflow mới. | Audit trước khi ship. |
| `des-11` tới `des-100` | `Spec Ready` | Có ý tưởng/spec, chưa build. | Điền Refero source trong board, tạo brief, rồi mới code. |

## Flow Làm Một Design

1. Mở `100-design-board.md`, chọn `des-N`.
2. Đọc `yeucau.md`.
3. Đọc rule liên quan trong `100-home-styles.md`.
4. Tạo/cập nhật `docs/design-research/des-briefs/des-N.md` từ template.
5. Chọn `Getdesign source` trong board và điền `Refero source` từ pool.
6. Sửa source theme đúng scope.
7. Build, QA, copy delivery.
8. Cập nhật `Status:` trong `100-design-board.md`.

## Docs Phụ

`docs/` chỉ còn là thư viện phụ:

- `docs/getdesign/`: source design chính.
- `docs/refero/`: cache Refero.
- `docs/design-research/brief-template.md`: template brief.
- `docs/archive/`: research cũ, chỉ đọc khi cần tra cứu lịch sử.
