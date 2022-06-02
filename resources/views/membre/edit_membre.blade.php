<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
        <link type="text/css" href="/front_assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/front_assets/images/icons/css/font-awesome.css" rel="stylesheet">
       
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="indexm">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/front_assets/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="indexm">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
                    <!-- /navbar-inner -->
        </div>
                    <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
            <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index_m"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="/showmessagem"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="/membre/allbookm"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="historym"><i class="menu-icon icon-tasks"></i>Previously Borrowed Books </a></li>
                                <li><a href="/membre/recommand"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                                <li><a href="currentm"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="/logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                    <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Details</h3>
                            </div>
                            <div class="module-body">
                                <form class="form-horizontal row-fluid" action="/membre/update_user/{{$user -> id}}" method="post">
                                @csrf
                                @method('put')
                                    <div class="control-group">
                                        <label class="control-label" for="Name"><b>Name:</b></label>
                                        <div class="controls">
                                            <input type="text" id="Name" name="name" value= "{{$user -> name}}" class="span8" required>
                                            @error('name')
                                                    {{$message}}
                                                @enderror
                                        </div>
                                    </div>

                                 


                                    <div class="control-group">
                                        <label class="control-label" for="EmailId"><b>Email Id:</b></label>
                                        <div class="controls">
                                            <input type="text" id="EmailId" name="email" value= "{{$user -> email}}" class="span8" required>
                                            @error('email')
                                                    {{$message}}
                                                @enderror
                                       
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="mobno"><b>Mobile Number:</b></label>
                                        <div class="controls">
                                            <input disabled type="text" id="mobno" name="mobno" value= "{{$user -> mobno}}" class="span8" required>
                                            @error('mobno')
                                                    {{$message}}
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="Password"><b>New Password:</b></label>
                                        <div class="controls">
                                            <input type="password" id="Password" name="password"  value= "{{$user -> password}}" class="span8" required>
                                            @error('password')
                                                    {{$message}}
                                                @enderror
                                        </div>
                                    </div>   

                                    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn-primary"><center>Update Details</center></button>
                                            </div>
                                    </div>                                                                     

                                </form>
                    		           
                        </div>
                        </div> 	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
        <!--/.container-->
        </div>
<div class="footer">
            <div class="container">
                
            </div>
        </div>
        
        <!--/.wrapper-->
            <script src="/front_assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="/front_assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="/front_assets/scripts/common.js" type="text/javascript"></script>
         
    </body>

    </html>
