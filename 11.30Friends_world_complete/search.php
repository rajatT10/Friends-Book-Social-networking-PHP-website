<?php
$ser=$_GET['ser'];
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
$sel=mysqli_query($link,"select * from regis where uid='$ser' or uname='$ser' or city='$ser'");
if(mysqli_num_rows($sel)>0)
{
	while($arr=mysqli_fetch_array($sel))
	{
		extract($arr);
		if($uid!=$sid)
		{
		include("formet.php");
		}
	}
}
else
{
  echo"No records Found";	
}
?>