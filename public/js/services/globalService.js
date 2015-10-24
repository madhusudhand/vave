(function() {
    'use strict';
    
    angular.module('app')
    .factory('globalService', ['$http', function($http){
        
        /* data members */
        var globals = {project: 0};
        
        /* watch */
        
        /* init */
        init();
        
        /* service definition */
        return {
            globals: function(){ return globals; },
        };
    
    
        /* implementations */
        function init(){
            
        }
        
    }]);
    
    
})();