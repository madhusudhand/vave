(function() {
    'use strict';
    
    angular.module('app')
    .factory('sesStatsService', ['$http', '$rootScope', 'globalService', function($http, $rootScope, globalService){
        
        /* data members */
        var statistics = {};
        
        /* watch */
        $rootScope.$watch(function(){ 
            return globalService.globals().project;
        }, function(newValue, oldValue, scope) {
            if(newValue !== oldValue)
                getStatistics(newValue);
        });
        
        /* init */
        getStatistics(globalService.globals().project);
        
        /* service definition */
        return {
            statistics: function(){ return statistics; },
        };
        
        /* implementations */
        function getStatistics(id){
            var url = 'api/ses/statistics/'+id;

            $http.get(url, {})
            .then(function(r){
                statistics = r.data.statistics;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
    }]);
    
    
})();