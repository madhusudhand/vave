(function() {
    'use strict';
    
    angular
        .module('app', ['ngRoute','app.core'], 
                function($interpolateProvider) {
                    // changing the angular expression tags 
                    // as they conflict with Laravel
                    $interpolateProvider.startSymbol('[[');
                    $interpolateProvider.endSymbol(']]');
                })
    
        .config(['$httpProvider', '$routeProvider', 
                 function($httpProvider, $routeProvider) {
                // inject interceptors
                //$httpProvider.interceptors.push('httpInterceptor');
            
            
                // Route providers
                $routeProvider
                .when('/', {    // route for the home page
                    templateUrl : '/pages/dashboard',
                    controller  : 'MainController'
                })
                .when('/dashboard', { // route for the about page
                    templateUrl : '/pages/dashboard',
                    controller  : 'MainController'
                })
                .when('/reports', { // route for the contact page
                    templateUrl : '/pages/reports',
                    controller  : 'MainController'
                })
                .when('/campaigns', { // route for the contact page
                    templateUrl : '/pages/campaigns',
                    controller  : 'MainController'
                })
                .when('/lists', { // route for the contact page
                    templateUrl : '/pages/lists',
                    controller  : 'MainController'
                })
                .when('/templates', { // route for the contact page
                    templateUrl : '/pages/templates',
                    controller  : 'MainController'
                })
                .otherwise({
                    redirectTo: '/'
                });
                     
                
         }]);

})();