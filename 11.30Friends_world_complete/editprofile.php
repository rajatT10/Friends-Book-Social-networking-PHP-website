<?php
include("conn.php");
session_start();
$sid=$_SESSION['sid'];//user login
$sel=mysqli_query($link,"select * from profile where id='$sid'");//to get profile of user
$arr=mysqli_fetch_array($sel);
// for update profile
extract($_POST);
if(isset($sub))
{
	if(mysqli_query($link,"update profile set fname='$fname',lname='$lname',qua='$qua',mob='$mob',address='$address' where id='$sid'"))
	{
		echo "<script>alert('Profile updated');
		location.href='home.php?con=pro'</script>";
	}
	else
	{
	echo "<script>alert('Profile not updated');
		location.href='home.php'</script>";	
	}
}
?>
<form name="form1" method="post" action="">
  <table width="47%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Edit Profile</strong></div></td>
    </tr>
    <tr>
      <td><strong>Fname</strong></td>
      <td><strong>
        <input name="fname" type="text" required="required" id="fname" value="<?php echo $arr['fname'];?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Lname</strong></td>
      <td><strong>
        <input name="lname" type="text" required="required" id="lname" value="<?php echo $arr['lname'];?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Qualification</strong></td>
      <td><strong>
        <input name="qua" type="text" required="required" id="qua" value="<?php echo $arr['qua'];?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Mobile</strong></td>
      <td><strong>
        <input type="text" name="mob" id="mob" value="<?php echo $arr['mob'];?>">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><strong>
        <textarea name="address" id="address" cols="25" rows="3"><?php echo $arr['address'];?></textarea>
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
