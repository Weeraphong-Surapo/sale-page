$(function () {
    $('button.btn-link').click(function () {
        var that = $(this);
        var link_find = that.attr('id');
        var type = that.attr('alt');
        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: {
                link: 1,
                link_find: link_find,
                type:type
            },
            dataType:'json',
            success: function (data) {
                $('#link_update').val(data.link);
                $('#type').val(data.type);
                $('#ModalLink').modal('show');
            }
        })
        $('#ModalLink').modal('show')
    });

    $('#formLink').submit(function (e) {
        e.preventDefault();
        var link = $('#link_update').val();
        var type = $('#type').val();
        if (link == "") {
            Swal('warning', 'เป็นค่าว่างไม่ใด้', '','links.php');
        } else {
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    link_update: link,
                    type:type,
                    updatelink: 1
                },
                success: function (data) {
                    Swal('success', 'เปลี่ยนสำเร็จ', '', 'links.php');
                }
            });
        }
    });

    $('#prompay_new').keyup(function(){
        if(isNaN($('#prompay_new').val())){
            $('#msg').text('กรุณาระบุเป็นตัวเลข 0-9');
            $('#msg').css('display','block');
        }
    })
});