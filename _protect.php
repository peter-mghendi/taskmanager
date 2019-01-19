<?php
//protect
session_start();
if (!  isset ($_SESSION['email']))
{
    header("location:login.php");
}