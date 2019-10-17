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
    <title>Car Details</title>
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
            <h2>Detail cell Phone Post</h2>

<?php
    $detail_id=@$_GET['detail'];

    include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->get_car($detail_id);

?>
<?php foreach($data as $row){
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
                    <td class="techSpecTD1"><?php echo  $name; ?></td>
                </tr>   
                </tr>    
                <tr class="techSpecRow">
                    <th>Engine Power</th>
                    <td class="techSpecTD1"><?php echo  $engine_type; ?></td>
                </tr>
                <tr class="techSpecRow">  
                    <th>Image</th>
                    <td class="techSpecTD2"><center><img style="width:50px; height:50px; " src="images/<?php echo $image; ?>"></center></td>
                </tr>
                <tr class="techSpecRow"> 
                    <th>Product Price</th>
                    <td class="techSpecTD2"><?php echo  $price; ?></td>
                </tr> 
                <tr class="techSpecRow">
                    <th>Transmission</th>
                    <td class="techSpecTD2"><?php echo  $body_type; ?></td>
                </tr>
                <tr class="techSpecRow">
                    <th>Fuel Type</th>
                    <td class="techSpecTD2"><?php echo  $orientation; ?></td>
                </tr>    
                <tr class="techSpecRow">
                    <th>Breaks</th>
                    <td class="techSpecTD2"><?php echo  $fourwd_or_awd; ?></td>
                </tr>   
                <tr class="techSpecRow"> 
                    <th>Torque</th>
                    <td class="techSpecTD2"><?php echo  $torque; ?></td>
                </tr> 
                <tr class="techSpecRow">  
                    <th>Top Speed</th>
                    <td class="techSpecTD2"><?php echo  $safety; ?></td>
                </tr>
                <tr class="techSpecRow"> 
                    <th>Displacement</th>
                    <td class="techSpecTD2"><?php echo  $displacement; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Wheel Type</th>
                    <td class="techSpecTD2"><?php echo  $size; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Number of Doors</th>
                    <td class="techSpecTD2"><?php echo  $doors; ?></td>
                </tr> 
                <tr class="techSpecRow"> 
                    <th>Mileage</th>
                    <td class="techSpecTD2"><?php echo  $per_liter_mile; ?></td>
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