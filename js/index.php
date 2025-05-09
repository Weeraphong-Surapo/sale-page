<?php
session_start();
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
        <!-- Spinner Start -->

        <!-- Spinner End -->
        <!-- profile -->
        <img class="w-100 img-fluid rounded" src="admin/<?php echo $img_arr['profile_cover']; ?>" alt="">
        <div>
            <img id="profile" src="admin/<?php echo $img_arr['profile']; ?>" alt="">
        </div>
        <!-- end profile -->


        <div>
            <div align="center">
                <a id="sp-buy" href="#product">ดูสินค้า</a>
            </div>
            <div class="container box">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_1']; ?>" alt="">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_2']; ?>" alt="">
                <b style="font-size: 25px;"><?php echo $text['header_1']; ?></b>
                <p><?php echo $text['text_1']; ?></p>


                <!-- link facebook && line -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 mb-2">
                        <a href="<?php echo $link_line; ?>" target="_blank">
                            <img src="assets/line_face/line.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <a href="<?php echo $link_facebook; ?>" target="_blank">
                            <img src="assets/line_face/face.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <!-- end link -->
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary col-12 mb-3 check_order">เช็คสถานะออเดอร์</button>
                    </div>
                </div>


                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_3']; ?>" alt="">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_4']; ?>" alt="">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_5']; ?>" alt="">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_6']; ?>" alt="">
                <img class="img-fluid w-100" src="admin/<?php echo $img_arr['content_7']; ?>" alt="">
                <br><b style="font-size: 25px;"><?php echo $text['header_2']; ?></b>
                <p><?php echo $text['text_2']; ?></p>


                <!-- link facebook & line -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12 col-12 mb-2">
                        <a href="<?php echo $link_line; ?>" target="_blank">
                            <img src="assets/line_face/line.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-2">
                        <a href="<?php echo $link_facebook; ?>" target="_blank">
                            <img src="assets/line_face/face.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <!-- end link -->
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary col-12 mb-3 check_order">เช็คสถานะออเดอร์</button>
                    </div>
                </div>



                <!-- review product -->
                <h2 class="bg-danger p-3 text-ask rounded"><?php echo $text['head_review']; ?></h2>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_1']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_2']; ?>" alt="">
                    </div>
                </div>

                <img class="img-fluid col-12" src="admin/<?php echo $img_arr['review_3']; ?>" alt="">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_4']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_5']; ?>" alt="">
                    </div>
                </div>

                <img class="img-fluid col-12" src="admin/<?php echo $img_arr['review_6']; ?>" alt="">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_7']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_8']; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_9']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_10']; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_11']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_12']; ?>" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_13']; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid" src="admin/<?php echo $img_arr['review_14']; ?>" alt="">
                    </div>
                </div>


                <!-- link facebook & line -->
                <div class="row mt-4 mb-3">
                    <div class="col-lg-6 col-md-12 col-12 mb-2">
                        <a href="<?php echo $link_line; ?>" target="_blank">
                            <img src="assets/line_face/line.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <a href="<?php echo $link_facebook; ?>" target="_blank">
                            <img src="assets/line_face/face.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <!-- end link -->
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary col-12 mb-3 check_order">เช็คสถานะออเดอร์</button>
                    </div>
                </div>


                <h2 class="bg-danger p-3 text-ask rounded mb-3"><?php echo $text['header_ask']; ?></h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $text['head_1']; ?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body float-start">
                                <p><?php echo $text['text_head_1']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?php echo $text['head_2']; ?>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body float-start">
                                <p><?php echo $text['text_head_2']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <?php echo $text['head_3']; ?>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-block float-start">
                                <p><?php echo $text['text_head_3']; ?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>



                <img class="img-fluid" src="admin/<?php echo $img_arr['content_8']; ?>" alt="">


                <img src="admin/<?php echo $img_arr['content_9']; ?>" alt="" class="img-fluid w-100">
                <img src="admin/<?php echo $img_arr['content_10']; ?>" alt="" class="img-fluid w-100">
                <img src="admin/<?php echo $img_arr['content_11']; ?>" alt="" class="img-fluid w-100">
                <img src="admin/<?php echo $img_arr['content_12']; ?>" alt="" class="img-fluid w-100">


                <!-- link facebook & line -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 mb-2">
                        <a href="<?php echo $link_line; ?>" target="_blank">
                            <img src="assets/line_face/line.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <a href="<?php echo $link_facebook; ?>" target="_blank">
                            <img src="assets/line_face/face.gif" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
                <hr>
                <!-- end link -->
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary col-12 mb-3 check_order">เช็คสถานะออเดอร์</button>
                    </div>
                </div>


                <!-- product -->
                <div class="box-text" id="product">

                    <p style="font-size: 25px;">1.เลือกรายการโปรโมชั่น ค่าจัดส่งฟรี !!</p>
                    <div class="row">

                        <?php
                        $sql = "SELECT * FROM tb_product";
                        $query = $conn->query($sql);
                        foreach ($query as $row) { ?>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="card product text-center">
                                    <img src="admin/<?php echo $row['product_img']; ?>" alt="" class="card-top-img img-fluid img-product">
                                    <div class="card-body">
                                        <b><?php echo $row['product_name']; ?></b>
                                        <p>฿<?php echo number_format($row['product_price']); ?></p>
                                    </div>
                                    <div class="card-footer show-by">


                                        <?php
                                        $_SESSION['total'] = 0;
                                        if (isset($_SESSION['shopping_cart'])) {
                                            $price = 0;
                                            $delivery = 0;
                                            foreach ($_SESSION['shopping_cart'] as $key => $values) {
                                                $delivery += $values['item_delivery'];
                                                $price += ($values['item_price'] * $values['item_quantity']);
                                                $_SESSION['total'] = ($price + $delivery);
                                            }
                                            $item_arry_id = array_column($_SESSION['shopping_cart'], 'item_id');
                                            if (in_array($row['id'], $item_arry_id)) {
                                                echo "<button class='btn btn-primary'>ในตะกร้า</button>";
                                            } else { ?>
                                                <form action="">
                                                    <input type="hidden" name="id" id="id" class="id" value="<?php echo $row['id']; ?>">
                                                    <input type="hidden" name="product_name" id="product_name" value="<?php echo $row['product_name']; ?>">
                                                    <input type="hidden" name="product_img" id="product_img" value="admin/<?php echo $row['product_img']; ?>">
                                                    <input type="hidden" name="product_price" id="product_price" value="<?php echo $row['product_price']; ?>">
                                                    <input type="hidden" name="product_delivery" id="product_delivery" value="<?php echo $row['product_delivery']; ?>">
                                                    <i class="btn btn-warning minus">-</i>
                                                    <input type="number" name="qty" value="1" class="qty" id="qty" disabled>
                                                    <i class="btn btn-primary plus">+</i>
                                                </form>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <form action="">
                                                <input type="hidden" name="id" id="id" class="id" value="<?php echo $row['id']; ?>">
                                                <input type="hidden" name="product_name" id="product_name" value="<?php echo $row['product_name']; ?>">
                                                <input type="hidden" name="product_img" id="product_img" value="admin/<?php echo $row['product_img']; ?>">
                                                <input type="hidden" name="product_price" id="product_price" value="<?php echo $row['product_price']; ?>">
                                                <input type="hidden" name="product_delivery" id="product_delivery" value="<?php echo $row['product_delivery']; ?>">
                                                <i class="btn btn-warning minus">-</i>
                                                <input type="number" name="qty" value="1" class="qty" id="qty" disabled>
                                                <i class="btn btn-primary plus">+</i>
                                            </form>
                                        <?php } ?>


                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                    <!-- cart -->
                    <?php
                    if (isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart']) > 0) {
                    ?>
                        <table class="table">
                            <tr id="colum">
                                <th>ชื่อสินค้า</th>
                                <th style="text-align: center;">จำนวน</th>
                                <th>ราคา</th>
                            </tr>
                            <?php
                            foreach ($_SESSION['shopping_cart'] as $key => $values) {
                                $sql = "SELECT * FROM tb_product WHERE id = '$values[item_id]'";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td width="24%"><?php echo $values['item_name']; ?></td>
                                        <td width="45%">
                                            <form action="">
                                                <input type="hidden" name="id" class="id" id="id" value="<?php echo $row['id']; ?>">
                                                <input type="hidden" name="product_name" id="product_name" value="<?php echo $row['product_name']; ?>">
                                                <input type="hidden" name="product_img" id="product_img" value="admin/<?php echo $row['product_img']; ?>">
                                                <input type="hidden" name="product_price" id="product_price" value="<?php echo $row['product_price']; ?>">
                                                <input type="hidden" name="product_delivery" id="product_delivery" value="<?php echo $row['product_delivery']; ?>">
                                                <i class="btn btn-warning minus">-</i>
                                                <input type="number" name="qty" value="<?php echo $values['item_quantity']; ?>" class="qty" id="qty" disabled>
                                                <i class="btn btn-primary plus">+</i>
                                            </form>
                                        </td>
                                        <td width="19%"><?php echo number_format($values['item_price']); ?></td>
                                    </tr>
                            <?php }
                            } ?>
                            <tr>
                                <td colspan="3" class="text-center">ค่าส่ง <?php echo $delivery; ?> บาท</td>
                            </tr>
                            <td colspan="3" class="text-center">
                                <span>รวม <?php echo number_format($_SESSION['total']); ?> บาท</span>
                            </td>
                        </table>
                        <div class="col-12 mt-5">
                            <input type="submit" onclick="window.location='check_out.php'" class="btn-by w-100" value="ชำระเงิน">
                        </div>
                    <?php
                    } else {
                        echo '';
                    } ?>







                    <!-- Address -->


                </div>
            </div>
        </div>
<br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal_check_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ตรวจสอบออเดอร์</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">หมายเลขออเดอร์</label>
                    <input type="text" name="check_code" id="check_code" class="form-control">
                    <div class="alert alert-warning mt-3" style="display: none;" id="no_order">ไม่มีหมาเลขออเดอร์นี้</div>
                    <div style="display: none;" id="result">
                        <div class="progress mt-3">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example with label" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">กำลังตรวจสอบ</div>
                        </div>
                    </div>

                    <div style="display: none;" id="result2">
                        <div class="progress mt-3">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example with label" style="width: 66%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">กำลังเตรียมสินค้า</div>
                        </div>
                    </div>

                    <div style="display: none;" id="result3">
                        <div class="progress mt-3">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example with label" style="width: 100%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">จัดส่งเรียบร้อย</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary" id="submit_code">เช็คสถานะ</button>
                </div>
            </div>
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



</html>