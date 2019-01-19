<?php include '_protect.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Task</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/custom.css">
</head>
<body>
<?php include 'nav.php' ?>
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <h2 class="text-center"><b>Create a New Task</b></h2>
        <form role="form" method="post" action="_addtask.php">

            <div class="form-group">
                <label for="names">Task</label>
                <input type="text" class="form-control" name="names" placeholder="Input the Task" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="10" rows="4" class="form-control" placeholder="Enter a description here(Optional)"></textarea>
            </div>

            <div class="form-group">
                <label for="date_due">Date Due</label>
                <input type="date" class="form-control" name="date_due" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block" name="submit">Create Task</button>

        </form>
    </div>
</div>
<script   src="boot/js/jquery.min.js"></script>
<script   src="boot/js/bootstrap.js"></script>
</body>
</html>