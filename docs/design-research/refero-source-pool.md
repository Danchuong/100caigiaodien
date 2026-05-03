# Refero source pool

Pool này dùng để chọn nhanh style từ `https://styles.refero.design/`. Refero chỉ là nguồn lấy taste/token/component; không copy y nguyên brand hoặc layout.

## Nên dùng cho game portal

| Direction | Refero source | Dùng tốt cho | Lưu ý chuyển hóa |
| --- | --- | --- | --- |
| Dark command center | Fey: `https://styles.refero.design/style/a0630421-7b66-48b4-aa14-6194a3b2c2b9` | Review hub, ranking desk, dense news dashboard | Giữ dark/compact/data feel, thêm hình game và star review thật; tránh làm giống financial app. |
| White functional dashboard | Marco/Macro: `https://styles.refero.design/style/88e9d606-7e8f-479c-9508-1b081e254ed9` | Search-first directory, review archive, compact home | Giữ white canvas, small cards, rõ nhịp; thêm game cover/banner để không khô. |
| Blueprint technical grid | Parallel Web Systems: `https://styles.refero.design/style/32845f27-6b24-48be-af25-8e664f826b30` | Game catalog, guide hub, tactical/news grid | Dùng grid/border/mono label vừa đủ; không làm thành dev-tool quá xa game. |
| Stark precision | Standards | Black/white/orange compact portal | Dùng cho header/footer mạnh, nhưng accent ít. |
| High-contrast editorial | Public | Newswire hoặc blog-heavy layout | Bắt buộc chuyển sang sans-serif, game hóa bằng cards, media, star/review/game modules. |
| Dark grid console | Inngest / Linear-like dark styles | Content command board, review queue | Tránh quá giống SaaS dashboard; phải có banner hình và nội dung game nổi bật. |
| White blueprint | Augen Pro / PlanetScale-like styles | Archive/index, technical guide layout | Hợp layout ngăn nắp; cần thêm media game để không trông như docs/dev site. |

## Nên dùng có điều kiện

| Direction | Vấn đề | Cách dùng an toàn |
| --- | --- | --- |
| Luxury automotive | Có thể quá brand/product, thiếu content density | Chỉ lấy rhythm, hero/media crop, footer anatomy; không lấy showroom feel. |
| Magazine/news | Dễ thành báo cổ hoặc serif | Chỉ lấy hierarchy/editorial flow, đổi sang sans-serif, thêm game tiles/review stars. |
| Product gallery | Dễ ít thông tin, nhiều khoảng trắng | Chỉ dùng cho banner/card media, phải bổ sung list/rail dày thông tin. |

## Nên né hoặc phải biến đổi mạnh

- Serif/newspaper/parchment style: trái yêu cầu không dùng font có chân và dễ bị khách chê cổ.
- Pastel/warm beige style: dễ lạc theme game và không hợp route khác.
- Purple gradient SaaS style: dễ generic AI UI.
- Layout chỉ có một hero lớn và ít card: trái yêu cầu dày thông tin.

## Cách chọn cho batch mới

Mỗi batch 4 design nên chia khác nhau:

```text
1 dark command center
1 white compact directory
1 media-heavy gaming portal
1 blueprint/grid/archive style
```

Không dùng cùng lúc:

- Cùng `Getdesign source`.
- Cùng `Refero direction`.
- Cùng cặp header/footer archetype.
- Cùng above-fold role.
