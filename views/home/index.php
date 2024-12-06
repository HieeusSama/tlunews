<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLU News - Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>TLU News</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="index.php?page=home&action=index" class="nav-link text-white">Trang chủ</a></li>
                    <li class="nav-item"><a href="index.php?page=news&action=list" class="nav-link text-white">Tin tức</a></li>
                    <li class="nav-item"><a href="index.php?page=admin&action=login" class="nav-link text-white">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mt-4">
        <h2>Danh sách tin tức</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="index.php?page=news&action=detail&id=1">Bài viết 1</a></li>
            <li class="list-group-item"><a href="index.php?page=news&action=detail&id=2">Bài viết 2</a></li>
            <li class="list-group-item"><a href="index.php?page=news&action=detail&id=3">Bài viết 3</a></li>
        </ul>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>Bản quyền © 2024 TLU News</p>
    </footer>
</body>
</html>
