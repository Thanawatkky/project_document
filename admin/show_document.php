<div class="box">
    <div class="box-title">
        <h3>เอกสารทั้งหมด</h3>
    </div>
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
            <tr>
                <?php
                    $sql_doc = $conn->query("SELECT * FROM tb_document");

                    $i = 1;
                    while ($show_doc = $sql_doc->fetch_object()) {
                ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $show_doc->doc_numbook; ?></td>
                <td><?php echo $show_doc->doc_name; ?></td>
                <td><?php echo $show_doc->doc_date; ?></td>
                <td><?php echo $show_doc->doc_usersent; ?></td>
                <td>
                    <i class="fa fa-download"></i>
                </td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>