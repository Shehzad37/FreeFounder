<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
//$data = $db->escapeString("zubair@email.com"); // Escape any input before insert
$db->insert('CRUDClass',array('name'=>'zubair','email'=>'zubau@gamskhj'));  // Table name, column names and respective values
$res = $db->getResult();  
print_r($res);