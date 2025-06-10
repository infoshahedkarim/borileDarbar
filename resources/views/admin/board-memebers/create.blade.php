<!DOCTYPE html>
<html>
<head>
    <title>Create Board Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Board Member</h2>

    <form action="{{ route('admin.board-members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="img" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="text" name="fb" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Twitter</label>
            <input type="text" name="twitter" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.board-members.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
