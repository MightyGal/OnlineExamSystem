<?php
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

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  echo "E-mail is not valid";
  }
else
  {
   $record = 'MX';
  list($user, $domain) = split('@', $email);
  if(!checkdnsrr($domain, $record))
   echo "email doenot exist";
  else
   {
$quer = " INSERT INTO userdb VALUES('$username','$branch','$email','','$password') ";
if(mysql_query($quer))
{ echo " you have successfully registered."; }
$que1 = " SELECT * FROM userdb WHERE username ='$username' ";
$query_run1 = mysql_query($que1);

if( $query_fetch = mysql_fetch_assoc($query_run1) );
{
$row = $query_fetch['examid']; 
echo " \nuser exam id is : ".$row;
echo '<br>';
echo "\n   user password is : ".$password;
echo " Examination date is : 25/02/13 <br>";
echo "Examination time is : 10:00 am <br>";}
}
}
}
}
else
{echo " Please login properly.";}
?>