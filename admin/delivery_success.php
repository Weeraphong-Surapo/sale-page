<?php 
require_once("function/head.php");
require_once("function/nav.php");
?>

<div class="container-fluid px-4 mt-4">
    <h1 class="text-primary">ออเดอร์ที่จัดส่งแล้ว</h1>
    <hr>
    <div class="table-responsive">
        <table id="table_order" class="table table-bordered table table-striped table-hover text-center">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="text-align: center;">ชื่อผู้สั่ง</th>
                    <th style="text-align: center;">ที่อยู่</th>
                    <th style="text-align: center;">สินค้าที่สั่ง</th>
                    <th style="text-align: center;">จัดการ</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM tb_users_delivery";
            $query = $conn->query($sql);
            foreach ($query as $row) {
                if ($row['status'] == "2") {
            ?>
                    <tbody>


                        <tr>
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['address']; ?></td>
                            <td>
                                <button class="btn btn-primary" id="view_order" data-id="<?php echo $row['id']; ?>">ดูออเดอร์</button>
                            </td>
                            <td>
                                <button class="btn btn-danger" id="cancel" data-id="<?php echo $row['id']; ?>">ยกเลิก</button>
                            <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                <div id="contianer_modals"></div>
        </table>
    </div>
</div>

<?php 
require_once("function/footer.php");
?>