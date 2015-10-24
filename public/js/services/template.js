(function() {
    'use strict';
    
    angular.module('app')
    .factory('templateService', ['$rootScope', '$http', 'globalService', function($rootScope, $http, globalService){
        
        /* data members */
        var templates = [];
        
        /* watch */
        $rootScope.$watch(function(){
            return globalService.globals().project;
        },function(newVal, oldVal, scope){
            if(newVal !== oldVal)
                getTemplates(newVal);
        });
        
        
        /* init */
        getTemplates(globalService.globals().project);
        
        /* service definition */
        return {
            // data bindings
            templates: function(){ return templates; },
            
            // function calls
            getTemplates: getTemplates,
            createTemplate: createTemplate,
            updateTemplate: updateTemplate,
            deleteTemplate: deleteTemplate,
        };
    
    
        /* implementations */
        function getTemplates(){
            var url = 'api/project/'+globalService.globals().project+'/templates';

            $http.get(url, {})
            .then(function(r){
                templates = r.data.templates;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
        function createTemplate(project){
            
        }
        
        function updateTemplate(project, template){
            
        }
        
        function deleteTemplate(project, template){
            
        }
        
    }]);
    
    
})();