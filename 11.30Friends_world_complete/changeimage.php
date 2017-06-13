<?php
session_start();
$sid=$_SESSION['sid'];
if(isset($_POST['sub']))
{
  if(move_uploaded_file($_FILES['att']['tmp_name'],"users/$sid.jpg"))
  {
	$msg="Image changed";  
  }
  else
  {
	$msg="Image not changed";  
  }
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="45%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Change Image</strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td><strong>Upload</strong></td>
      <td><strong>
        <input name="att" type="file" required id="att">
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="sub" id="sub" value="Submit">
      </strong></div></td>
    </tr>
  </table>
</form>
