<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>@yield('title')</title>
<!--    <link rel="shortcut icon" href="{{ URL::asset('img/fav.png') }}"/>-->
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
<!--    {{ HTML::style('css/style.css') }}-->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}
</head>
    
<body>
    
    @section('body')
        ...
    @show
    
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
    
    <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    
</body>
</html>