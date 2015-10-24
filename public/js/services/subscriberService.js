(function() {
    'use strict';
    
    angular.module('app')
    .factory('subscriberService', ['$rootScope', '$http', function($rootScope, $http){
        
        /* data members */
        var subscribers = [];
        
        /* watch */
        
        /* init */
        
        /* service definition */
        return {
            // data bindings
            subscribers: function(){ return subscribers; },
            
            // function calls
            loadSubscribers: loadSubscribers,
            addSubscriber: addSubscriber,
        };
    
    
        /* implementations */
        function loadSubscribers(list){
            var url = 'api/list/'+list+'/subscribers';

            $http.get(url, {})
            .then(function(r){
                subscribers = r.data.subscribers;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
        function addSubscriber(list){
            
        }
        
        
    }]);
    
    
})();