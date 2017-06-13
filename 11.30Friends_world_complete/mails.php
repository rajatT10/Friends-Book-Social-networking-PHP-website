<?php
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
$sel=mysqli_query($link,"select * from inbox where too='$sid'");
?>
<form name="form1" method="post" action="">
  <table width="50%" border="2">
    <tr>
      <td colspan="6"><div align="center"><strong>My Mails</strong></div></td>
    </tr>
    <tr>
      <td><strong>
        <input type="checkbox" name="checkbox" id="checkbox">
      </strong></td>
      <td><strong>FROM</strong></td>
      <td><strong>SUBJECT</strong></td>
      <td><strong>MESG</strong></td>
      <td><strong>DATE</strong></td>
      <td><strong>ATTACH</strong></td>
    </tr>
    <?php
	if(mysqli_num_rows($sel)>0)
	{
		while($arr=mysqli_fetch_array($sel))
		{
			extract($arr);
	?>
    <tr>
      <td><input type="checkbox" name="c[]" id="c[]" value="<?php echo $dat;?>"></td>
      <td><?php echo $frm;?></td>
      <td><?php echo $sub;?></td>
      <td><a href="home.php?ri=<?php echo $dat;?>"><?php echo substr($mesg,0,5)."....";?></a></td>
      <td><?php echo $dat;?></td>
      <td><?php echo $att;?></td>
    </tr>
    <?php
	}
	}
	else
	{
		?>
     <tr><td colspan="6" align="center">No mails found</td></tr>   
        <?php
	}
	?>	
  </table>
</form>
