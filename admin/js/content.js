$(function () {

    $('#formContent').submit(function (e) {
        e.preventDefault();
        var fd = new FormData();
        var old_img = $('#old_img').val();
        var file = $('#file')[0].files;
        var id = $('#id').val();


        fd.append('file', file[0]);
        fd.append('old_img', old_img);
        fd.append('img_content', 1);
        fd.append('id', id);
        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: fd,
            async:false,
            contentType: false,
            processData:false,
            success: function (data) {
                location.reload();
            }
        });
    });

    
    $('img.img-content').click(function () {
        var that = $(this);
        $('#ModalProfile').modal('show');

        var img_paren = that.parent();
        var img = img_paren.find('img.img-content').attr('src');
        var id = that.attr('alt');
        $.ajax({
            url: 'function/action.php',
            type: 'post',
            data: {
                modalcontent: 1,
                id:id,
                old_img: img
            },
            dataType:'json',
            success: function (data) {
                $('#text-profile').text('เปลี่ยนรูปภาพ');
                $('#text-profile').css('color', 'blue')
                $('#old_img').val(data.img);
                $('#id').val(data.id)
                $('#output').attr('src', data.img);
            }
        });
    });

    $('#file').change(function () {
        $('input#btn-submit-content').css('display', 'block');
    });

    $('.text-content').click(function () {
        var that = $(this);
        var txt_paren = that.parent();
        var txt_find = txt_paren.find('.btn-submit');
        $('.btn-submit').css("display", "none");
        txt_find.css("display", "block");
    });



});


// submit txt content
$('#formTxtHeader_1').submit(function (e) {
    e.preventDefault();
    var txt = $('#txt_header_1').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#txt_header_1');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            txt_header_1: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formText_1').submit(function (e) {
    e.preventDefault();
    var txt = $('#text_1').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#text_1');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            text_1: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formheader_2').submit(function (e) {
    e.preventDefault();
    var txt = $('#header_2').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#header_2');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            header_2: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formText_2').submit(function (e) {
    e.preventDefault();
    var txt = $('#text_2').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#text_2');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            text_2: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formHead_review').submit(function (e) {
    e.preventDefault();
    var txt = $('#head_review').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#head_review');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            head_review: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formHeader_ask').submit(function (e) {
    e.preventDefault();
    var txt = $('#header_ask').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#header_ask');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            header_ask: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formHead_1').submit(function (e) {
    e.preventDefault();
    var txt = $('#head_1').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#head_1');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            head_1: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formtext-head_1').submit(function (e) {
    e.preventDefault();
    var txt = $('#text_head_1').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#text_head_1');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            text_head_1: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formtext-head_2').submit(function (e) {
    e.preventDefault();
    var txt = $('#head_2').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#head_2');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            head_2: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formtext_head_2').submit(function (e) {
    e.preventDefault();
    var txt = $('#text_head_2').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#text_head_2');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            text_head_2: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formhead_3').submit(function (e) {
    e.preventDefault();
    var txt = $('#head_3').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#head_3');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            head_3: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

$('#formtext_head_3').submit(function (e) {
    e.preventDefault();
    var txt = $('#text_head_3').val();
    var that = $(this);
    var txt_paren = that.parent();
    var txt_find = txt_paren.find('#text_head_3');
    var id = txt_find.attr('data-id');
    $.ajax({
        url: 'function/action.php',
        type: 'post',
        data: {
            txt: txt,
            id:id,
            text_head_3: 1
        },
        success: function (data) {
            location.reload();
        }
    });
});

var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};