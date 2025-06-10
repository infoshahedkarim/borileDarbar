<!DOCTYPE html>
<html>
<head>
    <title>All Next Orosh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Upcoming Orosh Events</h2>
    <div class="row">
        @forelse($oroshList as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog hoverimg border p-3 rounded shadow-sm">
                    <h4>
                        {{ \Carbon\Carbon::parse($item->date)->format('d') }}
                        <span>{{ \Carbon\Carbon::parse($item->date)->format('M, Y') }}</span>
                    </h4>
                    <figure>
                        <img src="{{ asset($item->img) }}" alt="img" class="img-fluid">
                    </figure>
                    <div class="blog-meta my-2">
                        <span><i class="fa-solid fa-clock"></i> {{ $item->start_time }} - {{ $item->end_time }}</span><br>
                        <span><i class="fa-solid fa-location-dot"></i> {{ $item->location }}</span>
                    </div>
                    <h5><a href="#">{{ $item->header }}</a></h5>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
        @empty
            <p>No upcoming Orosh events found.</p>
        @endforelse
    </div>
</div>
</body>
</html>
