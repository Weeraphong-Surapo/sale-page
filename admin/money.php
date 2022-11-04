<?php 
require_once("function/head.php");
require_once("function/nav.php");
$prompay = '';
$prompay_id = '';
$sql = "SELECT * FROM tb_links";
$query = $conn->query($sql);
while($row = $query->fetch_array()){
    if($row['type'] == 'prompay'){
        $prompay = $row['link'];
        $prompay_id = $row['id'];
    }
}
?>

<div class="container-fluid pt-4 px-4">
    <h1 class="text-primary">เลขพร้อมเพย์</h1>
    <hr>
    <div class="row">
        <div class="col-4">
            <img src="img/prompay.png" class="img-fluid" alt="">
        </div>
        <div class="col-8">
            <input type="text" name="pay" value="<?php echo $prompay;?>" id="pay"  class="form-control fw-bolder fs-5" disabled>
            <button class="btn btn-primary mt-2" id="btn-edit" data-id="<?php echo $prompay_id;?>">แก้ไข</button>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalMoney" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไข prompay</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="promapay_new" id="prompay_new" class="form-control" maxlength="10">
        <span class="text-danger mt-2" id="msg" style="display: none;"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="update_promapay">อัพเดต</button>
      </div>
    </div>
  </div>
</div>
<?php require_once("function/footer.php"); ?>

<script>
    $(function(){
        $('#btn-edit').click(function(){
            var value = $('#pay').val();
            $('#prompay_new').val(value)
            $('#modalMoney').modal('show');
        });

        $('#prompay_new').keyup(function(){
            if(isNaN($('#prompay_new').val())){
                $('#msg').text('กรุณาระบุเป็นตัวเลข 0-9');
                $('#msg').css('display','block');
            }
        })
        $('#update_promapay').click(function(){
            var id = $('#btn-edit').attr('data-id');
            var value = $('#prompay_new').val()
            if(!isNaN(value)){
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{
                    id:id,
                    new_prompay:value,
                    update_prompay:1
                },
                success:function(data){
                    location.reload();
                }
            });
        }else{
            $('#msg').text('กรุณาระบุเป็นตัวเลข 0-9');
                $('#msg').css('display','block');
        }
        });

    });
</script>