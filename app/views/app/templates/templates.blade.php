<div class="row" ng-controller="TemplateController as tplCtrl">
    <div class="col-md-3 no-margin">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Templates</h4>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="" class="list-group-item"
                       ng-repeat="t in tplCtrl.templates()"
                       ng-click="tplCtrl.loadTemplate(t.tpl_id)">[[t.template_name]]</a>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-md-9">
        
        <textarea class="form-control" style="min-height:300px">[[tplCtrl.template().template_content]]</textarea>
        
    </div>
</div>