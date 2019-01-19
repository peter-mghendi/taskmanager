<?php
extract($_POST);
include 'connect.php';
$sql ="select * from users where email='$email' and password='$password'";
// echo "$sql";
$result=mysqli_query($db, $sql) or die( mysqli_error($db) );
$count= mysqli_num_rows ($result);

if ($count>=1)
{
    //success
    $row=mysqli_fetch_row ($result);
    $names = $row[1];
    //sessions
    session_start();
    $_SESSION['names'] = $names;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("location:index.php");
}
else
{
    echo "Wrong Username/Password combination";
}