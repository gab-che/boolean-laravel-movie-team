<?php

namespace App\Http\Controllers;

use App\Models\Film;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dati = Film::all();
        $last_films = Film::orderBy('name', 'desc')->take(10)->get();
        $last_films_release = Film::orderBy('release_date', 'desc')->take(10)->get();

        return view('index', compact('dati', 'last_films', 'last_films_release'));
    }
}
