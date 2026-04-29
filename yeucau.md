# Yêu cầu thiết kế 10 giao diện trang home, header và footer

## Mục tiêu

Tạo 10 giao diện mới cho **trang home**, đồng thời thiết kế lại **header** và **footer** để giao diện đồng bộ trên toàn website.

Có thể thay đổi bố cục và màu sắc tuỳ ý, nhưng trang home vẫn phải giữ đầy đủ các nhóm nội dung cũ. Header và footer cần đồng bộ với style của từng giao diện. Không yêu cầu đẹp xuất sắc; chỉ cần khác biệt, không lỗi, responsive tốt, đẹp khoảng 6 điểm là dùng được.

Demo trang chủ tham khảo: https://gamenewfiz.info/

## Source và restore

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing

Dùng **All-in-One WP Migration** để restore file `.wpress`.

## Phạm vi công việc

Thiết kế lại:

- **Trang home**.
- **Header** dùng chung.
- **Footer** dùng chung.

File PHP chính cần xử lý:

```text
/wp-content/themes/h5game/home.php
/wp-content/themes/h5game/header.php
/wp-content/themes/h5game/footer.php
```

File SCSS chính cần xử lý:

```text
/wp-content/themes/h5game/css/_home.scss
/wp-content/themes/h5game/css/_header.scss
/wp-content/themes/h5game/css/_footer.scss
```

Build SCSS ra CSS và đặt file CSS build ở:

```text
/wp-content/themes/h5game/style.css
```

## Không thuộc phạm vi

Không yêu cầu thay đổi:

```text
Plugin
Admin WordPress
Database
Post type
Nội dung bài viết
Logic import/restore
```

Không thay đổi chức năng WordPress nếu không cần thiết cho giao diện.

Không làm hỏng các trang đang có như blog detail, review detail, game detail, archive, search.

## Yêu cầu giao diện home, header và footer

Giao diện cần:

- Hiện đại, responsive, hỗ trợ tốt mobile từ `320px` trở lên.
- Không vỡ layout trên desktop, tablet, mobile.
- Class đặt tên rõ ràng, dễ hiểu.
- Header và footer phải hiển thị tốt ở tất cả các trang, không chỉ trang home.
- Header phải rõ ràng trên desktop và mobile, có menu/search hoạt động đúng như source gốc.
- Footer phải gọn, không bị dư khoảng trắng xấu, không bị kéo ngược lên nội dung phía trên.
- Ưu tiên class rõ nghĩa theo từng khu vực, ví dụ:

```text
.head-wrapper
.head-left
.head-center
.head-right
.footer-wrapper
.footer-info
.footer-menu
.home-wrapper
.home-hero
.home-section
.home-blog-list
.home-blog-card
.home-review-list
.home-review-card
.home-game-list
.home-game-card
```

Header/footer là phần dùng chung, nên khi chỉnh cần kiểm tra thêm các trang khác ngoài home để tránh lỗi layout toàn site.

## Nội dung bắt buộc trên trang home

Trang home phải trình bày đủ 3 nhóm nội dung sau. Thứ tự và bố cục có thể thay đổi giữa các giao diện, miễn hấp dẫn, khác biệt và đầy đủ.

### Bài blog

```php
'post_type'      => 'blog',
'posts_per_page' => 3,
'orderby'        => 'rand',
'order'          => 'DESC',
'post_status'    => 'publish',
```

### Bài review

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'review',
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

### Bài post/game

```php
$wp_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'post__not_in'   => $game_ids,
    'orderby'        => 'rand',
    'order'          => 'DESC',
    'post_status'    => 'publish',
));
```

Luôn cho các nhóm nội dung hiển thị random.

## Nghiệm thu

Mỗi giao diện cần bàn giao các file liên quan đến home, header và footer, tối thiểu gồm:

```text
home.php
header.php
footer.php
css/_home.scss
css/_header.scss
css/_footer.scss
style.css
```

Nếu có chỉnh thêm file nào để giao diện không lỗi, cần ghi rõ file đó.
