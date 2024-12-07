# TLUNews

## Giới thiệu
**TLUNews** là một dự án phát triển bởi nhóm 7, tập trung vào việc xây dựng một website tin tức đơn giản với hai vai trò chính: người dùng khách và quản trị viên. Dự án được xây dựng nhằm cung cấp thông tin chính xác, hữu ích và dễ tiếp cận cho người dùng.

## Thành viên nhóm
1. **Thành viên 1**: [Vũ Anh Hiếu] - Vai trò: [Trưởng nhóm, Xây dựng chức năng hiển thị danh sách tin tức, xem chi tiết tin tức cho người dùng khách]
2. **Thành viên 2**: [Vũ Anh Tú] - Vai trò: [Xây dựng chức năng đăng nhập quản trị viên.]
3. **Thành viên 3**: [Phạm Hải Hoàn] - Vai trò: [ Xây dựng giao diện website (HTML, CSS)]
4. **Thành viên 4**: [Nguyễn Văn Trọng] - Vai trò: [Xây dựng chức năng quản lý tin tức (thêm, sửa, xóa) cho quản trị viên]

## Mục tiêu dự án
- Nắm vững kiến thức về cơ sở dữ liệu quan hệ và thiết kế CSDL cho ứng dụng web.
- Thành thạo lập trình hướng đối tượng (OOP) trong PHP.
- Hiểu và áp dụng được mô hình MVC trong tổ chức mã nguồn.
- Xây dựng website tin tức hỗ trợ hai vai trò:
  - **Người dùng khách**: Xem tin tức, tìm kiếm tin tức, xem chi tiết tin tức.
  - **Quản trị viên**: Đăng nhập, đăng xuất, thêm, sửa, xóa tin tức.

## Công nghệ sử dụng
- **Ngôn ngữ lập trình**: PHP
- **Phần mềm phát triển**: XAMPP
- **Cơ sở dữ liệu**: MySQL
- **Mô hình tổ chức mã nguồn**: MVC (Model-View-Controller)

## Hướng dẫn cài đặt
1. Clone repository từ GitHub:
   ```bash
   git clone https://github.com/HieeusSama/tlunews.git
   ```
2. Khởi chạy XAMPP và bật Apache cùng MySQL.
3. Sao chép mã nguồn vào thư mục `htdocs` của XAMPP:
   ```bash
   cp -r tlunews /path/to/xampp/htdocs/
   ```
4. Tạo cơ sở dữ liệu và import tệp SQL:
   - Truy cập phpMyAdmin tại [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Tạo cơ sở dữ liệu mới, sau đó import tệp `database.sql` từ thư mục dự án.
5. Cấu hình kết nối cơ sở dữ liệu trong tệp `config.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'tintuc');
   ```
6. Truy cập ứng dụng tại [http://localhost/tlunews/public/](http://localhost/tlunews).

---
**Nhóm 7 xin chân thành cảm ơn sự quan tâm và hỗ trợ từ mọi người!**
