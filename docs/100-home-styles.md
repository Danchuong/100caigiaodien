# 100 home layout fingerprints

File này là **nguồn chính để quản lý 100 giao diện**. Mỗi dòng là một form/layout riêng cho `des-1` tới `des-100`.

Yêu cầu mới của khách: các giao diện phải khác nhau rõ về cấu trúc, không chỉ đổi màu, ảnh, font hoặc spacing. Vì khách có thể dùng tool quét độ giống nhau, mỗi design phải có một **layout fingerprint** riêng.

## Cách dùng

1. Chọn một dòng `Todo`.
2. Đổi trạng thái sang `Doing`.
3. Clone từ `wp-content/themes/h5game` ra đúng theme, ví dụ `des-2`.
4. Làm lại `home.php`, `header.php`, `footer.php` và SCSS liên quan theo fingerprint của dòng đó.
5. Kiểm tra home, header, footer, mobile từ `320px`.
6. Copy file bàn giao vào `delivery/des-n-home`.
7. Commit riêng cho design đó.
8. Đổi trạng thái sang `Done`.

Trạng thái chỉ dùng:

```text
Todo
Doing
Done
Rejected
```

## Layout fingerprint

Mỗi design cần ghi nhớ 6 phần chính:

```text
Header + Hero + Flow/Grid + Card Pattern + Footer + Mobile Signature
```

Một design chỉ được xem là khác đủ khi khác ít nhất 4/6 phần trên so với các design đã làm. Nếu bỏ màu, ảnh và font ra mà wireframe vẫn giống nhau thì chưa đạt.

Không tính là khác đủ nếu chỉ:

- Đổi màu.
- Đổi font.
- Đổi ảnh nền.
- Đổi bo góc/shadow.
- Giữ nguyên header, hero, grid, footer rồi sửa text.

## Nguồn tham khảo form

Chỉ tham khảo cách tổ chức bố cục, không copy code, asset, screenshot, logo hoặc thiết kế độc quyền.

- https://themeforest.net/category/wordpress?term=gaming
- https://themeforest.net/category/wordpress?term=game+news
- https://themeforest.net/category/wordpress?term=esports
- https://themeforest.net/item/gamxo-wordpress-gaming-news-blog-theme/37514171
- https://themeforest.net/item/gameleon-wordpress-magazine-arcade-theme/3271091
- https://themeforest.net/item/smartmag-responsive-retina-wordpress-magazine/6652608
- https://themeforest.net/item/overworld-esports-and-gaming-theme/25622953
- https://themeforest.net/item/playvibe-esports-gaming-wordpress-theme/57815887
- https://themeforest.net/item/levelx-gaming-affiliate-wordpress-theme/46555640
- https://themeforest.net/item/foxiz-wordpress-newspaper-and-magazine/34617430

## Checklist 100 layouts

### 1. Magazine front page

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 1 | des-1 | Cinematic Featured Lead | Done | Header static 1 row; hero featured article title-only; flow featured/blog/review/game; 3-column cards; sitemap footer; mobile magazine stack. |
| 2 | des-2 | Lead Left With Trending Rail | Todo | Masthead header; hero lead left + rail right; flow news first; mixed large/small cards; latest footer; mobile lead then compact rail. |
| 3 | des-3 | Center Lead Newspaper | Todo | Center-logo header; hero centered headline; flow category bands; 3-column newspaper cards; compact legal footer; mobile text-first feed. |
| 4 | des-4 | Mosaic News Wall | Todo | Dense portal header; hero 1 large + 4 small mosaic; flow blogs/reviews/games; image mosaic cards; mega sitemap footer; mobile story stack. |
| 5 | des-5 | Editorial Issue Cover | Todo | Editorial minimal header; hero cover-like vertical feature; flow editor picks then sections; large typography cards; minimal footer; mobile cover then index. |
| 6 | des-6 | Carousel Above News Desk | Todo | Compact news header; hero carousel; flow latest/blog/review/game; grid + headline list; latest posts footer; mobile swipe rail then list. |
| 7 | des-7 | Split Hero Editor Picks | Todo | Split-nav header; hero split feature + picks; flow picks first; horizontal article cards; newsletter footer; mobile picks before feature. |
| 8 | des-8 | Newspaper Three Column | Todo | Magazine masthead; no image-heavy hero; flow 3 news columns; headline-first cards; category footer; mobile chronological columns collapse. |
| 9 | des-9 | Section Band Magazine | Todo | Top-bar header; hero full-width band; flow wide section bands; alternating card ratios; partner footer; mobile band separators. |

### 2. Review hub

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 10 | des-10 | Review Score Hero | Todo | Review hub header; hero review with large score; flow reviews first; score cards; review leaderboard footer; mobile score card first. |
| 11 | des-11 | Top Rated Table | Todo | Platform tabs header; hero top rated table; flow ranking/reviews/news/games; table rows + small cards; compact footer; mobile table cards. |
| 12 | des-12 | Platform Review Lanes | Todo | Platform tabs header; hero platform selector; flow lanes by platform; lane cards with score badges; category footer; mobile chip rail. |
| 13 | des-13 | Critic User Split | Todo | Center split header; hero critic/user comparison; flow reviews then games; split verdict cards; review footer; mobile dual-score cards. |
| 14 | des-14 | Review Timeline | Todo | Minimal header; hero timeline intro; flow chronological reviews; timeline cards; minimal editorial footer; mobile vertical timeline. |
| 15 | des-15 | Comparison Desk | Todo | Search-first header; hero comparison block; flow reviews/games/guides; side-by-side cards; newsletter footer; mobile comparison stack. |
| 16 | des-16 | Pros Cons Review Board | Todo | Compact header; hero verdict board; flow review grid then blog; pros/cons cards; latest footer; mobile verdict above image. |
| 17 | des-17 | Sidebar Score Chart | Todo | Dense portal header; hero + sticky score sidebar; flow reviews first; chart cards; leaderboard footer; mobile sidebar becomes score block. |

### 3. Game database portal

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 18 | des-18 | Search First Directory | Todo | Game database header; hero large search/filter; flow games/reviews/blog; directory cards; database footer; mobile search-first. |
| 19 | des-19 | Genre Wall | Todo | Category chip header; hero genre wall; flow games by genre; tile cards; genre footer; mobile horizontal genre chips. |
| 20 | des-20 | Platform Tabs Catalog | Todo | Platform tabs header; hero tabs; flow platform lanes; compact game cards; database footer; mobile tabbed catalog. |
| 21 | des-21 | Release Calendar First | Todo | Calendar header; hero release board; flow upcoming/games/reviews; date cards; compact legal footer; mobile date timeline. |
| 22 | des-22 | A Z Game Index | Todo | Search-first header; no hero, A-Z index first; flow alphabet/game/review; index rows; database footer; mobile sticky alphabet rail. |
| 23 | des-23 | Upcoming Released Split | Todo | Split header; hero upcoming vs released; flow games/reviews/blog; two-lane cards; newsletter footer; mobile toggled lanes. |
| 24 | des-24 | Game Detail Teaser Grid | Todo | Mega menu header; hero featured game teaser; flow teaser grid; stat-rich cards; game database footer; mobile detail snippets. |
| 25 | des-25 | Library Shelf Portal | Todo | App dock header; hero shelf row; flow games first; cover shelf cards; console panel footer; mobile cover rail. |

### 4. Esports and live desk

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 26 | des-26 | Live Ticker Newsroom | Todo | Ticker header; hero breaking/live strip; flow live/news/review/game; compact ticker cards; community footer; mobile ticker scroll. |
| 27 | des-27 | Match Schedule Hero | Todo | Esports scoreboard header; hero match schedule; flow matches/news/reviews; schedule rows; video footer; mobile schedule first. |
| 28 | des-28 | Standings Board | Todo | Scoreboard header; hero standings table; flow standings/news/games; table + cards; community footer; mobile table cards. |
| 29 | des-29 | Tournament Bracket Home | Todo | Esports header; hero bracket block; flow bracket/news/review; bracket cards; partner footer; mobile bracket becomes rounds. |
| 30 | des-30 | Team Desk Portal | Todo | Community header; hero team spotlight; flow team/news/reviews; roster cards; community footer; mobile roster rail. |
| 31 | des-31 | Odds Stat Sidebar | Todo | Dense portal header; hero news + stat sidebar; flow esports/news/review; stat widgets; compact footer; mobile stats under hero. |
| 32 | des-32 | Video Recap Lead | Todo | Video channel header; hero recap video card; flow video/news/review; media cards; video footer; mobile video first. |
| 33 | des-33 | Live Blog Feed | Todo | Compact header; no classic hero; flow live feed first; timestamp cards; latest footer; mobile timeline feed. |

### 5. Video and trailer first

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 34 | des-34 | Full Video Hero | Todo | Video channel header; hero full media feature; flow videos/blog/review/game; media cards; video footer; mobile thumbnail + title below. |
| 35 | des-35 | Trailer Grid Above Fold | Todo | Compact video header; hero 2x2 trailer grid; flow trailers/news/reviews; video tiles; minimal footer; mobile trailer rail. |
| 36 | des-36 | Playlist Sidebar | Todo | Mega menu header; hero feature + playlist sidebar; flow playlist/news/game; horizontal media cards; video footer; mobile playlist below. |
| 37 | des-37 | Cinema Layout | Todo | Cinematic header; hero widescreen poster; flow feature/media/news; wide cards; newsletter footer; mobile poster then list. |
| 38 | des-38 | Shorts Column | Todo | App dock header; hero vertical shorts column + news; flow media/blog/review; portrait cards; compact footer; mobile portrait feed. |
| 39 | des-39 | Media Wall | Todo | Minimal header; no text-heavy hero; flow media wall first; masonry image/video cards; video footer; mobile masonry to stack. |
| 40 | des-40 | Stream Channel Home | Todo | Stream header; hero channel spotlight; flow streams/news/reviews; channel cards; community footer; mobile stream rail. |
| 41 | des-41 | Feature Video Plus Articles | Todo | Search header; hero video left + article list right; flow video/news/review; mixed media cards; latest footer; mobile article list first after video. |

### 6. Community and forum style

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 42 | des-42 | Trending Threads Hero | Todo | Community header; hero trending threads; flow threads/news/reviews; thread cards; community footer; mobile thread list. |
| 43 | des-43 | Forum Board Blocks | Todo | Mega menu header; no classic hero; flow forum boards then content; board blocks; sitemap footer; mobile accordion boards. |
| 44 | des-44 | Poll First Home | Todo | Compact header; hero poll + feature; flow poll/news/reviews/games; poll cards; newsletter footer; mobile poll first. |
| 45 | des-45 | User Picks Grid | Todo | Community header; hero user picks; flow picks/reviews/blog; user cards; community footer; mobile pick rail. |
| 46 | des-46 | Comment Heavy Feed | Todo | Minimal header; no hero; flow discussion feed; comment-preview cards; compact footer; mobile feed first. |
| 47 | des-47 | Community Spotlight | Todo | Center logo header; hero member/community spotlight; flow spotlight/news/games; profile cards; partner footer; mobile profile stack. |
| 48 | des-48 | Q A Guide Home | Todo | Search-first header; hero question search; flow Q&A/guides/reviews; Q&A rows; directory footer; mobile search + accordion. |
| 49 | des-49 | Event Community Board | Todo | Community header; hero event board; flow events/news/reviews; event cards; community footer; mobile event list. |

### 7. Minimal editorial

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 50 | des-50 | Single Story Cover | Todo | Editorial minimal header; hero one story cover; flow blog/review/game; sparse cards; minimal footer; mobile cover then index. |
| 51 | des-51 | Text First Editorial | Todo | Logo-only header; hero text headline no image; flow essays/reviews/games; text cards; legal footer; mobile pure reading flow. |
| 52 | des-52 | Vertical Editorial Index | Todo | Center logo header; no hero; flow vertical issue index; index cards; editorial footer; mobile date/title list. |
| 53 | des-53 | Monochrome Magazine | Todo | Minimal header; hero black-white lead; flow section essays; monochrome cards; compact footer; mobile contrast list. |
| 54 | des-54 | Large Date Article Stack | Todo | Tiny header; hero latest date; flow date-grouped posts; date cards; minimal footer; mobile date timeline. |
| 55 | des-55 | Featured Column Plain List | Todo | Split header; hero featured column + plain list; flow lists/reviews/games; list cards; newsletter footer; mobile plain list first. |
| 56 | des-56 | Large Typography Grid | Todo | Editorial header; no image hero; flow typography grid; text-heavy tiles; minimal footer; mobile type scale controlled. |
| 57 | des-57 | Quiet Review Journal | Todo | Minimal review header; hero review note; flow review journal/news/games; journal cards; editorial footer; mobile note stack. |

### 8. Dense newswire

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 58 | des-58 | Compact Four Column Desk | Todo | Dense portal header; no large hero; flow 4-column desk; compact headline cards; latest footer; mobile compact list. |
| 59 | des-59 | Latest First List | Todo | Compact news bar; hero latest headline strip; flow latest/blog/review/game; list cards; compact footer; mobile latest feed. |
| 60 | des-60 | Category Lanes | Todo | Section switcher header; hero category summary; flow category lanes; lane cards; category footer; mobile chip lanes. |
| 61 | des-61 | Ticker Small Cards | Todo | Ticker header; hero ticker + small card grid; flow news/review/game; small cards; legal footer; mobile ticker then mini list. |
| 62 | des-62 | No Hero News Grid | Todo | Dense header; no hero; flow direct grid; tiny news cards; sitemap footer; mobile headline grid. |
| 63 | des-63 | Chronological Feed | Todo | Breadcrumb header; hero date marker; flow chronological; timestamp rows; compact footer; mobile timeline. |
| 64 | des-64 | Headline Only Mode | Todo | Text-first header; no images above fold; flow headlines/reviews/games; headline rows; minimal footer; mobile headline list. |
| 65 | des-65 | Breaking Latest Split | Todo | Breaking header; hero breaking left/latest right; flow split lists; mixed list cards; latest footer; mobile breaking first. |
| 66 | des-66 | Sidebar Heavy Portal | Todo | Dense portal header; hero + two sidebars; flow main + rails; portal cards; mega footer; mobile rails become sections. |

### 9. Ranking and top list

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 67 | des-67 | Top 10 Hero | Todo | Ranking header; hero top 10 board; flow ranking/review/blog; numbered cards; leaderboard footer; mobile top 5 first. |
| 68 | des-68 | Tier List Layout | Todo | Compact header; hero tier rows; flow tiers/reviews/games; tier cards; compact footer; mobile tier accordion. |
| 69 | des-69 | Best By Genre | Todo | Genre header; hero genre ranking; flow genre lists; ranking cards; database footer; mobile genre chips. |
| 70 | des-70 | Monthly Chart | Todo | Chart header; hero monthly chart; flow chart/news/reviews; chart rows; latest footer; mobile chart cards. |
| 71 | des-71 | Platform Ranking | Todo | Platform tabs header; hero platform leaderboard; flow platform ranks; score cards; review footer; mobile tabs. |
| 72 | des-72 | Comparison Table | Todo | Search header; hero comparison table; flow comparisons/reviews/games; table rows; legal footer; mobile comparison cards. |
| 73 | des-73 | Trending Leaderboard | Todo | Ticker header; hero trending leaderboard; flow trending/news/review; numbered cards; community footer; mobile leaderboard. |
| 74 | des-74 | Badge Achievement Wall | Todo | App dock header; hero achievement board; flow top games/reviews; badge cards; console footer; mobile badge grid. |

### 10. Store, deal and guide hybrid

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 75 | des-75 | Deal Cards Hero | Todo | Deals header; hero deal cards; flow deals/games/reviews; price-like cards; deal footer; mobile deal rail. |
| 76 | des-76 | Guide Categories First | Todo | Guide header; hero guide category blocks; flow guides/blog/review/game; guide cards; directory footer; mobile category chips. |
| 77 | des-77 | Buyer Guide Layout | Todo | Search-first header; hero buyer guide; flow recommendations/reviews; comparison cards; newsletter footer; mobile recommendation stack. |
| 78 | des-78 | Price Tracker Block | Todo | Store header; hero price tracker; flow deals/news/reviews; tracker rows; compact footer; mobile tracker cards. |
| 79 | des-79 | Recommendation Quiz Style | Todo | App header; hero question/choice block; flow suggested games/reviews; choice cards; minimal footer; mobile quiz first. |
| 80 | des-80 | Hardware And Games Shelf | Todo | Store header; hero shelf; flow hardware/game/news; shelf cards; partner footer; mobile shelf rail. |
| 81 | des-81 | Coupon Sidebar Portal | Todo | Deals header; hero + coupon sidebar; flow deals/blog/review; coupon cards; deal footer; mobile coupon block. |
| 82 | des-82 | How To Grid | Todo | Guide header; no big hero; flow how-to grid first; step cards; sitemap footer; mobile step list. |

### 11. Dark cinematic gaming

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 83 | des-83 | Poster Hero Rail | Todo | Floating header; hero poster + rail; flow feature/news/review/game; poster cards; cinematic footer; mobile poster then rail. |
| 84 | des-84 | Split Screen Console | Todo | Console dashboard header; hero split-screen; flow console lanes; panel cards; console footer; mobile split becomes tabs. |
| 85 | des-85 | Diagonal Feature Blocks | Todo | Neon header; hero diagonal feature blocks; flow angled sections; skewed cards; compact footer; mobile straightened cards. |
| 86 | des-86 | Full Bleed Background Stack | Todo | Overlay-safe header; hero full bleed + stacked news; flow story stack; image cards; minimal footer; mobile text below image. |
| 87 | des-87 | Large Image Strips | Todo | Cinematic header; hero horizontal image strip; flow strips/reviews/games; strip cards; video footer; mobile strip rail. |
| 88 | des-88 | Campaign Map Sections | Todo | Map header; hero campaign map; flow map nodes; mission cards; console footer; mobile route stack. |
| 89 | des-89 | Character Card Deck | Todo | App dock header; hero card deck; flow deck/news/reviews; deck cards; compact footer; mobile swipe deck. |
| 90 | des-90 | Dark Review Theater | Todo | Review header; hero theater review; flow reviews/news/games; cinematic score cards; review footer; mobile score poster. |

### 12. Experimental and special issue

| # | Theme | Layout form | Status | Fingerprint |
| ---: | --- | --- | --- | --- |
| 91 | des-91 | Horizontal Scroll Issue | Todo | Minimal header; hero horizontal issue; flow horizontal sections; wide cards; minimal footer; mobile controlled rails. |
| 92 | des-92 | Dashboard Command Center | Todo | Console dashboard header; hero command center; flow modules; dashboard cards; console footer; mobile module stack. |
| 93 | des-93 | Map Style Navigation | Todo | Map header; hero map navigation; flow regions/content; node cards; directory footer; mobile map list. |
| 94 | des-94 | Swipe Card Deck | Todo | App dock header; hero swipe deck; flow deck/blog/review/game; stacked cards; mobile utility footer; mobile deck first. |
| 95 | des-95 | OS Window Interface | Todo | Window header; hero desktop windows; flow window panels; window cards; compact footer; mobile windows to tabs. |
| 96 | des-96 | Magazine Cover Archive | Todo | Editorial header; hero archive covers; flow covers/news/review; cover grid; editorial footer; mobile cover list. |
| 97 | des-97 | Timeline Homepage | Todo | Breadcrumb header; hero timeline start; flow all content timeline; event cards; compact footer; mobile timeline. |
| 98 | des-98 | Radial Category Hub | Todo | Section switcher header; hero radial category hub; flow category spokes; hub cards; category footer; mobile category list. |
| 99 | des-99 | Asymmetric Collage | Todo | Floating header; hero asymmetric collage; flow collage sections; mixed ratio cards; newsletter footer; mobile collage to stack. |
| 100 | des-100 | Newsletter First Homepage | Todo | Editorial header; hero newsletter/signup + featured links; flow digest/reviews/games; digest cards; newsletter footer; mobile signup then feed. |

## Anti-similarity check khi hoàn thành

Trước khi đổi `Doing` sang `Done`, ghi nhớ kiểm tra:

- Header khác rõ với các design đã làm.
- Hero/banner khác rõ.
- Thứ tự section khác.
- Card/grid khác.
- Footer khác.
- Mobile signature khác.
- Link thật, không có label vô nghĩa.
- Không có text dài đè ảnh.
- Header/footer không phá các trang ngoài home.
