<div class="white-box">
    <div class="box-title text-center">
        <h4>จำนวนเอกสาร</h4>
    </div>

    <?php 
        $countbook = $conn->query("SELECT * FROM tb_document");
        $row = $countbook->num_rows;
        $total = $row;
    ?>

    <div class="box-content text-center">
        <h5><?php echo $total; ?></h5>
    </div>
</div>

<div class="white-box">
    <div class="box-title text-center">
        <h4>จำนวนผู้ใช้งาน</h4>
    </div>

    <?php 
        $countbook = $conn->query("SELECT * FROM tb_user");
        $row = $countbook->num_rows;
        $total = $row;
    ?>

    <div class="box-content text-center">
        <h5><?php echo $total; ?></h5>
    </div>
</div>