<?php
ob_start();
session_start();
mysql_connect('localhost','root','') or die ('cannot connect');
mysql_select_db('exam') or die('cannot connect to database');
if(isset($_POST['examid']) && isset($_POST['password']))
{
$examid = $_POST['examid'];
$password = $_POST['password'];
if(!empty($examid) && !empty($password))
{
$quer = " SELECT * FROM userdb WHERE examid = '$examid' AND password = '$password'";
$query_run = mysql_query($quer);
$q = mysql_num_rows($quer);
if($q == 1)
{echo " welcome";}
else
{echo " user not registered";}
}
}
else
{ echo "please login properly.";
}
?>
