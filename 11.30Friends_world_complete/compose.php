<?php
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
$att=$_FILES['att']['name'];
$dat=date("d-m-y h-i-s a");
extract($_POST);
if(isset($send))
{
	$sel=mysqli_query($link,"select uid from regis where uid='$to'");
	$arr=mysqli_fetch_array($sel);
	if($to==$arr['uid'])
	 {
		if(mysqli_query($link,"insert into inbox values('$sid','$to','$sub','$mesg','$dat','$att')") and mysqli_query($link,"insert into sent values('$sid','$to','$sub','$mesg','$dat','$att')")) 
		{
			mkdir("attach/$dat");
			move_uploaded_file($_FILES['att']['tmp_name'],"attach/$dat/$att");
			$msg="Mail send sucessfully";
		}
	 }
	 else
	 {
		$msg="user is not exist"; 
	 }
}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="40%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Compose Mail</strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="send" id="send" value="Send">
        <input type="submit" name="save" id="save" value="Save">
        <input type="submit" name="dis" id="dis" value="Discard">
      </strong></div></td>
    </tr>
    <tr>
      <td><strong>To</strong></td>
      <td><strong>
        <input name="to" type="text" required="required" id="to">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Sub</strong></td>
      <td><strong>
        <input name="sub" type="text" required="required" id="sub">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Attach</strong></td>
      <td><strong>
        <input type="file" name="att" id="att">
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><strong>
        <textarea name="mesg" cols="45" rows="5" required="required" id="mesg"></textarea>
      </strong></td>
    </tr>
    <tr>
     <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="send" id="send" value="Send">
        <input type="submit" name="save" id="save" value="Save">
        <input type="submit" name="dis" id="dis" value="Discard">
      </strong></div></td>
    </tr>
  </table>
</form>
