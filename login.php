<?php
require_once("function/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body style="background-image: url('assets/img/bg.webp');">
    <div class="container text-primary">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="fw-bold">Sale Page</h1>
                <hr>
                <p style="display: none;" id="error-all" class="text-danger"></p>
                <div class="p-4">
                    <div class="mb-3 input-group">
                        <span class="input-group-text">User</span>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <p class="text-danger mt-1" id="error-user" style="display: none;">กรุณาป้อนชื่อผู้ใช้</p>
                    <div class="mb-3 input-group">
                        <span class="input-group-text">PASS</span>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <p class="text-danger mt-1" id="error-pass" style="display: none;">กรุณาป้อนรหัสผ่าน</p>
                    <input type="submit" value="เข้าสู่ระบบ" id="btn-login" class="btn btn-outline-primary">
                </div>
                <p class="text-center">usernam : admin <br>password : admin</p>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script language="javascript" type="text/javascript">
    window.history.forward();
</script>
</body>
<script>
    $(function() {
        $('#btn-login').click(function() {
            var username = $('#username').val();
            var password = $('#password').val();
            if(username == "" || password == ""){
                $('#error-user').val('');
                $('#error-pass').val('');
                $('#error-all').css('display','block');
                $('#error-all').text('กรุณากรอกข้อมูลให้ครบถ้วน!!');
                return false;
            }else{
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{
                        username:username,
                        password:password,
                        login:1
                    },
                    success:function(data){
                        if(data == 'user-wrong'){
                            $('#error-all').text('ชื่อผู้ใช้ไม่ถูกต้อง');
                            $('#error-all').css('display','block');
                        }
                        else if(data == 'pass-wrong'){
                            $('#error-all').text('รหัสผ่านไม่ถูกต้อง');
                            $('#error-all').css('display','block');
                            $('#password').val('');
                        }else if(data == '0'){
                            $('#error-all').text('ไม่มีชื่อผู้ใช้นี้');
                            $('#error-all').css('display','block');
                        }else{
                            window.location="admin/";
                        }
                    }
                })
            }
        })

        $('#username').keyup(function() {
            $('#username').val() == "" ? $('#error-user').css('display', 'block') : $('#error-user').css('display', 'none')
        });

        $('#password').keyup(function(){
            $('#password').val() == "" ? $('#error-pass').css('display', 'block') : $('#error-pass').css('display', 'none')
        });
    });
</script>

</html>