(function() {
    'use strict';
    
    angular
        .module('app.core', [])
    
    .factory('httpInterceptor', ['$q', function($q){
        return {
//             'request': function (config) {
//                 var prefix = '/api/';
//                 config.url = prefix + config.url;
//                 return config || $q.when(config);
//             },
            
//            response: function(res) {
//                /* This is the code that transforms the response. `res.data` is the
//                 * response body */
//                res.data = { data: data };
//                res.data.meta = { status: res.status };
//                return res;
//              }

         };
    }])
    
    

    
})();
