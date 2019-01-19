<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-list-alt"></span> TO-DO</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home nav-pills"></span> Home</a></li>
                <li><a href="newtask.php"><span class="glyphicon glyphicon-certificate"></span> Create</a></li>
                <li><a href="ongoing.php"><span class="glyphicon glyphicon-hourglass"></span> Ongoing</a></li>
                <li><a href="completed.php"><span class="glyphicon glyphicon-check"></span> Completed</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> <?Php echo $_SESSION['names'] ?></a></li>
                <li><a href="_logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
