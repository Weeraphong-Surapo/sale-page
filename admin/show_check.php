<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['login']) && $_SESSION['username'] != 'admin') {
    echo '<script>window.location="../index.php"</script>';
}
include "../function/connect.php";
// include "swal.php";
include('function/head.php');
include "function/nav.php";
$result = $conn->query("SELECT * FROM tb_users_delivery WHERE id = '$_GET[id]'");
$fetch = $result->fetch_array();
$show_order = $conn->query("SELECT * FROM tb_order WHERE order_id = '$_GET[id]'");
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <h2 class="text-center">ออเดอร์ที่สั่ง</h2>
                        <hr>
                        <table class="table text-center table-bordered">
                            <tr class="bg-primary text-white">
                                <th>ชื่อสินค้า</th>
                                <th>ราคา</th>
                                <th>จำนวน</th>
                                <th>ค่าจัดส่ง</th>
                            </tr>
                            <?php
                            $total = 0;
                            $delivery = 0;
                            foreach ($show_order as $row) {
                                $delivery += $row['delivery'];
                                $total += ($row['price'] * $row['qty']);
                            ?>
                            <tr>
                                <td><?= $row['product']; ?></td>
                                <td><?= number_format($row['price']); ?></td>
                                <td><?= $row['qty']; ?></td>
                                <td><?= number_format($row['delivery']); ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="4">ค่าส่ง <?= number_format($delivery); ?> บาท</td>
                            </tr>
                            <tr>
                                <?php $total_all = $total + $delivery; ?>
                                <td colspan="4">
                                    <h5 class="text-success">ราคารวม <?= number_format($total_all); ?> บาท </h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-12 mb-2  border border-primary border-4">
                    <h2 class="text-center alert alert-info p-2">หลักฐานการโอน</h2>
                    <img src="<?= $fetch['img_online']; ?>" class="img-fluid w-100" alt="">
                </div>
            </div>
            <a href="check_order.php" class="btn btn-primary col-12 mb-1">ย้อนกลับ</a>
            <button class="btn btn-success col-12" id="check_order" data-id="<?php echo $fetch['id'];?>" >ตรวจสอบเรียบร้อย</button>
        </div>
    </div>
</div>

<?php include 'function/footer.php'; ?>
<script src="js/check_order.js"></script>
<script>

$('button#check_order').click(function () {
        var id = $(this).attr('data-id');
        bootbox.confirm("ตรวจสอบการโอนแล้วใช่ไหม?", function (result) {
            if (result) {
                $.ajax({
                    url: 'function/action.php',
                    type: 'get',
                    data: {
                        id: id,
                        confirm_order: 1
                    },
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>