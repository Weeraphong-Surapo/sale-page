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
                                
                                <button class="btn btn-success m-0" id="openmodalcode" data-id="<?php echo $row['id']; ?>">เปลี่ยนเลขพัสดุ</button>
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

<!-- Modal -->
<div class="modal fade" id="modal_code" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">กรอกหมายเลขพัสดุ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="">กรอกเลขพัสดุของคุณ</label>
                    <input type="hidden" name="id_code" id="id_code">
                    <input type="text" name="code_delivery_edit" id="code_delivery_edit" class="form-control">
                    <p id="text-warning" style="display: none;" class="text-danger"></p>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="transport_edit">เสร็จสิ้น</button>
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

        $('#openmodalcode').click(function(){
            var id = $(this).attr('data-id');
            $('#id_code').val(id);
            $('#modal_code').modal('show')
        })

        $('#transport_edit').click(function(){
            var transport = $('#code_delivery_edit').val();
            var id_code = $('#id_code').val();
            if(transport == ""){
                $('#text-warning').text('กรุณากรอกเลขพัสดุ');
                $('#text-warning').css('display','block');
            }else{
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{
                        code_delivery_edit:transport,
                        id_code:id_code,
                        code_transport_edit:1
                    },
                    success:function(data){
                        Swal('success','แก้ไขเรียบร้อย','','delivery_success.php');
                    }
                })
            }
        });

    });
</script>