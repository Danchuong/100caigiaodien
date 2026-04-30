# Chuẩn nghiệm thu UX mobile 320px+

## Bối cảnh

`yeucau.md` đặt mobile từ `320px` trở lên là tiêu chí nghiệm thu thật, đặc biệt với header, menu và search. Khi đọc `des-1` đến `des-10`, các style đang khác nhau về form header/footer: directory bar, masthead, newspaper, dense portal, split nav, band header, score header. Vì vậy chuẩn mobile không nên ép mọi style về cùng một layout, mà cần đặt các bất biến UX để mỗi style vẫn khác form nhưng không vỡ ở màn hình rất nhỏ.

Nguồn đã kiểm tra:

- `yeucau.md`
- `.local-designs/des-1..des-10/html/wp-content/themes/h5game/css/_header.scss`
- `.local-designs/des-1..des-10/html/wp-content/themes/h5game/css/_home.scss`
- `.local-designs/des-1..des-10/html/wp-content/themes/h5game/css/_footer.scss`
- `delivery/des-1..des-10-home/header.php`
- `delivery/des-1..des-10-home/footer.php`
- `delivery/des-1..des-10-home/style.css`

## Mục tiêu nghiệm thu

Một style đạt chuẩn mobile 320px+ khi:

- Không có horizontal overflow ngoài ý đồ rõ ràng như topic strip có `overflow-x: auto`.
- Header hàng đầu ở 320px vẫn đọc được logo và có nút menu/search rõ.
- Menu mobile mở được, đóng được, không tràn khỏi viewport, không bị che bởi container hoặc hero.
- Search mobile mở được, input dùng được, submit đúng endpoint hiện có.
- Blog/review/game không giữ grid nhiều cột gây bóp card, chữ đè ảnh hoặc mất link.
- Footer xuống một cột hoặc các nhóm nhỏ dễ đọc, không giữ nhiều cột cứng.
- Header/footer dùng chung không làm hỏng trang ngoài home.

## Header, menu và search

Ở mobile 320px, header nên ưu tiên cấu trúc tối thiểu:

```text
logo | search button | menu button
```

Quy tắc chấp nhận:

- Hàng header chính chỉ nên cao vừa đủ, khoảng `56px` đến `72px`; nếu style có header nhiều tầng thì tầng phụ phải ẩn, gộp, hoặc chuyển thành strip cuộn ngang gọn.
- Logo cần `min-width: 0`, không ép các nút rơi xuống dòng. Với tên site dài, dùng font nhỏ hơn ở breakpoint nhỏ hoặc cho text truncate.
- `.head-btn` và `.head-search-btn` phải hiển thị ở mobile khi menu/search desktop bị ẩn.
- Menu mobile phải dùng cùng nguồn `main-menu`; không tạo một danh sách mobile hard-code khác desktop.
- Panel menu nên nằm dưới header, rộng theo viewport: `width: min(18rem, 100vw - 2rem)` hoặc tương đương.
- Link trong menu mobile hiển thị theo cột, mỗi item cao tối thiểu `44px`, không để gap quá nhỏ.
- Search mobile nên là panel riêng dưới header hoặc một hàng full-width trong header grid; không mở kèm một dải link phụ trùng menu.
- Khi mở menu nên đóng search; khi mở search nên đóng menu. Nếu JS hiện tại chưa làm được, đó là rủi ro cần audit riêng.
- Search form dùng `method="get"`, input `name="key"`, action đúng phạm vi đang hỗ trợ. Nếu submit về `/reviews/`, placeholder nên nói đúng là tìm review, không hứa tìm toàn site.
- Nút search submit cần là `button type="submit"` hoặc cơ chế submit rõ; icon trang trí không được là điểm click duy nhất nếu nó không submit.
- Các nút icon cần `aria-label`; tốt hơn nữa là cập nhật `aria-expanded` theo trạng thái mở.

Các mẫu delivery đang cho thấy hướng tốt hơn ở mobile là dùng target `44px` cho nút menu/search, giới hạn panel bằng `100vw - 2rem`, và chuyển search full-width dưới header ở breakpoint nhỏ. Những mẫu có topbar, quick links hoặc score strip cần cẩn trọng hơn vì dễ biến thành nhiều lớp menu trên 320px.

## Touch targets

Chuẩn tối thiểu:

- Nút menu, search, CTA chính: vùng chạm tối thiểu `44px x 44px`.
- Link menu mobile: `min-height: 44px`, `display: flex` hoặc `inline-flex`, căn giữa theo chiều dọc.
- Chip/category/shortcut còn hiển thị trên mobile: tối thiểu `36px` cao; nếu là hành động quan trọng thì dùng `44px`.
- Khoảng cách giữa các target gần nhau tối thiểu khoảng `8px`, hoặc dùng border/row tách rõ.
- Không để icon có hình 18-24px nhưng button cha không có kích thước rõ.
- Không để link dạng text trong footer quá sát nhau; mỗi dòng footer link nên có `line-height` khoảng `1.4` trở lên.

## Content stacking

Với home game/news, mobile 320px nên ưu tiên đọc tuần tự hơn là giữ signature desktop.

Quy tắc cho grid/card:

- Hero/featured: không dùng bố cục 2-3 cột ở mobile. Chuyển về một cột, ảnh/text theo thứ tự rõ.
- Card ảnh overlay: ở 320px chỉ nên giữ category/tag và title. Excerpt dài trên ảnh dễ che nội dung và khó đọc.
- Grid blog/review: từ khoảng `640px` trở xuống nên về một cột nếu card có nhiều chữ; hai cột chỉ hợp với card rất đơn giản, ảnh rõ, title ngắn.
- Game grid có thể giữ hai cột ở 320px nếu card chỉ gồm thumbnail + title ngắn. Không nên giữ ba cột ở 320px vì title game dễ truncate quá mạnh.
- Các layout desktop kiểu mosaic, leaderboard, newspaper, portal rail phải có thứ tự đọc mobile rõ: lead item trước, danh sách phụ sau.
- Sidebar phải ẩn hoặc đẩy xuống cuối nội dung trước tablet/mobile; không dùng `min-width` lớn làm tràn viewport.
- Horizontal scroll chỉ dùng cho strip phụ như topic/score/headline; không dùng cho nội dung chính nếu khách cần scan bài viết/game.
- Section spacing mobile nên giảm nhưng không dính: khoảng `24px` đến `40px` giữa section là đủ cho density news/game.

## Typography limits

Mục tiêu là tránh chữ tràn ở 320px và tránh hero-scale typography trong card nhỏ.

- Body text mobile nên giữ khoảng `15px` đến `16px`, line-height khoảng `1.45` đến `1.65`.
- Title card nhỏ nên khoảng `16px` đến `20px`; không dùng title `2rem` trong panel/card hẹp.
- Hero headline ở mobile nên giới hạn khoảng `24px` đến `32px` tùy style; nếu title lấy từ bài thật dài thì cần line clamp.
- Không scale font bằng viewport width cho text quan trọng; dùng breakpoint cụ thể hoặc `clamp()` có min/max hợp lý.
- Không dùng negative letter-spacing.
- Title overlay trên ảnh nên clamp 2 dòng; excerpt nếu có nên clamp 2 dòng và chỉ dùng khi nền đọc rõ.
- Footer title và menu title nên nhỏ, chắc, không cạnh tranh với nội dung chính.

## Footer rules

Footer ở mobile phải gọn và có cấu trúc đọc được:

- Từ `767px` trở xuống, footer nên về một cột hoặc các nhóm full-width. Tránh giữ 3-4 cột ngang.
- Brand/description/copyright đặt trước hoặc sau cùng tùy style, nhưng không làm phần menu bị đẩy quá xa.
- Mỗi nhóm link phải có title rõ, link thật, không dùng placeholder kiểu "Vui lòng chọn menu..." trong bản giao khách.
- Link dài trong footer cần `overflow-wrap`, clamp, hoặc ellipsis có chủ đích; không để làm rộng viewport.
- Footer không được có margin-top âm, không bị kéo ngược lên nội dung phía trên.
- Padding mobile nên khoảng `32px 0` hoặc thấp hơn với footer compact; tránh footer cao bất thường do khoảng trắng.
- Newsletter/search form trong footer nếu có phải dùng input full-width ở 320px, button đủ chạm và không ép ngang.
- Footer dùng chung nên kiểm tra ở home, blog detail, review detail, game detail, archive/search.

## Ý tưởng kiểm chứng không dùng Playwright/browser

Các kiểm chứng dưới đây không thay thế hoàn toàn mắt người, nhưng giúp bắt lỗi mobile 320px sớm bằng terminal.

1. Tìm breakpoint mobile trong CSS:

```bash
rg -n "@media|320px|430px|520px|640px|767|842|900|991|max-width" delivery/des-*-home/style.css
```

2. Tìm rule có nguy cơ tràn viewport:

```bash
rg -n "width:\\s*(100vw|[4-9][0-9]rem)|min-width:\\s*([2-9][0-9]rem|[3-9][0-9]{2}px)|grid-template-columns|white-space:\\s*nowrap|overflow-x" delivery/des-*-home/style.css
```

3. Kiểm tra nút menu/search có kích thước chạm rõ:

```bash
rg -n "head-btn|head-search-btn|min-height:\\s*44px|height:\\s*44px|width:\\s*44px|min-width:\\s*44px" delivery/des-*-home/style.css
```

4. Kiểm tra search form đúng hành vi:

```bash
rg -n "head-search|method=\"get\"|name=\"key\"|type=\"submit\"|aria-label=\"(Open search|Submit search|Search)" delivery/des-*-home/header.php
```

5. Kiểm tra menu mobile có thể đang bị hard-code/lặp:

```bash
rg -n "wp_nav_menu|head-menu|Mobile navigation|Blogs|Reviews|Games|Quick|shortcut|strip|topbar" delivery/des-*-home/header.php
```

6. Kiểm tra footer có layout mobile:

```bash
rg -n "footer|foot-wrapper|footer-wrap|@media \\(max-width: 767|grid-template-columns:\\s*1fr|flex-wrap" delivery/des-*-home/style.css
```

7. Dùng `curl` với user-agent mobile để bắt lỗi PHP/render cơ bản nếu có local WordPress đang chạy:

```bash
curl -L -A "Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 Mobile/15E148" "http://localhost:8000/" -o /tmp/home-mobile.html
rg -n "head-btn|head-search-btn|head-menu|head-search|site-footer|review-footer|footer" /tmp/home-mobile.html
```

8. Dùng PHP syntax check cho file giao khách:

```bash
find delivery/des-*-home -name "*.php" -print0 | xargs -0 -n1 php -l
```

9. Dùng CSS parser/linter nếu project đã có tool sẵn; nếu không, tối thiểu kiểm tra file build tồn tại và có rule mobile:

```bash
for f in delivery/des-*-home/style.css; do
  printf "%s " "$f"
  rg -q "@media \\(max-width" "$f" && echo "has-mobile-rules" || echo "missing-mobile-rules"
done
```

10. Kiểm tra overflow bằng heuristic tĩnh: mọi `min-width` lớn hơn `18rem`, mọi grid nhiều cột không có breakpoint nhỏ hơn `640px`, mọi `white-space: nowrap` trên link/title cần được review thủ công.

## Checklist nghiệm thu 320px

- Header 320px chỉ còn logo + nút search + nút menu, hoặc một biến thể tương đương không tràn.
- Nút menu/search có vùng chạm tối thiểu `44px`.
- Menu mở dưới header, nằm trong viewport, link cao tối thiểu `44px`.
- Search mở riêng, input full-width hoặc vừa viewport, submit được.
- Không có quick links/topbar/strip lặp menu chính trên mobile.
- Hero không che chữ, không phụ thuộc overlay dày đặc.
- Blog/review/game stack về một cột khi card nhiều chữ; game card đơn giản có thể hai cột.
- Không có sidebar/min-width lớn gây ngang trang.
- Typography card không quá lớn; title dài được clamp hoặc xuống dòng ổn.
- Footer về một cột hoặc nhóm full-width, link không làm rộng viewport.
- Header/footer ổn trên các trang ngoài home.

## Kết luận

Chuẩn mobile 320px+ nên được xem là chuẩn chức năng, không chỉ responsive CSS. Một style có thể rất khác desktop, nhưng ở mobile phải đơn giản hóa về hành vi chắc chắn: một menu chính, một search thật, target đủ chạm, nội dung xếp tuần tự, footer gọn. Nếu phải chọn giữa giữ signature desktop và tránh lỗi 320px, ưu tiên tránh lỗi 320px.
