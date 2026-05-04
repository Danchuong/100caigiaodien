# Refero Source Pool

Pool này là danh sách Refero đã lọc từ cache local `docs/refero`. Dùng để chọn nhanh một nguồn phụ cho brief `des-N`.

Refero chỉ hỗ trợ taste/token/component. Không copy nguyên brand, copy, layout hoặc hình ảnh của source.

## Cách chọn

Mỗi `des-N` chọn 1 Refero chính, tối đa 1 Refero phụ nếu thật sự cần. Ghi cả local path và URL gốc vào brief.

Ưu tiên nguồn theo concept:

```text
Gaming/media portal -> Direct gaming/media
Review hub/dark dashboard -> Command and review desk
Directory/search-first -> Directory and compact utility
Editorial/newswire -> Editorial and media typography
Visual board/gallery -> Visual discovery and product grid
```

Không dùng cùng Refero source cho hai design gần nhau nếu có thể tránh.

## Direct Gaming And Media

| Direction | Local source | Best for | Use carefully |
| --- | --- | --- | --- |
| Console gaming portal | `docs/refero/styles/xbox-com-3792d0ca/DESIGN.md` | Game catalog, image banner, square tiles, green accent | Rất hợp game; không copy Xbox brand/menu. |
| Immersive event command | `docs/refero/styles/the-game-awards-microverse-63e985f6/DESIGN.md` | Dark event/news hero, floating cards | Cần tăng density, không để background nuốt content. |
| Creator/video rail | `docs/refero/styles/youtube-8fc58a26/DESIGN.md` | Video-like story rows, thumbnail grids | Chỉ lấy grid/treatment; không fake video feature. |
| Live/community media | `docs/refero/styles/twitch-40030487/DESIGN.md` | Stream-like rails, active nav, bold modules | Không fake live status. |
| Dark entertainment feed | `docs/refero/styles/netflix-32959012/DESIGN.md` | Dark image rows, featured banner | Không để quá ít text hoặc quá nhiều empty space. |
| Review/archive media | `docs/refero/styles/letterboxd-d98dea0b/DESIGN.md` | Review lists, poster-like cards, archive feel | Chuyển hóa thành game/review, không fake user ratings. |
| Retro media player | `docs/refero/styles/winamp-bc4b4dee/DESIGN.md` | Retro but still digital homepage | Tránh quá gimmick; sans-serif chính vẫn rõ. |
| Dark media minimal | `docs/refero/styles/hle-5abe1239/DESIGN.md` | Compact terminal/newswire, review hub | Không dùng serif; kiểm soát mobile text. |
| Premium media lesson | `docs/refero/styles/masterclass-4367b4cd/DESIGN.md` | Dark premium story/banner | Không fake course/subscription. |
| Film/editorial media | `docs/refero/styles/a24-6afa22a6/DESIGN.md` | Strong editorial art direction | Game hóa bằng cards, stars, dense rails. |
| Video/gallery media | `docs/refero/styles/vimeo-be6c7488/DESIGN.md` | Clean gallery, media tiles | Bổ sung nhiều content thật. |
| Music/media dark | `docs/refero/styles/spotify-1514a95f/DESIGN.md` | Dark rails, high-density browse | Không copy Spotify branding. |

## Command And Review Desk

| Direction | Local source | Best for | Use carefully |
| --- | --- | --- | --- |
| Dark command center | `docs/refero/styles/fey-733e6475/DESIGN.md` | Review hub, ranking desk, dense dashboard | Không biến thành finance app; thêm game imagery. |
| App launcher command | `docs/refero/styles/raycast-3b6a17f0/DESIGN.md` | Search-first game/review command home | Khác des-1 bằng layout/card/footer. |
| Linear dark precision | `docs/refero/styles/linear-90ce5883/DESIGN.md` | Dark editorial control room | Không quá SaaS dashboard. |
| Event/data workflow | `docs/refero/styles/inngest-62e8e59e/DESIGN.md` | Status/news queue, compact sections | Không fake data metrics. |
| Admin command grid | `docs/refero/styles/retool-c45b115b/DESIGN.md` | Utility-heavy review/archive layout | Giữ game context bằng thumbnails/banner. |
| Dev dark hub | `docs/refero/styles/supabase-632249f1/DESIGN.md` | Dark modular blocks, footer anatomy | Không dùng code/dev copy. |
| Data table energy | `docs/refero/styles/clickhouse-bd96c1a6/DESIGN.md` | Table-like reviews, compact rows | Không fake scores/charts. |
| Auth/utility dark | `docs/refero/styles/authkit-e80231a2/DESIGN.md` | Compact black header, action panels | Search/menu phải thật. |
| Dev brand dark | `docs/refero/styles/github-c3ceca5c/DESIGN.md` | Black utility nav, dense lists | Không làm giống repo dashboard. |
| Terminal dark | `docs/refero/styles/warp-720c9806/DESIGN.md` | Command search, compact keyline UI | Không để quá technical. |

## Directory And Compact Utility

| Direction | Local source | Best for | Use carefully |
| --- | --- | --- | --- |
| White blueprint grid | `docs/refero/styles/parallel-web-systems-32845f27/DESIGN.md` | Archive/index, compact game directory | Thêm media banner để không giống dev docs. |
| White app utility | `docs/refero/styles/augen-pro-0f7da1b2/DESIGN.md` | Search-first, clean cards, controlled spacing | Không để quá sparse. |
| Productivity cards | `docs/refero/styles/airtable-f4ef80f4/DESIGN.md` | Directory rows, grouped tables | Không copy des-1 if source already used. |
| Compact task UI | `docs/refero/styles/things-ec0f5bca/DESIGN.md` | Clean lists, calendar-like review queue | Must still include image banner. |
| Minimal product grid | `docs/refero/styles/shop-4fa67bd1/DESIGN.md` | Game shelf/product cards | No price/deal fake data. |
| Commerce utility | `docs/refero/styles/peak-design-6f3fb64d/DESIGN.md` | Visual cards, product-like grid | Avoid product-store feeling if too sparse. |
| Hard-edge gaming commerce | `docs/refero/styles/nike-com-d7ace114/DESIGN.md` | Bold visual/category tiles | Convert to game portal, not fashion. |
| Sharp ecommerce cards | `docs/refero/styles/aather-3b080dc3/DESIGN.md` | Clean square media and compact labels | Must add blog/review/game density. |
| White SaaS utility | `docs/refero/styles/attio-08c8700c/DESIGN.md` | Compact CRM-like content table | Avoid generic SaaS look. |
| Clean workspace | `docs/refero/styles/slack-e26cb9b0/DESIGN.md` | Light nav, friendly dense modules | Avoid pastel/soft mismatch with gaming. |

## Editorial And Media Typography

| Direction | Local source | Best for | Use carefully |
| --- | --- | --- | --- |
| Strict design system | `docs/refero/styles/standards-62b22816/DESIGN.md` | Black/white hard-edge editorial | Keep sans-serif and game density. |
| Minimal editorial | `docs/refero/styles/minimalissimo-35ff063b/DESIGN.md` | Calm archive, text/media balance | Avoid too much empty space. |
| Media typography | `docs/refero/styles/volume-edc0c03e/DESIGN.md` | Editorial sections, article lists | No serif main font. |
| News/media platform | `docs/refero/styles/openweb-c38d077b/DESIGN.md` | Comment/news style front page | Do not fake community comments. |
| Publishing platform | `docs/refero/styles/substack-14e563d8/DESIGN.md` | Blog-heavy feed | Must not look old/newspaper serif. |
| Modern culture magazine | `docs/refero/styles/seen-a6d5cb26/DESIGN.md` | Strong visual editorial | Game up with images/cards/stars. |
| Monocle-style index | `docs/refero/styles/monocle-9165ecb1/DESIGN.md` | Dense index/navigation/footer | Avoid old-world newspaper feel. |
| Stripe press dark | `docs/refero/styles/stripe-press-54f257e9/DESIGN.md` | Dark editorial archive | No serif; no book-store feel. |
| Lpalo media light | `docs/refero/styles/lpalo-79b4ebc4/DESIGN.md` | Clean feed/list design | Needs stronger game signal. |
| Desktop.fm media | `docs/refero/styles/desktop-fm-cb266ff9/DESIGN.md` | Audio/media directory rhythm | Do not fake audio controls. |

## Visual Discovery And Product Grid

| Direction | Local source | Best for | Use carefully |
| --- | --- | --- | --- |
| Product image grid | `docs/refero/styles/apple-c9cabb96/DESIGN.md` | Large image rhythm, premium surfaces | Add density; do not become sparse Apple page. |
| Dark product launch | `docs/refero/styles/apple-764b6a64/DESIGN.md` | Dark banner and visual hierarchy | Must remain global-safe for pages. |
| Gallery system | `docs/refero/styles/palette-supply-542453bb/DESIGN.md` | Visual cards, colors, modular grid | Avoid decorative palette-only design. |
| Playful hardware | `docs/refero/styles/playdate-2175034b/DESIGN.md` | Game-like playful direction | Keep professional, not toy-like. |
| Creative dark | `docs/refero/styles/superlative-10ab6120/DESIGN.md` | Bold visual homepage | Keep content readable and linked. |
| Motion/design dark | `docs/refero/styles/gemini-a316193c/DESIGN.md` | Immersive dark background | Avoid low-density/overly atmospheric layout. |
| Product detail clean | `docs/refero/styles/dji-f11750fc/DESIGN.md` | Image-led tech/game hardware feel | Do not fake hardware/specs. |
| Gallery/product system | `docs/refero/styles/vimeo-be6c7488/DESIGN.md` | Visual tiles with clean spacing | Must include review/game/blog text density. |

## Avoid Or Transform Heavily

- Serif/newspaper/parchment style: conflicts with sans-serif and often feels old.
- Beige/pastel lifestyle style: often mismatches game/news/review portal.
- Pure SaaS hero style: too generic and too sparse.
- Product launch page with one huge hero and few cards: fails information density.
- Source with fake data needs: finance charts, pricing tables, newsletter forms, social links, live counters.

## Batch Mix

For every 4-style batch:

```text
1 direct gaming/media
1 command/review desk
1 directory/search-first
1 editorial or visual discovery
```

Then verify against `100-home-styles.md` anti-similarity rubric before coding.
