<?php
session_start();
$aid=$_SESSION['sid'];
$sid=$_GET['sid'];
$d=$_GET['dat'];
include("conn.php");
if(mysqli_query($link,"insert into friends values('$sid','$aid',NOW())") and mysqli_query($link,"insert into friends values('$aid','$sid',NOW())") or die("Not"))
{
	mysqli_query($link,"delete from frireq where dat='$d'");
	echo "<script>alert('Friend Added');
	       location.href='home.php'</script>";
}
else
{
echo "<script>alert('Friend Alreadey');
	       location.href='home.php'</script>";	
}
?>






