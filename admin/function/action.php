<?php 
    require_once("../../function/connect.php");

    if(isset($_POST['modalcontent'])){
        $content = array('img'=>$_POST['old_img'],'id'=>$_POST['id']);
        echo json_encode($content);
    }

    if(isset($_POST['link'])){
        $arr = array('link'=>$_POST['link_find'],'type'=>$_POST['type']);
        echo json_encode($arr);
    }

    if(isset($_POST['updatelink'])){
        $sql = "UPDATE tb_links SET link = '$_POST[link_update]' WHERE type = '$_POST[type]'";
        $conn->query($sql);
    }

    if(isset($_POST['insert_product'])){
        $price =  $_POST['price'];
        isset($_POST['id']) ? $id = $_POST['id'] : '';
        $delivery =  $_POST['delivery'];

        if(isset($_FILES['file'])){
            $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $rend = rand(1000,100000).$file_type;
            $folder = "../upload/";
    
            $new_file_name = strtolower($file);
        
            $fainal = str_replace(' ', '-', $new_file_name);
            $newname = 'upload/' . $fainal;
        }

        $old_img = $_POST['old_img'];
        if(!empty($_POST['id'])){
            if(empty($_FILES['file'])){
                $sql = "UPDATE `tb_product` SET `product_name`='$_POST[product_name]',`product_price`=$price,`product_delivery`=$delivery,`product_img`= '$old_img',`detail`='$_POST[detail]' WHERE id = $id";
                echo "อัพเดตสำเร็จ";
            }else{
                move_uploaded_file($file_loc, $folder . $fainal);
                $sql = "UPDATE `tb_product` SET `product_name`='$_POST[product_name]',`product_price`=$price,`product_delivery`=$delivery,`product_img`= '$newname',`detail`='$_POST[detail]' WHERE id = $id";
                echo "อัพเดตสำเร็จ";
            }
        }else{
            move_uploaded_file($file_loc, $folder . $fainal);
            $sql = "INSERT INTO tb_product(product_name,product_price,product_delivery,product_img,detail)
                VALUES('$_POST[product_name]','$_POST[price]','$_POST[delivery]','$newname','$_POST[detail]')";
                echo "เพิ่มสินค้าสำเร็จ";    
        }
        $conn->query($sql);
        
    }

    if(isset($_POST['delproduct'])){
        $sql = "DELETE FROM tb_product WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['editproduct'])){
        $sql = "SELECT * FROM tb_product WHERE id = '$_POST[id]'";
        $query = $conn->query($sql);
        $fetch = $query->fetch_array();
        echo json_encode($fetch);
    }

    if(isset($_POST['img_content'])){
        if(isset($_FILES['file'])){
            $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $rend = rand(1000,100000).$file_type;
            $folder = "../upload/";
    
            $new_file_name = strtolower($file);
        
            $fainal = str_replace(' ', '-', $new_file_name);
            $newname = 'upload/' . $fainal;
        }
        move_uploaded_file($file_loc, $folder . $fainal);
        $sql = "UPDATE tb_contents SET img_content = '$newname' WHERE id = '$_POST[id]'";
        if(!$conn->query($sql)){
            echo 'error';
        }

    }

    if(isset($_POST['txt_header_1'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }
    
    if(isset($_POST['text_1'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['header_2'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['text_2'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['head_review'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['header_ask'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['head_1'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['text_head_1'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['head_2'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['text_head_2'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['head_3'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['text_head_3'])){
        $sql = "UPDATE tb_text_content SET text_content = '$_POST[txt]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }
    
    if(isset($_GET['del_order'])){
        $cancel_order = $conn->query("DELETE FROM tb_users_delivery WHERE id = '$_GET[id]'");
        $del_order = $conn->query("DELETE FROM tb_order WHERE order_id = '$_GET[id]'");
    }

    if(isset($_GET['confirm_order'])){
        $sql = "UPDATE tb_users_delivery SET status = 1 WHERE id = '$_GET[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['cancel_order'])){
        $cancel_order = $conn->query("DELETE FROM tb_users_delivery WHERE id = '$_POST[id]'");
        $del_order = $conn->query("DELETE FROM tb_order WHERE order_id = '$_POST[id]'");
    }

    if(isset($_POST['code_transport'])){
        $sql = "UPDATE tb_users_delivery SET code_transport = '$transport' ";
    }

    if(isset($_POST['update_prompay'])){
        $sql = "UPDATE tb_links SET link = '$_POST[new_prompay]' WHERE id = '$_POST[id]'";
        $conn->query($sql);
    }

    if(isset($_POST['view_order'])){
        $sql = "SELECT * FROM tb_order WHERE order_id = '$_POST[id]'";
        $query = $conn->query($sql);
        $outp = '';
        $outp .= '<table class="table text-center" >
        <thead class="bg-primary text-white">
        <tr>
        <th>สินค้า</th>
        <th>ราคา</th>
        <th>จำนวน</th>
        </tr>
        </thead>';
        $total = 0;
        foreach($query as $data){
            $outp .= '
                <tbody>
                <tr>
                <td>'.$data['product'].'</td>
                <td>'.$data['price'].'</td>
                <td>'.$data['qty'].'</td>
                </tr>
                </tbody>';
            }
            $outp .= '</table>';
        echo $outp;
    }
