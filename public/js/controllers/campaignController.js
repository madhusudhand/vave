(function() {
    'use strict';
    
    angular.module('app')
    .controller('CampaignController', ['campaignService', function(campaignService) {
        
        /* specification */
        this.campaigns = campaigns;
        
        
        /* implementations */
        function campaigns(){
            return campaignService.campaigns();
        }
        
    }]);
    
    
})();