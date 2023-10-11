<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function root(): View
    {
        return view('main-page', ['data' => Movie::all()]);
    }
}
