<?php
ob_start();
session_start();
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('exam') or die("cannot connect to database");
$examid = $_SESSION['examid'];
$que = "SELECT * FROM result WHERE  examid = '$examid'";
$que_run = mysql_query($que);
$fetch = mysql_fetch_assoc($que_run);
//$examid = $fetch['examid'];
$mark = $fetch['mark'];
$result = $fetch['res'];

?>
<html>
<body>

<p style= "padding: 300px 200px 700px 200px">

          Your result is:
<br/><br/>
<table border="1" bordercolor="black" bgcolor="blue">
<tr>
<td>examid</td>
<td>mark</td>
<td>result</td>
</tr>
<tr>
<td><input type="text" name="name" value="<?php echo $examid;?>" /></td>
<td><input type="text" name="name" value="<?php echo $mark ;?>" /></td>
<td><input type="text" name="name" value="<?php echo $result ;?>" /></td>
</tr>
</table>

</p>
</body>
</html>