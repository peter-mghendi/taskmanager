<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/public_custom.css">
</head>
<body>
<?php include 'public_nav.php' ?>
    <div class="container">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <h2 class="text-center"><b>Sign Up Here</b></h2>
            <form role="form" method="post" action="_signup.php">

                <div class="form-group">
                    <label for="names">Names</label>
                    <input type="text" class="form-control" name="names" placeholder="Your Name" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Create a Password" autocomplete="off" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="submit">Sign Up</button>
                <a href="login.php" class="btn btn-info btn-block">Have an account? Log In</a>
            </form>
        </div>
    </div>
<script   src="boot/js/jquery.min.js"></script>
<script   src="boot/js/bootstrap.js"></script>
</body>
</html>