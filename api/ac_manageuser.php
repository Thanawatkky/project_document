<?php
    include '../connect.php';

    $delete_user = $conn->query("DELETE FROM tb_user WHERE user_id = '".$_REQUEST['user_id']."' ");
    if ($delete_user) {
        echo "1";
    }else{
        echo "0";
    }
?>