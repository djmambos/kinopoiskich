<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kinopoiskich - Фильмы</title>

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <x-header />

        <div class="m-6">
            <div class="bg-emerald-950 rounded text-white p-5">
                <h3 class="font-medium text-center">
                    {{ ucfirst($data->name) }}
                </h3>
                <img src="{{ asset('/storage/' . $data->img) }}" alt="movie img">
                <p>
                    {{ $data->description }}
                </p>
            </div>
        </div>
    </body>
</html>
