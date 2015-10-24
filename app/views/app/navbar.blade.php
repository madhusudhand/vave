<div id="top-nav" class="navbar navbar-default navbar-fixed-top"
     ng-controller="NavController as navCtrl">
    
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-brand">Vave</h1>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" 
                       data-toggle="dropdown" href="">
                        [[ navCtrl.project().project_name ]]
                        <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li ng-repeat="p in navCtrl.projects()">
                            <a href="" ng-click="navCtrl.switchProject(p.project_id)">
                                [[ p.project_name ]]
                            </a>
                        </li>
                    </ul>
                </li>
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="">
                        {{ Auth::user()->full_name }}
                        <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="/logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
</div>