<!DOCTYPE html>
<html>

<head>
    <title>All Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h2>All Blog Posts</h2>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-success">+ Add Blog</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Header</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td><img src="{{ asset($blog->img) }}" alt="blog-img" width="100"></td>
                        <td>{{ $blog->header }}</td>
                        <td>{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</td>
                        <td>{{ $blog->time }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($blog->description, 100) }}</td>
                        <td>
                            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="d-inline-block"
                                onsubmit="return confirm('Delete this blog post?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No blog posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>

</html>