<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Laptops</title>
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
	$laptop_name=@$_GET['laptop'];

	include_once("/script/home.php");

	$obj=new Home();
	$count=$obj->count_laptop_category($laptop_name);
	

    $object=new Home();
    $data=$object->get_laptop($laptop_name);

?>
	<div class="span9">
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
        $resolution = $row['resolution'];
        $pixel = $row['pixel']; 
        $cache = $row['cache'];
        $graphic_card = $row['graphic_card'];  
        $video = $row['video'];
?>
<?php  } ?>
<ul class="breadcrumb">
    			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
    			<li class="active"><?php echo $company; ?></li>
</ul>
	<h3> <?php echo  $company; ?> <small class="pull-right"><?php echo  $count; ?> products are available </small></h3>	
	<hr class="soft"/>
	
    <div class="well">
    	<form class="form-inline navbar-search" method="post" action="compair_laptop.php" >
		
		  <select class="srchTxt" name="product_1" required >
			<option value="">Model Number</option>
<?php foreach($data as $row){
		$id = $row['id'];
        $company = $row['company'];
        $model = $row['model'];
        
?>
			<option value="<?php echo $model; ?>"><?php echo  $model; ?></option>
<?php  } ?>	
		</select> 
        &nbsp;&nbsp;
    
		  <select class="srchTxt" name="product_2" required >
			<option value="">Model Number</option>
<?php foreach($data as $row){
		$id = $row['id'];
        $company = $row['company'];
        $model = $row['model'];
        
?>
			<option value="<?php echo $model; ?>"><?php echo  $model; ?></option>
<?php  } ?>	
		</select>
        
		   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    
	
	<button type="submit" id="submitButton" name="submit" class="btn btn-primary btn-primary btn-large pull-right">Compair Product</button>
	</form>
			<br class="clr"/>
</div>
    
 <div class="well">
    	<form class="form-inline navbar-search" method="post" action="filter_laptop.php" >
		<input type="hidden" name="company" value="<?php echo  $company; ?>" >
		  <select class="srchTxt" name="min" required >
			<option value="">Price From</option>
			<option value="1000">Rs 1000 </option>
			<option value="5000">Rs 5000 </option>
			<option value="10000">Rs 10000 </option>
			<option value="20000">Rs 20000 </option>
			<option value="30000">Rs 30000 </option>
			<option value="40000">Rs 40000 </option>
			<option value="50000">Rs 50000 </option>
			<option value="80000">Rs 80000 </option>
			<option value="100000">Rs 100000 </option>
			<option value="120000">Rs 120000 </option>
		</select> 
        &nbsp;&nbsp;
    
		  <select class="srchTxt" name="max" required >
			<option value="">Price To</option>
			<option value="5000">Rs 5000 </option>
			<option value="10000">Rs 10000 </option>
			<option value="20000">Rs 20000 </option>
			<option value="30000">Rs 30000 </option>
			<option value="40000">Rs 40000 </option>
			<option value="50000">Rs 50000 </option>
			<option value="80000">Rs 80000 </option>
			<option value="100000">Rs 100000 </option>
			<option value="120000">Rs 120000 </option>
			<option value="150000">Rs 150000 </option>	
		</select>
        
		   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    
	
	<button type="submit" id="submitButton" name="filter" class="btn btn-success btn-large pull-right">Filter Product</button>
	</form>
			<br class="clr"/>
</div>
	<hr class="soft"/>
	
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div><br>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		<?php include("includes/listproducts_laptop.php"); ?>
		<hr class="soft"/>
	</div>

	<div class="tab-pane  active" id="blockView">
		<?php include("includes/blockproducts_laptop.php");?>
	<hr class="soft"/>
	</div>
</div>
	<div class="well">
		<form class="form-inline navbar-search" method="post" action="compair_laptop.php" >
		
		 <select class="srchTxt" name="product_1" required >
			<option value="">Model Number</option>
<?php foreach($data as $row){
		$id = $row['id'];
        $company = $row['company'];
        $model = $row['model'];
        
?>
			<option value="<?php echo $model; ?>"><?php echo  $model; ?></option>
<?php  } ?>	
		</select> 
        &nbsp;&nbsp;
    
		  <select class="srchTxt" name="product_2" required >
			<option value="">Model Number</option>
<?php foreach($data as $row){
		$id = $row['id'];
        $company = $row['company'];
        $model = $row['model'];
        
?>
			<option value="<?php echo $model; ?>"><?php echo  $model; ?></option>
<?php  } ?>	
		</select>
        
		   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    
	
	<button type="submit" id="submitButton" name="submit" class="btn btn-large pull-right">Compair Product</button>
	</form>
			<br class="clr"/>
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