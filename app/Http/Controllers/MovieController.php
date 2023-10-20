<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MovieController extends Controller
{
    public function index(): View
    {
        return view('movies.index', ['data' => Movie::all()]);
    }

    public function show(int $id): View|RedirectResponse
    {
        $movie = Movie::query()->find($id);

        if ($movie === null) {
            return redirect()->to('/');
        }

        return view('movies.show    ', ['data' => Movie::query()->find($id)]);
    }
}
