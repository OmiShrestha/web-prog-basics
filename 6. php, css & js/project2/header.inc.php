<header>
        <div class="topHeaderRow">
            <div class="container">
                <div class="pull-right">
                    <ul class="list-inline">
                         <li>
                            <a href="#"><span class="glyphicon glyphicon-bell"></span> Notifications <span class="badge">10</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>

                         <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li>

                        <li><a href="#"><span class="glyphicon glyphicon-picture"></span> My Gallery</a></li>

                        <li><a href="upload.php"><span class="glyphicon glyphicon-upload"></span> Upload Image</a></li>

                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-globe"></span> Language <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Français</a></li>
                            <li><a href="#">Español</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end topHeaderRow -->


        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Share Your Travels</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Images</a></li>
                                <li><a href="#">Posts</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" action="search.php" method="GET" role="search">
                        <div class="form-group">
                            <input name="query" type="text" class="form-control" placeholder="Search images, countries, or users">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->


            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>