<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: /FreeFounder/admin/login.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Change Password</title>
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
    
	<h3> Login For Admin Panel</h3>	
	<hr class="soft"/>
	
	<div class="row">
		
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h2>Change Your Password:</h2>

<?php
	include_once("/../script/admin.php");

	$email=$_SESSION['email'];
    $object=new admin();
    $data=$object->profile($email);

?>
<?php foreach($data as $row){
        $id = $row['id'];
        $email = $row['email'];
        $password = $row['password'];   
?>

			<form  method="post" action="change_password.php" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="email" id="inputEmail1" value="<?php echo $email; ?>" readonly name="email" placeholder="example@gmail.com" required >
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="text" class="span3" value="<?php echo $password; ?>" dislpay id="inputPassword1" name="password" placeholder="Password" required >
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" name="submit" class="btn">Change Password</button>
				</div>
			  </div>
<?php } ?>



<?php
	require_once("/../script/admin.php");

	if (isset($_POST['submit'])) {
		
		$email=$_POST['email'];
		$password=$_POST['password'];

		$object=new admin();
		$object->change_Password($email,$password);
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
	
	<!-- Themes switcher section ============================================================================================= -->


</body>

</html>

<?php
}
?>