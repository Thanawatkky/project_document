<div class="box">
    <div class="box-title">
        <h3>ผู้ใช้งานทั้งหมด</h3>
    </div>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ที่</th>
                <th scope="col">ชื่อผู้ใช้งาน</th>
                <th scope="col">รหัสผ่าน</th>
                <th scope="col">ชื่อจริง นามสกุล</th>
                <th scope="col">สถานะ</th>
                <th scope="col">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    $sql_user = $conn->query("SELECT * FROM tb_user");
                    
                    $i = 1;
                    while ($users = $sql_user->fetch_object()) {
                ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $users->username; ?></td>
                <td><?php echo $users->password; ?></td>
                <td><?php echo $users->fullname; ?></td>
                <td>
                    <select class="form-control" name="" id="">
                        <?php 
                            $sql_group = $conn->query("SELECT * FROM tb_group"); 
                            while ($group = $sql_group->fetch_object()) {
                        ?>
                        <option selected="<?php echo $group->group_name; ?>" value="<?php echo $users->user_group; ?>"><?php echo $group->group_name; ?></option>
                        <?php } ?>
                    </select>
                    
                </td>
                
                <td>
                    <a href="index.php?p=edit_user&user_id=<?php echo $users->user_id; ?>"><i class="fa fa-pencil text-warning"></i></a>
                    <a href="../api/ac_manageuser.php?user_id=<?php echo $users->user_id; ?>"><i class="fa fa-trash text-danger"></i></a>
                </td>
                
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>