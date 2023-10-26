<?php
    include '../connect.php';

    session_start();
    $edit_userid = $conn->query("UPDATE tb_user SET password = '".$_REQUEST['password']."',fullname = '".$_REQUEST['fullname']."',email = '".$_REQUEST['email']."' WHERE user_id = '".$_REQUEST['user_id']."' ");
    
    if ($edit_userid) {
        echo "1";
    }else{
        echo "0";
    }
?>