<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->update('CRUDClass',array('name'=>"waqas",'email'=>"name4@email.com"),'id="2" AND name="shehzad"'); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
print_r($res);