<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Blog</h2>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset($blog->img) }}" width="120">
        </div>

        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="img" class="form-control">
        </div>

        <div class="mb-3">
            <label>Header</label>
            <input type="text" name="header" value="{{ $blog->header }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" value="{{ $blog->date }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Time</label>
            <input type="text" name="time" value="{{ $blog->time }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $blog->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
