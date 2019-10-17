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
    <title>Laptops Details</title>
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
        <div class="well">
            <h2>Detail Laptop Post</h2>

<?php
    $detail_id=@$_GET['detail'];

    include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_laptop($detail_id);

?>
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

    <table class="table table-bordered">
                <tbody>
                <tr class="techSpecRow">
                    <th>Post ID</th>
                    <td class="techSpecTD1"><?php echo  $id; ?></td>
                </tr>
                <tr class="techSpecRow">
                    <th>Product Type</th>
                    <td class="techSpecTD2"><?php echo  $company; ?></td>
                </tr>    
                <tr class="techSpecRow">
                    <th>Product Model</th>
                    <td class="techSpecTD1"><?php echo  $model; ?></td>
                </tr>   
                <tr class="techSpecRow">  
                    <th>Product Image</th>
                    <td class="techSpecTD2"><center><img style="width:50px; height:50px; " src="images/<?php echo $image; ?>"></center></td>
                </tr>
                <tr class="techSpecRow"> 
                    <th>Product Price</th>
                    <td class="techSpecTD2"><?php echo  $price; ?></td>
                </tr> 
                <tr class="techSpecRow">
                    <th>Size</th>
                    <td class="techSpecTD2"><?php echo  $size; ?></td>
                </tr>
                <tr class="techSpecRow">
                    <th>Camera</th>
                    <td class="techSpecTD2"><?php echo  $camera; ?></td>
                </tr>    
                <tr class="techSpecRow">
                    <th>Battery Power</th>
                    <td class="techSpecTD2"><?php echo  $battery_power; ?></td>
                </tr>   
                <tr class="techSpecRow"> 
                    <th>Processor</th>
                    <td class="techSpecTD2"><?php echo  $processor; ?></td>
                </tr> 
                <tr class="techSpecRow">  
                    <th>RAM</th>
                    <td class="techSpecTD2"><?php echo  $ram; ?></td>
                </tr>
                <tr class="techSpecRow"> 
                    <th>Memory</th>
                    <td class="techSpecTD2"><?php echo  $memory; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Resolution</th>
                    <td class="techSpecTD2"><?php echo  $resolution; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Pixel</th>
                    <td class="techSpecTD2"><?php echo  $pixel; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Cache</th>
                    <td class="techSpecTD2"><?php echo  $cache; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Graphic Card</th>
                    <td class="techSpecTD2"><?php echo  $graphic_card; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Video</th>
                    <td class="techSpecTD2"><center><video style="width:70px; height:70px; " src="videos/<?php echo $video; ?>"></center></td>
                </tr> 
    </table>

<?php } ?>

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