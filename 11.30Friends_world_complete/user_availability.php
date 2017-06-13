<?php
$uname=$_POST['uname'];
include("conn.php");
$read="select * from regis where uname='$uname'";
$get=mysqli_query($link,$read);
if(mysqli_num_rows($get)>0)
{
   echo "no";	
}
else
{
   echo "yes";	
}
?>