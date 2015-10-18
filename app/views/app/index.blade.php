@extends('app.layout')


@section('body')


@include('app.navbar')
    
<div class="container-fluid" style="margin-top:70px;">
    <div class="row">
        <div class="col-sm-2">
            
            @include('app.sidebar')
            
        </div>
            
        <div class="col-sm-10">
            
            @include('app.templates.dashboard')
            @include('app.templates.campaigns')
            @include('app.templates.lists')
            @include('app.templates.templates')
            @include('app.templates.reports')

            @include('app.modal-dialog')
            
        </div>
                
    </div>
</div>

@stop


