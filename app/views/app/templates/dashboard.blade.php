<div ng-controller="SesDashboardController as sesCtrl">
    
    
    <ul class="list-inline pull-right">
        <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">1. Is there a way..</a></li>
                <li><a href="#">2. Hello, admin. I would..</a></li>
                <li><a href="#"><strong>All messages</strong></a></li>
            </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
        <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
    </ul>

    <strong><i class="glyphicon glyphicon-dashboard"></i> Dashboard</strong>
    <hr>

            
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>AWS SES statistics</h4>
                </div>
                <div class="panel-body">
                    <p> Max24HourSend: [[sesCtrl.statistics().Max24HourSend]]</p>
                    <p> SentLast24Hours: [[sesCtrl.statistics().SentLast24Hours]]</p>
                    <p> MaxSendRate: [[sesCtrl.statistics().MaxSendRate]]</p>
                </div>
            </div>
        
        
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Notices</h4></div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        This is a dismissable alert.. just sayin'.
                    </div>
                    <p>This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.</p>
                    <p>Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.</p>
                </div>
            </div>
        </div>
        
    </div>

<!--

    <div class="row">
        
        <div class="col-md-6">
            
        
            <div class="panel">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                    <li><a href="#messages" data-toggle="tab">Messages</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active well" id="profile">
                        <h4><i class="glyphicon glyphicon-user"></i></h4> Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                    </div>
                    <div class="tab-pane well" id="messages">
                        <h4><i class="glyphicon glyphicon-comment"></i></h4> Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augu.</p>
                    </div>
                    <div class="tab-pane well" id="settings">
                        <h4><i class="glyphicon glyphicon-cog"></i></h4> Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        <p>Quisque mauris augue, molestie.</p>
                    </div>
                </div>

            </div>
            

            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>New Requests</h4></div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                        <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                        <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>AWS SES statistics</h4>
                </div>
                <div class="panel-body">
                    <p> Max24HourSend: [[sesCtrl.statistics().Max24HourSend]]</p>
                    <p> SentLast24Hours: [[sesCtrl.statistics().SentLast24Hours]]</p>
                    <p> MaxSendRate: [[sesCtrl.statistics().MaxSendRate]]</p>
                </div>
            </div>

            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="glyphicon glyphicon-wrench pull-right"></i>
                        <h4>Post Request</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <div class="control-group">
                            <label>Name</label>
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Message</label>
                            <div class="controls">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Category</label>
                            <div class="controls">
                                <select class="form-control">
                                    <option>options</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label></label>
                            <div class="controls">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            

        </div>
        

    </div>
    
-->

    

</div>