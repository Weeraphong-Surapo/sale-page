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
                    <th style="text-align: center;">ชื่อ</th>
                    <th style="text-align: center;">ที่อยู่</th>
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
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['address']; ?></td>
                            <td>
                                <a class='btn btn-primary' href="show_check.php?id=<?= $row['id']; ?>">ดูการชำระเงิน</a>
                            </td>
                            <td>
                                <button id="del" data-id="<?php echo $row['id']?>" class="btn btn-danger" >ยกเลิก</button>
                            <?php } ?>
                            </td>
                        </tr>
                        </tbody>
                    <?php } ?>
                    <div id="contianer_modals"></div>
        </table>
    </div>
    <?php
    // if (isset($_POST['cancel_order'])) {
    //     $cancel_order = mysqli_query($con, "DELETE FROM tb_users_delivery WHERE order_id = '$_POST[order_id]'");
    //     $del_order = mysqli_query($con, "DELETE FROM tb_order WHERE order_id = '$_POST[order_id]'");
    //     echo $use->Swal('success', 'ลบเรียบร้อย', '', 'order.php');
    // }
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js"></script>


    <?php require_once("function/footer.php"); ?>
    <script src="js/check_order.js"></script>
    <script>
        $(function(){
            $('#check_order').DataTable();
        })
    </script>