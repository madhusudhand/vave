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
    
        .config(['$routeProvider', function($routeProvider) {
            
                // Route providers
                $routeProvider
                .when('/', {    // route for the home page
                    templateUrl : '/pages/dashboard',
                    controller  : 'NavController'
                })
                .when('#', {    // route for the home page
                    templateUrl : '/pages/dashboard',
                    controller  : 'NavController'
                })
                .when('/dashboard', { // route for the about page
                    templateUrl : '/pages/dashboard',
                    controller  : 'NavController'
                })
                .when('/reports', { // route for the contact page
                    templateUrl : '/pages/reports',
                    controller  : 'NavController'
                })
                .when('/campaigns', { // route for the contact page
                    templateUrl : '/pages/campaigns',
                    controller  : 'NavController'
                })
                .when('/lists', { // route for the contact page
                    templateUrl : '/pages/lists',
                    controller  : 'NavController'
                })
                .when('/templates', { // route for the contact page
                    templateUrl : '/pages/templates',
                    controller  : 'NavController'
                })
                .otherwise({
                    redirectTo: '/'
                });
                     
                
         }]);

})();