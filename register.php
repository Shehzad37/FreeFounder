<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	
<?php include("includes/toplinks.php"); ?>
  </head>
<body>
<div id="header">
	<?php  include("includes/header.php"); ?>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<?php  include("includes/sidebar.php"); ?>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li class="active">Registration</li>
</ul>
	<h3> Registration</h3>	
	<div class="well">

	<form class="form-horizontal" method="post" action="register.php" >
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Full Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Full Name" name="fullname" required >
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" id="input_email" placeholder="Email" name="email" required >
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password" name="password" required >
		</div>
	  </div>	  
		
<!--
	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>	
-->
		<h4>Your address</h4>
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" placeholder="Address" name="address" required /> <span></span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" placeholder="city" name="city" required /> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="country">Country<sup>*</sup></label>
			<div class="controls">
			<select id="country" name="country" required  >
				<option value="">--</option>
				<option value="pakistan">Pakistan</option>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="number"  name="phone" id="mobile" placeholder="Mobile Phone" required /> 
			</div>
		</div>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" name="submit" value="Register" />
			</div>
		</div>		
<?php
require_once("/script/users.php");

if (isset($_POST['submit'])) {
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$phone=$_POST['phone'];

	$obj=new User();
	$data=$obj->profile($email);

	if ($data) {
		echo "<script>alert('Email already exists, try another one!')</script>";
	}else
	{
		$object=new User();
		$object->insertUser($fullname,$email,$password,$address,$city,$country,$phone);
	}
}

?>
	</form>

</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<?php include("includes/footer.php"); ?>
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<?php include("includes/bottomlinks.php"); ?>
	
</body>

</html>