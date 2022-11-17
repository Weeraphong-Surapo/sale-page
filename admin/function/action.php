<?php

require_once("../../function/connect.php");
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shopphp147852@gmail.com';
    $mail->Password = 'xuvbfmckomlptvst';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('shopphp147852@gmail.com');

    $mail->addAddress($to);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;
    if ($mail->send()) {
        echo 'success';
    } else {
        echo 'error';
    }
}

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [ // lowercase letters only in font key
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI' => 'THSarabunNew BoldItalic.ttf'
        ]
    ],
    'default_font' => 'sarabun'
]);
if (isset($_POST['modalcontent'])) {
    $content = array('img' => $_POST['old_img'], 'id' => $_POST['id']);
    echo json_encode($content);
}

if (isset($_POST['link'])) {
    $arr = array('link' => $_POST['link_find'], 'type' => $_POST['type']);
    echo json_encode($arr);
}

if (isset($_POST['updatelink'])) {
    $sql = "UPDATE tb_links SET link = '$_POST[link_update]' WHERE type = '$_POST[type]'";
    $conn->query($sql);
}

if (isset($_POST['insert_product'])) {
    $price =  $_POST['price'];
    isset($_POST['id']) ? $id = $_POST['id'] : '';
    $delivery =  $_POST['delivery'];

    if (isset($_FILES['file'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $rend = rand(1000, 100000) . $file_type;
        $folder = "../upload/";

        $new_file_name = strtolower($file);

        $fainal = str_replace(' ', '-', $new_file_name);
        $newname = 'upload/' . $fainal;
    }

    $old_img = $_POST['old_img'];
    if (!empty($_POST['id'])) {
        if (empty($_FILES['file'])) {
            $sql = "UPDATE `tb_product` SET `product_name`='$_POST[product_name]',`product_price`=$price,`product_delivery`=$delivery,`product_img`= '$old_img',`detail`='$_POST[detail]' WHERE id = $id";
            echo "อัพเดตสำเร็จ";
        } else {
            move_uploaded_file($file_loc, $folder . $fainal);
            $sql = "UPDATE `tb_product` SET `product_name`='$_POST[product_name]',`product_price`=$price,`product_delivery`=$delivery,`product_img`= '$newname',`detail`='$_POST[detail]' WHERE id = $id";
            echo "อัพเดตสำเร็จ";
        }
    } else {
        move_uploaded_file($file_loc, $folder . $fainal);
        $sql = "INSERT INTO tb_product(product_name,product_price,product_delivery,product_img,detail)
                VALUES('$_POST[product_name]','$_POST[price]','$_POST[delivery]','$newname','$_POST[detail]')";
        echo "เพิ่มสินค้าสำเร็จ";
    }
    $conn->query($sql);
}

if (isset($_POST['delproduct'])) {
    $sql = "DELETE FROM tb_product WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['editproduct'])) {
    $sql = "SELECT * FROM tb_product WHERE id = '$_POST[id]'";
    $query = $conn->query($sql);
    $fetch = $query->fetch_array();
    echo json_encode($fetch);
}

if (isset($_POST['img_content'])) {
    if (isset($_FILES['file'])) {
        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $rend = rand(1000, 100000) . $file_type;
        $folder = "../upload/";

        $new_file_name = strtolower($file);

        $fainal = str_replace(' ', '-', $new_file_name);
        $newname = 'upload/' . $fainal;
    }
    move_uploaded_file($file_loc, $folder . $fainal);
    $sql = "UPDATE tb_contents SET img_content = '$newname' WHERE id = '$_POST[id]'";
    if (!$conn->query($sql)) {
        echo 'error';
    }
}

if (isset($_POST['txt_header_1'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['text_1'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['header_2'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['text_2'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['head_review'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['header_ask'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['head_1'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['text_head_1'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['head_2'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['text_head_2'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['head_3'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['text_head_3'])) {
    $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_GET['del_order'])) {
    $cancel_order = $conn->query("DELETE FROM tb_users_delivery WHERE id = '$_GET[id]'");
    $del_order = $conn->query("DELETE FROM tb_order WHERE order_id = '$_GET[id]'");
}

if (isset($_GET['confirm_order'])) {
    $sql = "UPDATE tb_users_delivery SET status = 1 WHERE id = '$_GET[id]'";
    $conn->query($sql);
}

if (isset($_POST['cancel_order'])) {
    $cancel_order = $conn->query("DELETE FROM tb_users_delivery WHERE id = '$_POST[id]'");
    $del_order = $conn->query("DELETE FROM tb_order WHERE order_id = '$_POST[id]'");
}




if (isset($_POST['update_prompay'])) {
    $sql = "UPDATE tb_links SET link = '$_POST[new_prompay]' WHERE id = '$_POST[id]'";
    $conn->query($sql);
}

if (isset($_POST['trasport_code'])) {
    $user = $conn->query("SELECT * FROM tb_order WHERE order_id = '$_POST[id]'");
    $address = $conn->query("SELECT * FROM tb_users_delivery WHERE id = '$_POST[id]'");
    $address_use = $address->fetch_array();
    $email = $_POST['email'];
    $headers = "Order Successfully Thank Yous";
    $html = "<b >คำสั่งซื้อ # ".$address_use['code_delivery']."จัดส่งเรียบร้อย<br> เลขพัสดุ : ".$_POST['code_trasport'].'</b><br><p>รายการสินค้า</p>';
    $html .= "<table class='table text-center'>
        <tr>
        <th style='border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;'>ชื่อสินค้า</th>
        <th style='border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;'>ราคา</th>
        <th style='border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;'>จำนวน</th>
        <th style='border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;'>ค่าจัดส่ง</th>
        </tr>";
        $total = 0;
        while($row = $user->fetch_array()){
            $total += ($row['price'] * $row['qty']) + $row['delivery'];
    $html .= "
        <tr>
            <td style='border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;'>".$row['product']."</td>
            <td style='border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;'>".number_format($row['price'])."</td>
            <td style='border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;'>".$row['qty']."</td>
            <td style='border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;'>".$row['delivery']."</td>
        </tr>";
        }
    $html .= "<tr><td colspan='4' style='border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;'>รวม ".number_format($total)." บาท</td></tr>";
    $html .= "</table>";
    $html .= "<p>ที่อยู่ผู้รับ<br>ชื่อ : ".$address_use['name']."<br>เบอร์โทร : ".$address_use['phone']."<br>".$address_use['address']."</p>";
    smtp_mailer($email, $headers, $html);
    $sql = "UPDATE tb_users_delivery SET transport = '$_POST[code_trasport]' , status = 2 WHERE id = '$_POST[id]'";
    $query = $conn->query($sql);




}

if (isset($_POST['delivery'])) {
    $sql = "UPDATE tb_users_delivery SET status = 1 WHERE id = '$_POST[id]'";
    $conn->query($sql);
}


if (isset($_POST['view_order'])) {
    $sql = "SELECT * FROM tb_order WHERE order_id = '$_POST[id]'";
    $sql_user = "SELECT * FROM tb_users_delivery WHERE id = '$_POST[id]'";
    $query_user = $conn->query($sql_user);
    $fect_user = $query_user->fetch_assoc();
    $query = $conn->query($sql);
    $outp = '';
    $outp .= '<center style="text-align:center;"><b style="font-size:25px;">รายการออเดอร์</b></center>';
    $outp .= '<table class="table text-center" width="100%" >
        <thead class="bg-primary text-white">
        <tr>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">สินค้า</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">ราคา</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">จำนวน</th>
        </tr>
        </thead>';
    $total = 0;
    $delivery = 0;
    foreach ($query as $data) {
        $delivery += $data['delivery'];
        $total += ($data['price'] * $data['qty']) + $data['delivery'];
        $outp .= '
                <tbody>
                <tr>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . $data['product'] . '</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . number_format($data['price']) . '</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . $data['qty'] . '</td>
                </tr>';
    }
    $outp .= '<tr ><td colspan="3" style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">ค่าจัดส่ง ' . $delivery . ' บาท</td></tr>';
    $outp .= '<tr ><td colspan="3" style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;"> ราคารวม ' . number_format($total) . ' บาท</td></tr>';
    $outp .= '</tbody></table><hr>';
    $outp .= '<b  style="font-size:30;"  >ที่อยู่ผู้รับ</b><br>';
    $outp .= '<p style="font-size:20; margin-top: 15px;">ชื่อผู้รับ : ' . $fect_user['name'] . '</p>';
    $outp .= '<p style="font-size:20;">เบอร์โทร : ' . $fect_user['phone'] . '</p>';
    $outp .= '<p style="font-size:20;">ที่อยู่ : ' . $fect_user['address'] . '</p><hr>';
    ob_start();
    echo $outp;
    $html = ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("MyReport.pdf");
    ob_end_flush();
}


if (isset($_POST['view_orders'])) {
    $sql = "SELECT * FROM tb_order WHERE order_id = '$_POST[id]'";
    $sql_user = "SELECT * FROM tb_users_delivery WHERE id = '$_POST[id]'";
    $query_user = $conn->query($sql_user);
    $fect_user = $query_user->fetch_assoc();
    $query = $conn->query($sql);
    $outp = '';
    $outp .= '<center style="text-align:center;"><b style="font-size:25px;">รายการออเดอร์</b></center>';
    $outp .= '<table class="table text-center" width="100%" >
        <thead class="bg-primary text-white">
        <tr>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">สินค้า</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">ราคา</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: center; background-color: #009CFF; color: white; font-size:20;">จำนวน</th>
        </tr>
        </thead>';
    $total = 0;
    $delivery = 0;
    foreach ($query as $data) {
        $delivery += $data['delivery'];
        $total += ($data['price'] * $data['qty']) + $data['delivery'];
        $outp .= '
                <tbody>
                <tr>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . $data['product'] . '</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . number_format($data['price']) . '</td>
                <td style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">' . $data['qty'] . '</td>
                </tr>';
    }

    $outp .= '<tr ><td colspan="3" style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;">ค่าจัดส่ง ' . $delivery . ' บาท</td></tr>';
    $outp .= '<tr ><td colspan="3" style="border: 1px solid #ddd; padding: 8px; text-align: center; font-size:18;"> ราคารวม ' . number_format($total) . ' บาท</td></tr>';
    $outp .= '</tbody></table><hr>';
    $outp .= '<b class="fs-bold text-primary text-center alert alert-primary w-100 d-block">หลักฐานการโอน</b>';
    $outp .= '<img class="img-fluid" src="./' . $fect_user['img_online'] . '">';
    $outp .= '<b  style="font-size:30;"  >ที่อยู่ผู้รับ</b><br>';
    $outp .= '<p style="font-size:20; margin-top: 15px;">ชื่อผู้รับ : ' . $fect_user['name'] . '</p>';
    $outp .= '<p style="font-size:20;">เบอร์โทร : ' . $fect_user['phone'] . '</p>';
    $outp .= '<p style="font-size:20;">ที่อยู่ : ' . $fect_user['address'] . '</p><hr>';
    echo $outp;
}
