(function() {
    'use strict';
    
    angular.module('app')
    .controller('SesDashboardController', ['sesStatsService', function(sesStatsService) {

        /* specification */
        this.statistics = statistics;
        
        
        
        /* implementations */
        function statistics(){
            return sesStatsService.statistics();
        }
        
        
        
    }]);
    
    
})();