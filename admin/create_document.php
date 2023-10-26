<div class="box">
    <form action = "../api/ac_document.php" method="post">
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
                    <td><textarea name="doc_info" id="doc_info" cols="30" rows="3" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th class="text-left">วันที่ส่งเอกสาร</th>
                    <td><input type="date" name="doc_date" id="doc_date" class="form-control"></td>
                </tr>
                <tr>
                    <th class="text-left">ไฟล์แนบ</th>
                    <td><input type="file" name="doc_file" id="doc_file" class="form-control-file"></td>
                </tr>
            </tbody>
        </table>

        <input type="hidden" name="username" id="username" value="<?php echo $users->fullname; ?>">
        <input type="submit" value="บันทึก" class="btn btn-success">
    </form>
</div>