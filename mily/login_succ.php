
            
<?php
session_start();
//require 'header.php';
$count =0;
$time = time();
//$examid = $_SESSION['examid'];
//echo  "exam_1:".$examid;
$time1 = date('d/m/yh:i:s',$time+19800);
//echo $time1;
if( $time1[0] == 2 && $time1[1] == 1)
  { $count++;
  if ($time1[3] == 0 && $time1[4] == 2)
     { $count++;
	 if( $time1[6] == 1 && $time1[7] == 3 )
          { $count++;
		  if($time1[8] == 0 && $time1[9] == 6 )
		    {$count++;
			if($time1[11] == 4 && ($time1[12] >= 0 && $time1[12] <= 9))
			  { 
			  header("location:appear.php");}
				   
		}
		}
     }
  }
else
{
echo " SORRY!!! Requested Webpage cannot be openend";
}
if( $count <=4 && $count >=0)
{
echo " SORRY!!! Requested Webpage cannot be openend";
}

?>
