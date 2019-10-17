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
    <title>Cell Shops locations</title>
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
    $product1="CELL PHONES";
    $sql=$obj->getProduct_location($product1);

?>
		<div class="well">
        	<h2>Cell phones Locations</h2>
            <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow">
                	<th>ID</th>
                    <th>Product</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>

                    
                </tr>
 <?php foreach($sql as $row){
        $id = $row['id'];
        $product=$row['product'];
        $city=$row['city'];
        $address=$row['address'];
       
?>
				<tr class="techSpecRow">
                	<td class="techSpecTD1"><?php echo  $id; ?></td>
                    <td class="techSpecTD2"><?php echo  $product; ?></td>
                    <td class="techSpecTD1"><?php echo  $city; ?></td>
                    <td class="techSpecTD2"><textarea rows="12" readonly><?php echo  $address; ?></textarea></td>
                    <th><a href="edit_cell_location.php?edit=<?php echo $id; ?>">Edit</a></th>
                    <th><a href="delete_cell_location.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete selected cell phone location?')" >Delete</a></th>

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