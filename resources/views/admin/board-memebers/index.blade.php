<!DOCTYPE html>
<html>

<head>
    <title>Board Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h2>Board Members</h2>
            <a href="{{ route('admin.board-members.create') }}" class="btn btn-success">+ Add Member</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr>
                        <td><img src="{{ asset($member->img) }}" alt="img" width="60"></td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->designation }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->fb ?? '—' }}</td>
                        <td>{{ $member->twitter ?? '—' }}</td>
                        <td>
                            <a href="{{ route('admin.board-members.edit', $member->id) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.board-members.destroy', $member->id) }}" method="POST"
                                class="d-inline-block" onsubmit="return confirm('Delete this member?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No board members found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>

</html>