<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Compair Cars</title>
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
          <li><a onclick="history.go(-1);">Cars</a> <span class="divider">/</span></li>
          <li class="active">Compairing Cars</li>
</ul>
 <?php 
require_once("/script/home.php");

if (isset($_POST['submit'])) {
	$product_1=$_POST['product_1'];
	$product_2=$_POST['product_2'];	

	$object1=new Home();
	$object2=new Home();
	$product1=$object1->get_car_detail($product_1);
	$product2=$object2->get_car_detail($product_2);
}
?>  
	<h3> Cars Compairsition <small class="pull-right"> 2 products are compaired </small></h3>	
	<hr class="soft"/>

	<table id="compairTbl" class="table table-bordered">
<?php foreach($product1 as $row1){
        $id1 = $row1['id'];
        $company1 = $row1['company'];
        $model1 = $row1['modelName'];
        $engine_type1 = $row1['engine_type'];
        $image1 = $row1['image'];
        $price1 = $row1['price'];
        $body_type1 = $row1['body_type'];
        $orientation1 = $row1['orientation'];  
        $fourwd_or_awd1 = $row1['fourwd_or_awd'];
        $torque1 = $row1['torque'];
        $safety1 = $row1['safety'];
        $displacement1 = $row1['displacement'];
        $size1 = $row1['size'];
        $doors1 = $row1['doors']; 
        $per_liter_mile1 = $row1['per_liter_mile'];  
        $video1 = $row1['video'];   
?>   <?php  } ?>	

<?php foreach($product2 as $row2){
        $id2 = $row2['id'];
        $company2 = $row2['company'];
        $model2 = $row2['modelName'];
        $engine_type2 = $row2['engine_type'];
        $image2 = $row2['image'];
        $price2 = $row2['price'];
        $body_type2 = $row2['body_type'];
        $orientation2 = $row2['orientation'];  
        $fourwd_or_awd2 = $row2['fourwd_or_awd'];
        $torque2 = $row2['torque'];
        $safety2 = $row2['safety'];
        $displacement2 = $row2['displacement'];
        $size2 = $row2['size'];
        $doors2 = $row2['doors']; 
        $per_liter_mile2 = $row2['per_liter_mile'];  
        $video2 = $row2['video'];   
?>   <?php  } ?>

              <thead>
                <tr>
                  <th>Features</th>
                  <th><center><?php echo  $company1."  ".$model1; ?> </center></th>
                  <th><center><?php echo  $company2."  ".$model2; ?></center></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>&nbsp;</td>
                  <td style="text-align:center">
					
				<img src="admin/images/<?php echo $image1; ?>" alt=""/>
				<form class="form-horizontal qtyFrm">
				<h3>$<?php echo $price1; ?></h3><br/>
				</form>
				</td>
                  <td>
				  
				<img src="admin/images/<?php echo $image2; ?>" alt=""/>
				
				<form class="form-horizontal qtyFrm">
				<h3>$<?php echo $price2; ?></h3>
				<br/>
				</form>
				  </td>
                </tr>
                <tr>
                  <td>Brand</td>
                  <td><?php echo  $company1; ?></td>
                  <td><?php echo  $company2; ?></td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td><?php echo  $model1; ?></td>
                  <td><?php echo  $model2; ?></td>
                </tr>
				<tr>
                  <td>Engine Power</td>
                  <td><?php echo  $engine_type1; ?></td>
                  <td><?php echo  $engine_type2; ?></td>
                </tr>
				<tr>
                  <td>Price</td>
                  <td><?php echo  $price1; ?></td>
                  <td><?php echo  $price2; ?></td>
                </tr>
				<tr>
                  <td>Transmission</td>
                  <td><?php echo  $body_type1; ?></td>
                  <td><?php echo  $body_type2; ?></td>
                </tr>
                <tr>
                  <td>Fuel Type</td>
                  <td><?php echo  $orientation1; ?></td>
                  <td><?php echo  $orientation2; ?></td>
                </tr>
                <tr>
                  <td>Breaks</td>
                  <td><?php echo  $fourwd_or_awd1; ?></td>
                  <td><?php echo  $fourwd_or_awd2; ?></td>
                </tr>
				<tr>
                  <td>Torque</td>
                  <td><?php echo  $torque1; ?></td>
                  <td><?php echo  $torque2; ?></td>
                </tr>
				<tr>
                  <td>Top Speed</td>
                  <td><?php echo  $safety1; ?></td>
                  <td><?php echo  $safety2; ?></td>
                </tr>
				<tr>
                  <td>Displacement</td>
                  <td><?php echo  $displacement1; ?></td>
                  <td><?php echo  $displacement2; ?></td>
                </tr>
                <tr>
                  <td>Wheel Type</td>
                  <td><?php echo  $size1; ?></td>
                  <td><?php echo  $size2; ?></td>
                </tr>
                <tr>
                  <td>Number of Doors</td>
                  <td><?php echo  $doors1; ?></td>
                  <td><?php echo  $doors2; ?></td>
                </tr>
                <tr>
                  <td>Mileage</td>
                  <td><?php echo  $per_liter_mile1; ?></td>
                  <td><?php echo  $per_liter_mile2; ?></td>
                </tr>
                <tr>
                  <td>Video Preview</td>
                  <td><video width="100%" height="400px"  src="admin/videos/<?php echo $video1;?>"    controls allowfullscreen></video></td>
                  <td><video width="100%" height="400px"  src="admin/videos/<?php echo $video2;?>"    controls allowfullscreen></video></td>
                </tr>
              </tbody>

            </table>		
	
	
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