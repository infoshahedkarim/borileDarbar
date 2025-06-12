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
        <h2 class="mb-4">Add Banner Data</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>There were some problems with your input:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @for($i = 1; $i <= 3; $i++)
                <div class="card mb-4 p-3">
                    <h4>Banner {{ $i }}</h4>

                    <div class="mb-3">
                        <label>Banner Image</label>
                        <input type="file" name="banner{{ $i }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <input type="text" name="message{{ $i }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description{{ $i }}" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Additional Image</label>
                        <input type="file" name="img{{ $i }}" class="form-control">
                    </div>
                </div>
            @endfor


            <button type="submit" class="btn btn-primary">Save Banner Info</button>
        </form>
    </div>
@endsection