<?php
ob_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('newdb') or die("cannot connect to database");

    $alphabet = "abcdefghijklmnopqrstuwxyz0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $password = implode($pass); //turn the array into a string
  echo " your password is:".$password;
  $que = "INSERT INTO student VALUES('$username' ,'$branch','$email','$password','')";
 if( mysql_query($que))
 {
 echo "ok.";
 }
  

?>