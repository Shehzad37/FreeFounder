<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Forget Password</title>
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

<!-- Sidebar end=============================================== -->
	<div class="span9">
    
	<h3> FORGET YOUR PASSWORD?</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span9" style="min-height:900px">
			<div class="well">
			<h5>Reset your password</h5><br/>
			Please enter the email address for your account. A new password will be sent to you. Once you have received the new password, you will be able to login for your account.<br/><br/><br/>
			<form method="post" action="forgetpass.php">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="email" name="email" id="inputEmail1" placeholder="Email" required >
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" name="submit" class="btn block">Submit</button>
			  </div>
			</form>

<?php
if (isset($_POST['submit'])) {
	$sender_email=$_POST['email'];
	$subject="Forget Password";
	$to="13140010@gift.edu.pk";

	$message="Email From :".$sender_email."<br>".$subject;

	if ($sender_email=='') {
		echo "<script>alert('Please fill the blank fields')</script>";
		exit();
	}

	mail($to, $subject, $message,$sender_email);

	$to_sender=$_POST['email'];
	$sub="Free Founder Reset Password<br>";
	$mesg="Your New Password is 12345<br>";
	$from="13140010@gift.edu.pk";

	mail($to_sender, $sub, $mesg,$from);

	
?>
<?php
	require_once("../script/admin.php");

	$obj=new Admin();
    $password="12345";
    $obj->forget_Password($sender_email,$password);
}
?>
<?php  
	

?>

		</div>
		</div>
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
	<!-- Themes switcher section ============================================================================================= -->
</body>

</html>