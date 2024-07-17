<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //restituisce la homepage
    public function index(){

        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }
}