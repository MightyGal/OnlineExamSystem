<?php
ob_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('newdb') or die("cannot connect to database");

if(isset($_POST['username']) && isset($_POST['branch']) && isset($_POST['email']))
$username = $_POST['username'];
$branch = $_POST['branch'];
$email = $_POST['email'];
if(!empty($username) && !empty($branch) && !empty($email) )
 {  $query = "SELECT * FROM student WHERE email_id='$email' ";
   $query_run = mysql_query($query);
   if(mysql_num_rows($query_run)==1)
    {echo "username exist.please try again";
     }
   else
    {    $alphabet = "abcdefghijklmnopqrstuwxyz0123456789";
    $pass = array(); //remember to declare $pass as an array
 
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $password = implode($pass); //turn the array into a string
 
	 
    $que = " INSERT INTO student VALUES ('$username','$branch','$email','','$password')";
    $que_num = mysql_query($que);
    if($que_num )
     {$que1 = "SELECT exam_id FROM student WHERE username='$username'";
      $que_run1 = mysql_query($que1);
      if( $mysql_row1 = mysql_fetch_assoc($que_run1) )
     {
      $row = $mysql_row1['exam_id'];
      echo ' you have successfully registered and your exam id is:'.$row;
    
   echo "   your password is:".$password;

	 require 'login.php' ;
	}
	 }
    else
     { echo 'could not register.please try again';}
	}

 }
 
 else
 echo " please fill in all fields";
	?>