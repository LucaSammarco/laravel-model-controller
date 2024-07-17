@extends('layouts.app')

@section('page-title')
    Movies
@endsection

@section('main-content')
    <h1>Welcome to Movies</h1>

   <ul>
         @foreach($movies as $movie)
              <li>
                <p>
                    {{ $movie->title; }}
                </p>
              </li>
         @endforeach

   </ul>


@endsection
