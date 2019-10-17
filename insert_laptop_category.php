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
    <title>Insert Laptop Category</title>
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
    
	<h3> Laptops Categories</h3>	
	<hr class="soft"/>
<?php
	include_once("../script/admin_post.php");

	$obj=new AdminPost();
	$data=$obj->get_laptop_category();

?>

	<table class="table table-bordered">
			<tbody>
				<tr class="techSpecRow">
					<th colspan="2"><h5>Laptops Categories Details</h5></th>
				</tr>
				<tr class="techSpecRow">
                	<th>Category ID</th>
                    <th>Laptops Categories</th>
                    <th>Delete</th>   
                </tr>
<?php foreach($data as $row){
        $id = $row['laptop_company_id'];
        $laptop_company_name = $row['laptop_company_name'];
 
?>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b><?php echo  $id; ?></b> </td>
					<td class="techSpecTD2"><?php echo  $laptop_company_name; ?></td>
					<th><a href="delete_laptop_category.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete selected Laptop Category?')" >Delete</a></th>
<?php  } ?>
				</tr>
			</tbody>
	</table>

<hr class="soft"/>
	<div class="row">
		
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h2>Insert New Laptop Category</h2>
			<form  method="post" action="insert_laptop_category.php" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">New Category</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" name="category" placeholder="New Category" required >
				</div>
			  </div>
			 
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" name="submit" class="btn">Insert New Laptop Category</button> 
				</div>
			  </div>

<?php
	require_once("/../script/admin.php");

	if (isset($_POST['submit'])) {
		$laptop_company_name=$_POST['category'];
		$category_id='1';

			$object=new AdminPost();
		$object->insert_laptop_category($laptop_company_name,$category_id);
	}
?>

			</form>
		</div>
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