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
    <h2>Edit Namaz Times</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('namaz.update') }}">
        @csrf

        @php
            $namaz = $namaz ?? new \App\Models\Namaz();
        @endphp

        @foreach (['fajr', 'zuhr', 'asr', 'magrib', 'isha', 'jummah'] as $prayer)
            <div class="mb-3">
                <label class="form-label text-capitalize">{{ $prayer }} Time</label>
                <input type="text" class="form-control" name="{{ $prayer }}" value="{{ old($prayer, $namaz->$prayer) }}" required>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Update Times</button>
    </form>
</div>


@endsection