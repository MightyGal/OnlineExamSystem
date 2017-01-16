<body style = "padding:100px 300px 300px 200px ;font:20px times new roman">

<?php
session_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
$time = time();
$time1 = date('d/m/yh:i:s',$time+19800);
if($time1[8] == 0 && $time1[9] == 3)
{
if($time1[11] == 1 && $time1[12] == 8 )
{ 
echo 'You have only 5 minutes left';
				   
}
if($time1[11] == 2 && $time1[12] == 0)
{
header("location:result.php");
}
}
$cs = $_SESSION['cs'];
if($cs == 1)
{
function test($pa)
{ 
$que = " SELECT * FROM csdb WHERE qno = $pa";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br>';
echo '1)'.$q['ans1'].'<br/><br/>';
echo '2)'.$q['ans2'].'<br/><br/>';
echo '3)'.$q['ans3'].'<br/><br/>';
echo '4)'.$q['ans4'].'<br>';
 }
 
 function calculate($pa)
 {     
	 

       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
      
	   
	   $q1 = "SELECT cans FROM csdb WHERE qno = $pa";
      $q1_run = mysql_query($q1) or die("get out");;
      $f = mysql_fetch_assoc($q1_run);
      if($ans == $f['cans'])
      { $mark = $mark + 1.00;
	  $_SESSION['mark'] = $mark;
	  }
      else
      {$mark = $mark - 0.25;
	   $_SESSION['mark'] = $mark;
	  }
       echo 'mark:'.$mark.'<br>';
   
 }
$barray = $_SESSION['bmark'];

if(isset($_POST['ans']) && isset($_POST['submit']))
{$t1 = $_SESSION['t1'] ;
$pa = $barray[$t1-1];
calculate($pa);
}
$t = $_SESSION['t'];
if($t>=0)
{
$pa = $barray[$t-1];
test($pa);
$t1 =$t;
--$t;
$_SESSION['t'] = $t;
$_SESSION['t1'] = $t1;
}
if ($t==-1  || isset($_POST['lgout']))
header("location:result.php");

}
else if($cs == 2)
{
function test($pa)
{ 
$que = " SELECT * FROM ecdb WHERE qno = $pa";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br>';
echo '1)'.$q['ans1'].'<br>';
echo '2)'.$q['ans2'].'<br>';
echo '3)'.$q['ans3'].'<br>';
echo '4)'.$q['ans4'].'<br>';
 }
 
 function calculate($pa)
 {     
	 

       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
      
	   
	   $q1 = "SELECT cans FROM ecdb WHERE qno = $pa";
      $q1_run = mysql_query($q1) or die("get out");;
      $f = mysql_fetch_assoc($q1_run);
      if($ans == $f['cans'])
      { $mark = $mark + 1.00;
	  $_SESSION['mark'] = $mark;
	  }
      else
      {$mark = $mark - 0.25;
	   $_SESSION['mark'] = $mark;
	  }
       echo 'mark:'.$mark.'<br>';
   
 }
$barray = $_SESSION['bmark'];

if(isset($_POST['ans']) && isset($_POST['submit']))
{$t1 = $_SESSION['t1'] ;
$pa = $barray[$t1-1];
calculate($pa);
}
$t = $_SESSION['t'];
if($t>=0)
{
$pa = $barray[$t-1];
test($pa);
$t1 =$t;
--$t;
$_SESSION['t'] = $t;
$_SESSION['t1'] = $t1;
}
if ($t==-1  || isset($_POST['lgout']))
header("location:result.php");

}
else if($cs == 3)
{
function test($pa)
{ 
$que = " SELECT * FROM eeedb WHERE qno = $pa";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br>';
echo '1)'.$q['ans1'].'<br>';
echo '2)'.$q['ans2'].'<br>';
echo '3)'.$q['ans3'].'<br>';
echo '4)'.$q['ans4'].'<br>';
 }
 
 function calculate($pa)
 {     
	 

       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
      
	   
	   $q1 = "SELECT cans FROM eeedb WHERE qno = $pa";
      $q1_run = mysql_query($q1) or die("get out");;
      $f = mysql_fetch_assoc($q1_run);
      if($ans == $f['cans'])
      { $mark = $mark + 1.00;
	  $_SESSION['mark'] = $mark;
	  }
      else
      {$mark = $mark - 0.25;
	   $_SESSION['mark'] = $mark;
	  }
       echo 'mark:'.$mark.'<br>';
   
 }
$barray = $_SESSION['bmark'];

if(isset($_POST['ans']) && isset($_POST['submit']))
{$t1 = $_SESSION['t1'] ;
$pa = $barray[$t1-1];
calculate($pa);
}
$t = $_SESSION['t'];
if($t>=0)
{
$pa = $barray[$t-1];
test($pa);
$t1 =$t;
--$t;
$_SESSION['t'] = $t;
$_SESSION['t1'] = $t1;
}
if ($t==-1  || isset($_POST['lgout']))
header("location:result.php");

}
?>
<form action ="bm.php" method = "POST">
Enter your answer<input type ="text" name ="ans">
<input type= "submit" name= "submit" value ="Go">
<input type ="submit" name ="bk" value = "Skip">
<input type = "submit" name="lgout" value ="Logout">

</form>
</body>