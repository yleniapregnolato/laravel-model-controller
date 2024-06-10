<div class="card mb-4">
    <img src="{{ $movie->image }}" alt="movie_image">
    <div class="card-body">
        <p><span class="fw-bold text-success">Titolo:</span> {{ $movie->title }}</p>
        <p><span class="fw-bold text-success">Titolo Originale:</span> {{ $movie->original_title }}</p>
        <p><span class="fw-bold text-success">Nazionalità:</span> {{ $movie->nationality }}</p>
        <p><span class="fw-bold text-success">Data uscita:</span> {{ $movie->date }}</p>
        <p><span class="fw-bold text-success">Voto:</span> {{ $movie->vote }}</p>
    </div>
</div>
