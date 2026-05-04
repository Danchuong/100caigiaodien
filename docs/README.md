# Project Docs Map

Đọc file này trước khi dùng tài liệu trong `docs/`.

## Canonical Files

| File | Dùng khi nào |
| --- | --- |
| `../yeucau.md` | Luật khách hàng và guardrail cứng. |
| `../100-home-styles.md` | Rulebook chung: scope, archetype, rubric, QA, delivery. |
| `design-research/100-design-board.md` | Nơi tracking status và đọc spec/fingerprint của từng `des-N`. |
| `design-research/README.md` | Workflow cho AI trước khi code một `des-N`. |
| `design-research/brief-template.md` | Template tạo brief cho từng theme. |
| `design-research/des-briefs/des-N.md` | Brief thực thi của từng theme. |
| `design-research/refero-source-pool.md` | Refero đã lọc để chọn nguồn phụ nhanh. |
| `getdesign/*/DESIGN.md` | Nguồn form/layout chính. |
| `refero/styles/*/DESIGN.md` | Nguồn token/component/polish phụ. |

## Research-Only Folders

Các thư mục này chỉ dùng để tham khảo, không phải nguồn trạng thái chính:

| Folder | Vai trò |
| --- | --- |
| `100-home-design-research/` | Research cũ về layout/fingerprint/anti-duplicate. |
| `client-fit-research/` | Audit và bài học từ feedback khách. |
| `getdesign/` | Cache các `DESIGN.md` từ getdesign. |
| `refero/` | Cache lớn từ Refero, không đọc toàn bộ khi implement. |

Nếu research cũ mâu thuẫn với `yeucau.md`, `100-home-styles.md` hoặc `docs/design-research/100-design-board.md`, bỏ research cũ.

## Agent Rule

Khi làm một theme, agent chỉ nên đọc:

```text
yeucau.md
100-home-styles.md global rules
docs/design-research/100-design-board.md relevant des-N block
docs/design-research/des-briefs/des-N.md
Getdesign source in brief
Refero source in brief
Allowed theme files
```

Không dùng `docs/100-home-design-plan.md` hoặc research cũ để đánh dấu tiến độ. Tiến độ chỉ ở `docs/design-research/100-design-board.md`.
