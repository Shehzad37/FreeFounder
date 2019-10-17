<?php

$delete_id=@$_GET['delete'];
include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->delete_ads($delete_id);

?>