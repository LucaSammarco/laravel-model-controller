@extends('layouts.app')

@section('page-title')
    Home
@endsection

@section('main-content')
    <h1>Welcome to the Home Page</h1>


    <a href="/movies"> Movies </a>
    {{-- <img src="{{ Vite::asset('resources/img/gatto-soriano.jpeg')}}" alt="gatto"> --}}
@endsection
