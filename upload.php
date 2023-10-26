<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">

        <div class="box">
            <table class="table table-striped text-center">
                <thead>
                    <h3>สร้างเอกสาร</h3>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-left">เลขที่เอกสาร</th>
                        <td><input type="text" name="doc_numbook" id="doc_numbook" class="form-control"></td>
                    </tr>
                    <tr>
                        <th class="text-left">ชื่อเอกสาร</th>
                        <td><input type="text" name="doc_name" id="doc_name" class="form-control"></td>
                    </tr>
                    <tr>
                        <th class="text-left">รายละเอียด</th>
                        <td><textarea name="doc_info" id="doc_info" cols="30" rows="3" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-left">วันที่ส่งเอกสาร</th>
                        <td><input type="date" name="doc_date" id="doc_date" class="form-control"></td>
                    </tr>
                    <tr>
                        <th class="text-left">ไฟล์แนบ</th>
                        <td><input type="file" name="doc_file" id="doc_file"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <input type="hidden" name="username" id="username" value="<?php echo $users->fullname; ?>">
        <input type="submit" value="อัปโหลด" name="upload">

    </form>
    <?php
        include 'connect.php';

        if (isset($_POST['upload'])) {
            $filepath = "fileupload/" . $_FILES["doc_file"]["name"];
            
            $sql_upload = "INSERT INTO tb_document (doc_name,doc_info,doc_date,doc_numbook,doc_usersent,doc_file) VALUES ('".$_REQUEST['doc_name']."','".$_REQUEST['doc_info']."','".$_REQUEST['doc_date']."','".$_REQUEST['doc_numbook']."','".$_REQUEST['username']."','".$_FILES["doc_file"]["name"]."') ";
            $upload = $conn->query($sql_upload);

            if ($upload.move_uploaded_file($_FILES["doc_file"]["tmp_name"], $filepath)) {
                echo 
                    '
                        <script>alert("อัปโหลดสำเร็จ");</script>
                        <script>window.location.href = "index.php?p=show_document";</script>
                    ';
            }else{
                echo 
                    '
                        <script>alert("ไม่สามารถอัปโหลดได้");</script>
                        <script>window.location.href = "index.php?p=upload";</script>
                    ';
            }
        }
    ?>
</body>

</html>