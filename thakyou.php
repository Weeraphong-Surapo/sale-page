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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Css Style -->
    <style>
        @import url('css/style.css');
    </style>
</head>

<body>
    <div class="container text-center  shadow-lg box-parend my-5 p-5 " id="header">
         <h1 class="text-danger fw-bold">การสั่งซื้อสำเร็จ</h1>
         <p style="font-size: 20px;">"ขอบคุณสำหรับคำสั่งซื้อ<br>ทีมงานจะตรวจสอบและยืนยันโดยเร็วที่สุด"</p>
         <!-- <i class='fas fa-donate' style='font-size:90px;color:red'></i> -->
         <h4 class="fw-bold text-success" style="font-size: 35px;">หมายเลขคำสั่งซื้อ # <?php echo $_GET['code']?></h4>
         <span class="fw-bold text-primary fs-5">ตรวจสถานะ ที่หน้าหลัก</span>
         <img src="assets/img/check_order.jpg" alt="" class="img-fluid">
         <a href="index.php" class="fs-5">กลับหน้าแรก</a>
         <div class="d-flex justify-content-center">
             <img src="assets/img/success.png" class="img-fluid d-block my-3"  style="height: 120px;" alt="">
         </div>
         
         <h1 class="fw-bold">กรณีเก็บเงินปลายทาง</h1>
         <div class="border border-danger rounded p-3 text-danger fs-5">
            <p>คำเตือน !!</p>
            <p>สั่งซื้อสินค้าโดยการเก็บเงินปลายทาง หากปฏิเสธ หรือหลีกเลี่ยงที่จะไม่รับสินค้า มีความผิด<br>ทางกฎหมาย สามารถฟ้องร้องดำเนินคดีในชั้นศาลได้ ตามประมวลกฎหมายแพ่งมาตรา <br>168,458</p>
         </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>