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
                    <th style="text-align: center;">หมายเลข</th>
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
                                
                                <button class="btn btn-success m-0 order_success" email-id="<?php echo $row['email'];?>" data-id="<?php echo $row['id']; ?>">กรอกเลขพัสดุ</button>
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
            <?php ?>
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
<div class="modal fade" id="trasport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-primary" id="staticBackdropLabel">เลขพัสดุ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <label for="">กรอกเลขพัสดุ *</label>
            <input type="hidden" name="id_email" id="id_email">
            <input type="hidden" name="id_trasport" id="id_trasport">
            <input type="text" name="code_trasport" id="code_trasport" class="form-control" placeholder="กรุณากรอกให้ถูกต้อง">
            <p class="text-danger mt-1" id="error-trasport"></p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-order" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary succ-order" onclick="success_order()">จัดส่งเรียบร้อย</button>
      </div>
    </div>
  </div>
</div>


<?php require_once("function/footer.php"); ?>
<script src="js/swal.js"></script>
<script>
    function success_order(){
        var code_trasport = $('#code_trasport').val();
        var email = $('#id_email').val()
        var id = $('#id_trasport').val();
        if(code_trasport == ""){
            $('#error-trasport').html('กรุณากรอกเลขพัสดุ!!')
        }else{
              bootbox.confirm('เลขขนส่ง : '+code_trasport,function(result){
            if(result){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    beforeSend:function(){
                        $('.close-order').css('display','none')
                        $('.succ-order').text('กำลังส่งอีเมลล์...')
                    },
                    data:{
                        id:id,
                        email:email,
                        code_trasport:code_trasport,
                        trasport_code:1
                    },
                    success:function(data){
                        Swal('success','จัดส่งเรียบร้อย','','delivery_success.php');
                    }
                });
            }
        });
        }
    }

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

     $('.order_success').click(function(){
        event.preventDefault();
        var id = $(this).attr('data-id');
        var email = $(this).attr('email-id');
        $('#id_trasport').val(id);
        $('#id_email').val(email)
        $('#trasport').modal('show');

      
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