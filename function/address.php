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
    <div class="col-lg-6 col-md-12 col-12 mb-2">
        <label for="">เบอร์มือถือ *</label>
        <input type="text" name="phone" class="form-control" id="phone" maxlength="10">
        <p class="text-danger" id="text-phoen-error" style="display: none;"></p>
    </div>
    <div class="col-12 mt-5">
        <label for="">ที่อยู่รับสินค้า *</label>
        <textarea name="address" class="form-control" id="address" cols="20" rows="5"></textarea>
        <p class="text-danger" id="text-address-error"></p>
    </div>
    <div class="col-12 mt-5">
        <input type="submit" id="order" class="btn-by w-100" value="ยืนยันคำสั่งซื้อ">
    </div>
    </form>
</div>

