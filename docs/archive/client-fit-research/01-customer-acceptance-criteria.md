# Tieu chi nghiem thu suy luan tu feedback khach

## Tam ly khach hang

Khach khong cham theo do dep rieng le. Khach cham theo cam giac "co dung la mot giao dien moi, dung duoc that, va khong phai lop skin boc quanh source cu khong".

Khach rat nhay voi cac dau hieu lam cho co: label trang tri, block giong menu nhung khong click duoc, banner dung text cu, card nhoi chu len anh, header/search mobile loi, footer co text ky thuat hoac du khoang trang xau.

Khach co the so sanh bang mat va bang tool. Neu bo mau, anh, font, shadow ma wireframe van giong nhau, ban do co rui ro bi xem la chua khac form.

## Tieu chi bat buoc phai qua

- Home, header, footer phai dong bo theo tung style, khong chi sua home.
- Moi style phai khac ro it nhat 4/6 phan: header, hero, flow/thu tu section, card/grid, footer, mobile signature.
- Phai giu du nhom noi dung cu: blog, review, game. Muc toi thieu dang duoc nhac trong feedback la 3 blog, 5 review, 5 game.
- Moi text hien thi phai co y nghia noi dung. Khong de label chung chung chi de trang tri.
- Cac block trong nhu menu, category, shortcut, tab, CTA phai la link/honh dong that. Neu khong co hanh dong thi bo.
- Hero/banner nen lay noi dung that: bai viet noi bat, review noi bat, game noi bat, co title va permalink ro.
- Khong dung lai banner cu chi thay mau/anh/text nhe.
- Card anh overlay chi nen giu category/tag va title. Khong de excerpt/description dai che anh.
- Header mobile va search mobile phai dung duoc tu 320px, khong tran man, khong che menu, khong bi roi khoi viewport.
- Header khong can absolute. Neu overlay gay roi hoac loi mobile thi dung header thuong/sticky.
- Footer phai gon, khong du khoang trang xau, khong co noi dung mo ta ky thuat, khong bi keo nguoc len content.
- Link archive/detail/search phai hoat dong dung voi source goc.
- Khong lam hong cac trang ngoai home vi header/footer dung chung.
- Delivery cho khach phai gon: home.php, header.php, footer.php, SCSS/CSS va asset can thiet.

## Tieu chi an co kha nang khach dang dung

- "Khac form" quan trong hon "nhieu hieu ung". Layout don gian nhung ro, dung duoc, co logic noi dung se de duoc duyet hon layout trang tri.
- Khach khong muon thay noi dung gia. Cac tu nhu `Game Newsroom`, `News Wall`, `Front Page`, `Issue Index`, `Score ledger` chi an toan khi block ben duoi that su dien dung vai tro do.
- Review score la vung nhay cam. Neu hien diem, diem phai co nguon tu field that; diem hardcode nhu `4.5` rat de bi bat.
- Search la chuc nang that, khong phai visual. Nut search, input, action URL va query param can chay duoc tren mobile.
- Neu dung random content, khach co the thay trang moi lan load doi noi dung va nghi la thieu chu dich. Random chi nen dung khi layout van on va khong lam lap/hao hut nhom noi dung.
- Cac style da Done van co the bi tu choi neu fingerprint trong docs hay hon ban thuc te. Khach nhin output, khong nhin y tuong trong file plan.
- Desktop dep nhung mobile kem van bi reject, vi feedback da goi mobile la tieu chi nghiem thu that.
- Footer/header cua tung style can khac ro, khong chi doi class/mau; neu JS toggle/search lap lai y het nhieu style thi can bu dap bang visual/layout/mobile signature khac.

## Rui ro rieng cho des-1 den des-10

- `des-1` - Rui ro cao nhat la diem review hardcode `4.5`, co the bi xem la du lieu gia. Layout search-first hop feedback, link da that, nhung can dam bao search/menu mobile thuc su khong loi.
- `des-2` - Lead + trending rail ro form, nhung review score chi hien chu `Review`, khong co diem that. Neu khach ky vong "score cards" dung nghia, can lay diem field hoac doi ten block.
- `des-3` - Newspaper text-first khac ro, nhung dang hien nhieu hon muc toi thieu 3/5/5 va dung truc tiep `get_field()` khong guard trong home/footer. Rui ro phu thuoc ACF va co the bi xem la qua nhieu noi dung so voi delivery scope.
- `des-4` - Mosaic co khac form, link Blogs/Reviews/Games da click duoc. Rui ro la hero van co headline tinh "Gaming stories..." thay vi mot bai noi bat that, nen co the bi xem la banner chung chung.
- `des-5` - Editorial cover co signature tot. Rui ro la review chi co 3 pick dau va 4 review index, khong dat 5 review neu khach dem so luong; mot so label nhu `Issue Index`, `Notebook` can trong nhu noi dung editorial that.
- `des-6` - Carousel/rail y tuong ro, nhung thuc te la horizontal rail, khong phai carousel chuc nang. Dung random/exclude nhieu query co the lam thieu blog/review/game neu data it.
- `des-7` - Split hero + picks ro, footer co form search that. Rui ro lon la review section dung `offset 4` sau khi hero da lay 4 review picks; neu database it review, section review chinh co the rong hoac chi con it hon 5.
- `des-8` - Newspaper three-column khac va content-first. Rui ro la khong co hero noi dung that bang anh, nhieu text/excerpt tren mobile co the day trang rat dai; can kiem tra 320px de tranh cam giac nghiet.
- `des-9` - Section band magazine co flow ro va du 3/5/5. Rui ro la hero featured lay random va blog section chi co 3 item, neu khach dem "home phai co 3 blog" thi vua du nhung mong; review score van la label `Review`, khong co diem that.
- `des-10` - Review score hero dung nguon diem field that nen hop review hub. Rui ro la neu cac field score trong data trong, UI se roi ve chu `Review/Verdict`, lam mat signature "score"; can dam bao mobile score card khong tran vi day la style cham theo diem.

## Dau hieu de tu danh gia truoc khi gui khach

- Nhin wireframe den trang: neu 2 style cung header + hero + grid + footer, chua dat.
- Click duoc moi chip/tab/shortcut/CTA thay tren man.
- Search mobile mo/dong duoc, submit dung URL, input khong tran o 320px.
- Card co anh khong bi doan mo ta dai che kin.
- Review score neu hien so thi khong hardcode.
- Footer khong co text ky thuat, khong rong, khong lap y voi header mot cach vo nghia.
- Mot trang detail bat ky van hien header/footer on.
