<?php

$delete_id=@$_GET['delete'];
include_once("/../script/admin_post.php");

    $object=new AdminPost();
    $data=$object->delete_cell_location($delete_id);

?>