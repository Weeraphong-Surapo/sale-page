<?php
require_once("function/head.php");
require_once("function/nav.php");

?>

<div class="container-fluid px-4 mt-4">
    <h1>ออเดอร์</h1>
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
                if ($row['status'] == "1") {
            ?>
                    <tbody>


                        <tr>
                            <td width="12%"><?= $row['code_delivery']; ?></td>
                            <td width="13%">
                                <button class="btn btn-primary view_order"  data-id="<?php echo $row['id']; ?>">ดู</button>
                            </td>
                            <td width="25%">
                                
                                <button class="btn btn-success m-0" id="order_success" data-id="<?php echo $row['id']; ?>">จัดส่งออเดอร์</button>
                                <button class="btn btn-danger m-0" id="cancel" data-id="<?php echo $row['id']; ?>">ยกเลิก</button>
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

     $('#order_success').click(function(){
        event.preventDefault();
        var id = $(this).attr('data-id');
        bootbox.confirm('จัดส่งสินค้าแล้วใช่ไหม?',function(result){
            if(result){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{
                        id:id,
                        update_order:1
                    },
                    success:function(data){
                        Swal('success','จัดส่งเรียบร้อย','','delivery_success.php');
                    }
                });
            }
        });
     });


        $('#cancel').click(function(){
            var id = $(this).attr('data-id');
            bootbox.confirm('ยกเลิกออเดอร์ใช่ไหม',function(result){
                if(result){
                    $.ajax({
                        url:'function/action.php',
                        type:'post',
                        data:{
                            id:id,
                            cancel_order:1
                        },
                        success:function(data){
                            Swal('success','ยกเลิกเรียบร้อย','','order.php');
                        }
                    })
                }
            })
        })
    });
</script>