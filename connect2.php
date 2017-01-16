<?php
session_start();

mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
$x =$_POST['cse'];
$y = $_POST['ece'];
$z = $_POST['eee'];
$_SESSION['X']= $x;
$_SESSION['Y'] = $y;
$_SESSION['Z'] = $z;
$_SESSION['submit'] = $_POST['submit'];
header("location:qtest.php");
?>