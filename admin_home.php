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
    <title>Admin Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" 
      type="image/jpg" 
      href="themes/images/car1.jpg">
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
	<div class="span9" style="height:auto;">
   		<div class="well" style="height:320px">
			<h1>Welcome to Admin Panel</h1>
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

<?php
}
?>