<?php
session_start();
if($_SESSION['total'] == 0){
    echo '<script>window.location="index.php"</script>';
}
require_once("function/connect.php");
require_once("function/check_type.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sale Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="js/promptpay-qr.js"></script>
    <script src="js/qrcode.min.js"></script>
    <!-- Css Style -->
    <style>
        @import url('css/check.css');
        @import url('css/style.css');
    </style>
</head>

<body>
    <div class="container text-center  shadow-lg box-parend my-5 p-4 " id="header">
        <button class="btn btn-outline-primary float-start mb-3" onclick="history.back()">ย้อนกลับ</button>
        <div class="clearfix"></div>
        <?php if (!isset($_SESSION)) {
            session_start();
        }
        ?>
        <p style="font-size: 25px;">2. เลือกวิธีชำระเงิน</p>
        <div class="row ">
            <div class="col-12 text-center">
                <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                    <div class="col-6">

                        <a class="list-group-item list-group-item-action " id="list-online-list" data-bs-toggle="list" href="#list-online" role="tab" aria-controls="list-home" onclick="render_qr(<?php echo $_SESSION['total']; ?>,<?php echo $link_prompay; ?>)">โอนเงินเข้าบัญชี</a>
                    </div>
                    <div class="col-6">
                        <a class="list-group-item list-group-item-action" id="list-cod-list" data-bs-toggle="list" href="#list-cod" role="tab" aria-controls="list-profile">เก็บเงินปลายทาง</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show " id="list-online" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="box border border-primary border-5 p-2" style="z-index: 100;">

                            <?php if ($_SESSION['total'] == 0) {
                                echo "<div class='alert alert-warning fs-bold'>กรุณาเลือกสินค้าต้องการก่อน</div>";
                            } else { ?>
                                <div class="row" align="center">

                                    <div class="alert alert-primary p-3 m-0 fw-bold" style="border-bottom:7px solid skyblue;" align="center">ชำระเงินด้วยคิวอาโค้ด แล้วแนบสลิป</div>
                                    <div id="qrcode" class="py-2" align="center"></div>
                                    <p class="fs-bold">ยอดที่ต้องชำระ <?php echo number_format($_SESSION['total']);?> บาท</p>
                                </div>
                            <?php } ?>
                        </div>
                        <form action="" id="formOrder">
                            <input type="hidden" name="order" id="order">
                            <input type="hidden" name="line_notify" id="line_notify" value="<?php echo $link_notify; ?>">
                            <p style="font-size: 25px;" class="mt-5">โอนเงินแล้วอัปโหลดสลิป *</p>
                            <input type="file" name="file" id="file" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <p style="font-size: 25px;" class="mt-5">3. ที่อยู่ผู้รับสินค้า</p>
        <p id="error-all" class="text-danger fw-bold" style="display: none; font-size:20px;"></p>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 mb-2">

                <input type="hidden" name="product" id="product" value="<?php if (isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart']) > 0) {
                                                                            echo 'true';
                                                                        } else {
                                                                            echo '';
                                                                        }; ?>">
                <label for="">ชื่อ *</label>
                <input type="text" name="name" id="name" class="form-control">
                <p class="text-danger" id="text-error" style="display:none;"></p>
            </div>
            <div class="col-lg-6 col-md-12 col-12 mb-4">
                <label for="">เบอร์มือถือ *</label>
                <input type="text" name="phone" class="form-control" id="phone" maxlength="10">
                <p class="text-danger" id="text-phoen-error" style="display: none;"></p>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <label for="">Email รับเลขขนส่ง *</label>
                <input type="text" name="email" class="form-control" id="email" >
                <p class="text-danger" id="text-email-error" style="display: none;"></p>
            </div>
            <div class="col-12 mt-5">
                <label for="">ที่อยู่รับสินค้า *</label>
                <textarea name="address" class="form-control" id="address" cols="20" rows="5"></textarea>
                <p class="text-danger" id="text-address-error"></p>
            </div>
            <div class="col-12 mt-5"></div>
                <input type="submit" id="order" onclick="" class="btn-by w-100 btn-order" value="ยืนยันคำสั่งซื้อ">
            </div>
            </form>
        </div>




    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery-3.6.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

<script>
    var qr_dom = document.getElementById('qrcode');

    function render_qr(x, y) {
        var acc_id = '0' + y;
        var amount = x;
        var txt = PromptPayQR.gen_text(acc_id, amount);

        qr_dom.innerHTML = "";
        if (txt) {
            new QRCode(qr_dom, txt);
        }
    }

    document.getElementById('amount').addEventListener('click', render_qr, true);


</script>

</html>