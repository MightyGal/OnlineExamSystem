<?php
$email = "mily@oppa.com";

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  echo "E-mail is not valid";
  }
else
  {
   $record = 'MX';
  list($user, $domain) = split('@', $email);
  if(!checkdnsrr($domain, $record))
  echo "doenot exist";
  else
   echo "email doesnot exist";
   }
?>