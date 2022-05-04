<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
        // Creo la variabile moviesList che contiene la lista di tutti i film ottenuta leggendo il database attraverso il modello Movie
        $moviesList = Movie::all();
        // dd($moviesList);

        // Creo la variabile data che è un array di tutti i film contenuti in moviesList
        $data = [
            'movies' => $moviesList
        ];

        // Ritorno la view index.blade.php rendendo disponibile la variabile $data
        return view('index', $data);
    }
}
