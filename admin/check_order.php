<?php
require_once("function/head.php");
require_once("function/nav.php");
$sql = "SELECT * FROM tb_users_delivery";
$query = $conn->query($sql);
?>

<div class="container-fluid myx-4 pt-4">
    <h1 class="text-primary">ออเดอร์ที่ชำระเงิน</h1>
    <hr>
    <div class="table-responsive">
        <table id="check_order" class="table table-bordered table table-striped table-hover text-center" >
            <thead class="bg-primary text-white">
                <tr>
                    <th style="text-align: center;">หมายเลข</th>
                    <th style="text-align: center;">ชำระเงิน</th>
                    <th style="text-align: center;">จัดการ</th>
                </tr>
            </thead>
            <?php
            $i = 1;
                foreach ($query as $row) {
                    if ($row['status'] == "0") {
            ?>
            <tbody>
                        <tr>
                        <td width="12%"><?= $row['code_delivery']; ?></td>
                            <td>
                                <button class="btn btn-primary view_orders"  data-id="<?php echo $row['id']; ?>">ดู</button>
                            </td>
                            <td>
                                <button class="btn btn-success check_order" data-id="<?php echo $row['id'];?>">ตรวจสอบแล้ว</button>
                                <button id="del" data-id="<?php echo $row['id']?>" class="btn btn-danger" >ยกเลิก</button>
                            <?php } ?>
                            </td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    <div id="contianer_modals"></div>
        </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="modalorder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ออเดอร์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="pdf" id="pdf">

            <div class="modal-body" id="itemorder">

            <?php
         
            ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>




    <?php require_once("function/footer.php"); ?>
    <script src="js/check_order.js"></script>
    <script src="js/swal.js"></script>