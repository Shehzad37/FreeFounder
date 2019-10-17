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
    <title>Update Car POst</title>
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
        	<h2>Update Car Post</h2>

<?php
	$edit_id=@$_GET['edit'];

	include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_car($edit_id);

?>
<?php foreach($data as $row){
        $id = $row['id'];
        $company = $row['company'];
        $name = $row['modelName'];
        $engine_type = $row['engine_type'];
        $image = $row['image'];
        $price = $row['price'];
        $body_type = $row['body_type'];
        $orientation = $row['orientation'];  
        $fourwd_or_awd = $row['fourwd_or_awd'];
        $torque = $row['torque'];
        $safety = $row['safety'];
        $displacement = $row['displacement'];
        $size = $row['size'];
        $doors = $row['doors']; 
        $per_liter_mile = $row['per_liter_mile'];  
        $video = $row['video'];  
?>

        	<form class="form-horizontal" method="post" action="edit_car.php?edit_form=<?php echo $id; ?>"  enctype="multipart/form-data" >
		
		
		<div class="control-group">
			<label class="control-label">Car Companies<sup>*</sup></label>
			<div class="controls">
<?php 
    include_once("../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->get_car_category();
?>
			<select id="" name="company"  required >
				<option value="<?php echo $company; ?>"><?php echo $company; ?></option>
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
			 <input type="text" id="input_email" name="modelName" value="<?php echo $company; ?>" placeholder="" required >
			</div>
		</div>	
        <div class="control-group">
			<label class="control-label" for="country">Engine Power<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="engine_type"  value="<?php echo $engine_type; ?>"  placeholder="" required >
			</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="input_email">Select Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="input_email" name="image" value="<img src="images/<?php echo $image; ?>"" placeholder="" >
		  			<img style="width:70px;" src="images/<?php echo $image; ?>">&nbsp;<?php echo $image; ?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Price <sup>*</sup></label>
		<div class="controls">
		  <input type="number" id="inputPassword1" name="price"  value="<?php echo $price; ?>"  placeholder="Price" required >
		</div>
	  </div>	
      <div class="control-group">
			<label class="control-label" for="country">Transmission<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="body_type"  value="<?php echo $body_type; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Fuel Type<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="orientation"  value="<?php echo $orientation; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Breaks<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="fourwd_or_awd"  value="<?php echo $fourwd_or_awd; ?>"  placeholder="" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Torque<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="torque"  value="<?php echo $torque; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Top Speed<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="safety"  value="<?php echo $safety; ?>"  placeholder="" required >
			</div>
		</div>
         <div class="control-group">
			<label class="control-label" for="country">Displacement<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="displacement"  value="<?php echo $displacement; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Wheel Type<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="size"  value="<?php echo $size; ?>"  placeholder="" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Doors<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="doors" value="<?php echo $doors; ?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Mileage<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="per_liter_mile"  value="<?php echo $per_liter_mile; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">video<sup>*</sup></label>
			<div class="controls">
			 <input type="file" id="input_email" name="video" value="<img src="videos/<?php echo $video; ?>"" placeholder=""  >
			 		<img style="width:70px;"src="videos/<?php echo $video; ?>">&nbsp;<?php echo $video; ?>
			</div>
		</div>
         
        
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success"  name="update" type="submit" value="Update Car Post" />
			</div>
		</div>
<?php } ?>

<?php
	require_once("../script/admin_post.php");

if (isset($_POST['update'])) {

	$update_id=@$_GET['edit_form'];

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
	
	if ($image_name=="" AND $video_name!="") {
		$object=new AdminPost();
		$object->update_car2($company,$modelName,$engine_type,$price,$body_type,$orientation,$fourwd_or_awd,$torque,$safety,$displacement,$size,$doors,$per_liter_mile,$video_name,$update_id);
	}
	
	else 
	if ($image_name!="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_car1($company,$modelName,$engine_type,$image_name,$price,$body_type,$orientation,$fourwd_or_awd,$torque,$safety,$displacement,$size,$doors,$per_liter_mile,$update_id);
	}
	 
	else
	if ($image_name!="" AND $video_name!=""){
		$object=new AdminPost();
		$object->update_car($company,$modelName,$engine_type,$image_name,$price,$body_type,$orientation,$fourwd_or_awd,$torque,$safety,$displacement,$size,$doors,$per_liter_mile,$video_name,$update_id);
	}
	else
	if ($image_name=="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_car3($company,$modelName,$engine_type,$price,$body_type,$orientation,$fourwd_or_awd,$torque,$safety,$displacement,$size,$doors,$per_liter_mile,$update_id);
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