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
    <title>Insert Cell Phone Post</title>
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
        	<h2>Insert New cell Phone Post</h2>
        	<form class="form-horizontal" method="post" action="insert_cell.php"  enctype="multipart/form-data" >
		
		
		<div class="control-group">
			<label class="control-label">Cell Phone Companies<sup>*</sup></label>
			<div class="controls">
<?php 
    include_once("../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->get_cell_category();
?>
			<select id="" name="company" required >
				<option value="">---</option>
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
			 <input type="text" id="input_email" name="ModelName" placeholder="Model Name" required >
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
		  <input type="number" id="inputPassword1"  name="price" placeholder="Price" required >
		</div>
	  </div>	
      <div class="control-group">
			<label class="control-label" for="country">Size<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="size"  placeholder="Screen Size in Inches" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Camera<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="camera"  placeholder="Camera " required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Battery Power<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email"  name="battery" placeholder="Battery Power" required >
			</div>
		</div>  
        <div class="control-group">
			<label class="control-label" for="country">Processor<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email"  name="processor" placeholder="Processor" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">RAM<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="ram"  placeholder="RAM" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">Memory<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="memory"  placeholder="Memory" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">SIM<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="sim"  placeholder="SIM<" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">SD Card<sup>*</sup></label>
			<div class="controls">
			 <input type="text" id="input_email" name="sdcard"  placeholder="SD Card" required >
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="country">video<sup>*</sup></label>
			<div class="controls">
			 <input type="file" id="input_email"  name="video" placeholder=""  >
			</div>
		</div>
        
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="submit"  type="submit" value="Post Cell Phone" />
			</div>
		</div>	
<?php	

require_once("../script/admin_post.php");

if (isset($_POST['submit'])) {

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
			if ($image_size<=1000000) {
				move_uploaded_file($image_tmp, "images/$image_name");
			}else{
				echo "<script>alert('Image size is greater than 1 MB !')</script>";
			}
		}	

	if ($video_type=='video/mp4' OR $video_type=='video/avi' OR $video_type=='video/mov'
		 OR $video_type=='video/"3gp' OR $video_type=='video/mpeg' )
			if ($image_size<=10000000) {
				move_uploaded_file($video_tmp, "videos/$video_name");
			}else{ {
				echo "<script>alert('Video size is greater than 10 MB !')</script>";
			}
	}	
	
	$obj=new AdminPost();
	$data=$obj->check_cell($company,$modelName);
	if ($data) {
		echo "<script>alert('Cell Phone already exists, try another one!')</script>";
	}else{
		$object=new AdminPost();
		$object->insert_cell_phone($company,$modelName,$image_name,$price,$size,$camera,$battery,$processor,$ram,$memory,$sim,$sdcard,$video_name);
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