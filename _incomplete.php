<?php
$updated = $_GET['id'];
$dbcon=mysql_connect("localhost","root","");
mysql_select_db("taskmanager", $dbcon);
$query=mysql_query("UPDATE tasks SET status='Pending' WHERE id = $updated");
header("location:completed.php");