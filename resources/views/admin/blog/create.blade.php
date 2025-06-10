<!DOCTYPE html>
<html>
<head>
    <title>Create Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Blog</h2>

    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Header</label>
            <input type="text" name="header" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="img" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Time</label>
            <input type="text" name="time" class="form-control" placeholder="e.g. 10:00 AM" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
