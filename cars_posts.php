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
    <title>Cars Posts</title>
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
<?php 
    include_once("/../script/admin_post.php");

    $obj=new AdminPost();
    $sql=$obj->getCar();

?>
		<div class="well">
        	<h2>Cars Posts</h2>
            <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow">
                	<th>Post ID</th>
                    <th>Product Type</th>
                    <th>Product Model</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Details</th>            
                </tr>
 <?php foreach($sql as $row){
        $id = $row['id'];
        $company = $row['company'];
        $name = $row['modelName'];
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
       
?>
				<tr class="techSpecRow">
                    <td class="techSpecTD1"><?php echo  $id; ?></td>
                    <td class="techSpecTD2"><?php echo  $company; ?></td>
                    <td class="techSpecTD1"><?php echo  $name; ?></td>
                    <td class="techSpecTD2"><?php echo  $price; ?></td>
                    <td class="techSpecTD2"><center><img style="width:50px; height:50px; " src="images/<?php echo $image; ?>"></center></td>
                    <th><a href="edit_car.php?edit=<?php echo $id; ?>">Edit</a></th>
                    <th><a href="delete_car.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete selected car post?')" >Delete</a></th>
                    <th><a href="detail_car.php?detail=<?php echo $id; ?>">Details</a></th>
                </tr>
<?php  } ?> 
				</tbody>
				</table>
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