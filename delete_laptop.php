<?php

$delete_id=@$_GET['delete'];
include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->delete_laptop($delete_id);

?>