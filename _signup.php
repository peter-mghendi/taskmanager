<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error!</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/public_custom.css">
<body>
<?php
extract($_POST);
include 'connect.php';
// $db = mysqli_connect("localhost", "root", "", "taskmanager")or die(mysqli_error($db));
$sql = "select * from users where email='$email'";
$result = mysqli_query($db, $sql);

$count = mysqli_num_rows($result);

/*$sql2 ="select * from users where email='$email'";

$result2= mysqli_query($db, $sql2) or die( mysqli_error($db) );

$count2 =mysqli_num_rows($result2);*/

if($count == 0)
{
    //success
    $sql3="INSERT INTO users VALUES (null,'$names','$email', '$password')";
    mysqli_query($db, $sql3);
    header("location:login.php");
}
else
{
	echo "<br>";
	echo "<center><h2><b>Account already exists!</b></h2></center>";
	echo "<hr>";
    echo "<center><p>ERROR: The email address $email already has an account linked to it.</p></center>";
    echo "<br>";
    echo "<center><p>Click <a href='login.php'>here</a> to login or <a href='signup.php'>here</a> to sign up with a different email address.</p></center>";
}
?>
</body>
</html>






