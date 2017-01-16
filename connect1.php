<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('neethu') or die("cannot connect to database");
echo "mily";
if (isset($_GET['pass']) && isset($_GET['email']))

$email = $_GET['email'];
$pass = $_GET['pass'];
$quer = " INSERT INTO nk VALUES('$email','$pass') ";
if(mysql_query($quer))
echo "succesful";



?>