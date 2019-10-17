<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Cell Details</title>
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
	$cell_model=@$_GET['cell_model'];

	include_once("/script/home.php");

	$obj=new Home();
	$data=$obj->get_cell_detail($cell_model);

?>
<?php foreach($data as $row){
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
?><?php  } ?>
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li><a href="cell_products.php?cell=<?php echo $company; ?>"><?php echo $company ?></a> <span class="divider">/</span></li>
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
				<small>- (<?php echo  $camera; ?> Optical Zoom) <?php echo  $size; ?>-inch LCD</small>
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
					<?php echo  $camera; ?> Megapixels Camera.  <br> 
					<?php echo  $size; ?>-inch LCD Screen.  <br> 
					<?php echo  $battery_power; ?> x AA battery Power.  <br> 
					<?php echo  $processor; ?> Processor Speed. <br> 
					<?php echo  $ram; ?> GB RAM.  <br> 
					<?php echo  $memory; ?> GB Internal Memory.  <br> 
					<?php echo  $sim; ?>  SIM.  <br> 
					<?php echo  $sd_card; ?> GB SD Card Supported.  <br> 
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
					<td class="techSpecTD1"><b>Display Size:</b></td>
					<td class="techSpecTD2"><?php echo  $size; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Camera:</b></td>
					<td class="techSpecTD2"><?php echo  $camera; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Battery Power:</b></td>
					<td class="techSpecTD2"><?php echo  $battery_power; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Processor:</b></td>
					<td class="techSpecTD2"><?php echo  $processor; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>RAM:</b></td>
					<td class="techSpecTD2"><?php echo  $ram; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>Internal Memory:</b></td>
					<td class="techSpecTD2"><?php echo  $memory; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>SIM:</b></td>
					<td class="techSpecTD2"><?php echo  $sim; ?></td>
				</tr>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b>SD Card Supported:</b></td>
					<td class="techSpecTD2"><?php echo  $sd_card; ?></td>
				</tr>
				</tbody>
				</table>
				<hr class="soft clr"/>
				<h5>Features</h5>
				<p>
					<?php echo  $camera; ?> Megapixels Camera.  ,   
					<?php echo  $size; ?>-inch LCD Screen.  <br> 
					<?php echo  $battery_power; ?> x AA battery Power.   ,  
					<?php echo  $processor; ?> Processor Speed. <br> 
					<?php echo  $ram; ?> GB RAM.  ,  
					<?php echo  $memory; ?> GB Internal Memory.  <br> 
					<?php echo  $sim; ?>  SIM.  ,  
					<?php echo  $sd_card; ?> GB SD Card Supported.  <br>
				</p>
                <br />
                <hr class="soft clr"/>
                <h4>Video Preview</h4>
                <video width="100%"   src="admin/videos/<?php echo $video;?>"    controls allowfullscreen></video>
				<br />
				<hr class="soft clr"/>

<div id="location">
 	<?php   include("includes/cell_location.php"); ?>
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