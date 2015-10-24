(function() {
    'use strict';
    
    angular.module('app')
    .factory('projectService', ['$http', function($http){
        
        /* data members */
        var projects = [];
        
        /* watch */
        
        /* init */
        getProjects();
        
        /* service definition */
        return {
            // data bindings
            projects: function(){ return projects; },
            
            // function calls
            getProjects: getProjects,
            createProject: createProject,
            updateProject: updateProject,
            deleteProject: deleteProject,
        };
    
    
        /* implementations */
        function getProjects(){
            var url = 'api/projects';

            $http.get(url, {})
            .then(function(r){
                projects = r.data.projects;
            }).catch(function(ex){
                //console.log(ex);
            });
        }
        
        function createProject(project){
            var url = 'api/project';

            $http.post(url, {project_name:project, project_key:short})
            .then(function(res){
                envService.refreshProjects();
                envService.globals().project = res.data.project.project_id;
            });
        }
        
        function updateProject(project){
            
        }
        
        function deleteProject(project){
            
        }
        
    }]);
    
    
})();