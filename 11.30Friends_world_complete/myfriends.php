<?php
include("conn.php");
$sid=$_SESSION['sid'];
$sel=mysqli_query($link,"select sid from friends where aid='$sid'");
while(list($si)=mysqli_fetch_array($sel))
{
	echo "<img src='users/$si.jpg' width=70 height=50/><br/>".$si;
}
?>