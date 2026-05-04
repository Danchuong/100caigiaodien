# Des briefs

Mỗi file trong thư mục này là brief bắt buộc trước khi code một theme.

Tên file:

```text
des-N.md
```

Tạo từ `docs/design-research/brief-template.md`, sau đó mới bắt đầu sửa source.

## Luật dùng brief

- Mỗi `des-N` có đúng một brief.
- Brief phải ghi rõ `Getdesign source` và `Refero source` local path.
- Brief phải chốt fingerprint khác biệt trước khi code.
- Nếu khách feedback làm đổi hướng, cập nhật brief trước rồi mới sửa source.
- Nếu source đã sửa nhưng brief chưa đúng, xem brief là sai và phải đồng bộ lại.

## Context Cho Agent

Khi implement, agent chỉ đọc:

```text
yeucau.md
100-home-styles.md relevant block
docs/design-research/des-briefs/des-N.md
Getdesign source
Refero source
Allowed theme files
```

Không đọc toàn bộ `docs/refero` trong lúc sửa code.
