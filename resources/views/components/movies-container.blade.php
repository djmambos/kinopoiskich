<div class="grid grid-cols-4 gap-6 m-6">
    @foreach ($movies as $movie)
        <div class="bg-emerald-950 rounded text-white p-5">
            <h3 class="font-medium text-center">
                {{ ucfirst($movie->name) }}
            </h3>
            <img src="{{ $movie->img }}" alt="movie img">
            <p class="text-sm">
                {{ $movie->description }}
            </p>
        </div>
    @endforeach
</div>
