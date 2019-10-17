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
    <title>Update Laptop Post</title>
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
        	<h2>Insert New Laptop Post</h2>

<?php
	$edit_id=@$_GET['edit'];

	include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_laptop($edit_id);

?>
<?php foreach($data as $row){
	
	global $image;
	
        $id = $row['id'];
        $company = $row['company'];
        $model = $row['model'];
        $image = $row['image'];
        $price = $row['price'];
        $size = $row['size'];
        $camera = $row['camera'];  
        $battery_power = $row['battery_power'];
        $processor = $row['processor'];
        $ram = $row['ram'];
        $memory = $row['memory'];
        $resolution = $row['resolution'];
        $pixel = $row['pixel']; 
        $cache = $row['cache'];
        $graphic_card = $row['graphic_card'];  
        $video = $row['video'];   
?>

        	<form class="form-horizontal" method="post" action="edit_laptop.php?edit_form=<?php echo $id; ?>"  enctype="multipart/form-data"  >
		
		
		<div class="control-group">
			<label class="control-label">Laptop Companies<sup>*</sup></label>
			<div class="controls">
<?php 
    include_once("../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->get_laptop_category();
?>
			<select id=""  name="company"  required >
				<option value="<?php echo $company; ?>"><?php echo $company; ?></option>
<?php foreach($sql as $row){
        $laptop_company_name = $row['laptop_company_name'];  
?>
				<option value="<?php echo $laptop_company_name; ?>"><?php echo $laptop_company_name; ?></option>
<?php } ?>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="country">Model Name<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email"name="modelName" value="<?php echo $model; ?>" placeholder="Model Name" required >
			</div>
		</div>	
		<div class="control-group">
		<label class="control-label" for="input_email">Select Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="input_email" name="image" value="<img src="images/<?php echo $image; ?>""  placeholder="Image"  >
		  			<img style="width:70px;" src="images/<?php echo $image; ?>">&nbsp;<?php echo $image; ?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Price <sup>*</sup></label>
		<div class="controls">
		  <input type="number" id="inputPassword1" name="price"  value="<?php echo $price; ?>" placeholder="Price" required >
		</div>
	  </div>	
      <div class="control-group">
			<label class="control-label" for="country">Display Size<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="size" value="<?php echo $size; ?>"  placeholder="Display Size" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Camera<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="camera" value="<?php echo $camera; ?>"  placeholder="Camera" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Battery Power<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="battery"  value="<?php echo $battery_power; ?>"  placeholder="Battery Power" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Processor<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="processor"  value="<?php echo $processor; ?>"  placeholder="Processor" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">RAM<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="ram" value="<?php echo $ram; ?>"   placeholder="Ram" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Memory<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="memory" value="<?php echo $memory; ?>"   placeholder="Memory" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Resolution<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="resolution"  value="<?php echo $resolution; ?>"  placeholder="Resolution" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Pixel Destiny<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="pixel"  value="<?php echo $pixel; ?>"  placeholder="Pixel Destiny" required >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="country">Cache smrt<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="cache"  value="<?php echo $cache; ?>"  placeholder="Cache" required >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="country">Graphic Card<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="graphic"  value="<?php echo $graphic_card; ?>"  placeholder="Graphic Card" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">video<sup>*</sup></label>
			<div class="controls">
			 <input type="file" id="input_email"  name="video" value="<img src="videos/<?php echo $video; ?>"" placeholder="video" >
			 		<img style="width:70px;"src="videos/<?php echo $video; ?>">&nbsp;<?php echo $video; ?>
			</div>
		</div>
         
        
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit"  name="update" value="Update Laptop post" />
			</div>
		</div>	
<?php } ?>
<?php	

require_once("../script/admin_post.php");

if (isset($_POST['update'])) {

	$update_id=@$_GET['edit_form'];

	$company=$_POST['company'];
	
	$modelName=$_POST['modelName'];

	$image_name=$_FILES['image']['name'];
	$image_type=$_FILES['image']['type'];
	$image_size=$_FILES['image']['size'];
	$image_tmp=$_FILES['image']['tmp_name'];

	$price=$_POST['price'];
	$size=$_POST['size'];
	$camera=$_POST['camera'];
	$battery=$_POST['battery'];
	$processor=$_POST['processor'];
	$ram=$_POST['ram'];
	$memory=$_POST['memory'];
	$resolution=$_POST['resolution'];
	$pixel=$_POST['pixel'];
	$cache=$_POST['cache'];
	$graphic=$_POST['graphic'];

	$video_name=$_FILES['video']['name'];
	$video_type=$_FILES['video']['type'];
	$video_size=$_FILES['video']['size'];
	$video_tmp=$_FILES['video']['tmp_name'];

	if ($image_type=='image/jpeg' OR $image_type=='image/png' OR $image_type=='image/gif' ) {
			if ($image_size<=3000000) {
				move_uploaded_file($image_tmp, "images/$image_name");
			}else{
				echo "<script>alert('Image size is greater than 3 MB !')</script>";
			}
		}	

	if ($video_type=='video/mp4' OR $video_type=='video/avi' OR $video_type=='video/mov'
		 OR $video_type=='video/"3gp' OR $video_type=='video/mpeg' ) {
			if ($video_size<=30000000) {
				move_uploaded_file($video_tmp, "videos/$video_name");
			}else{
				echo "<script>alert('Video size is greater than 30 MB !')</script>";
			}
		}	
	
	if ($image_name=="" AND $video_name!="") {
		$object=new AdminPost();
		$object->update_laptop2($company,$modelName,$price,$size,$camera,$battery,$processor,$ram,$memory,$resolution,$pixel,$cache,$graphic,$video_name,$update_id);
	}
	
	else 
	if ($image_name!="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_laptop1($company,$modelName,$image_name,$price,$size,$camera,$battery,$processor,$ram,$memory,$resolution,$pixel,$cache,$graphic,$update_id);
	}
	 
	else
	if ($image_name!="" AND $video_name!=""){
		$object=new AdminPost();
		$object->update_laptop($company,$modelName,$image_name,$price,$size,$camera,$battery,$processor,$ram,$memory,$resolution,$pixel,$cache,$graphic,$video_name,$update_id);
	}
	else
	if ($image_name=="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_laptop3($company,$modelName,$price,$size,$camera,$battery,$processor,$ram,$memory,$resolution,$pixel,$cache,$graphic,$update_id);
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