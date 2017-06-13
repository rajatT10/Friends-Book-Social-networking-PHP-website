<?php
include("conn.php");
$sid=$_SESSION['sid'];
$rid=$_GET['rid'];
if(mysqli_query($link,"insert into frireq values('$sid','$rid',NOW())"))
{
   echo "<script>alert('Request Send');
          location.href='home.php'</script>";	
}
else
{
	echo "<script>alert('Request already Send');
          location.href='home.php'</script>";
}
?>