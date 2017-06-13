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
	header("location:home.php?con=ep");
}
?>
<form name="form1" method="post" action="">
  <table width="47%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Your Profile</strong></div></td>
    </tr>
    <tr>
      <td><strong>Fname</strong></td>
      <td><strong>
        <input name="fname" type="text" required id="fname" value="<?php echo $arr['fname'];?>" readonly>
      </strong></td>
    </tr>
    <tr>
      <td><strong>Lname</strong></td>
      <td><strong>
        <input name="lname" type="text" required id="lname" value="<?php echo $arr['lname'];?>" readonly>
      </strong></td>
    </tr>
    <tr>
      <td><strong>Qualification</strong></td>
      <td><strong>
        <input name="qua" type="text" required id="qua" value="<?php echo $arr['qua'];?>" readonly>
      </strong></td>
    </tr>
    <tr>
      <td><strong>Mobile</strong></td>
      <td><strong>
        <input type="text" name="mob" id="mob" value="<?php echo $arr['mob'];?>" readonly>
      </strong></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><strong>
        <textarea name="address" id="address" cols="25" rows="3" readonly><?php echo $arr['address'];?></textarea>
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <strong>
        <input type="submit" name="sub" id="sub" value="Edit_Pro">
      </strong></div></td>
    </tr>
  </table>
</form>
