@extends('app.layout')


@section('body')

<div ng-app="app">

    @include('app.navbar')

    <div class="container-fluid" style="margin-top:70px;">
        <div class="row">
            <div class="col-sm-2">

                @include('app.sidebar')

            </div>

            <div class="col-sm-10">

                <div ng-view></div>

            </div>

        </div>
    </div>

</div>
@stop


