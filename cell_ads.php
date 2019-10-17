<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: /FreeFounder/login.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title>Cell Ads</title>
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
   
	<h3> My Cell Phone Posts</h3>	
    <h3>
<?php 
    include_once("/../script/admin_post.php");
    
    $obj=new AdminPost();
    $product="CELL PHONE";
    $sql=$obj->getPost($product);

?>
 </h3>  
	<div class="well">
	 <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow">
                	<th>Post ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Product Type</th>
                    <th>Product Category</th>
                    <th>Product Model</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Delete</th>
                    
                    
                </tr>
                <?php foreach($sql as $row){
                        $id = $row['ads_id'];
                        $user_name = $row['fullname'];
                        $email = $row['email'];
                        $product_type = $row['product_type'];
                        $product_category = $row['product_category'];
                        $product_model = $row['product_model'];
                        $image = $row['image'];
                        $product_price = $row['product_price'];    
                 ?>
				<tr class="techSpecRow">
                	<td class="techSpecTD1"><?php echo $id; ?></td>
                    <td class="techSpecTD1"><?php echo $user_name; ?></td>
                    <td class="techSpecTD1"><?php echo $email; ?></td>
                    <td class="techSpecTD2"><?php echo $product_type; ?></td>
                    <td class="techSpecTD2"><?php echo $product_category; ?></td>
                    <td class="techSpecTD1"><?php echo $product_model; ?></td>
                    <td class="techSpecTD2"><?php echo $product_price; ?></td>
                    <td class="techSpecTD2"><center><img style="width:50px; height:50px; " src="/FreeFounder/poster/images/<?php echo $image; ?>"></center></td>
                    <th><a href="delete_ads.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete selected cell phone ads?')" >Delete</a></th>
                    
                </tr>
				<?php  } ?>
				</tbody>
				</table>
	
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
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
		<?php include("includes/themeswitch.php");  ?>
	</div>
</div>
<span id="themesBtn"></span>
</body>


</html>

<?php
}
?>