<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){

        // Prendo I film dal db


        // Li rendo come voglio
        $movies = [];


        return view('movies.index', compact('movies'));
    }
}