<head>
<style>
ul
{
float:left;
width:100px;
padding:0px;
margin:0px;
list-style-type:none;
}
a
{
float:left;
width:100px;
text-decoration:none;
color:black;
background-color:white;
padding:1.9em 1.9em;
border-right:1px solid white;
}
a:hover {background-color:black;}
</style>
</head>
<body >

<?php
require 'header1.php';
ob_start();
session_start();
mysql_connect('localhost','root','') or die ('cannot connect');
mysql_select_db('exam') or die('cannot connect to database');
if(isset($_POST['username']) && isset($_POST['branch']) && isset($_POST['email']))
{
$username = $_POST['username'];
$branch = $_POST['branch'];
$email = $_POST['email'];
//$email = mysql_real_escape_string($_POST['email']);
	
if(!empty($username) && !empty($branch) && !empty($email) )
{
$que = " SELECT * FROM userdb WHERE emailid = '$email' ";
$result = mysql_query($que);
if(mysql_num_rows($result) == 1)
{
echo " user already exist!. ";
}
else
{
$alphabet = 'abcdefghijklmnoprqstuvwxyz0987654321';
$pass = array();
$alphalength = strlen($alphabet) - 1;
for($i =0; $i<8;$i++)
{
$n = rand(0,$alphalength);
$pass[] = $alphabet[$n]; 
}
$password = implode($pass);

 $quer = " INSERT INTO userdb VALUES('$username','$branch','$email','','$password') ";
if(mysql_query($quer))
{ echo " you have successfully registered.<br>"; }
$que1 = " SELECT * FROM userdb WHERE username ='$username' ";
$query_run1 = mysql_query($que1);

if( $query_fetch = mysql_fetch_assoc($query_run1) );
{
$row = $query_fetch['examid']; 
$_SESSIONS['examid'] = $row;
echo 'Your examination id is:'.$row;
echo '<br/>';
echo 'Your password is:'.$password;
echo '<br/>';
echo 'Examination date:18-april-2013 <br/>';
echo 'Examination time: 3:00pm';
}
//}
}
}
}
else
{echo " Please login properly.";}

?>

<ul>
<li style ="padding: 10px 20px 20px 730px"><a href="main.php"><img src="button-images/home.png"></a></li>
<li style ="padding: 10px 20px 20px 730px"><a href="instruction1.php"><img src="button-images/instruction.png"></a></li>
<li style ="padding: 10px 20px 20px 730px"><a href="contact.php"><img src="button-images/contact.png"></a></li>

</ul>

</p>
</body>

