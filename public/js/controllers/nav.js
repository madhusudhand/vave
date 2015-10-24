(function() {
    'use strict';
    
    angular.module('app')
    .controller('NavController', ['$filter','globalService', 'projectService', function($filter, globalService, projectService) {

        /* specification */
        this.projects = projects;
        this.project = project;
        this.switchProject = switchProject;
        
        
        
        
        /* implementations */
        function projects(){
            return projectService.projects();
        }
        function project(){
            return $filter('filter')(projectService.projects(), {project_id: globalService.globals().project}, true)[0];
        }
        function switchProject(id){
            globalService.globals().project = id;
        }
        
        
    }]);
    
    
})();