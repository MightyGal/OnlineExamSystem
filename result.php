
<?php
session_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");

$mark = $_SESSION['mark'];
//echo "your score is:". $mark;
echo "Results will be published on 25-dec -2013";

$examid = $_SESSION['examid'];
$pass = $_SESSION['password'];
$que = "SELECT * FROM userdb WHERE examid = '$examid'";
$query_run = mysql_query($que);
$fetch = mysql_fetch_assoc($query_run);
$emailid = $fetch['emailid'];

if($mark >5)
$res = "pass";
else
$res = "fail";
$que1 ="INSERT INTO result VALUES('$examid','$pass','$emailid','$mark','$res')";
mysql_query($que1);
?>
</body>