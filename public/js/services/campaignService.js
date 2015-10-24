(function() {
    'use strict';
    
    angular.module('app')
    .factory('campaignService', ['$rootScope', '$http', 'globalService', function($rootScope, $http, globalService){
        
        /* data members */
        var campaigns = [];
        
        /* watch */
        $rootScope.$watch(function(){
            return globalService.globals().project;
        }, function(newVal, oldVal, scope){
            if(newVal !== oldVal)
                loadCampaigns(newVal);
        });
        
        /* init */
        loadCampaigns(globalService.globals().project);
        
        /* service definition */
        return {
            // data bindings
            campaigns: function(){ return campaigns; },
            
            // function calls
            loadCampaigns: loadCampaigns,
            createCampaign: createCampaign,
        };
    
    
        /* implementations */
        function loadCampaigns(project){
            var url = 'api/project/'+project+'/campaigns';

            $http.get(url, {})
            .then(function(r){
                campaigns = r.data.campaigns;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
        function createCampaign(project){
            
        }
        
        
    }]);
    
    
})();