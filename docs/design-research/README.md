# Design Research Support

Đây là thư mục hỗ trợ trước khi code. Tracking chính không nằm ở đây, mà ở:

```text
100-design-board.md
```

## File Còn Dùng

| File | Vai trò |
| --- | --- |
| `brief-template.md` | Copy thành `des-briefs/des-N.md` trước khi build/rework một design. |
| `des-briefs/` | Brief thực thi từng design. |
| `refero-source-pool.md` | Chọn Refero source nhanh, không đọc toàn bộ cache. |

## Context Packet Cho AI

Khi làm một `des-N`, chỉ đọc:

```text
yeucau.md
100-home-styles.md
100-design-board.md: block đúng des-N
docs/design-research/des-briefs/des-N.md
Getdesign source ghi trong board/brief
Refero source ghi trong brief
Allowed theme files
```

Không đọc toàn bộ `docs/refero` hoặc toàn bộ `docs/getdesign` khi đang implement.
