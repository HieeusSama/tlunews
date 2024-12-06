<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1>Quản lý bài viết</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="index.php?page=admin&action=dashboard" class="nav-link text-white">Bảng điều khiển</a></li>
                    <li class="nav-item"><a href="index.php?page=admin&action=news" class="nav-link text-white">Danh sách bài viết</a></li>
                    <li class="nav-item"><a href="index.php?page=admin&action=logout" class="nav-link text-white">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Danh sách bài viết</h2>
            <a href="index.php?page=admin&action=news&method=add" class="btn btn-success">Thêm bài viết</a>
        </div>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày đăng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Bài viết mẫu 1</td>
                    <td>Admin</td>
                    <td>2024-12-06</td>
                    <td>
                        <a href="index.php?page=admin&action=news&method=edit&id=1" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="index.php?page=admin&action=news&method=delete&id=1" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bài viết mẫu 2</td>
                    <td>Admin</td>
                    <td>2024-12-06</td>
                    <td>
                        <a href="index.php?page=admin&action=news&method=edit&id=2" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="index.php?page=admin&action=news&method=delete&id=2" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>Bản quyền © 2024 TLU News</p>
    </footer>
</body>
</html>
