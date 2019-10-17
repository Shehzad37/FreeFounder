<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Laptops Ads</title>
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
<?php
	include_once("/script/home.php");

	$obj=new Home();
	$product_type="LAPTOP";
	$count=$obj->count_product_ads($product_type);

?>
	<div class="span9">
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li class="active">Laptops Ads</li>
</ul>

	<h3> LAPTOPS ADS <small class="pull-right"> <?php echo  $count; ?> products are available </small></h3>	

	<hr class="soft"/>

	<hr class="soft"/>
	
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div><br>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		<?php include("includes/list_ads_laptop.php"); ?>
		<hr class="soft"/>
	</div>

	<div class="tab-pane  active" id="blockView">
		<?php include("includes/block_ads_laptop.php");?>
	<hr class="soft"/>
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