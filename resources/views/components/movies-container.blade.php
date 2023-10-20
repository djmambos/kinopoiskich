<div class="grid grid-cols-6 gap-6 m-6">
    @foreach ($movies as $movie)
        <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
            <div class="bg-emerald-950 rounded text-white p-5">
                <h3 class="font-medium text-center">
                    {{ ucfirst($movie->name) }}
                </h3>
                <img src="{{ asset('/storage/' . $movie->img) }}" alt="movie img">
            </div>
        </a>
    @endforeach
</div>
