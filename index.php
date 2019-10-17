

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Free Founder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
<?php include("includes/toplinks.php"); ?>

  </head>
<body>
<div id="header">
  </div>
  <div id="header2">
    <?php  include("includes/header.php"); ?>
  </div>
<!-- Header End====================================================================== --></div>
<div id="carouselBlk">
	<?php  include("includes/carusel.php"); ?>
</div>
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
    			<li class="active">Home</li>
    		</ul>	
			<?php  include("includes/cell_slider.php"); ?>
		</div>

    <!-- CELL PHONES=============================================================================== -->    
        
        <div >		
			<?php  include("includes/laptop_slider.php"); ?>
		</div>
        
        <!-- LAPTOPS end=============================================== -->
 
         <div >		
			<?php  include("includes/car_slider.php"); ?>
		</div>
        
        <!-- CARS end=============================================== -->
				
</div>
		</div><!-- End Span9 -->
		</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End mainBody -->
<!-- Footer ================================================================== -->
<div  id="footerSection">
	<?php include("includes/footer.php"); ?>	
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	
    <?php include("includes/bottomlinks.php"); ?>
	

</body>


</html>

