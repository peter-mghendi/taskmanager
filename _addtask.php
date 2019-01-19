<?php
session_start();
// $names = $_SESSION['names'];
// insert new tasks into the db
$date_entered = date('Y-m-d');
$status = "Pending";
$users = "{$_SESSION['names']}";
extract ($_POST);
include 'connect.php';
// echo $users;
$sql = "INSERT INTO tasks VALUES(null,'$names', '$description', '$date_entered', '$date_due', '$status', '$users')";
mysqli_query($db, $sql) or die(mysqli_error($db));
header("location:ongoing.php");

