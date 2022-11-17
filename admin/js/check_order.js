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
                        Swal('success', 'ยกเลิกออเดอร์', '', 'check_order.php')
                        // sweet 
                    }
                });
            }
        });
    });


    $('#check_order').DataTable();

    $('.view_orders').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: {
                id: id,
                view_orders: 1
            },
            success: function (data) {
                $('#pdf').val('true');
                $('#itemorder').html(data);
                $('#modalorder').modal('show');
            }
        });
    });

    $('.check_order').click(function () {
        var id = $(this).attr('data-id');
        bootbox.confirm('ตรวจเช็คแล้วใช่ไหม', function (result) {
            if (result) {
                $.ajax({
                    url: 'function/action.php',
                    type: 'post',
                    data: {
                        id: id,
                        delivery: 1
                    },
                    success: function (data) {
                        Swal('success', 'ตรวจสอบเรียบร้อย', '', 'order.php');
                    }
                })
            }
        })
    })

});