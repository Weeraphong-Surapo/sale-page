<?php 
// img content
$sql = "SELECT * FROM tb_contents";
$img_content = $conn->query($sql);
$img_arr = array('profile_cover'=>'','profile'=>'','content_1'=>'','content_2'=>'','content_3'=>'','content_4'=>'','content_5'=>'',
            'content_6'=>'','content_7'=>'','content_8'=>'','content_9'=>'','content_10'=>'','content_11'=>'','content_12'=>'',
            'review_1'=>'','review_2'=>'','review_3'=>'','review_4'=>'','review_5'=>'','review_6'=>'','review_7'=>'','review_9'=>'',
            'review_10'=>'','review_11'=>'','review_12'=>'','review_13'=>'','review_14'=>'');

$id_arr = array('profile_cover'=>'','profile'=>'','content_1'=>'','content_2'=>'','content_3'=>'','content_4'=>'','content_5'=>'',
            'content_6'=>'','content_7'=>'','content_8'=>'','content_9'=>'','content_10'=>'','content_11'=>'','content_12'=>'',
            'review_1'=>'','review_2'=>'','review_3'=>'','review_4'=>'','review_5'=>'','review_6'=>'','review_7'=>'','review_9'=>'',
            'review_10'=>'','review_11'=>'','review_12'=>'','review_13'=>'','review_14'=>'');

foreach($img_content as $img){
    if($img['type'] == 'profile_cover'){
        $img_arr['profile_cover'] = $img['img_content'];
        $id_arr['profile_cover'] = $img['id'];
    }else if($img['type'] == 'profile'){
        $img_arr['profile'] = $img['img_content'];
        $id_arr['profile'] = $img['id'];
    }else if($img['type'] == 'content_1'){
        $img_arr['content_1'] = $img['img_content'];
        $id_arr['content_1'] = $img['id'];
    }else if($img['type'] == 'content_2'){
        $img_arr['content_2'] = $img['img_content'];
        $id_arr['content_2'] = $img['id'];
    }else if($img['type'] == 'content_3'){
        $img_arr['content_3'] = $img['img_content'];
        $id_arr['content_3'] = $img['id'];
    }else if($img['type'] == 'content_4'){
        $img_arr['content_4'] = $img['img_content'];
        $id_arr['content_4'] = $img['id'];
    }else if($img['type'] == 'content_5'){
        $img_arr['content_5'] = $img['img_content'];
        $id_arr['content_5'] = $img['id'];
    }else if($img['type'] == 'content_6'){
        $img_arr['content_6'] = $img['img_content'];
        $id_arr['content_6'] = $img['id'];
    }else if($img['type'] == 'content_7'){
        $img_arr['content_7'] = $img['img_content'];
        $id_arr['content_7'] = $img['id'];
    }else if($img['type'] == 'content_8'){
        $img_arr['content_8'] = $img['img_content'];
        $id_arr['content_8'] = $img['id'];
    }else if($img['type'] == 'content_9'){
        $img_arr['content_9'] = $img['img_content'];
        $id_arr['content_9'] = $img['id'];
    }else if($img['type'] == 'content_10'){
        $img_arr['content_10'] = $img['img_content'];
        $id_arr['content_10'] = $img['id'];
    }else if($img['type'] == 'content_11'){
        $img_arr['content_11'] = $img['img_content'];
        $id_arr['content_11'] = $img['id'];
    }else if($img['type'] == 'content_12'){
        $img_arr['content_12'] = $img['img_content'];
        $id_arr['content_12'] = $img['id'];
    }
    // img review
    else if($img['type'] == 'review_1'){
        $img_arr['review_1'] = $img['img_content'];
        $id_arr['review_1'] = $img['id'];
    }else if($img['type'] == 'review_2'){
        $img_arr['review_2'] = $img['img_content'];
        $id_arr['review_2'] = $img['id'];
    }else if($img['type'] == 'review_3'){
        $img_arr['review_3'] = $img['img_content'];
        $id_arr['review_3'] = $img['id'];
    }else if($img['type'] == 'review_4'){
        $img_arr['review_4'] = $img['img_content'];
        $id_arr['review_4'] = $img['id'];
    }else if($img['type'] == 'review_5'){
        $img_arr['review_5'] = $img['img_content'];
        $id_arr['review_5'] = $img['id'];
    }else if($img['type'] == 'review_6'){
        $img_arr['review_6'] = $img['img_content'];
        $id_arr['review_6'] = $img['id'];
    }else if($img['type'] == 'review_7'){
        $img_arr['review_7'] = $img['img_content'];
        $id_arr['review_7'] = $img['id'];
    }else if($img['type'] == 'review_8'){
        $img_arr['review_8'] = $img['img_content'];
        $id_arr['review_8'] = $img['id'];
    }else if($img['type'] == 'review_9'){
        $img_arr['review_9'] = $img['img_content'];
        $id_arr['review_9'] = $img['id'];
    }else if($img['type'] == 'review_10'){
        $img_arr['review_10'] = $img['img_content'];
        $id_arr['review_10'] = $img['id'];
    }else if($img['type'] == 'review_11'){
        $img_arr['review_11'] = $img['img_content'];
        $id_arr['review_11'] = $img['id'];
    }else if($img['type'] == 'review_12'){
        $img_arr['review_12'] = $img['img_content'];
        $id_arr['review_12'] = $img['id'];
    }else if($img['type'] == 'review_13'){
        $img_arr['review_13'] = $img['img_content'];
        $id_arr['review_13'] = $img['id'];
    }else if($img['type'] == 'review_14'){
        $img_arr['review_14'] = $img['img_content'];
        $id_arr['review_14'] = $img['id'];
    }
}

// text content
$sql = "SELECT * FROM tb_text_content";
$text_content = $conn->query($sql);
$text = array('header_1'=>'','header_2'=>'','text_1'=>'','text_2'=>'','header_ask'=>'','head_review'=>'',
            'head_1'=>'','head_2'=>'','head_3'=>'','text_head_1'=>'','text_head_2'=>'','text_head_3'=>'');

$text_id = array('header_1'=>'','header_2'=>'','text_1'=>'','text_2'=>'','header_ask'=>'','head_review'=>'',
                'head_1'=>'','head_2'=>'','head_3'=>'','text_head_1'=>'','text_head_2'=>'','text_head_3'=>'');
foreach($text_content as $txt_content){
    if($txt_content['type'] == 'header_1'){
        $text['header_1'] = $txt_content['text_content'];
        $text_id['header_1'] = $txt_content['id'];
    }else if($txt_content['type'] == 'header_2'){
        $text['header_2'] = $txt_content['text_content'];
        $text_id['header_2'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'text_1'){
        $text['text_1'] = $txt_content['text_content'];
        $text_id['text_1'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'text_2'){
        $text['text_2'] = $txt_content['text_content'];
        $text_id['text_2'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'header_ask'){
        $text['header_ask'] = $txt_content['text_content'];
        $text_id['header_ask'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'head_1'){
        $text['head_1'] = $txt_content['text_content'];
        $text_id['head_1'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'head_2'){
        $text['head_2'] = $txt_content['text_content'];
        $text_id['head_2'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'head_3'){
        $text['head_3'] = $txt_content['text_content'];
        $text_id['head_3'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'text_head_1'){
        $text['text_head_1'] = $txt_content['text_content'];
        $text_id['text_head_1'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'text_head_2'){
        $text['text_head_2'] = $txt_content['text_content'];
        $text_id['text_head_2'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'text_head_3'){
        $text['text_head_3'] = $txt_content['text_content'];
        $text_id['text_head_3'] = $txt_content['id'];
    }
    else if($txt_content['type'] == 'head_review'){
        $text['head_review'] = $txt_content['text_content'];
        $text_id['head_review'] = $txt_content['id'];
    }
}
?>