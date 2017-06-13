<?php include("boothead.php");?>
<?php 
error_reporting(0);
include("conn.php");
session_start();
extract($_POST);
if(isset($regis))
{
	if(!empty($id) && !empty($pass) && !empty($uname) && !empty($gen) && !empty($age) && !empty($city) && !empty($ans)&& !empty($ec))
	{
		if($ec==$_SESSION['cap'])
		{
		$id=mysqli_real_escape_string($link,htmlentities(trim($id)));
	$pass=md5(mysqli_real_escape_string($link,htmlentities(trim($pass))));
	$uname=mysqli_real_escape_string($link,htmlentities(trim($uname)));
		$gen=mysqli_real_escape_string($link,htmlentities(trim($gen)));
		$age=mysqli_real_escape_string($link,htmlentities(trim($age)));
	$city=mysqli_real_escape_string($link,htmlentities(trim($city)));
		$sq=mysqli_real_escape_string($link,htmlentities(trim($sq)));
		$ans=mysqli_real_escape_string($link,htmlentities(trim($ans)));
		if(mysqli_query($link,"insert into regis values('$id','$uname','$pass',$age,'$gen','$city','$sq','$ans',NOW())"))
		{
			mysqli_query($link,"insert into profile(id) values('$id')");
			move_uploaded_file($_FILES['att']['tmp_name'],"users/$id.jpg");
			header("location:welcome.php?id=$id");
		}
		else
		{
		  $msg="ID or uname is already exists";	
		}
		}
		else
		{
		$msg="Enter Correct Captcha";	
		}
	}
	else
	{
	$msg="Plz fill blank fields";	
	}
}
?>
<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript" language="javascript"></script>
<script language="javascript">
$(document).ready(function()
{
	$("#uname").blur(function()
	{
		
		$("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
	
		$.post("user_availability.php",{uname:$(this).val() } ,function(data)
        {
			//$("#msgbox").html(data);
		 if(data=='no') //if username not avaiable
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('User Already exists').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
		  else
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Username available').addClass('messageboxok').fadeTo(900,1);	
			});
		  }
				
        });
 
	});
});
</script>
<div class="container">
<div class="jumbotron">
<h1>Sign Up Here!</h1>
<p>Connect Yourself.</p>
<p><a class="btn btn-primary btn-lg" role="button">
Learn more</a>
</p>
</div>
</div>
<div class="container col-sm-6"> 
  <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <fieldset>
  <legend>Registration</legend>
 <div class="container" align="center" style="color:#F00"> <?php echo $msg;?> </div>
<div class="form-group">
<label class="col-sm-4 control-label">Email Id</label>
<div class="col-sm-6">
<input class="form-control" id="id" type="text" placeholder="Enter Email-ID" name="id" required id="id">
</div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Password</label>
<div class="col-sm-6">
<input name="pass" class="form-control" id="pass" type="password" placeholder="Enter Password" required id="pass">
</div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">User Name</label>
<div class="col-sm-6">
<input name="uname" required id="uname" class="form-control" id="uname" type="text" placeholder="Enter Unique User name"><span id="msgbox" style="display:none"></span>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Gender</label>
<div class="col-sm-6">
<input type="radio" id="radio" value="male" name="gen" checked><label for="gen"> Male &nbsp;
<input type="radio" id="radio2" value="female" name="gen">Female</label></div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Age</label>
<div class="col-sm-6">
<input class="form-control" id="age" type="text" placeholder="Enter Age" name="age" required id="age">
</div>
</div>
<div class="form-group">
<label for="name" class="col-sm-4 control-label">City</label>
<div class="col-sm-6">
<select class="form-control" name="city" id="city">
<option value="ghaziabad">Ghaziabad</option>
<option value="noida">Noida</option>
<option value="agra">Agra</option>
<option value="delhi">Delhi</option>
<option value="jaipur">Jaipur</option>
</select>
</div>
</div>
<div class="form-group">
<label for="inputfile" class="col-sm-4 control-label">File input</label>
<div class="col-sm-6">
<input type="file" id="att" name="att">
<p class="help-block">Upload a Profile Picture.</p>
</div>
</div>
<div class="form-group">
<label for="name" class="col-sm-4 control-label">Security Question</label>
<div class="col-sm-6">
<select class="form-control" name="sq" id="sq">
<option value="What is ur pet name?">What is ur pet name?</option>
<option value="What is ur fav color?">What is ur fav color?</option>
<option value="What is ur childhood hero?">What is ur childhood hero?</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Security Answer</label>
<div class="col-sm-6">
<input class="form-control" id="ans" type="text" placeholder="Enter Answer" name="ans" required id="ans">
</div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Captcha Code</label>
<div class="col-sm-6"><?php include("captcha.php");?></div>
</div>
<div class="form-group">
<label class="col-sm-4 control-label">Enter Code</label>
<div class="col-sm-6">
<input class="form-control" id="ec" type="text" placeholder="Enter Captcha Code" name="ec" required id="ec">
</div>
</div>
<div class="form-group">
<div class="col-sm-5">

</div>
<div class="col-sm-3">
<input type="submit" name="regis" id="regis" value="Submit" class="btn btn-success">
<input type="reset" name="reset" id="reset" value="Reset" class="btn btn-danger">
</div>
</div>
</fieldset>
</form>
</div>
<div class="container col-sm-6">
<?php include("login.php");?>
</div> 
  