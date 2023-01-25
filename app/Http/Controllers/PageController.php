<?php

namespace App\Http\Controllers;

use App\Models\Film;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dati = Film::all();

        return view('index', compact('dati'));
    }
}
