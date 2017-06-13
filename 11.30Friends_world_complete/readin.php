<?php
include("conn.php");
$ri=$_GET['ri'];//dat
$sel=mysqli_query($link,"select * from inbox where dat='$ri'");
$arr=mysqli_fetch_array($sel);
extract($arr);
$path="attach/$dat/$att";
?>
<table width="50%" border="0">
  <tr>
    <td>From</td>
    <td><?php echo $frm;?></td>
  </tr>
  <tr>  
    <td>Subject</td>
    <td><?php echo $sub;?></td>
  </tr>
  <tr>
    <td>Message</td>
    <td><?php echo $mesg;?></td>
  </tr>
  <tr>
  <td>Date</td>
    <td><?php echo $dat;?></td>
    
  </tr>
  <tr>
    <td>Attach</td>
    <td><a href="home.php?down=<?php echo $path;?>"><?php echo $att;?></a></td>
  </tr>
  
</table>
