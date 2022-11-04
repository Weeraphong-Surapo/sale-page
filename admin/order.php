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
                    <th style="text-align: center;">เลขออเดอร์</th>
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
                            <td><?= $row['code_delivery']; ?></td>
                            <td>
                                <button class="btn btn-primary" id="view_order" data-id="<?php echo $row['id']; ?>">ดูออเดอร์</button>
                            </td>
                            <td>
                                <button class="btn btn-success" id="openmodalcode" data-id="<?php echo $row['id']; ?>">กรอกหมาเลขพัสดุ</button>
                                <button class="btn btn-danger" id="cancel" data-id="<?php echo $row['id']; ?>">ยกเลิก</button>
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
            <div class="modal-body" id="itemorder">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                    <input type="text" name="code_delivery" id="code_delivery" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="transport">เสร็จสิ้น</button>
            </div>
        </div>
    </div>
</div>
<?php require_once("function/footer.php"); ?>
<script>
    $(function() {
        $('#table_order').DataTable();

        $('#view_order').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    id: id,
                    view_order: 1
                },
                success: function(data) {
                    $('#itemorder').html(data);
                    $('#modalorder').modal('show');
                }
            });
        });

        $('#openmodalcode').click(function(){
            var id = $(this)
            $('#modal_code').modal('show')
        })

        $('#transport').click(function(){
            var transport = $('#transport').val();
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{
                    transport:transport,
                    code_transport:1
                },
                success:function(data){

                }
            })
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
                            location.reload();
                        }
                    })
                }
            })
        })
    });
</script>