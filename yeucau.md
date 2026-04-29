# Yêu cầu thiết kế 10 giao diện trang home

## Mục tiêu

Tạo 10 giao diện mới cho **trang home** để trình bày lại nội dung cũ trên website.

Có thể thay đổi bố cục và màu sắc tuỳ ý, nhưng trang home vẫn phải giữ đầy đủ các nhóm nội dung cũ. Không yêu cầu đẹp xuất sắc; chỉ cần khác biệt, không lỗi, responsive tốt, đẹp khoảng 6 điểm là dùng được.

Demo trang chủ tham khảo: https://gamenewfiz.info/

## Source và restore

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing

Dùng **All-in-One WP Migration** để restore file `.wpress`.

## Phạm vi công việc

Chỉ thiết kế lại **trang home**.

File PHP chính:

```text
/wp-content/themes/h5game/home.php
```

File SCSS chính:

```text
/wp-content/themes/h5game/css/_home.scss
```

Build SCSS ra CSS và đặt file CSS build ở:

```text
/wp-content/themes/h5game/style.css
```

## Không thuộc phạm vi

Không yêu cầu thiết kế lại:

```text
/wp-content/themes/h5game/header.php
/wp-content/themes/h5game/footer.php
/wp-content/themes/h5game/css/_header.scss
/wp-content/themes/h5game/css/_footer.scss
```

Chỉ chỉnh header/footer nếu có lỗi trực tiếp làm trang home hiển thị sai hoặc không dùng được.

Header và footer hiện có vẫn phải hoạt động bình thường khi xem trang home.

## Yêu cầu giao diện home

Trang home cần:

- Hiện đại, responsive, hỗ trợ tốt mobile từ `320px` trở lên.
- Không vỡ layout trên desktop, tablet, mobile.
- Class đặt tên rõ ràng, dễ hiểu.
- Ưu tiên class có phạm vi home để không ảnh hưởng trang khác, ví dụ:

```text
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

Không bắt buộc dùng các class header như `.head-wrapper`, `.head-left`, `.head-center` vì header không thuộc scope thiết kế hiện tại.

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

Mỗi giao diện home cần bàn giao các file liên quan đến trang home, tối thiểu gồm:

```text
home.php
css/_home.scss
style.css
```

Nếu có chỉnh thêm file nào để home không lỗi, cần ghi rõ file đó.
