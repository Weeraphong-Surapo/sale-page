<?php 
require_once("function/head.php");
require_once("function/nav.php");
?>

<div class="container-fluid px-4 mt-4">
    <h1 class="text-primary">ออเดอร์ที่จัดส่งแล้ว</h1>
    <hr>
    <div class="table-responsive">
        <table id="table_order" class="table table-bordered table table-striped table-hover text-center">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="text-align: center;">ออเดอร์</th>
                    <th style="text-align: center;">ออเดอร์</th>
                    <th style="text-align: center;">จัดการ</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM tb_users_delivery";
            $query = $conn->query($sql);
            $i = 1;
            foreach ($query as $row) {
                if ($row['status'] == "2") {
            ?>
                    <tbody>


                        <tr>
                            <td width="12%"><?= $row['code_delivery']; ?></td>
                            <td width="13%">
                                <button class="btn btn-primary view_order"  data-id="<?php echo $row['id']; ?>">ดู</button>
                            </td>
                            <td width="25%">
                   
                                <button class="btn btn-success m-0">จัดส่งเรียบร้อย</button>
                            <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                <div id="contianer_modals"></div>
        </table>
    </div>
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
            <?php 

 ?>
            <div class="modal-body" id="itemorder">

            <?php
         
            ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <a href="function/MyReport.pdf?pdf" target="_blank" class="btn btn-primary" >ปริ้น PDF</a>
            </div>
        </div>
    </div>
</div>

<?php require_once("function/footer.php"); ?>
<script src="js/swal.js"></script>
<script>
    $(function() {
        $('#table_order').DataTable();

        $('.view_order').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    id: id,
                    view_order: 1
                },
                success: function(data) {
                    $('#pdf').val('true');
                    $('#itemorder').html(data);
                    $('#modalorder').modal('show');
                }
            });
        });

    });
</script>