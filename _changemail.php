<?php
$updated = $_POST['id'];
$changed = $_POST['changed'];
$dbcon=mysql_connect("localhost","root","");
mysql_select_db("taskmanager", $dbcon);
$query=mysql_query("UPDATE users SET email='$changed' WHERE id = $updated");
header("location:account.php");