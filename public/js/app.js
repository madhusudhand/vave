(function() {
    'use strict';
    
    angular
        .module('app', ['app.core'], 
                function($interpolateProvider) {
                    // changing the angular expression tags 
                    // as they conflict with Laravel
                    $interpolateProvider.startSymbol('[[');
                    $interpolateProvider.endSymbol(']]');
                })
    
        .config(['$httpProvider', function($httpProvider) {
             $httpProvider.interceptors.push('httpInterceptor');
         }]);

})();