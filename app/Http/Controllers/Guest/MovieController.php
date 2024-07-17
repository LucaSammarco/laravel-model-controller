<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){

        // Prendo I film dal db


        // Li rendo come voglio
        //SELECT * FROM movies
        $movies = Movie::all();


        return view('movies.index', compact('movies'));
    }
}