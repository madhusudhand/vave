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
    
    {{ HTML::script('js/controllers/navController.js') }}
    {{ HTML::script('js/controllers/sesDashboardController.js') }}
    {{ HTML::script('js/controllers/templateController.js') }}
    {{ HTML::script('js/controllers/listController.js') }}
    {{ HTML::script('js/controllers/subscriberController.js') }}
    {{ HTML::script('js/controllers/campaignController.js') }}
    
    {{ HTML::script('js/services/globalService.js') }}
    {{ HTML::script('js/services/sesStatsService.js') }}
    {{ HTML::script('js/services/projectService.js') }}
    {{ HTML::script('js/services/templateService.js') }}
    {{ HTML::script('js/services/listService.js') }}
    {{ HTML::script('js/services/subscriberService.js') }}
    {{ HTML::script('js/services/campaignService.js') }}
    
    
    {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}
    
    <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    
</body>
</html>