<!DOCTYPE html>
<html>
<head>
    <title>Edit Namaz Times</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
</body>
</html>
