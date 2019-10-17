
<?php
$subject = array("5398-9698-7977-9466"); 
$pattern = array("/([51|52|53|54|55]{2})([-])([0-9]{14})$/", '/[a-z]/', '/[1a]/'); 
$replace = array("A", 'B', 'C'); 

echo "preg_filter returns\n";
print_r(preg_filter($pattern, $replace, $subject)); 

echo "preg_replace returns\n";
print_r(preg_replace($pattern, $replace, $subject)); 
?>
