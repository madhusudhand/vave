<div class="row" ng-controller="CampaignController as campCtrl">
    <div class="col-md-12">
        <ul class="list-group">
            <li class="list-group-item" ng-repeat="c in campCtrl.campaigns()">
                <i class="glyphicon glyphicon-flash"></i>
                <small>(3 mins ago)</small> 
                [[ c.camp_name ]]
                [[ c.camp_desc ]]
                [[ c.status ]]
            </li>
        </ul>
    </div>
</div>