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
    <h2>Add Next Orosh</h2>
 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('nextorosh.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="img" class="form-control">
        </div>

        <div class="mb-3">
            <label>Start Time</label>
            <input type="text" name="start_time" class="form-control" placeholder="e.g. 10:00 AM" required>
        </div>

        <div class="mb-3">
            <label>End Time</label>
            <input type="text" name="end_time" class="form-control" placeholder="e.g. 12:00 PM" required>
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Header</label>
            <input type="text" name="header" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Orosh</button>
    </form>
</div>


@endsection
