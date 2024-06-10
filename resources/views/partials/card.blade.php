<div class="card mb-4">
    <img src="{{ $movie->image }}" alt="movie_image">
    <div class="card-body">
        <p>{{ $movie->title }}</p>
        <p>{{ $movie->original_title }}</p>
        <p>{{ $movie->nationality }}</p>
        <p>{{ $movie->date }}</p>
        <p>{{ $movie->vote }}</p>
    </div>
</div>
