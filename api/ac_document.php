<?php
    include '../connect.php';

    $create_doc = $conn->query("INSERT INTO tb_document (doc_name,doc_info,doc_date,doc_file,doc_numbook,doc_usersent) VALUES ('".$_REQUEST['doc_name']."','".$_REQUEST['doc_info']."','".$_REQUEST['doc_date']."','".$_REQUEST['doc_file']."','".$_REQUEST['doc_numbook']."','".$_REQUEST['username']."'); ");
    
    if ($create_doc) {
        echo '<script>alert("เพึ่มเอกสารสำเร็จ");</script>';
        echo '<script>window.location.href = "../index.php?p=show_document";</script>';
    }else{
        echo '<script>alert("ไม่สามารถทำรายการได้");</script>';
        echo '<script>window.location.href = "../index.php?p=create_document";</script>';
    }
?>