<!DOCTYPE html>
<html>
<head>
    <title>Upload Banner 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add Banner 1</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banner1.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Banner Image</label>
            <input type="file" name="banner" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <input type="text" name="message" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Additional Image</label>
            <input type="file" name="img" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save Banner 1</button>
    </form>
</div>
</body>
</html>
