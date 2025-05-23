<header>
    <div class="topHeaderRow">
        <div class="container">
            <div class="pull-right">
                <ul class="list-inline">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li>
                </ul>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Share Your Travels</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="chapter11-project3.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     Browse <span class="caret"></span>
                    </a>
                     <ul class="dropdown-menu">
                        <li><a href="countries.php">Countries</a></li>
                        <li><a href="images.php">Images</a></li>
                        <li><a href="posts.php">Posts</a></li>
                    </ul>
                </li>

                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </nav>
</header>
