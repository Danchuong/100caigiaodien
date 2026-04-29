thiết kế 10 giao diện trang home

Cấu trúc file và thư mục

Mục tiêu công việc: tạo 10 giao diện mới cho trang home, dùng để trình bày lại nội dung cũ trên website. Có thể thay đổi bố cục và màu sắc tuỳ ý, nhưng vẫn phải giữ đầy đủ nội dung cũ trên trang home. Không yêu cầu đẹp xuất sắc, chỉ cần khác biệt, không lỗi, đẹp khoảng 6 điểm là dùng được.

DEMO TRANG CHỦ: https://gamenewfiz.info/

Mã nguồn: https://drive.google.com/file/d/1QyejFYwzZGaeYyIU4l06eKRb5-RC6C6d/view?usp=sharing

Dùng All-in-One WP Migration để restore.

Dùng scss để build ra .css và đặt style.css ở /wp-content/themes/h5game/

File cần thiết kế:
/wp-content/themes/h5game/home.php

File scss nằm ở đây:
/wp-content/themes/h5game/css/

Viết css cho trang home ở:
/wp-content/themes/h5game/css/_home.scss

Không yêu cầu thiết kế lại header.php và footer.php. Chỉ chỉnh header/footer nếu thật sự cần để trang home không lỗi.

Yêu cầu thiết kế

Yêu cầu hiện đại, responsive, hỗ trợ tốt cho mobile >= 320px.

Các class đặt tên rõ ràng, dễ hiểu.

Ở trang home, trình bày 3 nội dung sau. Thứ tự và bố cục có thể thay đổi khác nhau giữa các giao diện, miễn hấp dẫn, khác biệt và đầy đủ nội dung.

Bao gồm các bài blog:
            'post_type' =>  'blog',
            'posts_per_page' => 3,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Các bài review:
            $wp_query = new WP_Query(array(
            'post_type' =>  'review',
            'posts_per_page' => 5,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Các bài post:
            $wp_query = new WP_Query(array(
            'post_type' =>  'post',
            'posts_per_page' => 5,
            'post__not_in' => $game_ids,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',

Luôn cho hiển thị random.

Nghiệm thu

Bao gồm các file php và css/scss liên quan đến trang home.
