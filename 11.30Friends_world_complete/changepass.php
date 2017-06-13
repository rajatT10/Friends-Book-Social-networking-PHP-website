<?php
include("conn.php");
session_start();
$sid=$_SESSION['sid'];
extract($_POST);
if(isset($sub))
{
  if(!empty($op) && !empty($np) && !empty($cp))
  {
	 $op=md5($op);
	 $np=md5($np);
	 $cp=md5($cp);
	 $sel=mysqli_query($link,"select pass from regis where uid='$sid'");
	 $arr=mysqli_fetch_array($sel);
	 if($op==$arr['pass'])
	 {
		if($np==$cp)
		{
			if(mysqli_query($link,"update regis set pass='$np' where uid='$sid'"))
			{
			$msg="Password Changed";
			}
			else
			{
				$msg="Password not changed";
			}
		}
		else
		{
		$msg="Np and cp are not match";	
		}
	 }
	 else
	 {
		$msg="Op is not correct"; 
	 }
  }
  else
  {
	$msg="Plz fill blank fields";  
  }
}
?>
<form name="form1" method="post" action="">
  <table width="23%" border="0">
    <tr>
      <td colspan="2"><div align="center"><strong>Change Password</strong></div></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="color:#F00"><?php echo $msg;?></td>
    </tr>
    <tr>
      <td><strong>Old Pass</strong></td>
      <td><strong>
        <input name="op" type="password" required="required" id="op">
      </strong></td>
    </tr>
    <tr>
      <td><strong>New Pass</strong></td>
      <td><strong>
        <input name="np" type="password" required="required" id="np">
      </strong></td>
    </tr>
    <tr>
      <td><strong>Con Pass</strong></td>
      <td><strong>
        <input name="cp" type="password" required="required" id="cp">
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
