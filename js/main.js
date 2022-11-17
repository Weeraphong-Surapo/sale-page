    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
$(function () {
    $('#form').submit(function (e) {
        e.preventDefault();
    })

    // $('.show-by').hide();
    $('.product').click(function (e) {
        e.preventDefault();
        var that = $(this).css('border', '2px solid blue');
        var show = that.parent();
        var showfield = show.find('.show-by');
        showfield.show();
    });

    $('.plus').click(function (e) {
        e.preventDefault();
        var that = $(this);
        var plus = that.parent();
        var qty = plus.find('.qty');
        var value = qty.val();

        var product_that = that.parent();
        var product_find = product_that.find('#product_name');
        var product_name = product_find.val();

        var price_that = that.parent();
        var price_find = price_that.find('#product_price');
        var price = price_find.val();

        var id_that = that.parent();
        var id_find = id_that.find('.id');
        var id = id_find.val();

        var img_that = that.parent();
        var img_find = img_that.find('#product_img');
        var img = img_find.val();

        var delivery_that = that.parent();
        var delivery_find = delivery_that.find('#product_delivery');
        var delivery = delivery_find.val();

        if (value < 1) {
            value
        } else {
            qty.val(++value);
        }

        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: {
                id: id,
                qty: value,
                product: product_name,
                price: price,
                delivery: delivery,
                img: img,
                cart: 1
            },
            success: function (data) {
                location.reload()
            }
        });
    });

    $('.minus').click(function () {
        var that = $(this);
        var minus = that.parent();
        var qty = minus.find('.qty');
        var value = qty.val();

        var id_paren = that.parent();
        var id_find = id_paren.find('.id');
        var id = id_find.val();

        if (value <= 1) {
            value = 0;
        } else {
            qty.val(--value);
        }

        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: {
                id: id,
                qty: value,
                minus: 1
            },
            success: function (data) {
                    location.reload();
            }
        })
    });

    $('#name').click(function () {
        $('#name').focus();
        $('#name').focusout(function () {
            if ($('#name').val() == "") {
                $('#text-error').text('กรุณากรอกที่อยู่ผู้รับ');
                $('#text-error').css('display', 'block');
            }
        })
    });

    $('#name').focusout(function () {
        if ($('#name').val() != "") {
            $('#text-error').css('display', 'none');
        }
    });
    

    $('#phone').click(function () {
        $('#phone').keyup(function () {
            if (isNaN($('#phone').val())) { 
                $('#text-phoen-error').text('ระบุเป็นตัวเลข 0-9');
                $('#text-phoen-error').css('display', 'block');
            }
                
        });
        $('#phone').focusout(function () {
            if ($('#phone').val() == "") {
                $('#text-phoen-error').text('กรุณากรอกเบอร์มือถือ');
                $('#text-phoen-error').css('display', 'block');
                return false;
            }
        })
    });

    $('#phone').focusout(function () {
        if ($('#phone').val() != "") {
            $('#text-phoen-error').css('display', 'none');
        }
        if(isNaN($('#phone').val())) {
            $('#text-phoen-error').text('ระบุเป็นตัวเลข 0-9');
            $('#text-phoen-error').css('display', 'block');
        }
    });

    $('#address').click(function () {
        $('#address').focusout(function () {
            if ($('#address').val() == "") {
                $('#text-address-error').text('กรุณากรอกที่อยู่ผู้รับ');
                $('#text-address-error').css('display', 'block');
                return false;
            }
        })
    });

    $('#email').click(function () {
        $('#email').focusout(function () {
            if ($('#email').val() == "") {
                $('#text-email-error').text('กรุณากรอกที่อยู่ Email');
                $('#text-email-error').css('display', 'block');
                return false;
            }
        })
    });

    $('#email').focusout(function () {
        if ($('#email').val() != "") {
            $('#text-email-error').css('display', 'none');
        }
    });

    $('#address').focusout(function () {
        if ($('#address').val() != "") {
            $('#text-address-error').css('display', 'none');
        }
    });


    $('#formOrder').submit(function (e) {
        e.preventDefault();
        if ($('input#product').val() == '') {
            console.log($('input#product').val());
            $('#error-all').text('ไม่มีสินค้าใรตะกร้า!!');
            $('#error-all').css('display', 'block');
            return false;
        }
        var fd = new FormData();
        var names = $('#name').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var payment = $('#order').val();
        var email = $('#email').val();
        var line_notify = $('#line_notify').val();
        var file = $('#file')[0].files;
        if (names == "" || phone == "" || address == "" || payment == "" || email == "") {
            $('#error-all').text('กรุณากรอกข้อมูลให้ครบถ้วน!!');
            $('#error-all').css('display', 'block');
            return false;
        } else if (payment == "") {
            $('#error-all').text('กรุณาเลือกการชำระเงิน!!')
            $('#error-all').css('display', 'block');
        } else {
            fd.append('name', names);
            fd.append('phone', phone);
            fd.append('address', address);
            fd.append('email', email);
            fd.append('line_notify',line_notify);
            fd.append('file', file[0]);
            fd.append('order', 1);
            $('div input#order').val('โปรดรอ...')
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: fd,
                beforeSend: function () {
                        $('div input#order').attr('disabled','disabled')
                    
                },
                async: false,
                contentType: false,
                processData:false,
                success: function (data) {
                    $('div input#order').val('โปรดรอ...')
                    window.location = "thakyou.php?code="+data;
                }
            });
        }
    });



    $('#list-online-list').click(function () {
        $('#order').val('online');
    });

    $('#list-cod-list').click(function () {
        $('#order').val('cod');
    });

    $('.check_order').click(function () {
        $('#Modal_check_order').modal('show')
    });

    $('#submit_code').click(function () {
        $('#no_order').css('display','none');
        $('#result').css('display','none');
        $('#result2').css('display','none');
        $('#result3').css('display','none');
        var code = $('#check_code').val();
        if (code == "") {
            alert('')
        } else {
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                dataType:'json',
                data: {
                    check_order: 1,
                    code: code
                },
                success: function (data) {
                    console.log(data.error);
                    if (data.error == 'no') {
                        $('#no_order').css('display', 'block');
                    } else {
                        if (data.status == 0) {
                            $('#result').css('display', 'block');
                        } else if (data.status == 1) {
                            $('#result2').css('display', 'block');
                        }else {
                            $('#result3').css('display', 'block');
                        }
                    }
                }
            });
        }
    });

    $('.step').each(function(index, element) {
        // element == this
        $(element).not('.active').addClass('done');
        $('.done').html('<i class="icon-ok"></i>');
        if ($(this).is('.active')) {
            return false;
        }
    });
});

