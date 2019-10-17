<html>

<form name="form" action="validation.php" method="GET">
 Text Area: <br>
 <textarea col="10" rows="10" name="textarea"></textarea>
 <input type="submit" name="submit">
  
</form>

<?php

$master = "/([51|52|53|54|55]{2})([-])([0-9]{14})$/";
$visa = "/([4]{1})([-])([0-9]{12,15})$/";



if(isset($_GET['submit'])){

$value=$_GET['textarea'];
$replace =" ";

echo preg_replace($master, $replace, $value);





}
?>
</html>