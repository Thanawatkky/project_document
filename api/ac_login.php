<?php 
    include '../connect.php';

    $login = "SELECT * FROM tb_user WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password']."' ";
    $query = $conn->query($login);
    $num = $query->num_rows;
    $users = $query->fetch_object();

    if ($num <= 0) {
        echo '<script>alert("ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง");</script>';
        echo '<script>window.location.href = "../reg_login.html";</script>';
    }else{
        echo "เข้าสู่ระบบสำเร็จ";

        session_start();
        $_SESSION['session_id'] = session_id();
        $_SESSION['user_id'] = $users->user_id;
        $_SESSION['username'] = $users->username;
        $_SESSION['user_group'] = $users->user_group;

        if ($users->user_group == "Admin") {
            echo '<script>alert("ผู้ดูแลระบบ");</script>';
            echo '<script>window.location.href = "../admin/index.php";</script>';
        }else{
            echo '<script>alert("ผู้ใช้งานทั่วไป");</script>';
            echo '<script>window.location.href = "../index.php";</script>';
        }
    }

?>