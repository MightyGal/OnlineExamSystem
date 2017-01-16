<?php
ob_start();
session_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
if(isset($_POST['examid'])&& isset( $_POST['password']))

    $examid = $_POST['examid'];
	$pwd =$_POST['password'];
$_SESSION['examid'] = $examid;
$_SESSION['password'] = $pwd;
//$p=md5($pwd);
//echo $examid . $pwd;
if(!empty($examid) && !empty($pwd))
{

$query = "SELECT * FROM userdb WHERE examid = '$examid' AND password = '$pwd' ";
$query_run = mysql_query($query) or die("cannot");
if($query_run)
{
$query_num = mysql_num_rows($query_run);
if($query_num == 1)
{  /* $fetch =  mysql_fetch_assoc($query_run);
    $row = $fetch['username'];
    echo"welcome!  ".$row;*/
	header("location:disp.php");
}
else
echo"invalid user!";
}
}

else
echo "please login properly.";


?>