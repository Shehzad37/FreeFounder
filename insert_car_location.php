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
    <title>Insert Car Location</title>
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
	<div class="span9" style="height:auto;">
		<div class="well">
        	<h2>Insert Car Shops Location</h2>
        	<form class="form-horizontal" method="post" action="insert_car_location.php"  enctype="multipart/form-data" >
				
		<div class="control-group">
			<label class="control-label" for="country">Product<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="product" placeholder="" value="CAR" readonly>
			</div>
		</div>	
       
			  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">City <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1"  name="city" placeholder="City" required >
		</div>
	</div>	
    <div class="control-group">
			<label class="control-label" for="country">Google Map Source Address<sup>*</sup></label>
			<div class="controls">
			<textarea  rows="12"  name="address" required  ></textarea>
			</div>
	</div>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="submit"  type="submit" value="Post Car Location" />
			</div>
		</div>	
<?php	

require_once("../script/admin_post.php");

if (isset($_POST['submit'])) {

	$product=$_POST['product'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	
	$obj2=new AdminPost();
	$data2=$obj2->check_location($product,$city);
	if ($data2) {
		echo "<script>alert('Car Location already exists, try another one!')</script>";
	}else{
		$object=new AdminPost();
		$object->insert_car_location($product,$city,$address);
	}
}
?>		

	</form>
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