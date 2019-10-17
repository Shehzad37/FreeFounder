<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Cell Ads Details</title>
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
	$ads_id=@$_GET['ads_id'];

	include_once("/script/home.php");

	$obj=new Home();
	$user_id=$obj->get_userId($ads_id);
	$object=new Home();
	$data=$object->get_product_ads_detail($ads_id);
	$object1=new Home();
	$sql=$object1->get_user_detail($user_id);

?>
<?php foreach($data as $row){
        				$id = $row['ads_id'];
                        $product_type = $row['product_type'];
                        $product_category = $row['product_category'];
                        $product_model = $row['product_model'];
                        $image = $row['image'];
                        $product_price = $row['product_price']; 
?><?php  } ?>
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li><a href="cell_ads.php">Cell Phones Ads</a> <span class="divider">/</span></li>
    			<li class="active"><?php echo $product_model ?> Details</li>
</ul>
	<div class="row">	  
			<div id="gallery" class="span5">
            <a href="poster/images/<?php echo $image; ?>" title="<?php echo  $product_category." ".$product_model; ?>">
				<img src="poster/images/<?php echo $image; ?>" style="width:100%" alt="<?php echo  $product_category." ".$product_model; ?>"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">    
                </div>
            </div>
			</div>
			<div class="span4">
				<h3><?php echo  $product_category." ".$product_model; ?></h3>
				
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Price   Rs. <?php echo  $product_price; ?></span></label>	  
				  </div>
				</form>	
				<hr class="soft"/>
				<h4>  </h4>		
				<hr class="soft clr"/>
				<p>
				</p>
				<a class="btn btn-small pull-right" href="#detail">Poster Details</a>
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>	
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
            	<li class="active"><a href="#profile" data-toggle="tab">Postor Details</a></li>
            	<li><a href="#product_detail" data-toggle="tab">Actual Cell Phone Details</a></li>           
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="profile">
			  		<?php include("includes/all_ads_poster_details.php"); ?>
              </div>


              <div class="tab-pane fade" id="product_detail">
				<div id="myTab" class="pull-right">	
					<?php if ($product_type=="CELL PHONE") {  ?>
                		<?php include("includes/cell_ads_details.php"); ?>
					<?php }else ?>
					<?php if ($product_type=="LAPTOP") {  ?>
						<?php include("includes/laptop_ads_details.php"); ?>
					<?php }else ?>
					<?php if ($product_type=="Car") {  ?>
						<?php include("includes/car_ads_details.php"); ?>
					<?php } ?>
                </div>
            </div>		
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