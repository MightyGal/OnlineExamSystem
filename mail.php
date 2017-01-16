<?php
session_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","localhost");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'cecchn2013@gmail.com');

$que = "SELECT * FROM result WHERE res = 'pass'";
$que_run = mysql_query($que);
$fetch = mysql_fetch_assoc($que_run);
$to = $fetch['emailid'];
$subject = 'Result';
$body = 'This is to inform that you have passed in the entrance test conducted by COLLEGE OF ENGINEERING ,CHENGANUR. You have to report at the college on 20th april by 9.00am with all necessary documents.';
$header = 'From :cecchn2013@gmail.com';
if (mail($to, $subject, $body , $header))
 echo 'mail sent';
else
 echo 'mail cant be delivered';
?>