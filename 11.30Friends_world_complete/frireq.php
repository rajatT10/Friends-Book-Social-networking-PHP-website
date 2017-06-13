<?php
session_start();
$sid=$_SESSION['sid'];
include("conn.php");
$sel=mysqli_query($link,"select sid,dat from frireq where rid='$sid'");
if(mysqli_num_rows($sel)>0)
 {
 while(list($si,$d)=mysqli_fetch_array($sel))
	  {
		  $sel1=mysqli_query($link,"select * from regis where uid='$si'");
		  $arr=mysqli_fetch_array($sel1);
		  extract($arr);
		  include("formet1.php");
	  }
 }

?>