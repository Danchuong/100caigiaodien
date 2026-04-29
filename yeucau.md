thiết kế 10 giao diện
Cấu trúc file và thư mục
Mục tiêu công việc: tạo giao diện mới, để trình bày những nội dung cũ trên trang web, có thể thay đổi bố cục màu sắc tuỳ ý, nhưng vẫn đầy đủ nội dung cũ, Không yêu cầu đẹp xuất sắc, chỉ cần khác biệt và không lỗi, đẹp 6 điểm là dùng dc rồi 
DEMO TRANG CHỦ: https://gamenewfiz.info/

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing
Dùng All-in-One WP Migration để restore

Dùng scss để build ra .css và đặt styles.css ở /wp-content/themes/h5game/

3 file /wp-content/themes/h5game/
Home.php
Header.php
Footer.php

File scss nằm ở đây:
/wp-content/themes/h5game/css/

Viết css cho trang home ở _home.scss
Css cho header ở _header.scss
Css cho footer ở _footer.scss


Yêu cầu thiết kế

Yêu cầu hiện đại, responsive, hỗ trợ tốt cho mobile >= 320px
Các class đặt tên rõ ràng dễ hiểu
Như .head-wrapper
Bên trái thì .head-left,
Giữa thì .head-center
Header và footer hiển thị tốt ở tất cả các trang

Ở trang home, trình bày 3 nội dung sau, thứ tự bố cục thay đổi khác nhau, thế nào cũng được, miễn hấp dẫn và khác biệt

Bao gồm các bài blog
            'post_type' =>  'blog',
            'posts_per_page' => 3,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Các bài review
            $wp_query = new WP_Query(array(
            'post_type' =>  'review',
            'posts_per_page' => 5,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Các bài post
            $wp_query = new WP_Query(array(
            'post_type' =>  'post',
            'posts_per_page' => 5,
            'post__not_in' => $game_ids,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Luôn cho hiển thị random,


Nghiệm thu

Bao gồm các file php và css/scss liên quan
