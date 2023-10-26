<div class="box">
    <form action="index.php?p=search_document&show_doc" method="post">
        <table class="table text-center">
            <thead>
                <h3>ค้นหาเอกสาร</h3>
            </thead>
            <tbody>
                <tr>
                    <th class="text-left">ชื่อเอกสาร</th>
                    <td><input type="text" name="search" id="search" class="form-control"></td>
                    <td><input type="submit" value="ค้นหา" class="btn btn-success"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

<?php
 if(isset($_REQUEST['show_doc'])) {
?>

<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">ที่</th>
            <th scope="col">เลขที่เอกสาร</th>
            <th scope="col">ชื่อเอกสาร</th>
            <th scope="col">วันที่ส่ง</th>
            <th scope="col">ผู้ส่ง</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            $get_name = $_REQUEST['search'];

            $sql_search = "SELECT * FROM tb_document WHERE doc_name LIKE '%".$_REQUEST['search']."%' ";
            $query_search = $conn->query($sql_search);
            while ($search_doc = $query_search->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            
            <td><?php echo $search_doc->doc_numbook; ; ?></td>
            <td><?php echo $search_doc->doc_name; ; ?></td>
            <td><?php echo $search_doc->doc_date; ; ?></td>
            <td><?php echo $search_doc->doc_usersent; ?></td>
            <td>
                <i class="fa fa-download"></i>
            </td>
        </tr>
        <?php  $i++; } ?>
    </tbody>
</table>

<?php } ?>

