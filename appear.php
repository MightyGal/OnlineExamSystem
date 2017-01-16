
<?php
session_start();
//require 'header.php';
//echo "Select your branch : ";
$examid = $_SESSION['examid'];
$_SESSION['count'] = 1;
$_SESSION['mark'] =0;
$_SESSION['c'] =1;
$_SESSION['m']= 0;
$bmark = array();
$_SESSION['bmark'] = $bmark;
$_SESSION['t'] = 0;
$_SESSION['x'] = 1;
$_SESSION['y'] = 2;
$_SESSION['z'] = 3;
//echo  "examid:".$examid.'<br>';
?>
<p style="padding : 10px 80px 60px 80px ;font : 20px bold courier">
               select your branch:
<form action = "connect2.php" method = "POST">
<div style="padding: 100px 100px 100px 400px">
<input type="radio" name ="cse">Computer Science and Engineering <br><br><br>
<input type="radio" name="ece">Electronics and communication Engineering<br><br><br>
 <input type ="radio" name ="eee">Electrical and Electronics Engineering<br><br><br>
<input type = "submit" name ="submit" value ="submit">

</div>
</form>
</p>