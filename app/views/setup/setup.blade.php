@extends('setup.layout')

@section('title')
Vave Setup
@stop


@section('body')

<h1 class="text-center">Welcome to Vave Setup</h1>

<div style="width:400px;margin:0 auto;">
    {{ Form::open(['route'=>'home']) }}
    {{ Form::label('Full Name') }}
    {{ Form::text('name','',['class'=>'form-control']) }}
    {{ Form::label('Email') }}
    {{ Form::email('email','',['class'=>'form-control']) }}
    {{ Form::label('Password') }}
    {{ Form::password('password',['class'=>'form-control']) }}
    {{ Form::submit('Setup Vave',['class'=>'btn btn-primary']) }}
    {{ Form::close() }}
</div>

@stop
