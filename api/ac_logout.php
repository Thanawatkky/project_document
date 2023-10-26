<?php
    session_start();
    session_destroy();
    session_unset();

    echo '<script>alert("ออกจากระบบสำเร็จ");</script>';
    echo '<script>window.location.href = "../reg_login.html";</script>';
?>