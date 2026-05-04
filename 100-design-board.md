# 100 Design Board

File này là nơi tracking duy nhất cho 100 theme `des-1` tới `des-100`. Khi cần đổi status, chọn source, hoặc đọc spec của một design cụ thể, sửa file này.

Luật chung vẫn nằm ở `100-home-styles.md`; yêu cầu khách hàng vẫn nằm ở `yeucau.md`. Nếu có mâu thuẫn, ưu tiên `yeucau.md`, rồi `100-home-styles.md`, rồi file board này.

## Status Dashboard

| Designs | Status | Count | Meaning | Next action |
| --- | --- | ---: | --- | --- |
| `des-1` | `Rework` | 1 | Khách feedback banner yếu và tablet/iPad chưa mượt. | Rework theo `yeucau.md`, brief và QA lại. |
| `des-2` | `Delivery Ready` | 1 | Đã audit lại theo chuẩn mới và có zip/delivery. | Chờ khách duyệt lại bản uplift. |
| `des-3` | `Accepted` | 1 | Khách đã duyệt. | Không sửa nếu khách không yêu cầu. |
| `des-4` tới `des-7` | `Delivery Ready` | 4 | Đã có bản giao và zip/delivery. | Chờ khách duyệt hoặc ship lại khi cần. |
| `des-8` tới `des-10` | `Needs Audit` | 3 | Có source/folder từ batch cũ, chưa kiểm theo rule mới. | Audit, tạo brief, QA lại trước khi ship. |
| `des-11` tới `des-100` | `Spec Ready` | 90 | Có spec/fingerprint, chưa build. | Điền Refero source, tạo brief, rồi mới code. |

## Cách tracking

- Đổi `Status:` ngay trong block `des-N`.
- Điền `Refero source:` ngay trong block `des-N` trước khi tạo/rework theme.
- Nếu dùng Refero, điền thêm `Refero role`, `Use for`, `Avoid` để agent biết lấy gì và không copy/mượn sai gì từ nguồn đó.
- Dùng `New-standard audit` để đánh dấu các bản cũ cần kiểm lại theo yêu cầu mới mà không làm mất lịch sử `Accepted` hoặc `Delivery Ready`.
- Cập nhật `## Status Dashboard` nếu status theo nhóm thay đổi.
- Không đánh `Delivery Ready` nếu chưa có zip delivery đã test.
- Không đánh `Accepted` nếu khách chưa duyệt.
- Khi mở lại bản cũ để sửa/audit/rework, tạo hoặc cập nhật brief ở `docs/design-research/des-briefs/des-N.md` trước.

Không đánh `Shipped` nếu chưa có `delivery/des-N-home.zip` đã test OK. Không đánh `Accepted` nếu khách chưa duyệt.

## Status Model

```text
Idea            = mới là ý tưởng, chưa đủ spec để giao làm.
Spec Ready      = fingerprint đủ để giao làm.
Building        = đang sửa source.
Built           = code xong và đã build style.css, chưa QA đủ.
Needs Audit     = từng làm rồi nhưng chưa kiểm theo rule mới.
QA Failed       = có lỗi layout/data/mobile/global route.
QA Passed       = pass local checks nhưng chưa zip/ship.
Delivery Ready  = đã copy delivery và zip test OK.
Shipped         = đã gửi khách.
Accepted        = khách duyệt.
Rework          = khách yêu cầu sửa.
Rejected        = bỏ style này.
```

## Active Batch Prep

Batch kế tiếp đang chuẩn bị là `des-8` tới `des-12`. Nhận diện phải tách bằng silhouette trước, không chỉ bằng màu:

| Design | Batch role | Must read as | Primary Refero |
| --- | --- | --- | --- |
| `des-8` | Digest | quiet 3-column editorial desk | `docs/refero/styles/standards-62b22816/DESIGN.md` |
| `des-9` | Bands | full-width section band magazine | `docs/refero/styles/volume-edc0c03e/DESIGN.md` |
| `des-10` | Spotlight | dark critic pick stage | `docs/refero/styles/letterboxd-d98dea0b/DESIGN.md` |
| `des-11` | Table | hard-edge ranking/review desk | `docs/refero/styles/xbox-com-3792d0ca/DESIGN.md` |
| `des-12` | Lanes | platform switchboard | `docs/refero/styles/twitch-40030487/DESIGN.md` |

Không để batch này trượt thành 5 biến thể review hub giống nhau. Chốt nhanh bằng câu: `des-8 = digest`, `des-9 = bands`, `des-10 = spotlight`, `des-11 = table`, `des-12 = lanes`.


## Design Specs

### des-1 - Search First Directory

Status: Rework
Family: Game database portal
Compare against: h5game original, des-2
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/airtable/DESIGN.md`
Refero source: `docs/refero/styles/parallel-web-systems-32845f27/DESIGN.md`
Refero role: Primary - white blueprint/directory rhythm; optional secondary cue from `docs/refero/styles/raycast-3b6a17f0/DESIGN.md` for command-search behavior.
Use for: compact search-first information architecture, controlled rows, precise spacing, utility footer.
Avoid: turning the page into a dev/SaaS docs surface or removing the required image banner.
New-standard audit: Rework active - banner phải image-led rõ hơn và tablet/iPad grid phải chuyển mượt theo feedback mới.
Progress note: Đã mở retro brief tại `docs/design-research/des-briefs/des-1.md`; đang uplift banner và breakpoint nhưng vẫn giữ fingerprint Search First Directory.

- Header: H04 Search First Bar; white/light base; logo left, search prominent, menu/action compact.
- Above-fold: utility/directory-led; search and browse flow are first signal, no poster hero.
- Flow/order: search/platform rows, game rows, review picks, blog notes.
- Card/grid: compact directory rows, thumbnail/list mix, no large overlay text.
- Footer: F05 Directory Footer; browse/archive continuation with real links.
- Mobile signature: search-first stack, chips/rows compact at 320px.
- QA focus: preserve accepted home; do not redesign unless client asks.

### des-2 - Lead Left With Trending Rail

Status: Delivery Ready
Family: Magazine front page
Compare against: des-1, h5game original
Similarity risk: Low
Data risk: No fake scores
Getdesign source: `docs/getdesign/webflow/DESIGN.md`
Refero source: `docs/refero/styles/openweb-c38d077b/DESIGN.md`
Refero role: Primary - modern news/media lead with discussion/news platform structure.
Use for: lead-left/trending-rail anatomy, calm section rhythm, linked story modules, global header/footer restraint.
Avoid: parchment/old-news feeling, serif typography, fake community/comment modules, or sparse SaaS spacing.
New-standard audit: Passed - banner có image/title/short description, game cards có sao ổn định theo post ID, mobile search/menu là floating panel, logo không wrap.
Progress note: Đã tạo `docs/design-research/des-briefs/des-2.md`, uplift visual theo gaming magazine desk, build `style.css`, refresh `delivery/des-2-home.zip`.

- Header: H01/H02 hybrid; light masthead, compact primary nav, floating mobile stack.
- Above-fold: editorial/news-led; lead story left, trending rail right.
- Flow/order: blogs first, review picks, game queue.
- Card/grid: lead split card, rail list, compact review numbers, game cards.
- Footer: F06 Latest Desk Footer; real latest blogs/reviews/games.
- Mobile signature: lead story stacks, menu floats instead of pushing content.
- QA focus: footer no hard-coded `margin-top`; stack popup overlay only.

### des-3 - Center Lead Newspaper

Status: Accepted
Family: Magazine front page
Compare against: des-1, des-2
Similarity risk: Medium
Data risk: Avoid fake newsletter/social
Getdesign source: `docs/getdesign/ibm/DESIGN.md`
Refero source: `docs/refero/styles/seen-a6d5cb26/DESIGN.md`
Refero role: Primary - culture/media energy used to modernize the center-lead editorial shape.
Use for: game-ified editorial hierarchy, stronger visual signal, compact story/category bands, non-generic footer identity.
Avoid: old newspaper mood, serif masthead/body, oversized blank masthead space, repeated text-only headline blocks.
New-standard audit: Pending - high risk because the original fingerprint is newspaper-like; recheck sans-serif/game theme/density before any future rework.
Progress note: Khách đã chốt. Bản gửi cuối đã đổi Review Picks thành dạng icon vuông, không còn list chữ lặp `Review`.

- Header: H14 Magazine Logo Wall; white base, centered large logo, menu line below, search icon right.
- Above-fold: editorial/news-led; centered headline with one restrained lead image or text-first lead.
- Flow/order: lead headline, category bands, blog/review/game columns.
- Card/grid: 3-column newspaper cards, text-first hierarchy, small thumbnails only.
- Footer: F10 Newspaper Footer; masthead, section index, copyright.
- Mobile signature: logo/header height controlled; columns collapse into chronological feed.
- Risk/must avoid: center logo can get too tall; no repeated headline; no generic legal footer.

### des-4 - PlayStation Channel Mosaic

Status: Delivery Ready
Family: Game channel portal
Compare against: des-2, des-3
Similarity risk: Low
Data risk: Overlay text must stay short
Getdesign source: `docs/getdesign/playstation/DESIGN.md`
Refero source: `docs/refero/styles/xbox-com-3792d0ca/DESIGN.md`
Refero role: Primary - direct gaming/media portal; optional secondary cue from `docs/refero/styles/the-game-awards-microverse-63e985f6/DESIGN.md` for dark event/banner drama.
Use for: game channel cards, image-led banner, square/rounded game tiles, clear platform/media energy.
Avoid: copying console brand language, fake live/event data, unreadable overlay text, or duplicate nav strips.
New-standard audit: Pending - recheck global header/footer, mobile stack popup, banner copy length, star review treatment, and no scope leak into review/search templates.
Progress note: Đã build, render local, tạo `delivery/des-4-home.zip`, và đã fix lỗi `/reviews/` do `_reviews.scss` cũ có margin âm. Đang chờ user review thủ công.

- Header: H03/H08 hybrid; dark premium channel, live/latest strip, search riêng, `main-menu` duy nhất.
- Above-fold: image-led premium game channel; one large story plus smaller story cards.
- Flow/order: dark mosaic, blogs, reviews, games.
- Card/grid: product-like image tiles, rounded cards, quiet large type, blue/cyan interaction.
- Footer: F05/F16 hybrid; cobalt/dark directory continuation with real links.
- Mobile signature: mosaic becomes story stack, search/menu controlled at 320px.
- Risk/must avoid: no duplicate topbar menu; no unreadable image overlay.

### des-5 - WIRED Broadsheet Front Page

Status: Delivery Ready
Family: Magazine front page
Compare against: des-3, des-4
Similarity risk: Low
Data risk: No fake issue metadata beyond simple labels
Getdesign source: `docs/getdesign/wired/DESIGN.md`
Refero source: `docs/refero/styles/hle-5abe1239/DESIGN.md`
Refero role: Primary - grayscale digital media desk to keep broadsheet structure but make it feel technical/game-facing.
Use for: hard-edge sans editorial grid, compact newswire rows, dark/light desk contrast, dense footer index.
Avoid: classic newspaper styling, serif typography, fake issue/newsletter metadata, too much empty space, or text-only modules without game signal.
New-standard audit: Pending - high risk because broadsheet can feel old; recheck game vibe, banner with image/title/description, and compact spacing before any future rework.
Progress note: Đã build, render local, tạo `delivery/des-5-home.zip`; cần user review thủ công trước khi gửi khách.

- Header: H15/H01 hybrid; black desk strip + white editorial masthead, `main-menu` duy nhất.
- Above-fold: broadsheet front page; lead blog, review wire, game rail.
- Flow/order: cover/front grid, blog ledger, critic picks, game shelf.
- Card/grid: hard-rule square media, newspaper rows, no shadows.
- Footer: F10/F02 hybrid; dark magazine footer with real latest links.
- Mobile signature: cover first, issue index below, cards become plain reading list.
- Risk/must avoid: do not create fake newsletter/signup; avoid oversized first viewport.

### des-6 - Pinterest Discovery Board

Status: Delivery Ready
Family: Visual discovery portal
Compare against: des-2, des-4
Similarity risk: Low
Data risk: Image discovery must use real thumbnails where available
Getdesign source: `docs/getdesign/pinterest/DESIGN.md`
Refero source: `docs/refero/styles/vimeo-be6c7488/DESIGN.md`
Refero role: Primary - visual media/gallery system for image-first discovery without copying Pinterest too literally.
Use for: thumbnail-led discovery cards, clean gallery spacing, browse/search flow, image banner with dense supporting links.
Avoid: sparse portfolio/gallery feel, decorative-only cards, over-rounded soft lifestyle mood, or inconsistent icon/card ratios.
New-standard audit: Pending - recheck card balance, non-cramped density, mobile search/menu, square icon treatment, and game/review stars before any future rework.
Progress note: Đã build, render local, tạo `delivery/des-6-home.zip`; cần user review thủ công trước khi gửi khách.

- Header: H04 Search First Bar; warm white, search-first, `main-menu` duy nhất.
- Above-fold: visual discovery board; search + rounded image pin board.
- Flow/order: discovery hero, blog grid, review grid, game grid.
- Card/grid: rounded image-first cards, masonry-like rhythm, warm red accent.
- Footer: F18/F05 hybrid; dark warm discovery footer with search/browse links.
- Mobile signature: search first, pins stack into image cards.
- Risk/must avoid: no duplicate quick links; search scope must stay `reviews`.

### des-7 - The Verge Story Stream

Status: Delivery Ready
Family: Loud editorial front page
Compare against: des-2, des-5
Similarity risk: Low
Data risk: Avoid fake newsletter footer
Getdesign source: `docs/getdesign/theverge/DESIGN.md`
Refero source: `docs/refero/styles/twitch-40030487/DESIGN.md`
Refero role: Primary - live/community gaming media energy used only for layout attitude and interactive rails.
Use for: loud story stream, gaming-native accents, compact media rails, global dark/navy header-footer variation.
Avoid: fake live status, streamer-specific copy, duplicate menu links, or chaotic mixed-radius/misaligned modules.
New-standard audit: Pending - recheck visual consistency, search popup, mobile menu popup, image banner, density, and global header/footer fit before any future rework.
Progress note: Đã build, render local, tạo `delivery/des-7-home.zip`; cần user review thủ công trước khi gửi khách.

- Header: H06/H14 hybrid; near-black editorial masthead, one `wp_nav_menu()` source, search reviews only.
- Above-fold: loud editorial cover board with saturated tiles.
- Flow/order: cover, story timeline, review desk, game shelf.
- Card/grid: rounded story stream, acid mint/purple accents, flat borders.
- Footer: F07/F02 hybrid; archive/masthead continuation, no fake newsletter.
- Mobile signature: story tiles and timeline collapse into stacked stream.
- Risk/must avoid: no hard-coded duplicate nav; no fake subscribe/newsletter.

### des-8 - Newspaper Three Column

Status: Needs Audit
Family: Minimal editorial
Compare against: des-3, des-7
Similarity risk: Medium
Data risk: Text density risk
Getdesign source: `docs/getdesign/apple/DESIGN.md`
Refero source: `docs/refero/styles/standards-62b22816/DESIGN.md` (secondary: `docs/refero/styles/xbox-com-3792d0ca/DESIGN.md`)
Batch role: Digest
Banner slot: compact image strip in first viewport, not a poster hero.
Footer uniqueness note: navy editorial index with real latest links, not a generic sitemap.

- Header: H01 White Editorial Masthead; logo centered, menu below.
- Above-fold: text-first digest with compact image banner/title/short description; no image-heavy poster hero.
- Flow/order: three editorial columns mixing blog/review/game.
- Card/grid: headline-first cards with small labels, newspaper rhythm.
- Footer: F03 Navy Editorial Footer; section index and latest links.
- Mobile signature: chronological feed; type scale reduced at 320px.
- Risk/must avoid: first viewport cannot become wall of unreadable text.

### des-9 - Section Band Magazine

Status: Needs Audit
Family: Magazine front page
Compare against: des-4, des-8
Similarity risk: Medium
Data risk: Partner/footer links must be real
Getdesign source: `docs/getdesign/stripe/DESIGN.md`
Refero source: `docs/refero/styles/volume-edc0c03e/DESIGN.md`
Batch role: Bands
Banner slot: first section band contains image, title, and short description.
Footer uniqueness note: archive-band footer with real section links; no fake partner/social.

- Header: H18 Two Rail Header; white base, primary nav + topic rail with real links.
- Above-fold: section band; full-width editorial band with clear category.
- Flow/order: alternating wide bands for blogs/reviews/games.
- Card/grid: alternating image/text ratios, band separators.
- Footer: F07 Archive Index Footer; no partner/social unless URLs exist.
- Mobile signature: band separators remain, each band stacks cleanly.
- Risk/must avoid: topic rail cannot duplicate primary nav.

### des-10 - Review Pick Hero

Status: Needs Audit
Family: Review hub
Compare against: des-2, des-11
Similarity risk: Medium
Data risk: No fake scores unless real field exists
Getdesign source: `docs/getdesign/linear.app/DESIGN.md`
Refero source: `docs/refero/styles/letterboxd-d98dea0b/DESIGN.md`
Batch role: Spotlight
Banner slot: featured review card with image, title, and short verdict/description.
Footer uniqueness note: dark review archive footer with latest reviews and game/media continuation.

- Header: H13 Scoreboard Header; black/navy base, review/category strip without fake score.
- Above-fold: review-led hero; featured review/pick, title and verdict label only.
- Flow/order: reviews first, then games, then blogs.
- Card/grid: review cards with labels, no score badge unless field exists.
- Footer: F08 Review Hub Footer; latest reviews and review archive.
- Mobile signature: featured review card first, review list below.
- Risk/must avoid: rename `Review Score Hero` to `Review Pick Hero` if no score field.

### des-11 - Top Rated Table

Status: Spec Ready
Family: Review hub
Compare against: des-10, des-2
Similarity risk: Medium
Data risk: Needs real score field or use ranking labels only
Getdesign source: `docs/getdesign/clickhouse/DESIGN.md`
Refero source: `docs/refero/styles/xbox-com-3792d0ca/DESIGN.md` (secondary: `docs/refero/styles/parallel-web-systems-32845f27/DESIGN.md`)
Batch role: Table
Banner slot: compact top ranking slab with one image/title/short description before table rows.
Footer uniqueness note: hard-edge ranking footer with review archive and browse paths, visually distinct from des-10.

- Header: H04 Search First Bar; review search scope, menu compact.
- Above-fold: review/ranking-led table if real score exists; otherwise “Review Picks Table”.
- Flow/order: ranking/reviews, games, blogs.
- Card/grid: table rows on desktop, cards on mobile.
- Footer: F08 Review Hub Footer.
- Mobile signature: table becomes stacked review cards.
- Risk/must avoid: no numeric rating if field is absent.

### des-12 - Platform Review Lanes

Status: Spec Ready
Family: Review hub
Compare against: des-10, des-11
Similarity risk: Medium
Data risk: Platform labels must be real tags/categories or generic safe labels
Getdesign source: `docs/getdesign/vercel/DESIGN.md`
Refero source: `docs/refero/styles/twitch-40030487/DESIGN.md`
Batch role: Lanes
Banner slot: platform/lane intro with image, title, and short description.
Footer uniqueness note: platform switchboard footer with lane links and real latest content; not another F08 clone.

- Header: H05 Category Rail Header; platform/category rail with real links if available.
- Above-fold: platform selector/lane intro.
- Flow/order: reviews by lane, games, blogs.
- Card/grid: horizontal lane cards, optional verdict labels.
- Footer: F08 Review Hub Footer.
- Mobile signature: chip rail above stacked lanes.
- Risk/must avoid: do not invent platform taxonomy if not present.

### des-13 - Critic User Split

Status: Spec Ready
Family: Review hub
Compare against: des-10, des-12
Similarity risk: Medium
Data risk: Do not fake user scores
Getdesign source: `docs/getdesign/figma/DESIGN.md`
Refero source: `TBD`

- Header: H06 Split Masthead; white base, balanced nav/search.
- Above-fold: critic/user comparison concept using labels, not fake scores.
- Flow/order: reviews, games, blogs.
- Card/grid: split verdict cards with two text columns.
- Footer: F13 Split Brand Content Footer.
- Mobile signature: dual columns stack into labeled blocks.
- Risk/must avoid: if no user data, use “Editor view / Player notes” copy tied to real excerpt.

### des-14 - Review Timeline

Status: Spec Ready
Family: Review hub
Compare against: des-10, des-13
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/cal/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header; calm white base.
- Above-fold: timeline intro, not large image hero.
- Flow/order: chronological reviews, games, blogs.
- Card/grid: vertical timeline cards using dates.
- Footer: F04 Compact Legal Footer.
- Mobile signature: one-column timeline with date markers.
- Risk/must avoid: timeline markers must not overflow at 320px.

### des-15 - Comparison Desk

Status: Spec Ready
Family: Review hub
Compare against: des-11, des-13
Similarity risk: Medium
Data risk: No fake comparison fields
Getdesign source: `docs/getdesign/miro/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header; search/action heavy.
- Above-fold: comparison block using real review/game titles.
- Flow/order: comparisons, reviews, games, blogs.
- Card/grid: side-by-side cards desktop, stack mobile.
- Footer: F18 Search Directory Footer.
- Mobile signature: comparison stack with clear labels.
- Risk/must avoid: no fake specs/prices; use content excerpts only.

### des-16 - Pros Cons Review Board

Status: Spec Ready
Family: Review hub
Compare against: des-10, des-15
Similarity risk: Medium
Data risk: No fake pros/cons unless derived from real excerpt
Getdesign source: `docs/getdesign/sentry/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: verdict board with review picks.
- Flow/order: review grid, blogs, games.
- Card/grid: board cards with title/excerpt label, not fabricated pros/cons.
- Footer: F06 Latest Desk Footer.
- Mobile signature: verdict blocks above image/list.
- Risk/must avoid: do not create pros/cons bullets from nothing.

### des-17 - Sidebar Score Chart

Status: Spec Ready
Family: Review hub
Compare against: des-11, des-16
Similarity risk: High
Data risk: Avoid fake chart/score
Getdesign source: `docs/getdesign/supabase/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: lead review plus sticky sidebar summary; no fake chart if no data.
- Flow/order: reviews first, blog/game support.
- Card/grid: chart-like cards can use category/title/date only.
- Footer: F08 Review Hub Footer.
- Mobile signature: sidebar summary becomes block under hero.
- Risk/must avoid: no artificial leaderboard numbers.

### des-18 - Game Search Directory

Status: Spec Ready
Family: Game database portal
Compare against: des-1, des-11
Similarity risk: High
Data risk: None
Getdesign source: `docs/getdesign/raycast/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header; game browse/search focus, not same as des-1.
- Above-fold: large game search/filter surface.
- Flow/order: games, reviews, blogs.
- Card/grid: directory cards with compact metadata labels.
- Footer: F05 Directory Footer.
- Mobile signature: search-first, filters as chips.
- Risk/must avoid: must differ from des-1 in DOM order/card anatomy/footer.

### des-19 - Genre Wall

Status: Spec Ready
Family: Game database portal
Compare against: des-18, des-1
Similarity risk: Medium
Data risk: Genre labels must be real or generic category labels
Getdesign source: `docs/getdesign/mongodb/DESIGN.md`
Refero source: `TBD`

- Header: H05 Category Rail Header.
- Above-fold: genre/category wall.
- Flow/order: games by visual groups, reviews, blogs.
- Card/grid: tile cards with varied size.
- Footer: F09 Game Catalog Footer.
- Mobile signature: horizontal genre chip rail then tiles stack.
- Risk/must avoid: no fake genre pages if links do not exist.

### des-20 - Platform Tabs Catalog

Status: Spec Ready
Family: Game database portal
Compare against: des-12, des-18
Similarity risk: Medium
Data risk: Platform tabs must be safe if taxonomy absent
Getdesign source: `docs/getdesign/shopify/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: tabbed catalog intro.
- Flow/order: platform lanes, reviews, blogs.
- Card/grid: compact cards inside tab/lane groups.
- Footer: F09 Game Catalog Footer.
- Mobile signature: tabs become scroll rail.
- Risk/must avoid: no inactive fake tab behavior.

### des-21 - Release Calendar First

Status: Spec Ready
Family: Game database portal
Compare against: des-14, des-20
Similarity risk: Low
Data risk: Use publish dates, not fake release dates
Getdesign source: `docs/getdesign/cal/DESIGN.md`
Refero source: `TBD`

- Header: H12 Breadcrumb Header.
- Above-fold: date/release board based on post dates.
- Flow/order: date groups, games, reviews, blogs.
- Card/grid: date cards and compact rows.
- Footer: F04 Compact Legal Footer.
- Mobile signature: date timeline.
- Risk/must avoid: do not invent future release dates.

### des-22 - A-Z Game Index

Status: Spec Ready
Family: Game database portal
Compare against: des-18, des-20
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/notion/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: A-Z/index-first, no classic hero.
- Flow/order: alphabet/index, games, reviews, blogs.
- Card/grid: index rows and compact game rows.
- Footer: F18 Search Directory Footer.
- Mobile signature: sticky/scroll alphabet rail, then list.
- Risk/must avoid: alphabet links should be anchors or real filters, not dead links.

### des-23 - Upcoming Released Split

Status: Spec Ready
Family: Game database portal
Compare against: des-21, des-20
Similarity risk: Medium
Data risk: Use safe labels, not fake release state
Getdesign source: `docs/getdesign/airbnb/DESIGN.md`
Refero source: `TBD`

- Header: H06 Split Masthead.
- Above-fold: two-lane “new / recommended” split using real posts.
- Flow/order: games, reviews, blogs.
- Card/grid: two-lane cards.
- Footer: F13 Split Brand Content Footer.
- Mobile signature: lanes toggle/stack.
- Risk/must avoid: do not label upcoming/released unless real data exists.

### des-24 - Game Detail Teaser Grid

Status: Spec Ready
Family: Game database portal
Compare against: des-18, des-23
Similarity risk: Medium
Data risk: No fake stats
Getdesign source: `docs/getdesign/tesla/DESIGN.md`
Refero source: `TBD`

- Header: H18 Two Rail Header.
- Above-fold: featured game teaser.
- Flow/order: teaser grid, reviews, blogs.
- Card/grid: stat-like detail snippets from real title/excerpt/category only.
- Footer: F05 Directory Footer.
- Mobile signature: detail snippets stack.
- Risk/must avoid: no fake player count/rating/downloads.

### des-25 - Library Shelf Portal

Status: Spec Ready
Family: Game database portal
Compare against: des-19, des-24
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/spotify/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: horizontal shelf row.
- Flow/order: games first, reviews, blogs.
- Card/grid: cover shelf cards with consistent ratios.
- Footer: F11 Dark Utility Footer.
- Mobile signature: cover rail then stacked lists.
- Risk/must avoid: shelf rail must not overflow page horizontally.

### des-26 - Live Ticker Newsroom

Status: Spec Ready
Family: Esports and live desk
Compare against: des-6, des-8
Similarity risk: Medium
Data risk: Ticker uses latest posts only
Getdesign source: `docs/getdesign/slack/DESIGN.md`
Refero source: `TBD`

- Header: H08 Topline News Header.
- Above-fold: live/latest ticker strip plus small story grid.
- Flow/order: latest, blogs, reviews, games.
- Card/grid: compact ticker cards and timestamp-like labels from post date.
- Footer: F16 Dense Portal Footer.
- Mobile signature: ticker scroll then mini list.
- Risk/must avoid: no fake live status.

### des-27 - Match Schedule Hero

Status: Spec Ready
Family: Esports and live desk
Compare against: des-21, des-26
Similarity risk: Medium
Data risk: No fake match data
Getdesign source: `docs/getdesign/nike/DESIGN.md`
Refero source: `TBD`

- Header: H13 Scoreboard Header.
- Above-fold: schedule-style board mapped to latest content.
- Flow/order: schedule board, blogs, reviews, games.
- Card/grid: row cards, not real match scores.
- Footer: F11 Dark Utility Footer.
- Mobile signature: schedule rows first.
- Risk/must avoid: do not imply real match times/scores.

### des-28 - Standings Board

Status: Spec Ready
Family: Esports and live desk
Compare against: des-11, des-27
Similarity risk: Medium
Data risk: No fake standings
Getdesign source: `docs/getdesign/binance/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: standings-inspired content board without fake ranks.
- Flow/order: board, blogs, games, reviews.
- Card/grid: table-like rows with real content.
- Footer: F16 Dense Portal Footer.
- Mobile signature: table becomes cards.
- Risk/must avoid: no team standings if no source data.

### des-29 - Tournament Bracket Home

Status: Spec Ready
Family: Esports and live desk
Compare against: des-28, des-23
Similarity risk: Low
Data risk: No fake bracket
Getdesign source: `docs/getdesign/mastercard/DESIGN.md`
Refero source: `TBD`

- Header: H13 Scoreboard Header.
- Above-fold: bracket-inspired lanes using categories/content groups.
- Flow/order: lanes, blogs, reviews, games.
- Card/grid: bracket cards with real post links.
- Footer: F03 Navy Editorial Footer.
- Mobile signature: bracket lanes become rounds/sections.
- Risk/must avoid: do not create fake tournament outcomes.

### des-30 - Team Desk Portal

Status: Spec Ready
Family: Esports and live desk
Compare against: des-29, des-19
Similarity risk: Low
Data risk: No fake roster
Getdesign source: `docs/getdesign/meta/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: team/spotlight-inspired feature using real post.
- Flow/order: spotlight, blogs, games, reviews.
- Card/grid: profile-like cards using thumbnails/titles only.
- Footer: F15 Mobile Accordion Footer.
- Mobile signature: roster rail becomes stacked cards.
- Risk/must avoid: no fabricated team/player profiles.

### des-31 - Stat Sidebar Portal

Status: Spec Ready
Family: Dense desk
Compare against: des-17, des-28
Similarity risk: Medium
Data risk: No fake odds/stat
Getdesign source: `docs/getdesign/posthog/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: news lead + stat-inspired sidebar using real metadata.
- Flow/order: main feed, side rail, reviews, games.
- Card/grid: stat widgets as link cards.
- Footer: F13 Split Brand Content Footer.
- Mobile signature: stats rail moves below hero.
- Risk/must avoid: avoid odds/prices/numbers.

### des-32 - Video Recap Lead

Status: Spec Ready
Family: Video and trailer first
Compare against: des-34, des-6
Similarity risk: Medium
Data risk: No fake playable video
Getdesign source: `docs/getdesign/runwayml/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: media card with thumbnail and title, not embedded fake video.
- Flow/order: media lead, blogs, reviews, games.
- Card/grid: media-style cards.
- Footer: F17 Visual Strip Footer.
- Mobile signature: thumbnail first, title below.
- Risk/must avoid: no fake play button if no video URL.

### des-33 - Live Blog Feed

Status: Spec Ready
Family: Dense newswire
Compare against: des-26, des-14
Similarity risk: Low
Data risk: Use post dates only
Getdesign source: `docs/getdesign/wise/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: no classic hero; latest feed first.
- Flow/order: chronological feed, reviews, games.
- Card/grid: timestamp feed rows.
- Footer: F06 Latest Desk Footer.
- Mobile signature: pure timeline feed.
- Risk/must avoid: no fake live labels.

### des-34 - Full Video Hero

Status: Spec Ready
Family: Video and trailer first
Compare against: des-32, des-37
Similarity risk: Medium
Data risk: No fake video
Getdesign source: `docs/getdesign/elevenlabs/DESIGN.md`
Refero source: `TBD`

- Header: H17 Floating Overlay Header.
- Above-fold: full media-feature hero using real thumbnail.
- Flow/order: media feature, blogs, reviews, games.
- Card/grid: media cards with image/title.
- Footer: F17 Visual Strip Footer.
- Mobile signature: thumbnail + title below, overlay text reduced.
- Risk/must avoid: no fake video player controls.

### des-35 - Trailer Grid Above Fold

Status: Spec Ready
Family: Video and trailer first
Compare against: des-34, des-4
Similarity risk: Medium
Data risk: No fake trailers
Getdesign source: `docs/getdesign/framer/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: 2x2 media grid from real posts.
- Flow/order: grid, blogs, reviews, games.
- Card/grid: video tile styling without fake play actions.
- Footer: F02 Black Magazine Footer.
- Mobile signature: trailer rail/stack.
- Risk/must avoid: no dead play buttons.

### des-36 - Playlist Sidebar

Status: Spec Ready
Family: Video and trailer first
Compare against: des-32, des-35
Similarity risk: Medium
Data risk: No fake playlist state
Getdesign source: `docs/getdesign/spotify/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: feature left + playlist/sidebar right.
- Flow/order: playlist, blogs, games, reviews.
- Card/grid: horizontal media cards.
- Footer: F14 Footer With Top Story.
- Mobile signature: playlist below feature.
- Risk/must avoid: sidebar must not duplicate des-2 rail exactly.

### des-37 - Cinema Layout

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-34, des-83
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/spacex/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: widescreen cinematic poster using real thumbnail/background.
- Flow/order: feature, media-like cards, blogs, reviews, games.
- Card/grid: wide cards and dark panels.
- Footer: F02 Black Magazine Footer.
- Mobile signature: poster then list.
- Risk/must avoid: dark palette must not break non-home pages.

### des-38 - Shorts Column

Status: Spec Ready
Family: Video and trailer first
Compare against: des-35, des-39
Similarity risk: Low
Data risk: No fake shorts
Getdesign source: `docs/getdesign/meta/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: portrait/vertical column + news list.
- Flow/order: portrait cards, blogs, reviews, games.
- Card/grid: portrait ratio cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: portrait feed first.
- Risk/must avoid: avoid excessive vertical cards at 320px.

### des-39 - Media Wall

Status: Spec Ready
Family: Video and trailer first
Compare against: des-4, des-35
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/figma/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: media wall/masonry first, no text-heavy hero.
- Flow/order: media wall, reviews, games, blogs.
- Card/grid: masonry-like mixed image cards.
- Footer: F17 Visual Strip Footer.
- Mobile signature: masonry collapses to controlled stack.
- Risk/must avoid: no unreadable overlay text.

### des-40 - Stream Channel Home

Status: Spec Ready
Family: Video and trailer first
Compare against: des-32, des-35
Similarity risk: Medium
Data risk: No fake streams/live
Getdesign source: `docs/getdesign/spotify/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: channel spotlight using real post.
- Flow/order: spotlight, media cards, blogs, reviews, games.
- Card/grid: channel cards as content links.
- Footer: F11 Dark Utility Footer.
- Mobile signature: channel rail then list.
- Risk/must avoid: do not label live/stream unless true.

### des-41 - Feature Video Plus Articles

Status: Spec Ready
Family: Video and trailer first
Compare against: des-32, des-36
Similarity risk: Medium
Data risk: No fake video controls
Getdesign source: `docs/getdesign/replicate/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: media feature left, article list right.
- Flow/order: video/media lead, articles, reviews, games.
- Card/grid: mixed media/list cards.
- Footer: F06 Latest Desk Footer.
- Mobile signature: article list after media feature.
- Risk/must avoid: not same as des-2 lead+rail; content role must be media-led.

### des-42 - Trending Threads Hero

Status: Spec Ready
Family: Community style
Compare against: des-26, des-33
Similarity risk: Medium
Data risk: No fake forum threads
Getdesign source: `docs/getdesign/slack/DESIGN.md`
Refero source: `TBD`

- Header: H07 Center Logo Drawer.
- Above-fold: trending-thread-inspired list using real posts.
- Flow/order: discussion list, blogs, reviews, games.
- Card/grid: thread cards with comments-like excerpt only if real.
- Footer: F15 Mobile Accordion Footer.
- Mobile signature: thread list first.
- Risk/must avoid: do not invent comments/counts.

### des-43 - Forum Board Blocks

Status: Spec Ready
Family: Community style
Compare against: des-42, des-18
Similarity risk: Low
Data risk: No fake boards
Getdesign source: `docs/getdesign/notion/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: board/category blocks using real archives/categories.
- Flow/order: boards, blogs, reviews, games.
- Card/grid: board blocks and content cards.
- Footer: F01 White Sitemap Footer.
- Mobile signature: board blocks stack/accordion.
- Risk/must avoid: board links must be real.

### des-44 - Poll First Home

Status: Spec Ready
Family: Community style
Compare against: des-43, des-15
Similarity risk: Medium
Data risk: No fake poll
Getdesign source: `docs/getdesign/airtable/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: question/choice-style block as “What to read next” using real links.
- Flow/order: choice block, blogs, reviews, games.
- Card/grid: choice cards, no vote state.
- Footer: F18 Search Directory Footer.
- Mobile signature: choice cards first.
- Risk/must avoid: no poll submit/counts unless backend exists.

### des-45 - User Picks Grid

Status: Spec Ready
Family: Community style
Compare against: des-42, des-19
Similarity risk: Medium
Data risk: No fake users
Getdesign source: `docs/getdesign/pinterest/DESIGN.md`
Refero source: `TBD`

- Header: H07 Center Logo Drawer.
- Above-fold: picks grid using real editor/content picks.
- Flow/order: picks, reviews, blogs, games.
- Card/grid: pick cards with thumbnails/titles.
- Footer: F15 Mobile Accordion Footer.
- Mobile signature: pick rail/stack.
- Risk/must avoid: do not invent user avatars/names.

### des-46 - Comment Heavy Feed

Status: Spec Ready
Family: Community style
Compare against: des-33, des-42
Similarity risk: Low
Data risk: No fake comments
Getdesign source: `docs/getdesign/intercom/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: no hero; discussion-style feed.
- Flow/order: feed, reviews, games, blogs.
- Card/grid: comment-preview-like cards from excerpts.
- Footer: F04 Compact Legal Footer.
- Mobile signature: feed-first.
- Risk/must avoid: no comment counts unless real.

### des-47 - Community Spotlight

Status: Spec Ready
Family: Community style
Compare against: des-30, des-45
Similarity risk: Medium
Data risk: No fake profiles
Getdesign source: `docs/getdesign/clay/DESIGN.md`
Refero source: `TBD`

- Header: H01 White Editorial Masthead.
- Above-fold: spotlight feature using real post.
- Flow/order: spotlight, blogs, games, reviews.
- Card/grid: profile-like cards without fake people data.
- Footer: F13 Split Brand Content Footer.
- Mobile signature: profile stack.
- Risk/must avoid: no fabricated community member profile.

### des-48 - Q&A Guide Home

Status: Spec Ready
Family: Guide hybrid
Compare against: des-18, des-44
Similarity risk: Medium
Data risk: No fake Q&A backend
Getdesign source: `docs/getdesign/mintlify/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: question/search surface for reviews/guides.
- Flow/order: Q&A-style rows, blogs, reviews, games.
- Card/grid: accordion-like rows with real post links.
- Footer: F18 Search Directory Footer.
- Mobile signature: search + accordion rows.
- Risk/must avoid: no fake answer counts.

### des-49 - Event Community Board

Status: Spec Ready
Family: Community style
Compare against: des-21, des-43
Similarity risk: Low
Data risk: No fake event dates
Getdesign source: `docs/getdesign/cal/DESIGN.md`
Refero source: `TBD`

- Header: H12 Breadcrumb Header.
- Above-fold: event-board-inspired date/content board using post dates.
- Flow/order: board, blogs, reviews, games.
- Card/grid: event cards.
- Footer: F07 Archive Index Footer.
- Mobile signature: event list.
- Risk/must avoid: no invented event schedule.

### des-50 - Single Story Cover

Status: Spec Ready
Family: Minimal editorial
Compare against: des-5, des-8
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/apple/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: one story cover.
- Flow/order: cover, blog/review/game index.
- Card/grid: sparse cards with strong whitespace.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: cover then index.
- Risk/must avoid: do not make hero so tall it hides next section.

### des-51 - Text First Editorial

Status: Spec Ready
Family: Minimal editorial
Compare against: des-8, des-50
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/claude/DESIGN.md`
Refero source: `TBD`

- Header: H12 Breadcrumb Header or H15 Minimal Text Header.
- Above-fold: pure text headline, no image hero.
- Flow/order: essays/blogs, reviews, games.
- Card/grid: text cards and list rows.
- Footer: F04 Compact Legal Footer.
- Mobile signature: reading flow, small type scale.
- Risk/must avoid: avoid wall of text at 320px.

### des-52 - Vertical Editorial Index

Status: Spec Ready
Family: Minimal editorial
Compare against: des-51, des-14
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/sanity/DESIGN.md`
Refero source: `TBD`

- Header: H01 White Editorial Masthead.
- Above-fold: vertical issue index, no hero image.
- Flow/order: index, blogs, reviews, games.
- Card/grid: vertical index cards.
- Footer: F10 Newspaper Footer.
- Mobile signature: date/title list.
- Risk/must avoid: index links must be real.

### des-53 - Monochrome Magazine

Status: Spec Ready
Family: Minimal editorial
Compare against: des-50, des-37
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/bmw/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: black/white lead.
- Flow/order: section essays/blogs, reviews, games.
- Card/grid: monochrome cards with limited accent.
- Footer: F02 Black Magazine Footer.
- Mobile signature: contrast list.
- Risk/must avoid: keep contrast accessible.

### des-54 - Large Date Article Stack

Status: Spec Ready
Family: Minimal editorial
Compare against: des-21, des-52
Similarity risk: Low
Data risk: Use publish date only
Getdesign source: `docs/getdesign/ibm/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: latest date marker and article stack.
- Flow/order: date grouped posts, reviews, games.
- Card/grid: date cards and plain rows.
- Footer: F04 Compact Legal Footer.
- Mobile signature: date timeline.
- Risk/must avoid: no fake publication schedule.

### des-55 - Featured Column Plain List

Status: Spec Ready
Family: Minimal editorial
Compare against: des-2, des-51
Similarity risk: Medium
Data risk: No fake newsletter footer
Getdesign source: `docs/getdesign/notion/DESIGN.md`
Refero source: `TBD`

- Header: H06 Split Masthead.
- Above-fold: featured column + plain list.
- Flow/order: lists, reviews, games, blogs.
- Card/grid: plain list cards, limited images.
- Footer: F14 Footer With Top Story.
- Mobile signature: plain list first after feature.
- Risk/must avoid: not same lead+rail composition as des-2.

### des-56 - Large Typography Grid

Status: Spec Ready
Family: Minimal editorial
Compare against: des-51, des-58
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/bugatti/DESIGN.md`
Refero source: `TBD`

- Header: H01 White Editorial Masthead.
- Above-fold: typography grid, no image hero.
- Flow/order: typography tiles, reviews, games.
- Card/grid: text-heavy tiles with controlled type.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: type scale reduced, tiles stack.
- Risk/must avoid: text must not overflow cards.

### des-57 - Quiet Review Journal

Status: Spec Ready
Family: Minimal editorial
Compare against: des-14, des-10
Similarity risk: Low
Data risk: No fake score
Getdesign source: `docs/getdesign/superhuman/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: review note/journal intro.
- Flow/order: review journal, blogs, games.
- Card/grid: journal cards with text snippets.
- Footer: F03 Navy Editorial Footer.
- Mobile signature: note stack.
- Risk/must avoid: avoid score language unless real.

### des-58 - Compact Four Column Desk

Status: Spec Ready
Family: Dense newswire
Compare against: des-8, des-62
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/cohere/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: no large hero; dense desk starts immediately.
- Flow/order: 4-column desk, reviews, games.
- Card/grid: compact headline cards.
- Footer: F16 Dense Portal Footer.
- Mobile signature: compact list.
- Risk/must avoid: desktop density must not become mobile clutter.

### des-59 - Latest First List

Status: Spec Ready
Family: Dense newswire
Compare against: des-33, des-58
Similarity risk: Medium
Data risk: Use latest/publish dates only
Getdesign source: `docs/getdesign/resend/DESIGN.md`
Refero source: `TBD`

- Header: H08 Topline News Header.
- Above-fold: latest headline strip.
- Flow/order: latest list, reviews, games, blogs.
- Card/grid: list cards and mini rows.
- Footer: F06 Latest Desk Footer.
- Mobile signature: latest feed first.
- Risk/must avoid: no fake breaking/live language.

### des-60 - Category Lanes

Status: Spec Ready
Family: Dense newswire
Compare against: des-12, des-58
Similarity risk: Medium
Data risk: Category links must be real if clickable
Getdesign source: `docs/getdesign/hashicorp/DESIGN.md`
Refero source: `TBD`

- Header: H18 Two Rail Header.
- Above-fold: category summary lanes.
- Flow/order: category lanes, reviews, games.
- Card/grid: lane cards.
- Footer: F07 Archive Index Footer.
- Mobile signature: chip lanes.
- Risk/must avoid: no dead category chips.

### des-61 - Ticker Small Cards

Status: Spec Ready
Family: Dense newswire
Compare against: des-26, des-58
Similarity risk: Medium
Data risk: Ticker uses real latest posts
Getdesign source: `docs/getdesign/coinbase/DESIGN.md`
Refero source: `TBD`

- Header: H08 Topline News Header.
- Above-fold: ticker + small card grid.
- Flow/order: ticker/grid, reviews, games.
- Card/grid: small compact cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: ticker then mini list.
- Risk/must avoid: ticker should not duplicate primary nav.

### des-62 - No Hero News Grid

Status: Spec Ready
Family: Dense newswire
Compare against: des-58, des-4
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/opencode.ai/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: direct grid, no hero.
- Flow/order: news/blog grid, reviews, games.
- Card/grid: tiny news cards.
- Footer: F01 White Sitemap Footer.
- Mobile signature: headline grid becomes stack.
- Risk/must avoid: grid gutters must not squeeze at 320px.

### des-63 - Chronological Feed

Status: Spec Ready
Family: Dense newswire
Compare against: des-14, des-33
Similarity risk: Low
Data risk: Use post dates only
Getdesign source: `docs/getdesign/ollama/DESIGN.md`
Refero source: `TBD`

- Header: H12 Breadcrumb Header.
- Above-fold: date marker and feed.
- Flow/order: chronological all content, reviews/games woven in.
- Card/grid: timestamp rows.
- Footer: F04 Compact Legal Footer.
- Mobile signature: vertical timeline.
- Risk/must avoid: no fake live timestamps.

### des-64 - Headline Only Mode

Status: Spec Ready
Family: Dense newswire
Compare against: des-51, des-58
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/mistral.ai/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: headline rows only.
- Flow/order: headlines, reviews, games.
- Card/grid: text-only rows.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: headline list.
- Risk/must avoid: maintain enough separation between groups.

### des-65 - Breaking Latest Split

Status: Spec Ready
Family: Dense newswire
Compare against: des-2, des-59
Similarity risk: Medium
Data risk: No fake breaking
Getdesign source: `docs/getdesign/x.ai/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: “latest split” not fake breaking; lead left/latest right.
- Flow/order: latest split, reviews, games.
- Card/grid: mixed list cards.
- Footer: F06 Latest Desk Footer.
- Mobile signature: latest first.
- Risk/must avoid: do not use “breaking” unless safe as style label.

### des-66 - Sidebar Heavy Portal

Status: Spec Ready
Family: Dense newswire
Compare against: des-31, des-58
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/mongodb/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: main column + two rails.
- Flow/order: main + rails, reviews, games.
- Card/grid: portal cards and compact side widgets.
- Footer: F16 Dense Portal Footer.
- Mobile signature: rails become sections.
- Risk/must avoid: avoid too many columns on tablet.

### des-67 - Top 10 Hero

Status: Spec Ready
Family: Ranking and top list
Compare against: des-11, des-28
Similarity risk: Medium
Data risk: Ranking numbers are display order only
Getdesign source: `docs/getdesign/nike/DESIGN.md`
Refero source: `TBD`

- Header: H13 Scoreboard Header.
- Above-fold: top-list board from real posts.
- Flow/order: ranking, reviews, blogs, games.
- Card/grid: numbered cards.
- Footer: F08 Review Hub Footer.
- Mobile signature: top 5 first, then rest.
- Risk/must avoid: no score/rating unless field exists.

### des-68 - Tier List Layout

Status: Spec Ready
Family: Ranking and top list
Compare against: des-67, des-15
Similarity risk: Low
Data risk: Tier labels are editorial sections only
Getdesign source: `docs/getdesign/mastercard/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: tier rows using content groups.
- Flow/order: tiers, reviews, games, blogs.
- Card/grid: tier cards.
- Footer: F11 Dark Utility Footer.
- Mobile signature: tier accordion/stack.
- Risk/must avoid: no fake grade scores.

### des-69 - Best By Genre

Status: Spec Ready
Family: Ranking and top list
Compare against: des-19, des-67
Similarity risk: Medium
Data risk: Genre links must be real if clickable
Getdesign source: `docs/getdesign/shopify/DESIGN.md`
Refero source: `TBD`

- Header: H05 Category Rail Header.
- Above-fold: genre ranking surface.
- Flow/order: genre lists, reviews, blogs.
- Card/grid: ranking cards by group.
- Footer: F09 Game Catalog Footer.
- Mobile signature: genre chips.
- Risk/must avoid: do not invent category pages.

### des-70 - Monthly Chart

Status: Spec Ready
Family: Ranking and top list
Compare against: des-21, des-67
Similarity risk: Medium
Data risk: Chart uses post order/date only
Getdesign source: `docs/getdesign/kraken/DESIGN.md`
Refero source: `TBD`

- Header: H13 Scoreboard Header.
- Above-fold: monthly chart-like list using real posts.
- Flow/order: chart, blogs, reviews, games.
- Card/grid: chart rows.
- Footer: F06 Latest Desk Footer.
- Mobile signature: chart cards.
- Risk/must avoid: no fake chart metrics.

### des-71 - Platform Ranking

Status: Spec Ready
Family: Ranking and top list
Compare against: des-12, des-69
Similarity risk: Medium
Data risk: Platform data must be safe
Getdesign source: `docs/getdesign/nvidia/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: platform leaderboard without fake score.
- Flow/order: platform ranks, reviews, games, blogs.
- Card/grid: grouped ranking cards.
- Footer: F08 Review Hub Footer.
- Mobile signature: platform tabs/chips.
- Risk/must avoid: no artificial rank score.

### des-72 - Comparison Table

Status: Spec Ready
Family: Ranking and top list
Compare against: des-15, des-11
Similarity risk: Medium
Data risk: No fake comparison specs
Getdesign source: `docs/getdesign/composio/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: comparison table using content fields available.
- Flow/order: comparisons, reviews, games.
- Card/grid: table rows become cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: comparison cards.
- Risk/must avoid: no fake prices/platform specs.

### des-73 - Trending Leaderboard

Status: Spec Ready
Family: Ranking and top list
Compare against: des-26, des-67
Similarity risk: Medium
Data risk: Trending is display order only
Getdesign source: `docs/getdesign/binance/DESIGN.md`
Refero source: `TBD`

- Header: H08 Topline News Header.
- Above-fold: trending leaderboard from latest/random posts.
- Flow/order: leaderboard, blogs, reviews, games.
- Card/grid: numbered cards.
- Footer: F15 Mobile Accordion Footer.
- Mobile signature: leaderboard first.
- Risk/must avoid: no fake views/traffic.

### des-74 - Badge Achievement Wall

Status: Spec Ready
Family: Ranking and top list
Compare against: des-25, des-67
Similarity risk: Low
Data risk: Badges are visual labels only
Getdesign source: `docs/getdesign/playstation/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: achievement/badge wall using real content.
- Flow/order: badges, top games/reviews, blogs.
- Card/grid: badge-like cards.
- Footer: F11 Dark Utility Footer.
- Mobile signature: badge grid.
- Risk/must avoid: no fake achievements as factual claims.

### des-75 - Deal Cards Hero

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-77, des-81
Similarity risk: Medium
Data risk: No fake deals/prices
Getdesign source: `docs/getdesign/starbucks/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: recommendation cards, not price/deal claims unless real.
- Flow/order: recommendations, games, reviews, blogs.
- Card/grid: deal-inspired cards without fake prices.
- Footer: F18 Search Directory Footer.
- Mobile signature: recommendation rail.
- Risk/must avoid: no coupon/price language without data.

### des-76 - Guide Categories First

Status: Spec Ready
Family: Guide hybrid
Compare against: des-48, des-60
Similarity risk: Medium
Data risk: Category links must be real
Getdesign source: `docs/getdesign/mintlify/DESIGN.md`
Refero source: `TBD`

- Header: H18 Two Rail Header.
- Above-fold: guide/category blocks.
- Flow/order: categories, blogs, reviews, games.
- Card/grid: step/category cards.
- Footer: F07 Archive Index Footer.
- Mobile signature: category chips.
- Risk/must avoid: no fake guide taxonomy if absent.

### des-77 - Buyer Guide Layout

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-15, des-75
Similarity risk: Medium
Data risk: No fake buyer specs/prices
Getdesign source: `docs/getdesign/revolut/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: buyer-guide/recommendation surface using real posts.
- Flow/order: recommendations, reviews, games, blogs.
- Card/grid: comparison/recommendation cards.
- Footer: F18 Search Directory Footer.
- Mobile signature: recommendation stack.
- Risk/must avoid: no affiliate/price claims.

### des-78 - Tracker Block

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-21, des-75
Similarity risk: Low
Data risk: No fake price tracker
Getdesign source: `docs/getdesign/posthog/DESIGN.md`
Refero source: `TBD`

- Header: H03 Navy Utility Stack.
- Above-fold: tracker-style board using latest content.
- Flow/order: tracker board, blogs, reviews, games.
- Card/grid: row cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: tracker cards.
- Risk/must avoid: avoid price/deal wording.

### des-79 - Recommendation Quiz Style

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-44, des-77
Similarity risk: Medium
Data risk: No fake quiz backend
Getdesign source: `docs/getdesign/lovable/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: question/choice navigation to real content.
- Flow/order: choices, suggested games, reviews, blogs.
- Card/grid: choice cards.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: quiz choices first.
- Risk/must avoid: no submit/vote state.

### des-80 - Hardware And Games Shelf

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-25, des-75
Similarity risk: Medium
Data risk: No fake hardware/deal data
Getdesign source: `docs/getdesign/nvidia/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: shelf row using games/posts.
- Flow/order: shelf, games, blogs, reviews.
- Card/grid: shelf cards.
- Footer: F11 Dark Utility Footer.
- Mobile signature: shelf rail.
- Risk/must avoid: no product price or hardware specs.

### des-81 - Coupon Sidebar Portal

Status: Spec Ready
Family: Store, deal and guide hybrid
Compare against: des-31, des-75
Similarity risk: Medium
Data risk: No fake coupons
Getdesign source: `docs/getdesign/vodafone/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: coupon/sidebar-inspired content rail.
- Flow/order: content + rail, blogs, reviews, games.
- Card/grid: coupon-like cards without coupon claims.
- Footer: F07 Archive Index Footer.
- Mobile signature: rail becomes block.
- Risk/must avoid: no coupon codes/discount language.

### des-82 - How-To Grid

Status: Spec Ready
Family: Guide hybrid
Compare against: des-76, des-48
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/expo/DESIGN.md`
Refero source: `TBD`

- Header: H04 Search First Bar.
- Above-fold: no big hero; how-to grid first.
- Flow/order: step grid, blogs, reviews, games.
- Card/grid: step cards.
- Footer: F01 White Sitemap Footer.
- Mobile signature: step list.
- Risk/must avoid: no fake numbered process if content does not support it.

### des-83 - Poster Hero Rail

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-37, des-86
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/ferrari/DESIGN.md`
Refero source: `TBD`

- Header: H17 Floating Overlay Header.
- Above-fold: poster hero + rail.
- Flow/order: feature, news/blogs, reviews, games.
- Card/grid: poster cards.
- Footer: F02 Black Magazine Footer.
- Mobile signature: poster then rail.
- Risk/must avoid: overlay header must fallback safely on non-home pages.

### des-84 - Split Screen Console

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-23, des-83
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/tesla/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: split-screen console panels.
- Flow/order: console lanes, games, reviews, blogs.
- Card/grid: panel cards.
- Footer: F11 Dark Utility Footer.
- Mobile signature: split becomes tabs/stack.
- Risk/must avoid: avoid too dark non-home pages.

### des-85 - Diagonal Feature Blocks

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-84, des-99
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/lamborghini/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: diagonal feature blocks.
- Flow/order: angled sections, blogs, reviews, games.
- Card/grid: skewed/diagonal cards on desktop, straight mobile.
- Footer: F04 Compact Legal Footer.
- Mobile signature: straightened cards.
- Risk/must avoid: transforms must not cause overflow.

### des-86 - Full Bleed Background Stack

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: h5game, des-83
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/bmw-m/DESIGN.md`
Refero source: `TBD`

- Header: H17 Floating Overlay Header.
- Above-fold: full bleed image/background with stacked real stories.
- Flow/order: story stack, reviews, games, blogs.
- Card/grid: image-led cards.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: image then text below.
- Risk/must avoid: must not become same as h5game original; overlay text short.

### des-87 - Large Image Strips

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-35, des-83
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/renault/DESIGN.md`
Refero source: `TBD`

- Header: H02 Black Compact Nav.
- Above-fold: horizontal image strip.
- Flow/order: strips, reviews, games, blogs.
- Card/grid: strip cards.
- Footer: F17 Visual Strip Footer.
- Mobile signature: strip rail.
- Risk/must avoid: strip rail must not create page overflow.

### des-88 - Campaign Map Sections

Status: Spec Ready
Family: Experimental
Compare against: des-93, des-97
Similarity risk: Low
Data risk: No fake map/game data
Getdesign source: `docs/getdesign/spacex/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: map/node-inspired navigation using real links.
- Flow/order: map sections, blogs, reviews, games.
- Card/grid: mission/node cards.
- Footer: F11 Dark Utility Footer.
- Mobile signature: route stack.
- Risk/must avoid: no fake game map labels as factual data.

### des-89 - Character Card Deck

Status: Spec Ready
Family: Experimental
Compare against: des-94, des-25
Similarity risk: Low
Data risk: No copyrighted/fake characters
Getdesign source: `docs/getdesign/minimax/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: card deck using real post thumbnails.
- Flow/order: deck, blogs, reviews, games.
- Card/grid: deck cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: swipe/stack deck.
- Risk/must avoid: no copyrighted character claims.

### des-90 - Dark Review Theater

Status: Spec Ready
Family: Dark cinematic gaming
Compare against: des-10, des-37
Similarity risk: Medium
Data risk: No fake score
Getdesign source: `docs/getdesign/playstation/DESIGN.md`
Refero source: `TBD`

- Header: H13 Scoreboard Header.
- Above-fold: theater-like featured review.
- Flow/order: reviews, blogs, games.
- Card/grid: cinematic review cards.
- Footer: F08 Review Hub Footer.
- Mobile signature: review poster first.
- Risk/must avoid: no score badges unless real field exists.

### des-91 - Horizontal Scroll Issue

Status: Spec Ready
Family: Experimental
Compare against: des-52, des-87
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/webflow/DESIGN.md`
Refero source: `TBD`

- Header: H15 Minimal Text Header.
- Above-fold: horizontal issue rail.
- Flow/order: horizontal sections, reviews, games.
- Card/grid: wide cards.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: controlled rails with visible scroll affordance.
- Risk/must avoid: horizontal scroll must not cause body overflow.

### des-92 - Dashboard Command Center

Status: Spec Ready
Family: Experimental
Compare against: des-84, des-66
Similarity risk: Medium
Data risk: No fake metrics
Getdesign source: `docs/getdesign/cursor/DESIGN.md`
Refero source: `TBD`

- Header: H16 Command Header.
- Above-fold: command center modules.
- Flow/order: modules, blogs, reviews, games.
- Card/grid: dashboard cards with real content labels.
- Footer: F11 Dark Utility Footer.
- Mobile signature: modules stack.
- Risk/must avoid: no fake KPI numbers.

### des-93 - Map Style Navigation

Status: Spec Ready
Family: Experimental
Compare against: des-88, des-98
Similarity risk: Low
Data risk: No fake map regions
Getdesign source: `docs/getdesign/uber/DESIGN.md`
Refero source: `TBD`

- Header: H18 Two Rail Header.
- Above-fold: map/navigation hub using categories/content groups.
- Flow/order: regions, blogs, reviews, games.
- Card/grid: node cards.
- Footer: F18 Search Directory Footer.
- Mobile signature: map becomes category list.
- Risk/must avoid: no dead map nodes.

### des-94 - Swipe Card Deck

Status: Spec Ready
Family: Experimental
Compare against: des-89, des-91
Similarity risk: Low
Data risk: None
Getdesign source: `docs/getdesign/airbnb/DESIGN.md`
Refero source: `TBD`

- Header: H09 App Dock Header.
- Above-fold: swipe/stacked card deck.
- Flow/order: deck, blog/review/game sections.
- Card/grid: stacked cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: deck first.
- Risk/must avoid: usable without complex JS.

### des-95 - OS Window Interface

Status: Spec Ready
Family: Experimental
Compare against: des-92, des-84
Similarity risk: Low
Data risk: No fake app/system actions
Getdesign source: `docs/getdesign/warp/DESIGN.md`
Refero source: `TBD`

- Header: H10 Sidebar Trigger Header.
- Above-fold: desktop window-style panels.
- Flow/order: windows, blogs, reviews, games.
- Card/grid: window panels.
- Footer: F12 Minimal Brand Footer.
- Mobile signature: windows become tabs/cards.
- Risk/must avoid: no fake close/minimize controls if not functional.

### des-96 - Magazine Cover Archive

Status: Spec Ready
Family: Experimental
Compare against: des-5, des-52
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/wired/DESIGN.md`
Refero source: `TBD`

- Header: H01 White Editorial Masthead.
- Above-fold: archive covers/grid.
- Flow/order: covers, news/blogs, reviews, games.
- Card/grid: cover grid.
- Footer: F10 Newspaper Footer.
- Mobile signature: cover list.
- Risk/must avoid: not same as des-5 single cover.

### des-97 - Timeline Homepage

Status: Spec Ready
Family: Experimental
Compare against: des-14, des-63
Similarity risk: Medium
Data risk: Use real dates only
Getdesign source: `docs/getdesign/voltagent/DESIGN.md`
Refero source: `TBD`

- Header: H12 Breadcrumb Header.
- Above-fold: timeline start marker.
- Flow/order: all content timeline, reviews, games.
- Card/grid: event/timeline cards.
- Footer: F04 Compact Legal Footer.
- Mobile signature: vertical timeline.
- Risk/must avoid: differ from des-14 by mixing all content and layout primitives.

### des-98 - Radial Category Hub

Status: Spec Ready
Family: Experimental
Compare against: des-93, des-60
Similarity risk: Low
Data risk: Category links must be real if clickable
Getdesign source: `docs/getdesign/together.ai/DESIGN.md`
Refero source: `TBD`

- Header: H18 Two Rail Header.
- Above-fold: radial/category hub.
- Flow/order: hub, category spokes, reviews, games.
- Card/grid: hub/spoke cards.
- Footer: F07 Archive Index Footer.
- Mobile signature: radial becomes category list.
- Risk/must avoid: no SVG-only decoration without real links.

### des-99 - Asymmetric Collage

Status: Spec Ready
Family: Experimental
Compare against: des-4, des-85
Similarity risk: Medium
Data risk: None
Getdesign source: `docs/getdesign/figma/DESIGN.md`
Refero source: `TBD`

- Header: H17 Floating Overlay Header.
- Above-fold: asymmetric collage.
- Flow/order: collage, blogs, reviews, games.
- Card/grid: mixed ratio cards.
- Footer: F14 Footer With Top Story.
- Mobile signature: collage becomes stack.
- Risk/must avoid: no unreadable overlays; must not copy h5game hero.

### des-100 - Digest First Homepage

Status: Spec Ready
Family: Experimental
Compare against: des-5, des-55
Similarity risk: Medium
Data risk: No fake newsletter signup
Getdesign source: `docs/getdesign/zapier/DESIGN.md`
Refero source: `TBD`

- Header: H01 White Editorial Masthead.
- Above-fold: digest/edition intro with featured links; no fake signup.
- Flow/order: digest, reviews, games, blogs.
- Card/grid: digest cards.
- Footer: F03 Navy Editorial Footer.
- Mobile signature: digest then feed.
- Risk/must avoid: if no subscribe backend, do not call it newsletter signup.
