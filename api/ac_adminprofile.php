<?php
    include '../connect.php';

    session_start();
    $sql_edit = $conn->query("UPDATE tb_user SET password = '".$_REQUEST['password']."',fullname = '".$_REQUEST['fullname']."',email = '".$_REQUEST['email']."' WHERE user_id = '".$_SESSION['user_id']."' ");
    
    if ($sql_edit) {
        echo '<script>alert("แก้ไขข้อมูลสำเร็จ");</script>';
        echo '<script>window.location.href = "../admin/index.php?p=editprofile";</script>';
    }else{
        echo '<script>alert("ไม่สามารถแก้ไขได้");</script>';
        echo '<script>window.location.href = "../admin/index.php?p=editprofile";</script>';
    }
?>