(function() {
    'use strict';
    
    angular.module('app')
    .factory('listService', ['$rootScope', '$http', 'globalService', function($rootScope, $http, globalService){
        
        /* data members */
        var lists = [];
        
        /* watch */
        $rootScope.$watch(function(){
            return globalService.globals().project;
        },function(newVal, oldVal, scope){
            if(newVal !== oldVal)
                getLists(newVal);
        });
        
        
        /* init */
        getLists(globalService.globals().project);
        
        /* service definition */
        return {
            // data bindings
            lists: function(){ return lists; },
            
            // function calls
            getLists: getLists,
            createList: createList,
            updateList: updateList,
            deleteList: deleteList,
        };
    
    
        /* implementations */
        function getLists(){
            var url = 'api/project/'+globalService.globals().project+'/lists';

            $http.get(url, {})
            .then(function(r){
                lists = r.data.lists;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
        function createList(project){
            
        }
        
        function updateList(project, list){
            
        }
        
        function deleteList(project, list){
            
        }
        
    }]);
    
    
})();