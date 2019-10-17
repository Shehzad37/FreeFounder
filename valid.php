<htlm>
<head><title>Regularl expression</title></head>
<body>
<form action="valid.php" method="post">
<textarea name="text"></textarea>
<input type="submit" name="submit">
</form>
</body>
</htlm>




<?php

$text=$_POST['text'];
echo"<br>";

$replace=" ";
$reg2="/([0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4})/";
$reg3="/([a-zA-Z0-9]{3,20}@[a-zA-Z]{3,20}\.[a-zA-Z]{3,5})/";
$reg4="/payment|price|email/";

//if(preg_match($reg3, $text)){
	//echo"found <br>";
	$text= preg_replace($reg3,$replace, $text);
	$text= preg_replace($reg2,$replace, $text);
echo	$text= preg_replace($reg4,$replace, $text);



?>