(function() {
    'use strict';
    
    angular.module('app')
    .controller('ListController', ['$filter', 'listService', function($filter, listService) {

        var current_list = 0;
        
        /* specification */
        this.lists = lists;
        this.list = list;
        this.loadList = loadList;
        
        
        /* implementations */
        function lists(){
            return listService.lists();
        }
        
        function list(){
            return $filter('filter')(listService.lists(), {list_id: current_list})[0];
        }
        
        function loadList(id){
            current_list = id;
        }
        
    }]);
    
    
})();