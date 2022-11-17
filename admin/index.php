<?php
require_once("../function/connect.php");
require_once("function/head.php");
require_once("function/nav.php");
?>


<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <?php
                $sql = "SELECT * FROM tb_product";
                $query = $conn->query($sql);
                $count_product = mysqli_num_rows($query);
                ?>
                <div class="ms-3">
                    <p class="mb-2">จำนวนสินค้า</p>
                    <h6 class="mb-0"><?php echo $count_product; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <?php
                $sql_user_delivery = "SELECT * FROM tb_users_delivery";
                $query_order = $conn->query($sql_user_delivery);
                $count_order = mysqli_num_rows($query_order);
                ?>
                <div class="ms-3">
                    <p class="mb-2">ออเดอร์ทั้งหมด</p>
                    <h6 class="mb-0"><?php echo $count_order; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <?php
                $sql_order_check = "SELECT * FROM tb_users_delivery WHERE status = 0";
                $query_order_check = $conn->query($sql_order_check);
                $count_order_check = mysqli_num_rows($query_order_check);
                ?>
                <div class="ms-3">
                    <p class="mb-2">รอตรวจสอบ</p>
                    <h6 class="mb-0"><?php echo $count_order_check; ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <?php
                $sql_order_delivery = "SELECT * FROM tb_users_delivery WHERE status = 1";
                $query_order_delivery = $conn->query($sql_order_delivery);
                $count_order_delivery = mysqli_num_rows($query_order_delivery);
                ?>
                <div class="ms-3">
                    <p class="mb-2">รอจัดส่ง</p>
                    <h6 class="mb-0"><?php echo $count_order_delivery; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <?php
                    $sql_delivery = "SELECT * FROM tb_users_delivery WHERE status = 2";
                    $query_delivery = $conn->query($sql_delivery);
                    $count_delivery = mysqli_num_rows($query_delivery);
                    ?>
                    <div class="ms-3">
                        <p class="mb-2">จัดส่งเรียบร้อย</p>
                        <h6 class="mb-0"><?php echo $count_delivery; ?></h6>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Worldwide Sales</h6>
                    <a href="">Show All</a>
                </div>
                <canvas id="worldwide-sales"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Salse & Revenue</h6>
                    <a href="">Show All</a>
                </div>
                <canvas id="salse-revenue"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- Sales Chart End -->


<!-- Recent Sales Start -->
<!-- Recent Sales End -->


<!-- Widgets Start -->

<!-- Widgets End -->


<?php require_once("function/footer.php"); ?>