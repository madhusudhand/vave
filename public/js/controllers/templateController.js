(function() {
    'use strict';
    
    angular.module('app')
    .controller('TemplateController', ['$filter', 'templateService', function($filter, templateService) {

        var current_tpl = 0;
        
        /* specification */
        this.templates = templates;
        this.template = template;
        this.loadTemplate = loadTemplate;
        
        
        /* implementations */
        function templates(){
            return templateService.templates();
        }
        
        function template(){
            return $filter('filter')(templateService.templates(), {tpl_id: current_tpl})[0];
        }
        
        function loadTemplate(id){
            current_tpl = id;
        }
        
    }]);
    
    
})();