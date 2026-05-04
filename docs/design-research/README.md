# Design Research Workflow

Thư mục này là lớp chuẩn bị trước khi code 100 theme `des-N`. Mục tiêu là giúp AI làm nhanh nhưng không bị loạn nguồn, không tạo các bản chỉ khác màu, và không phá route ngoài home.

## Vai trò từng file

| File/thư mục | Vai trò |
| --- | --- |
| `yeucau.md` | Luật khách hàng, guardrail cứng, ưu tiên cao nhất. |
| `100-home-styles.md` | Master list 100 style, status, archetype, fingerprint. |
| `docs/design-research/brief-template.md` | Template bắt buộc để tạo brief cho từng `des-N`. |
| `docs/design-research/des-briefs/des-N.md` | Gói context chính khi implement một theme cụ thể. |
| `docs/design-research/refero-source-pool.md` | Pool Refero đã lọc để chọn nhanh nguồn phụ. |
| `docs/getdesign/*/DESIGN.md` | Nguồn form/layout chính cho từng style. |
| `docs/refero/styles/*/DESIGN.md` | Nguồn token/polish/component phụ, tra cứu cục bộ. |

## Nguồn ưu tiên

Nếu có mâu thuẫn, ưu tiên theo thứ tự:

```text
yeucau.md
100-home-styles.md
docs/design-research/des-briefs/des-N.md
docs/getdesign/*/DESIGN.md
docs/refero/styles/*/DESIGN.md
ghi chú nghiên cứu cũ
```

`Getdesign` quyết định form lớn: layout, rhythm, anatomy, cách chia section. `Refero` chỉ bổ sung vị giác thiết kế: màu, type scale, density, component treatment, cách header/footer/mobile nhìn có chủ đích hơn.

## Context Packet Cho AI

Khi làm một `des-N`, agent chỉ nên đọc gói nhỏ này:

```text
yeucau.md
100-home-styles.md: phần rule chung + block đúng des-N
docs/design-research/des-briefs/des-N.md
Getdesign source ghi trong brief
Refero source ghi trong brief
wp-content/themes/des-N/header.php
wp-content/themes/des-N/home.php
wp-content/themes/des-N/footer.php
wp-content/themes/des-N/css/_header.scss
wp-content/themes/des-N/css/_home.scss
wp-content/themes/des-N/css/_footer.scss
```

Không đọc toàn bộ `docs/refero` hoặc toàn bộ `docs/getdesign` trong lúc implement. Nếu cần tìm nguồn mới thì tìm trước, ghi brief, rồi mới code.

## Quy trình một theme

1. Chọn `des-N` trong `100-home-styles.md`.
2. Tạo brief nếu chưa có: `docs/design-research/des-briefs/des-N.md`.
3. Chốt source stack: một getdesign local, một Refero local, một hướng game/news/directory.
4. Chốt fingerprint khác biệt: header, above-fold, section order, card/media, footer, mobile.
5. Chỉ sửa file trong scope của `des-N`.
6. Build `style.css`.
7. QA desktop/tablet/mobile, đặc biệt search/menu mở ở `320px`.
8. Forbidden scan: không có placeholder, fake links, duplicate nav, file ngoài scope.
9. Copy delivery khi pass.

Không code nếu brief chưa trả lời được: "nhìn phát biết khác bản trước ở đâu".

## Quy trình một batch

Mỗi batch 4 design nên có 4 vai trò khác nhau:

```text
1 media-heavy gaming portal
1 white compact directory/search-first
1 dark command/review hub
1 editorial/newswire hoặc blueprint/archive
```

Trong cùng batch không reuse cùng:

- `Getdesign source`;
- `Refero source`;
- header/footer archetype;
- above-fold role;
- card/media primitive;
- mobile menu/search behavior.

Refero chọn theo rotation trong `100-home-styles.md`: direct gaming/media, command/review desk, directory/utility, editorial/visual discovery. Brief có thể đổi nhóm, nhưng phải ghi lý do.

## Cách dùng Refero local

Tìm nhanh bằng catalog:

```bash
rg -i "xbox|media|dark|command|directory|editorial|grid|gaming" docs/refero/catalog.csv
```

Tìm trong nội dung style:

```bash
rg -i "game|media|dense|grid|command|masonry|portal|magazine|navigation|footer" docs/refero/styles -g "DESIGN.md"
```

Lọc bằng JSON:

```bash
jq -r '.catalog[] | select(.industry|test("media|devtools|productivity|design"; "i")) | [.siteName,.theme,.industry,.localDesign] | @tsv' docs/refero/manifest.json
```

Sau khi chọn, đưa cả local path và URL gốc vào brief. Ví dụ:

```text
Refero source: docs/refero/styles/xbox-com-3792d0ca/DESIGN.md
Refero URL: https://styles.refero.design/style/3792d0ca-6c74-4667-a64d-76efe9f87076
```

## Quality Gate

Một brief đủ tốt phải khóa được:

- Header global anatomy, không duplicate nav.
- Footer global anatomy, không generic hoặc chỉ đổi màu.
- First viewport có banner hình, title, description ngắn và link thật.
- Home đủ blog/review/game, dày thông tin nhưng không loãng hoặc chật.
- Search thật, menu thật, mobile popup/dropdown không dư hoặc đẩy nội dung sai.
- CSS home có namespace riêng, không đè `.pagination`, `.review-card`, `.container`, `.form-control`.
- Không sửa `reviews.php`, `search.php`, `css/_reviews.scss` nếu khách không yêu cầu.

Nếu chưa đạt các điểm này, brief là `Rework`, chưa code.
