# Lọc và xoá các post_type = revision trong table post

SELECT \* FROM `isolc_posts` WHERE post_type = "revision";
DELETE FROM `isolc_posts` WHERE post_type = 'revision';

# Xoá trong post_meta

SELECT \* FROM `isolc_postmeta` pm LEFT JOIN isolc_posts wp ON wp.ID = pm.post_id WHERE wp.ID IS NULL;
DELETE pm FROM `isolc_postmeta` pm LEFT JOIN isolc_posts wp ON wp.ID = pm.post_id WHERE wp.ID IS NULL;

# Upload Database

- Up file mới nhất lên trong phpmyadmin
- Vào table wp_option sửa tên domain lại => thường là 2 dòng đầu tiên của bảng

# Upload Source code

- Vào Public HTML
- Giữ lại các file: htaccess, robots.txt , wp-config.php
- Trong đó:
  - htaccess : liên quan tới bảo mật website
  - robots.txt: Chặn công cụ tìm kiếm, chặn index
  - wp-config : Kết nối database

# Backup dự án / sửa chữa lớn

- Backup db trước => lưu trong thư mục db
- Backup source dự án
- Nhớ thoát hết / Tắt hết vscode ra vì nó sẽ lưu file nhớ tạm

# Trường hợp nếu : Lỗi Database

- Upload database mà lỗi : utf8mb4_0900_ai_ci
- Thì phải thay bằng dòng : utf8mb4_unicode_520_ci
- Mở file DB bằng vscode và thay trong vscode

# Check SEO

- Check H1 - H6 tất cả các trang, url
- Danh mục: Đưa H2 vô cố định không cho sửa => Nghiên cứu cách làm
- Kiểm tra các hình ảnh => thay thế lại hết các hình demo đang có => Liên hệ bạn design để cung cấp hình
