<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recreations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Recreations</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('recreations.create') }}" class="btn btn-primary mb-3">Create Recreation</a>

        <div class="row">
            @foreach($recreations as $recreation)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($recreation->image)
                            <img src="{{ asset('storage/' . $recreation->image) }}" class="card-img-top" alt="{{ $recreation->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $recreation->name }}</h5>
                            <p class="card-text">{{ $recreation->description }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $recreation->location }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $recreation->date }}</p>
                            <p class="card-text"><strong>Phone:</strong> {{ $recreation->phone }}</p>
                            <a href="{{ route('recreations.edit', $recreation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('recreations.destroy', $recreation->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
