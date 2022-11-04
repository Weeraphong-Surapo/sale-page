$(function () {
    $('#btn-check-pay').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: 'function/action.php',
            type: 'get',
            data: { id: id },
            success: function (data) {
                $('#modalcheckpay').modal('show');
                
            }
        });
    });

    $('button#del').click(function () {
        var id = $(this).attr('data-id');
        bootbox.confirm("ต้องการยกเลิกออเดอร์นี้ใชไหม?", function (result) {
            if (result) {
                $.ajax({
                    url: 'function/action.php',
                    type: 'get',
                    data: {
                        id: id,
                        del_order: 1
                    },
                    success: function (data) {
                        location.reload();
                        // sweet 
                    }
                });
            }
        });
    });




});