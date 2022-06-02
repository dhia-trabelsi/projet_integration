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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="/index">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="front_assets/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/index">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout">Logout</a></li>
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
                                <li class="active"><a href="/index"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="/showmessage"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="/showstudent"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="/allbook"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="/addbook"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="/requests"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="/recommendations"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="/current"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
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
                                <h3>Update Book Details</h3>
                            </div>
                            <div class="module-body">
                                <br >
                                    <form class="form-horizontal row-fluid" action="/update_book/{{$book -> id}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title">Book Title:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Title" name="titre" value= "{{$book -> titre}}" class="span8" required>
                                                @error('titre')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Publisher">Publisher:</label></b>
                                            <div class="controls">
                                                <select name="publishers_id">
                                                    @foreach($publishers as $pub)
                                                        <option {{$pub -> id == $book -> publishers_id ? "selected" : ""}} value="{{$pub -> id}}">{{$pub -> nom}}</option>
                                                    @endforeach
                                                </select>
                                                @error('publishers_id')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="Author"><b>Author</b></label>
                                            <div class="controls">
                                                <select name="authors_id">
                                                    @foreach($authors as $aut)
                                                        <option {{$aut -> id == $book -> authors_id ? "selected" : ""}} value="{{$aut -> id}}">{{$aut -> author}}</option>
                                                    @endforeach
                                                </select>
                                                @error('authors_id')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Year">Year:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Year" name="year" value= "{{$book -> year}}" class="span8" required>
                                            @error('year')
                                                {{$message}}
                                            @enderror('year')
                                        </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Availability">Availability:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Availability" name="Availability" value= "{{$book -> Availability}}" class="span8" required>
                                                @error('Availability')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Update Details</button>
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
        <script src="front_assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
            <script src="front_assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="front_assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="front_assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
            <script src="front_assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
            <script src="front_assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
            <script src="front_assets/scripts/common.js" type="text/javascript"></script>
         
    </body>

    </html>