<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->delete('CRUDClass','id=4');  // Table name, WHERE conditions1
$res = $db->getResult();  
print_r($res);