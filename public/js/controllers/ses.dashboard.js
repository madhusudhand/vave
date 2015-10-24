(function() {
    'use strict';
    
    angular.module('app')
    .controller('SesDashboardController', ['sesStatsService', function(sesStatsService) {

        /* specification */
        this.stats = stats;
        
        
        
        /* implementations */
        function stats(){
            return {};
        }
        
        
        
    }]);
    
    
})();