<?php
    include '../connect.php';

    $reg = $conn->query("INSERT INTO tb_user (username,password,fullname,email) VALUES ('".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['fullname']."','".$_REQUEST['email']."') ");
    
    if ($reg) {
        echo "สร้างบัญชีสำเร็จ";
    }else{
        echo "ไม่สามารถทำรายการได้";
    }
?>