<?php
require_once("function/head.php");
require_once("function/nav.php");
?>

<div class="container-fluid pt-4 px-4">
    <h1 class="text-primary">จัดการลิงค์</h1>
    <hr>
    <p class="text-danger">*** ใส่ที่อยู่ลิงค์ที่ถูกต้อง ***</p>
    <hr>

    <?php
    $sql = "SELECT * FROM tb_links";
    $query = $conn->query($sql);
    while ($link = $query->fetch_array()) {
    ?>
        <div class="row">
            <div class="col-4 col-md-4 col-lg-2">
                <img src="<?php echo $link['img']; ?>" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="col-8 col-md-8 col-lg-8">
                <input type="text" name="" id="" class="form-control" value="<?php echo $link['link']; ?>" disabled>
                <button id="<?php echo $link['link']; ?>" alt="<?php echo $link['type'] ?>" class="
            btn <?php if ($link['type'] == 'line') {
                    echo 'btn-success';
                } else if ($link['type'] == 'facebook') {
                    echo 'btn btn-primary';
                }elseif($link['type'] == 'prompay'){
                    echo 'btn btn-secondary';
                } else {
                    echo 'btn btn-info';
                }; ?> text-white mt-2 mb-2 btn-link">
                <!-- check text -->
                <?php if ($link['type'] == 'line') {
                    echo 'เปลี่ยนที่อยู่ไลน์';
                } else if ($link['type'] == 'facebook') {
                    echo 'เปลี่ยนที่อยู่เฟสบุ๊ค';
                }else if($link['type'] == 'prompay'){
                    echo 'เปลี่ยนเบอร์พร้อมเพย์';
                } else {
                    echo 'เปลี่ยนที่อยู่ (Line Notify)';
                }; ?>
            </button>
            </div>
        </div>
        <hr>
    <?php } ?>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขลิงค์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="formLink">
                    <p>เปลี่ยนที่อยู่</p>
                    <input type="text" name="link_update" id="link_update" class="form-control">
                    <input type="hidden" name="type" id="type">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="submit" class="btn btn-primary">อัพเดตลิงค์</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once("function/footer.php"); ?>
<script src="js/swal.js"></script>
<script src="js/link.js"></script>