<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Compair Cell Phones</title>
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
require_once("/script/home.php");

if (isset($_POST['submit'])) {
	$product_1=$_POST['product_1'];
	$product_2=$_POST['product_2'];	

	$object1=new Home();
	$object2=new Home();
	$product1=$object1->get_cell_detail($product_1);
	$product2=$object2->get_cell_detail($product_2);
}
?>
<ul class="breadcrumb">
          <li><a href="index.php">Home</a> <span class="divider">/</span></li>
          <li><a onclick="history.go(-1);">Cell Phones</a> <span class="divider">/</span></li>
          <li class="active">Compairing Cell Phones</li>
</ul>
	<h3> Cell Phones Compairsition <small class="pull-right"> 2 products are compaired </small></h3>	
	<hr class="soft"/>

	<table id="compairTbl" class="table table-bordered">
<?php foreach($product1 as $row1){
        $id1 = $row1['id'];
        $company1 = $row1['company'];
        $model1 = $row1['model'];
        $image1 = $row1['image'];
        $price1 = $row1['price'];
        $size1 = $row1['size'];
        $camera1 = $row1['camera'];  
        $battery_power1 = $row1['battery_power'];
        $processor1 = $row1['processor'];
        $ram1 = $row1['ram'];
        $memory1 = $row1['memory'];
        $sim1 = $row1['sim'];
        $sd_card1 = $row1['sd_card'];   
        $video1 = $row1['video'];    
?>   <?php  } ?>	

<?php foreach($product2 as $row2){
        $id2 = $row2['id'];
        $company2 = $row2['company'];
        $model2 = $row2['model'];
        $image2 = $row2['image'];
        $price2 = $row2['price'];
        $size2 = $row2['size'];
        $camera2 = $row2['camera'];  
        $battery_power2 = $row2['battery_power'];
        $processor2 = $row2['processor'];
        $ram2 = $row2['ram'];
        $memory2 = $row2['memory'];
        $sim2 = $row2['sim'];
        $sd_card2 = $row2['sd_card'];   
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
                  <td>Price</td>
                  <td><?php echo  $price1; ?></td>
                  <td><?php echo  $price2; ?></td>
                </tr>
				<tr>
                  <td>Display Size</td>
                  <td><?php echo  $size1; ?></td>
                  <td><?php echo  $size2; ?></td>
                </tr>
				<tr>
                  <td>Camera</td>
                  <td><?php echo  $camera1; ?></td>
                  <td><?php echo  $camera2; ?></td>
                </tr>
                <tr>
                  <td>Battery Power</td>
                  <td><?php echo  $battery_power1; ?></td>
                  <td><?php echo  $battery_power2; ?></td>
                </tr>
                <tr>
                  <td>Processor</td>
                  <td><?php echo  $processor1; ?></td>
                  <td><?php echo  $processor2; ?></td>
                </tr>
				<tr>
                  <td>RAM</td>
                  <td><?php echo  $ram1; ?></td>
                  <td><?php echo  $ram2; ?></td>
                </tr>
				<tr>
                  <td>Internal Memory</td>
                  <td><?php echo  $memory1; ?></td>
                  <td><?php echo  $memory2; ?></td>
                </tr>
				<tr>
                  <td>SIM</td>
                  <td><?php echo  $sim1; ?></td>
                  <td><?php echo  $sim2; ?></td>
                </tr>
                <tr>
                  <td>SD Card</td>
                  <td><?php echo  $sd_card1; ?></td>
                  <td><?php echo  $sd_card2; ?></td>
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