@extends('app.layout')

@section('title')
Vave
@stop


@section('body')

<div class="">
    <header class="header">
        <nav class="navbar navbar-static-top">
            <h1 class="pull-left" style="margin-left:50px">Vave</h1>
            <div class="pull-right" style="margin:30px 30px 0 0">
            {{ Auth::user()->full_name }}
            <a href="/logout" style="margin-left:20px">Logout</a>
            </div>
        </nav>
    </header>
    <nav class="container sidebar">
        sidebar
    </nav>
    <div class="content-wrapper">
        <div class="container">
            content
        </div>
    </div>
</div>

@stop
