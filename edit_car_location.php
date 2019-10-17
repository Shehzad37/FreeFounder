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
    <title>Update Car Location</title>
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
        	<h2>Update Car Location</h2>

<?php
	$edit_id=@$_GET['edit'];

	include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_cell_location($edit_id);

?>
<?php foreach($data as $row){
        $id = $row['id'];
        $product=$row['product'];
        $city=$row['city'];
        $address=$row['address'];   
?>


    <form class="form-horizontal" method="post" action="edit_cell_location.php?edit_form=<?php echo $id; ?>"  enctype="multipart/form-data" >
		
       <div class="control-group">
			<label class="control-label" for="country">Product<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="product" placeholder="" value="<?php echo $product; ?>" readonly>
			</div>
		</div>	
       
			  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">City <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" value="<?php echo $city; ?>" name="city" placeholder="City" required >
		</div>
	</div>	
    <div class="control-group">
			<label class="control-label" for="country">Google Map Source Address<sup>*</sup></label>
			<div class="controls">
			 <textarea  rows="12" value="<?php echo $address; ?>" name="address"  required ><?php echo $address; ?></textarea>
			</div>
	</div>

	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="update"  type="submit" value="Update Cell Phone Location" />
			</div>
		</div>	
<?php } ?>

<?php	

require_once("../script/admin_post.php");

if (isset($_POST['update'])) {

	$update_id=@$_GET['edit_form'];

	$product=$_POST['product'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	
	
	$object=new AdminPost();
	$object->update_car_location($product,$city,$address,$update_id);
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