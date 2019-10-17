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
    <title>Insert Car Post </title>
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
        	<h2>Insert Car Post</h2>
        	<form class="form-horizontal" method="post" action="insert_car.php"  enctype="multipart/form-data" >
		
		
		<div class="control-group">
			<label class="control-label">Car Companies<sup>*</sup></label>
			<div class="controls">
<?php 
    include_once("../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->get_car_category();
?>
			<select id="" name="company"  required >
				<option value="">-</option>
<?php foreach($sql as $row){
        $car_company_name = $row['car_company_name'];  
?>
				<option value="<?php echo $car_company_name; ?>"><?php echo $car_company_name; ?></option>
<?php } ?>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="country">Model Name<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="modelName"  placeholder="Model Name" required >
			</div>
		</div>	
        <div class="control-group">
			<label class="control-label" for="country">Engine Power<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="engine_type"  placeholder="Engine Power" required >
			</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="input_email">Select Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="input_email" name="image"  placeholder="" required >
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Price <sup>*</sup></label>
		<div class="controls">
		  <input type="number" id="inputPassword1" name="price"  placeholder="Price" required >
		</div>
	  </div>	
      <div class="control-group">
			<label class="control-label" for="country">Transmission<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="body_type"  placeholder="Transmission" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Fuel Type<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="orientation"  placeholder="Fuel Type" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Breaks<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="fourwd_or_awd"  placeholder="Breaks" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Torque<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="torque"  placeholder="Torque" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Top Speed<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="safety"  placeholder="Top Speed" required >
			</div>
		</div>
         <div class="control-group">
			<label class="control-label" for="country">Displacement<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="displacement"  placeholder="Displacement" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Wheel Type<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="size"  placeholder="Wheel Type" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Number of Doors<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="doors"  placeholder="Number of Doors" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Mileage<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="per_liter_mile"  placeholder="Mileage KM/H" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Video<sup>*</sup></label>
			<div class="controls">
			 <input type="file" id="input_email" name="video"  placeholder=""  >
			</div>
		</div>
         
        
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success"  name="submit" type="submit" value="Post Car" />
			</div>
		</div>
<?php
	require_once("../script/admin_post.php");

if (isset($_POST['submit'])) {

	$company=$_POST['company'];
	
	$modelName=$_POST['modelName'];
	$engine_type=$_POST['engine_type'];

	$image_name=$_FILES['image']['name'];
	$image_type=$_FILES['image']['type'];
	$image_size=$_FILES['image']['size'];
	$image_tmp=$_FILES['image']['tmp_name'];

	$price=$_POST['price'];
	$body_type=$_POST['body_type'];
	$orientation=$_POST['orientation'];
	$fourwd_or_awd=$_POST['fourwd_or_awd'];
	$torque=$_POST['torque'];
	$safety=$_POST['safety'];
	$displacement=$_POST['displacement'];
	$size=$_POST['size'];
	$doors=$_POST['doors'];
	$per_liter_mile=$_POST['per_liter_mile'];

	$video_name=$_FILES['video']['name'];
	$video_type=$_FILES['video']['type'];
	$video_size=$_FILES['video']['size'];
	$video_tmp=$_FILES['video']['tmp_name'];

	if ($image_type=='image/jpeg' OR $image_type=='image/png' OR $image_type=='image/gif' ) {
			if ($image_size<=1000000) {
				move_uploaded_file($image_tmp, "images/$image_name");
			}else{
				echo "<script>alert('Image size is greater than 1 MB !')</script>";
			}
		}	

	if ($video_type=='video/mp4' OR $video_type=='video/avi' OR $video_type=='video/mov'
		 OR $video_type=='video/"3gp' OR $video_type=='video/mpeg' ) {
			if ($image_size<=10000000) {
				move_uploaded_file($video_tmp, "videos/$video_name");
			}else{
				echo "<script>alert('Video size is greater than 10 MB !')</script>";
			}
		}	
	
	$obj=new AdminPost();
	$data=$obj->check_car($company,$modelName);
	if ($data) {
		echo "<script>alert('Car already exists, try another one!')</script>";
	}else{
		$object=new AdminPost();
		$object->insert_car($company,$modelName,$engine_type,$image_name,$price,$body_type,$orientation,$fourwd_or_awd,$torque,$safety,$displacement,$size,$doors,$per_liter_mile,$video_name);
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