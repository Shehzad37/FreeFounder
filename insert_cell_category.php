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
    <title>Insert Cell Phone Category</title>
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
    
	<h3> Cell Phone Categories</h3>	
	<hr class="soft"/>
<?php
	include_once("../script/admin_post.php");

	$obj=new AdminPost();
	$data=$obj->get_cell_category();

?>

	<table class="table table-bordered">
			<tbody>
				<tr class="techSpecRow">
					<th colspan="2"><h5>Cell Phones Categories Details</h5></th>
				</tr>
				<tr class="techSpecRow">
                	<th>Category ID</th>
                    <th>Cell Phones Categories</th>
                    <th>Delete</th>   
                </tr>
<?php foreach($data as $row){
        $id = $row['cell_phone_company_id'];
        $cell_phone_company_name = $row['cell_phone_company_name'];
 
?>
				<tr class="techSpecRow">
					<td class="techSpecTD1"><b><?php echo  $id; ?></b> </td>
					<td class="techSpecTD2"><?php echo  $cell_phone_company_name; ?></td>
					<th><a href="delete_cell_category.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete selected cell phone Category?')" >Delete</a></th>
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
			<h2>Insert New Cell Phone Category</h2>
			<form  method="post" action="insert_cell_category.php" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">New Category</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" name="category" placeholder="New Category" required >
				</div>
			  </div>
			 
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" name="submit" class="btn">Insert New Cell Phone Category</button> 
				</div>
			  </div>

<?php
	require_once("/../script/admin.php");

	if (isset($_POST['submit'])) {
		$cell_phone_company_name=$_POST['category'];
		$category_id='1';

			$object=new AdminPost();
		$object->insert_cell_category($cell_phone_company_name,$category_id);
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