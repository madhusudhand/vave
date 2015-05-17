@extends('app.layout')

@section('title')
Vave
@stop


@section('body')

    <h1 class="text-center">Welcome to Vave</h1>
    <h2>{{ Auth::user()->full_name }}</h2>

    <a href="/logout">Logout</a>

@stop
