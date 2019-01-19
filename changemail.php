<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Email</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/custom.css">
</head>
<body>
<?php include 'private_nav.php'?>
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <h2><center>Change Email</center></h2>;
        <hr>
        <center>
            <h5>What would you like to change it to?</h5>
            <form action='_changemail.php' method='post'>
                <label for='changed'>Change To:</label><br>
                <input type='email' name='changed' class="form-control" autocomplete='off'><br>
                <input type='text' name='id' value='<?php echo "{$_GET['id']}"?>' autocomplete='off' hidden>
                <button type='submit' class="btn btn-primary btn-block">Change</button><br>
            </form>
        </center>
    </div>
</div>

</body>
</html>