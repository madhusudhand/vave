<div class="row" ng-controller="ListController as listCtrl">
    <div class="col-md-3 no-margin">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Lists</h4>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <a href="" class="list-group-item"
                       ng-repeat="l in listCtrl.lists()"
                       ng-click="listCtrl.loadList(l.list_id)">[[l.list_name]]</a>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-md-9 no-margin">
        
        
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Madhusudhan</td>
                <td>madhusudhan.dollu@gmail.com</td>
                <td>Subscribed</td>
            </tr>
            <tr>
                <td>User</td>
                <td>user@vave.io</td>
                <td>Subscribed</td>
            </tr>
            <tr>
                <td>Another User</td>
                <td>anotheruser@vave.io</td>
                <td>Unsubscribed</td>
            </tr>
            <tr>
                <td>..</td>
                <td>..</td>
                <td>..</td>
            </tr>
            <tr>
                <td>..</td>
                <td>..</td>
                <td>..</td>
            </tr>
        </tbody>
    </table>
</div>
        
    </div>
</div>