<?php
$deleted = $_GET['id'];
$dbcon=mysql_connect("localhost","root","");
mysql_select_db("taskmanager", $dbcon);
$query=mysql_query("delete from tasks WHERE id = $deleted");
header("location:completed.php");