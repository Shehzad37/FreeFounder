<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Filter Laptops</title>
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
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li><a onclick="history.go(-1);">Laptops</a> <span class="divider">/</span></li>
    			<li class="active">Filtered Laptops</li>
</ul>
	<h3> Your Filtered Laptops <small class="pull-right"> </small></h3>	

	<hr class="soft"/>
	
   

    
	<hr class="soft"/>
	
	  
<div id="myTab" class="pull-right">
 
</div><br>
<br class="clr"/>
<div class="tab-content">
	

	<div class="tab-pane  active" id="blockView">
		<?php include("includes/block_filter_laptop.php");?>
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
	


</html>