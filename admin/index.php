<?php
    session_start();

    include '../connect.php';

    $sql = $conn->query("SELECT * FROM tb_user WHERE user_id = '".$_SESSION['user_id']."' ");
    $users = $sql->fetch_object();

    if ($_SESSION['user_id'] == "") {
        echo '<script>alert("กรุณาลงชื่อเข้าใช้งานก่อน");</script>';
        echo '<script>window.location.href = "reg_login.html";</script>';
    }else{

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../asset/style.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/fontawesome/css/font-awesome.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="account mb-5">
            <div class="username h5">
                <?php echo $users->fullname; ?>
            </div>
            <div class="role">
                <?php
                    if ($users->user_group == "Admin") {
                        echo "ผู้ดูแลระบบ";
                    }else{
                        echo "ผู้ใช้งานทั่วไป";
                    }
                ?>
            </div>
        </div>

        <div><a href="index.php?">หน้าหลัก</a></div>
        <div><a href="index.php?p=search_document">ค้นหาเอกสาร</a></div>
        <div><a href="index.php?p=create_document">สร้างเอกสาร</a></div>
        <div><a href="index.php?p=show_document">เอกสารทั้งหมด</a></div>
        <div><a href="index.php?p=editprofile">แก้ไขข้อมูลส่วนตัว</a></div>
        <div><a href="index.php?p=show_user">ผู้ใช้งานทั้งหมด</a></div>
        <div><a href="../api/ac_logout.php">ออกจากระบบ</a></div>
    </div>

    <div class="container">
        <div class="content">
            <?php 
                if (isset($_REQUEST['p'])) {
                    include ($_REQUEST['p'].'.php');
                }else{
                    include 'dashboard.php';
                }
            ?>
        </div>
    </div>
</body>
</html>