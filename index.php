<?php include '_protect.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/custom.css">
</head>
<body>
<?php include 'nav.php' ?>
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        <marquee behavior="scroll" direction="right" delay="1"><h2><b>Welcome!</b></h2></marquee>
    </div>
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <h3 class="text-center"><b><i>Welcome, <?Php echo $_SESSION['names'] ?>.</i></b></h3>
        <hr>
        <h4 class="text-center">
            Welcome to your to-do list.<br> Easily add, view and delete tasks with our simplified tools.<br> To-Do List is free and always will be.
        </h4>
        <hr>
    </div>
    <div class="text-center col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
        <h3 class="text-center"><b><i>What would you like to do?</i></b></h3>
        <br>
        <a href="newtask.php" class="btn btn-info btn-block">Add a New Task</a>
        <a href="ongoing.php" class="btn btn-info btn-block">View Ongoing Tasks</a>
        <a href="completed.php" class="btn btn-info btn-block">View Completed Tasks</a>
    </div>
</div>
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.js"></script>
</body>
</html>