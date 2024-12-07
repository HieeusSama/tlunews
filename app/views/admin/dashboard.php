<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1>Admin Dashboard</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="index.php?page=admin&action=dashboard" class="nav-link text-white">Bảng điều khiển</a></li>
                    <li class="nav-item"><a href="index.php?page=admin&action=news" class="nav-link text-white">Quản lý bài viết</a></li>
                    <li class="nav-item"><a href="index.php?page=admin&action=logout" class="nav-link text-white">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mt-4">
        <h2>Chào mừng, Admin!</h2>
        <p>Chọn chức năng bạn muốn thực hiện:</p>
        <div class="row">
            <div class="col-md-4">
                <a href="index.php?page=admin&action=news" class="btn btn-primary w-100">Quản lý bài viết</a>
            </div>
            <div class="col-md-4">
                <a href="index.php?page=admin&action=users" class="btn btn-primary w-100">Quản lý người dùng</a>
            </div>
            <div class="col-md-4">
                <a href="index.php?page=admin&action=settings" class="btn btn-primary w-100">Cài đặt hệ thống</a>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>Bản quyền © 2024 TLU News</p>
    </footer>
</body>
</html>
