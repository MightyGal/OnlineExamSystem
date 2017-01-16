
<?php
session_start();
//require 'header.php';
//echo "Select your branch : ";
$examid = $_SESSION['examid'];
$_SESSION['count'] = 1;
$_SESSION['mark'] =0;
$_SESSION['c'] =1;
echo  "examid:".$examid.'<br>';
?>
<p style="padding : 10px 80px 60px 80px;font : 20px bold courier">
               select your branch:
<form action = "mw.php" method = "POST">
<div style="padding: 100px 100px 100px 400px">
cse <input type="radio" name ="cse"><br><br><br>
ece <input type="radio" name="ece"><br><br><br>
eee <input type ="radio" name ="eee"><br><br><br>
<input type = "submit" name ="submit" value ="submit">

</div>
</form>
</p>