<?php 
require_once("function/head.php");
require_once("function/nav.php");
?>

<div class="container-fluid pt-4 px-4">
    <h1 class="text-primary">สินค้า</h1>
    <hr>
    <p class="text-muted">*** สินค้าทั้งหมด ***</p>
    <hr>
    <!-- btn-new-product -->
        <button class="float-end btn btn-primary mb-2 insert">เพิ่มสินค้า</button>
    <!-- table -->
        <table class="table text-center">
        <tr class="bg-primary text-white">
            <th>สินค้า</th>
            <th>ราคา</th>
            <th>ค่าส่ง</th>
            <th>ดีเทล</th>
            <th>จัดการ</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM tb_product";
        $query = $conn->query($sql);
        while($row = $query->fetch_array()){
        ?>
        <tr class="align-middle">
            <td><?php echo $row['product_name'];?></td>
            <td><?php echo $row['product_price'];?></td>
            <td><?php echo $row['product_delivery'];?></td>
            <td><?php echo $row['detail'];?></td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-warning p-1 m-0 EditProduct" data-id="<?php echo $row['id'];?>">Edit</button>
                    <button class="btn btn-danger p-1 m-0 DeleteProduct" data-id="<?php echo $row['id'];?>">Del</button>
                </div>
            </td>
        </tr>
        <?php }?>
    </table>

</div>


<!-- Modal -->
<div class="modal fade" id="ModalProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-primary" id="text-product"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="formProduct" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <div class="mb-2">
                <label for="">สินค้า</label>
                <input type="text" name="product_name" id="product_name" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">ราคา</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">ค่าส่ง</label>
                <input type="text" name="delivery" id="delivery" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">ดีเทล</label>
                <textarea name="detail" id="detail" cols="3" rows="3" class="form-control"></textarea>
            </div>
            <div class="mb-2">
                <label for="" id="text-img">รูปภาพ</label>
                <img src="" id="output" alt="" class="img-fluid mb-2 rounded">
                <input type="hidden" name="old_img" id="old_img">
                <input type="file" name="file" id="file" class="form-control" onchange="loadFile(event)">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            <input type="submit" class="btn btn-primary"  id="submit-product" value=""></input>
        </div>
    </form>
    </div>
  </div>
</div>

<?php require_once("function/footer.php");?>
<script src="js/swal.js"></script>
<script src="js/product.js"></script>