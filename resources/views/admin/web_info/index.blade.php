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
        <h2>Update Website Information</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.web_info.update', $webInfo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Facebook</label>
                <input type="text" name="facebook" value="{{ $webInfo->facebook }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Twitter</label>
                <input type="text" name="twitter" value="{{ $webInfo->twitter }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>LinkedIn</label>
                <input type="text" name="linkedin" value="{{ $webInfo->linkedin }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Phone Number</label>
                <input type="text" name="number" value="{{ $webInfo->number }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="location" value="{{ $webInfo->location }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $webInfo->email }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Information</label>
                <textarea name="info" class="form-control" rows="4">{{ $webInfo->info }}</textarea>
            </div>

            <div class="mb-3">
                <label>Current Logo</label><br>
                <img src="{{ asset($webInfo->logo) }}" width="130" height="130">
            </div>

            <div class="mb-3">
                <label>Change Logo</label>
                <input type="file" name="logo" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection