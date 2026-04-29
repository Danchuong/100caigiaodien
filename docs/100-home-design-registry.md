# Registry 100 giao diện home

File này dùng để kiểm soát từng giao diện `des-*` thuộc concept nào và dùng style chính nào trong style pool.

Quy tắc:

- Mỗi `des-*` có đúng 1 `Primary Style` từ `06-100-style-pool.md`.
- Có thể có accent/palette phụ, nhưng không ghi là style chính.
- Nếu cần đổi style chính, cập nhật registry trước khi code.
- Không accept mẫu mới nếu chưa có dòng registry.

## Batch 01: des-1 đến des-10

| Theme | Concept ID | Codename | Primary Style | Status | Notes |
| --- | --- | --- | --- | --- | --- |
| des-1 | H001 | Cinematic Neon Launchpad | S096 - Hero Poster Cinema | Done | Đã triển khai. Neon lime/cam chỉ là accent, style chính là cinematic poster. |
| des-2 | H002 | Bright Trailer Shelf | S037 - Mobile App Store Cards | Planned | App-store sáng, game-first, shelf ngang mobile. |
| des-3 | H003 | Retro Arcade Marquee | S001 - Arcade Cabinet Neon | Planned | Marquee, arcade border, cabinet card. |
| des-4 | H004 | Editorial Cover Story | S024 - Premium Magazine Cover | Planned | Tạp chí game, cover story, review editorial. |
| des-5 | H005 | Cyberpunk Signal Split | S010 - Sci-Fi Hologram Index | Planned | Signal split, panel kính, ticker sci-fi. |
| des-6 | H006 | Console Store Premiere | S011 - Game Store Front Window | Planned | Console/store shelf, product review tile. |
| des-7 | H007 | Mono Impact Stage | S009 - Brutalist Scoreboard | Planned | Mono, block mạnh, scoreboard hierarchy. |
| des-8 | H008 | Soft Cloud Premiere | S081 - Pastel Mobile Gaming | Planned | Pastel nhẹ, mobile-friendly, soft cards. |
| des-9 | H009 | Esport Matchday Arena | S003 - Esports Tactical Board | Planned | Matchday, scoreboard, arena panels. |
| des-10 | H010 | Pocket Trailer Stack | S040 - Retro Handheld UI | Planned | Mobile-first, handheld screen, compact stack. |

## Batch 02: des-11 đến des-20

| Theme | Concept ID | Codename | Primary Style | Status | Notes |
| --- | --- | --- | --- | --- | --- |
| des-11 | H011 | Dark Gaming Front Page | S075 - Dark Premium Review Site | Planned | Trang báo game tối, nhiều điểm scan. |
| des-12 | H012 | Clean Daily News Desk | S002 - Newspaper Game Desk | Planned | News desk sáng, headline/list rõ. |
| des-13 | H013 | Retro Zine Grid | S073 - Zine Cutout Collage | Planned | Cutout, zine, grid bất đối xứng. |
| des-14 | H014 | Premium Review Journal | S098 - European Editorial Review | Planned | Review mature, spacing rộng, type editorial. |
| des-15 | H015 | Cyber News Terminal | S047 - Cyber News Terminal | Planned | Terminal/log/ticker, monospace tiết chế. |
| des-16 | H016 | Console Weekly Catalog | S033 - Steam Deck Library | Planned | Library shelf, catalog weekly. |
| des-17 | H017 | Black Ink Dispatch | S077 - Black/White/Red Editorial | Planned | Dispatch đen trắng đỏ, editorial mạnh. |
| des-18 | H018 | Soft Sunday Bulletin | S008 - Indie Cozy Shelf | Planned | Cozy, mềm, nhẹ, bulletin cuối tuần. |
| des-19 | H019 | Esport Tabloid Grid | S021 - Broadcast Sports Desk | Planned | Tabloid thể thao/esport, nhiều headline. |
| des-20 | H020 | Compact Morning Brief | S068 - Daily Digest Feed | Planned | Brief sáng, compact feed, scan nhanh. |

## Batch 03 trở đi

Các mẫu `des-21` đến `des-100` sẽ được thêm vào registry trước khi triển khai.

Không dùng lại `Primary Style` quá gần nhau trong cùng một batch nếu layout cũng gần nhau. Nếu cần dùng lại một style family, phải đổi rõ:

- Information architecture.
- Hero treatment.
- Card mechanics.
- Mobile behavior.

