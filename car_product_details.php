<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Cars Details</title>
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
<?php
	$car_model=@$_GET['car_model'];

	include_once("/script/home.php");

	$obj=new Home();
	$data=$obj->get_car_detail($car_model);

?>
<?php foreach($data as $row){
        $id = $row['id'];
        $company = $row['company'];
        $model = $row['modelName'];
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
?><?php  } ?>
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li><a href="car_products.php?car=<?php echo $company; ?>"><?php echo $company ?></a> <span class="divider">/</span></li>
    			<li class="active"><?php echo $model ?> Details</li>
</ul>
	<div class="row">	  
			<div id="gallery" class="span5">
            <a href="admin/images/<?php echo $image; ?>" title="<?php echo  $company." ".$model; ?>">
				<img src="admin/images/<?php echo $image; ?>" style="width:100%" alt="<?php echo  $company." ".$model; ?>"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">    
                </div>
            </div>
	
			</div>
			<div class="span4">
				<h3><?php echo  $company." ".$model; ?></h3>
				<small>- (<?php echo  $engine_type; ?> Engine Power) <?php echo  $body_type; ?>-Transmission</small>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Price   Rs. <?php echo  $price; ?></span></label>	  
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>  </h4>
				
				<hr class="soft clr"/>
				<p>
					<?php echo  $engine_type; ?> Engine Power.  <br> 
					<?php echo  $body_type; ?>- Transmission.  <br> 
					<?php echo  $orientation; ?> Fuel Type.  <br> 
					<?php echo  $fourwd_or_awd; ?> Breaks. <br> 
					<?php echo  $torque; ?> Torque.  <br> 
					<?php echo  $safety; ?> Top Speed.  <br> 
					<?php echo  $displacement; ?>  Displacement.  <br> 
					<?php echo  $size; ?> Wheel Type.  <br> 
					<?php echo  $doors; ?>  Number of Doors.  <br> 
					<?php echo  $per_liter_mile; ?> Mileage.  <br>
				</p>
				<a class="btn btn-small pull-right" href="#detail">More Details</a>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
            	<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>          
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4><b>Product Information</b></h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow">
					<th colspan="2"><h5>Product Details</h5></th>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Brand:</b> </td>
					<td class="techSpecTD2"><?php echo  $company; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Model:</b></td>
					<td class="techSpecTD2"><?php echo  $model; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Price:</b></td>
					<td class="techSpecTD2"> <?php echo  $price; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Engine Power:</b></td>
					<td class="techSpecTD2"><?php echo  $engine_type; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Transmission:</b></td>
					<td class="techSpecTD2"><?php echo  $body_type; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Fuel Type:</b></td>
					<td class="techSpecTD2"><?php echo  $orientation; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Breaks:</b></td>
					<td class="techSpecTD2"><?php echo  $fourwd_or_awd; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Torque:</b></td>
					<td class="techSpecTD2"><?php echo  $torque; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Top Speed:</b></td>
					<td class="techSpecTD2"><?php echo  $safety; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Displacement:</b></td>
					<td class="techSpecTD2"><?php echo  $displacement; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Wheel Type:</b></td>
					<td class="techSpecTD2"><?php echo  $size; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Number of Doors:</b></td>
					<td class="techSpecTD2"><?php echo  $doors; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Mileage:</b></td>
					<td class="techSpecTD2"><?php echo  $per_liter_mile; ?></td>
				</tr>
				</tbody>
				</table>
				<hr class="soft clr"/>
				<h5>Features</h5>
				<p>
					<?php echo  $engine_type; ?> Engine Power.  ,   
					<?php echo  $body_type; ?>-Transmission.  <br> 
					<?php echo  $orientation; ?> Fuel Type.   ,  
					<?php echo  $fourwd_or_awd; ?> Breaks. <br> 
					<?php echo  $torque; ?> Torque.  ,  
					<?php echo  $safety; ?> Top Speed.  <br> 
					<?php echo  $displacement; ?>  Displacement.  ,  
					<?php echo  $size; ?> Wheel Type.  <br>
					<?php echo  $doors; ?>  Number of Doors.  ,  
					<?php echo  $per_liter_mile; ?> Mileage.  
				</p>
                <br />
                <hr class="soft clr"/>
                <h4>Video Preview</h4>
                <video width="100%"  src="admin/videos/<?php echo $video;?>"    controls allowfullscreen></video>
				<br />
				<hr class="soft clr"/>
				
<div id="location">
 	<?php   include("includes/car_location.php"); ?>
</div>
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
	
	
</body>

</html>