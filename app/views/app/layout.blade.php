<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Vave | Send email via Amazon SES</title>
<!--    <link rel="shortcut icon" href="{{ URL::asset('img/fav.png') }}"/>-->
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
    {{ HTML::style('css/style.css') }}
    
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js') }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.js') }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}
</head>
    
<body>
    
    @yield('body')
    
    
    {{ HTML::script('js/app.core.js') }}
    {{ HTML::script('js/app.js') }}
    
    {{ HTML::script('js/controllers/nav.js') }}
    {{ HTML::script('js/controllers/ses.dashboard.js') }}
    {{ HTML::script('js/controllers/template.js') }}
    
    {{ HTML::script('js/services/global.js') }}
    {{ HTML::script('js/services/ses.stats.js') }}
    {{ HTML::script('js/services/project.js') }}
    {{ HTML::script('js/services/template.js') }}
    
    
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}
    
    <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    
</body>
</html>