 <?php
 include("boothead.php");
 error_reporting(0);
session_start();
include("conn.php");
$sid=$_SESSION['sid'];
$xyz=mysqli_query($link,"select uname from regis where uid='$sid'");
// for download

if(isset($_GET['down']))
{
	$path=$_GET['down'];
header('Content-Type: application/octet-stream');
 header('Content-Disposition: attachment; filename='.basename($path));
   readfile($path);
}
// for blank session
if($sid=="")
{
header("location:index.php");	
}
// for search
 if(isset($_POST['sub1']))
 {
	$ser=$_POST['search'];
	if($ser!=NULL)
	{
		header("location:home.php?ser=$ser");
	}
 }
 // for count frireq
 $co=mysqli_num_rows(mysqli_query($link,"select * from frireq where rid='$sid'"));
  $co2=mysqli_num_rows(mysqli_query($link,"select * from inbox where too='$sid'"));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php
$ct=$_GET['ct'];//1.png
 if($ct!=NULL)
 {
	 $ct1=str_replace(".png",".css",$ct);//1.css
	 $path="css/$ct1";//css/1.css
	 file_put_contents("users/$sid.txt",$path); 
 }
 if(file_exists("users/$sid.txt"))
 {
	echo file_get_contents("users/$sid.txt"); 
 }
 else
 {
	echo "css/home.css"; 
 }

?>" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
<div class="jumbotron">
<h1>Friends Book</h1>
<p>Connect Yourself.</p>
<p><a class="btn btn-primary btn-lg" role="button">Hi,<?php echo $_REQUEST['$xyz'];?></a>
</p>
</div>
    </div>
  <div class="container" align="center">
  <ul class="nav nav-tabs">
<li class="active"><a href="home.php">Home</a></li>
<li><a href="?con=fri">Friend Requests<span class="badge"> <?php if($co>0) { echo "($co)"; } ?></span></a></li>
<li><a href="home.php?con=ct">Change Themes</a></li>
<li><a href="home.php?con=ci">Edit Profile Picture</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Privacy<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="home.php?con=cp">Change Password</a></li>
<li><a href="home.php?con=pro">My Profile</a></li>
<li><a href="home.php?con=ep">Edit Profile</a></li>
<li class="divider"></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</li>
<form id="form1" name="form1" method="post" class="form-group">
        <input type="search" name="search" id="search">
        <input type="submit" name="sub1" id="sub1" value="Search">
      </form>
</ul>

  </div>

  <div class="container col-sm-2">
  <ul class="nav nav-pills nav-stacked">
<li class="active"><a href="?con=com">Compose Mail</a></li>
<li><a href="?con=mail">Mails<span class="badge"><?php echo "($co2)";?></span></a></li>
<li><a href="#">Sent Items</a></li>
<li><a href="#">Drafts</a></li>
<li><a href="#">Edit Profile</a></li>
</ul>
</div>
    <div class="container col-sm-8" align="center">
       <?php
	   if(isset($_GET['ri']))
	   {
		include("readin.php");   
	   }
	   if(isset($_GET['sid']))
	   {
		include("accfri.php");   
	   }
	   if(isset($_GET['ser']))
	   {
		include("search.php");   
	   }
	   if(isset($_GET['rid']))
	   {
		include("freq.php");   
	   }
	   switch($_REQUEST['con'])
	   {
		case 'cp' : include("changepass.php");
		             break;
		case 'ci' : include("changeimage.php");
		             break;
	case 'ep' : include("editprofile.php");
		             break;	
	case 'pro' : include("profile.php");
		             break;
	case 'ct' : include("changetheme.php");
		             break;
	case 'com' : include("compose.php");
		             break;	
	case 'mail' : include("mails.php");
		             break;
   case 'fri' : include("frireq.php");
		             break;						 				 					 				    
	   }
	   ?>
    </div>
    <div class="container col-sm-2">
    <ul class="nav nav-pills nav-stacked">
<li class="active"><a>My Friends</a></li>
    <?php include("myfriends.php");?>
    </div>
  </div>
  <div class="footer">Copyright &copy; 2015. All Right Reserved.</div>
</div>
</body>
</html>












