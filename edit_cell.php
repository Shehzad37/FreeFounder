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
    <title>Update Cell Phone Post</title>
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
        	<h2>Update cell Phone Post</h2>

<?php
	$edit_id=@$_GET['edit'];

	include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_cell($edit_id);

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
        $sim = $row['sim'];
        $sd_card = $row['sd_card'];   
        $video = $row['video'];   
?>


    <form class="form-horizontal" method="post" action="edit_cell.php?edit_form=<?php echo $id; ?>"  enctype="multipart/form-data" >
		<div class="control-group">
			<label class="control-label">Cell Phone Companies<sup>*</sup></label>
			<div class="controls">
<?php 
    include_once("../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->get_cell_category();
?>
			<select id="" name="company" required >
				<option value="<?php echo $company; ?>"><?php echo $company; ?></option>
<?php foreach($sql as $row){
        $cell_phone_company_name = $row['cell_phone_company_name'];  
?>
				<option value="<?php echo $cell_phone_company_name; ?>"><?php echo $cell_phone_company_name; ?></option>
<?php } ?>
			</select>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="country">Model Name<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="ModelName" value="<?php echo $model; ?>" placeholder="" required >
			</div>
		</div>	
       
		<div class="control-group">
		<label class="control-label" for="input_email">Select Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" name="image"  value="images/<?php echo $image; ?>" />
		  			<img style="width:70px;" src="images/<?php echo $image; ?>">&nbsp;<?php echo $image; ?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Price <sup>*</sup></label>
		<div class="controls">
		  <input type="number" id="inputPassword1"  name="price" value="<?php echo $price; ?>"  placeholder="Price" required >
		</div>
	  </div>	
      <div class="control-group">
			<label class="control-label" for="country">Size<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="size" value="<?php echo $size; ?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Camera<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="camera"  value="<?php echo $camera; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Battery Power<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email"  name="battery" value="<?php echo $battery_power; ?>"  placeholder="" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Processor<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email"  name="processor" value="<?php echo $processor; ?>"  placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">RAM<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="ram" value="<?php echo $ram ;?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Memory<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="memory" value="<?php echo $memory; ?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">SIM<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="sim" value="<?php echo $sim; ?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">SD Card<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="sdcard" value="<?php echo $sd_card; ?>"   placeholder="" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">video<sup>*</sup></label>
			<div class="controls">
			 <input type="file" id="input_email"  name="video" value="<img src="videos/<?php echo $video; ?>"" placeholder=""  >
			 			<img style="width:70px;"src="videos/<?php echo $video; ?>">&nbsp;<?php echo $video; ?>
			</div>
		</div>
        
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="update"  type="submit" value="Update Cell Phone" />
			</div>
		</div>	
<?php } ?>

<?php	

require_once("../script/admin_post.php");
$image1;
if (isset($_POST['update'])) {

	$update_id=@$_GET['edit_form'];

	$company=$_POST['company'];
	
	$modelName=$_POST['ModelName'];


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
	$sim=$_POST['sim'];
	$sdcard=$_POST['sdcard'];
	$memory=$_POST['memory'];

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
		$object->update_cell2($company,$modelName,$price,$size,$camera,$battery,$processor,$ram,$memory,$sim,$sdcard,$video_name,$update_id);
	}
	
	else 
	if ($image_name!="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_cell1($company,$modelName,$image_name,$price,$size,$camera,$battery,$processor,$ram,$memory,$sim,$sdcard,$update_id);
	}
	 
	else
	if ($image_name!="" AND $video_name!=""){
		$object=new AdminPost();
		$object->update_cell($company,$modelName,$image_name,$price,$size,$camera,$battery,$processor,$ram,$memory,$sim,$sdcard,$video_name,$update_id);
	}
	else
	if ($image_name=="" AND $video_name==""){
		$object=new AdminPost();
		$object->update_cell3($company,$modelName,$price,$size,$camera,$battery,$processor,$ram,$memory,$sim,$sdcard,$update_id);
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