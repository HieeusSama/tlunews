<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa bài viết - TLU News</title>
    <!-- Thêm CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Tiêu đề trang -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Chỉnh sửa bài viết</h1>
            <a href="index.php" class="btn btn-secondary">Quay lại danh sách bài viết</a>
        </div>

        <!-- Form chỉnh sửa bài viết -->
        <form action="edit_process.php" method="POST" enctype="multipart/form-data">
            <!-- ID bài viết (ẩn) -->
            <input type="hidden" name="news_id" value="<?php echo $news['id']; ?>">

            <!-- Tiêu đề -->
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($news['title']); ?>" required>
            </div>

            <!-- Thể loại -->
            <div class="mb-3">
                <label for="category" class="form-label">Thể loại</label>
                <select class="form-select" id="category" name="category" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['id']; ?>" <?php echo $category['id'] == $news['category_id'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($category['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Nội dung -->
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung bài viết</label>
                <textarea class="form-control" id="content" name="content" rows="6" required><?php echo htmlspecialchars($news['content']); ?></textarea>
            </div>

            <!-- Hình ảnh -->
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Hình ảnh đại diện</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                <?php if (!empty($news['thumbnail'])): ?>
                    <div class="mt-2">
                        <img src="../uploads/<?php echo $news['thumbnail']; ?>" alt="Ảnh hiện tại" class="img-thumbnail" width="200">
                        <p class="mt-1">Ảnh hiện tại</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Nút lưu -->
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>

    <!-- Thêm JavaScript của Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
