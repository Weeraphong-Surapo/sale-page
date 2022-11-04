<?php
require_once("connect.php");
// require_once("swal.php");
session_start();

// btn plus product qty
if (isset($_POST['cart'])) {
    if (isset($_SESSION['shopping_cart'])) {
        $item_arry_id = array_column($_SESSION['shopping_cart'], 'item_id');
        if (!in_array($_POST['id'], $item_arry_id)) {
            $count = count($_SESSION['shopping_cart']);
            $item_arry = array(
                'item_id' => $_POST['id'],
                'item_name' => $_POST['product'],
                'item_img' => $_POST['img'],
                'item_price' => $_POST['price'],
                'item_delivery' => $_POST['delivery'],
                'item_quantity' => 1
            );
            $_SESSION['shopping_cart'][$count] = $item_arry;
            echo 'new';
        } else {
            $item_arry_id = array_column($_SESSION['shopping_cart'], 'item_id');
            if (in_array($_POST['id'], $item_arry_id)) {
                $item_arry = array(
                    'item_id' => $_POST['id'],
                    'item_name' => $_POST['product'],
                    'item_img' => $_POST['img'],
                    'item_price' => $_POST['price'],
                    'item_delivery' => $_POST['delivery'],
                    'item_quantity' => 1
                );
                foreach ($_SESSION['shopping_cart'] as $key => $values) {
                    if ($values['item_id'] == $_POST['id'])
                        $_SESSION['shopping_cart'][$key]['item_quantity'] = $_POST['qty'];
                }
            }
        }
    } else {
        $item_arry = array(
            'item_id' => $_POST['id'],
            'item_name' => $_POST['product'],
            'item_img' => $_POST['img'],
            'item_price' => $_POST['price'],
            'item_delivery' => $_POST['delivery'],
            'item_quantity' => 1
        );
        $add_cart = $_SESSION['shopping_cart'][0] = $item_arry;
    }
}


// btn minus product qty
if (isset($_POST['minus'])) {
    if ($_POST['qty'] == 0) {
        foreach ($_SESSION['shopping_cart'] as $key => $values) {
            if ($values['item_id'] == $_POST['id']) {
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
    } else {
        $item_arry_id = array_column($_SESSION['shopping_cart'], 'item_id');
        foreach ($_SESSION['shopping_cart'] as $key => $values) {
            if ($values['item_id'] == $_POST['id']) {
                $_SESSION['shopping_cart'][$key]['item_quantity'] = $_POST['qty'];
            }
        }
    }
}

if (isset($_POST['order'])) {
    $code_delivery = rand(10000, 1000000);
    if (isset($_FILES['file'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $rend = rand(1000, 100000) . $file_type;
        $folder = "../admin/upload/";

        $new_file_name = strtolower($file);

        $fainal = str_replace(' ', '-', $new_file_name);
        $newname = 'upload/' . $fainal;
        move_uploaded_file($file_loc, $folder . $fainal);
        $sql = "INSERT INTO `tb_users_delivery`(`name`, `phone`, `address`,`img_online`,`code_delivery`,`status`) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$newname','$code_delivery' ,'0')";
    } else {
        $sql = "INSERT INTO `tb_users_delivery`(`name`, `phone`, `address`,`code_delivery`,`status`) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$code_delivery' ,'1')";
    }
    $user2 = $conn->query($sql);
    $order_id = mysqli_insert_id($conn);
    if ($user2) {
        foreach ($_SESSION['shopping_cart'] as $key => $values) {
            $name = $values['item_name'];
            $price = $values['item_price'];
            $qty = $values['item_quantity'];
            $delivery = $values['item_delivery'];
            $order = $conn->query("INSERT INTO `tb_order`(`id`, `order_id`, `product`, `qty`, `price`, `delivery`,`code_delivery`) VALUES (NULL,$order_id,'$name','$qty','$price',$delivery,'$code_delivery')");
        }
        echo $code_delivery;
        $sToken = "$_POST[line_notify]";
        $sMessage = "มีการสั่งออเดอร์\n";
        $sMessage .= "จากคุณ : " . $_POST['name'] . "\n";
        $sMessage .= "การชำระเงิน : " . 'ชำระปลายทาง' . "\n";

        $data = array(
            'message' => $sMessage,
        );


        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $data);
        $headers = array('Content-type: multipart/form-data', 'Authorization: Bearer ' . $sToken . '',);
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);


        unset($_SESSION['shopping_cart']);
    }
}
