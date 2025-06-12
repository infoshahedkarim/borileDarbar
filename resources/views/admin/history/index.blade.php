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
    <h2>Edit History Section</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.history.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">History Content</label>
            <textarea name="history" class="ckeditor form-control" rows="10" required>{{ old('history', $history->history ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update History</button>
    </form>
</div>
<script src="/ckeditor/ckeditor.js"></script>

@endsection
