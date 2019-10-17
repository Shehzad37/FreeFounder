

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
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
    			<li class="active">Login</li>
</ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Login Form</h5>
			<form  method="post" action="login.php" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3" name="email" type="email" id="inputEmail1" placeholder="Email" required >
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" name="password" class="span3"  id="inputPassword1" placeholder="Password" required >
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" name="submit" class="btn">Sign in</button> <a href="forgetpass.php">Forget password?</a>
				</div>
			  </div>
<?php	
require_once("/script/users.php");

if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	$object=new User();
	$object->login($email,$password);
}
?>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
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

