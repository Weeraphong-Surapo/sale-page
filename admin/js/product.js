function SwalWarn(x, y, z) {
    setTimeout(function() {
        swal({
            type: x,
            title: y,
            text: z,
            timer: 3000,
            showConfirmButton: true
        });
    });
}
$(function () {
    $('.insert').click(function () {
        $('#formProduct')[0].reset();
        $('#output').attr('src', '');
        $('#text-product').text('สินค้า');
        $('#submit-product').val('เพิ่มสินค้า')
        $('#ModalProduct').modal('show');
    });

    $('#formProduct').submit(function (e) {
        e.preventDefault();
        var fd = new FormData();
        var product_name = $('#product_name').val();
        var price = $('#price').val();
        var delivery = $('#delivery').val();
        var detail = $('#detail').val();
        var files = $('#file')[0].files;
        var id = $('#id').val();
        var old_img = $('#old_img').val();



        if (old_img == "") {
            if (product_name == "" || price == "" || delivery == "" || detail == "" || $('#file').val() == "") {
                SwalWarn('warning', 'กรอกข้อมูลให้ครบถ้วน', '');
            }else{
                fd.append('product_name', product_name);
                fd.append('price', price);
                fd.append('delivery', delivery);
                fd.append('detail', detail);
                fd.append('file', files[0]);
                fd.append('old_img', old_img);
                fd.append('insert_product', 1);
        
                    $.ajax({
                        url: 'function/action.php',
                        type: 'post',
                        data: fd,
                        async: false,
                        contentType: false,
                        processData:false,
                        success: function (data) {
                            Swal('success', data, '', 'product.php');
                        }
                    });
            }
        }else{
            fd.append('product_name', product_name);
            fd.append('price', price);
            fd.append('delivery', delivery);
            fd.append('detail', detail);
            fd.append('insert_product', 1);
            fd.append('file', files[0]);
            fd.append('id', id);
            fd.append('old_img', old_img);
    
                $.ajax({
                    url: 'function/action.php',
                    type: 'post',
                    data: fd,
                    async: false,
                    contentType: false,
                    processData:false,
                    success: function (data) {
                        Swal('success', data, '', 'product.php');
                    }
                });
        }
    });

    $('.EditProduct').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: 'function/action.php',
            type: 'post',
            dataType:'json',
            data: {
                id: id,
                editproduct: 1
            },
            success: function (data) {
                $('#text-product').text('แก้ไขสินค้า');
                $('#id').val(data.id);
                $('#product_name').val(data.product_name);
                $('#price').val(data.product_price);
                $('#delivery').val(data.product_delivery);
                $('#detail').val(data.detail);
                $('#output').attr('src', data.product_img);
                $('#old_img').val(data.product_img);
                $('#submit-product').val('อัพเดต');
                $('#ModalProduct').modal('show');
            }
        });
    });

    $('.DeleteProduct').click(function () {
        var id = $(this).attr('data-id');
        var status = confirm("คุณต้องการลบใช่ไหม?");
        if (status) {
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    id: id,
                    delproduct: 1
                },
                success: function (data) {
                    Swal('success', 'ลบสำเร็จ', '', 'product.php');
                }
            });
        }
    });

});
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };