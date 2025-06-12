@extends('layouts.master')
@section('title')
    User Grid
@endsection
@section('page-title')
    User Grid
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

<div class="container mt-5">
    <h2>Edit Board Member</h2>

    <form action="{{ route('admin.board-members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            <img src="{{ asset($member->img) }}" width="100">
        </div>

        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file" name="img" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ $member->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" name="designation" value="{{ $member->designation }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" value="{{ $member->phone }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="text" name="fb" value="{{ $member->fb }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Twitter</label>
            <input type="text" name="twitter" value="{{ $member->twitter }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.board-members.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
