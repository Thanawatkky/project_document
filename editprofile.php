<div class="box">
    <form action="api/ac_userprofile.php" method="post">
        <table class="table text-center">
            <thead>
                <h3>ข้อมูลส่วนตัว</h3>
            </thead>
            <tbody>
                <tr>
                    <th class="text-left">ชื่อผู้ใช้งาน</th>
                    <td><input type="text" name="username" id="username" value="<?php echo $users->username; ?>" class="form-control" readonly></td>
                </tr>
                <tr>
                    <th class="text-left">รหัสผ่าน</th>
                    <td><input type="password" name="password" id="password" value="<?php echo $users->password; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th class="text-left">ชื่อจริง นามสกุล</th>
                    <td><input type="text" name="fullname" id="fullname" value="<?php echo $users->fullname; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th class="text-left">อีเมล</th>
                    <td><input type="email" name="email" id="email" value="<?php echo $users->email; ?>" class="form-control"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="แก้ไข" class="btn btn-success">
    </form>
</div>