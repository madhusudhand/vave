(function() {
    'use strict';
    
    angular.module('app')
    .controller('SubscriberController', ['subscriberService', function(subscriberService) {
        
        /* specification */
        this.subscribers = subscribers;
        
        
        /* implementations */
        function subscribers(){
            return subscriberService.subscribers();
        }
        
    }]);
    
    
})();