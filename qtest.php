<body style = "padding:100px 300px 300px 200px ;font:20px times new roman">
<?php
session_start();

mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
// static $count =1;
//static $mark = 0;
$time = time();
$time1 = date('d/m/yh:i:s',$time+19800);
if($time1[8] == 0 && $time1[9] == 3)
{
if($time1[11] == 2 && $time1[12] == 4)
{ 
echo "You have only 5 minutes left<br/> <br/> <br/>";
				   
}
if($time1[11] == 2 && $time1[12] == 5)
{
header("location:result.php");
}
}
     
  

$x = $_SESSION['X'];
$y = $_SESSION['Y'];
$z = $_SESSION['Z'];
$submit = $_SESSION['submit'];
if(isset($submit) && isset($x))
{ 
 function calculate()
 {     
	 
	   $count = $_SESSION['count'];
       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
       //echo "count is:".$count.'<br>';
	   
	   $q1 = "SELECT cans FROM csdb WHERE qno = $count";
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
       //echo 'mark:'.$mark.'<br>';
     ++$count;
	 $_SESSION['count'] = $count;
 }
function test()
 {  $c = $_SESSION['c'];
 $que = " SELECT * FROM csdb WHERE qno = $c ";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br>'.'<br>';
echo '1)'.$q['ans1'].'<br>'.'<br>';
echo '2)'.$q['ans2'].'<br>'.'<br>';
echo '3)'.$q['ans3'].'<br>'.'<br>';
echo '4)'.$q['ans4'].'<br>'.'<br>';
 ++$c;
 $_SESSION['c'] = $c;
 }
if(isset($_POST['bk']))
 { 
    $b = $_SESSION['c'];
    --$b;
    $b1 = $_SESSION['count'];
	$m = $_SESSION['m'];
	$bmark = $_SESSION['bmark'];
	
	$bmark[$m] = $b;
     $m++;	
	 $_SESSION['bmark'] = $bmark;
    $_SESSION['m'] = $m;
    ++$b;
    ++$b1;
    $_SESSION['c'] = $b;
    
    $_SESSION['count'] = $b1;
	//print_r($bmark);
	$t1 = $_SESSION['t'];
	$t1++;
	$_SESSION['t'] = $t1;
 }

else if(isset($_POST['submit']) && isset($_POST['ans']))
{
calculate();

}
$c1 = $_SESSION['c'];

if( $c1 < 9)
test();
if( $c1 == 9)
{ $_SESSION['cs'] = 1;  
header("location:bm.php");
}
}	
else if(isset($submit) && isset($y))
{function calculate()
 {     
	 
	   $count = $_SESSION['count'];
       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
       //echo "count is:".$count.'<br>';
	   
	   $q1 = "SELECT cans FROM ecdb WHERE qno = $count";
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
       //echo 'mark:'.$mark.'<br>';
     ++$count;
	 $_SESSION['count'] = $count;
 }
function test()
 {  $c = $_SESSION['c'];
 $que = " SELECT * FROM ecdb WHERE qno = $c ";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br/><br/>';
echo '1)'.$q['ans1'].'<br/><br/>';
echo '2)'.$q['ans2'].'<br/><br/>';
echo '3)'.$q['ans3'].'<br/><br/>';
echo '4)'.$q['ans4'].'<br/><br/>';
 ++$c;
 $_SESSION['c'] = $c;
 }
if(isset($_POST['bk']))
 { 
    $b = $_SESSION['c'];
    --$b;
    $b1 = $_SESSION['count'];
	$m = $_SESSION['m'];
	$bmark = $_SESSION['bmark'];
	
	$bmark[$m] = $b;
     $m++;	
	 $_SESSION['bmark'] = $bmark;
    $_SESSION['m'] = $m;
    ++$b;
    ++$b1;
    $_SESSION['c'] = $b;
    
    $_SESSION['count'] = $b1;
	//print_r($bmark);
	$t1 = $_SESSION['t'];
	$t1++;
	$_SESSION['t'] = $t1;
 }

else if(isset($_POST['submit']) && isset($_POST['ans']))
{
calculate();
}
$c1 = $_SESSION['c'];

if( $c1 < 9)
test();
if( $c1 == 9)
{ $_SESSION['cs'] = 2; 
 header("location:bm.php");
}
}	
else if(isset($submit) && isset($z))
{function calculate()
 {     
	 
	   $count = $_SESSION['count'];
       $mark = $_SESSION['mark'];
      $ans = $_POST['ans'];
       //echo "count is:".$count.'<br>';
	   
	   $q1 = "SELECT cans FROM eeedb WHERE qno = $count";
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
       //echo 'mark:'.$mark.'<br>';
     ++$count;
	 $_SESSION['count'] = $count;
 }
function test()
 {  $c = $_SESSION['c'];
 $que = " SELECT * FROM eeedb WHERE qno = $c ";
$qrun = mysql_query($que);
$q = mysql_fetch_assoc($qrun);
echo $q['qno']." . ";
echo $q['qns'].'<br/><br/>';
echo '1)'.$q['ans1'].'<br/><br/>';
echo '2)'.$q['ans2'].'<br/><br/>';
echo '3)'.$q['ans3'].'<br/><br/>';
echo '4)'.$q['ans4'].'<br/><br/>';
 ++$c;
 $_SESSION['c'] = $c;
 }
if(isset($_POST['bk']))
 { 
    $b = $_SESSION['c'];
    --$b;
    $b1 = $_SESSION['count'];
	$m = $_SESSION['m'];
	$bmark = $_SESSION['bmark'];
	
	$bmark[$m] = $b;
     $m++;	
	 $_SESSION['bmark'] = $bmark;
    $_SESSION['m'] = $m;
    ++$b;
    ++$b1;
    $_SESSION['c'] = $b;
    
    $_SESSION['count'] = $b1;
	
	$t1 = $_SESSION['t'];
	$t1++;
	$_SESSION['t'] = $t1;
 }

else if(isset($_POST['submit']) && isset($_POST['ans']))
{
calculate();
}
$c1 = $_SESSION['c'];

if( $c1 < 9)
test();
if( $c1 == 9)
{  $_SESSION['cs'] = 3;
header("location:bm.php");
}
}	

?>
<form action ="qtest.php" method = "POST">
Enter your answer<input type ="text" name ="ans">
<input type= "submit" name= "submit" value ="Go">
<input type ="submit" name ="bk" value = "Bookmark">

</form>
</body>