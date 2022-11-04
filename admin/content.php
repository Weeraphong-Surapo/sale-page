<?php
require_once("function/head.php");
require_once("function/nav.php");

require_once("function/type.php");
?>
<div class="container-fluid pt-4 px-4">
    <h1 class="text-primary">จัดการโปรไฟล์</h1>
    <hr>
    <p class="text-danger">*** คลิกที่รูปภาพเพื่อเปลี่ยน ***</p>
    <hr>

    <div class="text-center">


        <!-- profile -->
        <img class="w-100 img-fluid rounded img-content" src="<?php echo $img_arr['profile_cover']; ?>" alt="<?php echo $id_arr['profile_cover']; ?>">
        <div>
            <img id="profile" class="img-content" src="<?php echo $img_arr['profile']; ?>" alt="<?php echo $id_arr['profile']; ?>">
        </div>
        <!-- end profile -->


        <div>
            <div class="container box">
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_1']; ?>" alt="<?php echo $id_arr['content_1']; ?>">
                </div>
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_2']; ?>" alt="<?php echo $id_arr['content_2']; ?>">
                </div>
                <!-- <b style="font-size: 25px;" class="text-content"></b> -->
                <div>
                    <form action="" id="formTxtHeader_1">
                        <input type="text" name="txt_header_1" value="<?php echo $text['header_1']; ?>" data-id="<?php echo $text_id['header_1']; ?>" id="txt_header_1" class="form-control text-content" style="text-align: center; font-size:25px;">
                        <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12 ">
                    </form>
                </div>
                <!-- <input type="button" value="OK" style="display: none;" class="btn btn-primary update-content"> -->
                <div>
                    <form action="" id="formText_1">
                        <textarea name="text_1" id="text_1" data-id="<?php echo $text_id['text_1']; ?>" cols="30" rows="10" class="form-control text-content"><?php echo $text['text_1']; ?></textarea>
                        <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                    </form>
                </div>


                <!-- link facebook && line -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border:none;">
                            <img src="img/line.gif" alt="" class="img-fluid rounded img-content">
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border:none;">
                            <img src="img/face.gif" alt="" class="img-fluid rounded img-content">
                        </button>
                    </div>
                </div>
                <!-- end link -->


                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_3']; ?>" alt="<?php echo $id_arr['content_3']; ?>">
                </div>
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_4']; ?>" alt="<?php echo $id_arr['content_4']; ?>">
                </div>
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_5']; ?>" alt="<?php echo $id_arr['content_5']; ?>">
                </div>
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_6']; ?>" alt="<?php echo $id_arr['content_6']; ?>">
                </div>
                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_7']; ?>" alt="<?php echo $id_arr['content_7']; ?>">
                </div>

                <form action="" id="formheader_2">
                    <input type="text" name="header_2" id="header_2" value="<?php echo $text['header_2']; ?>" data-id="<?php echo $text_id['header_2']; ?>" class="form-control text-content" style="text-align: center; font-size:25px;">
                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                </form>

                <form action="" id="formText_2">
                    <textarea name="text_2" id="text_2" cols="30" rows="10" class="form-control text-content" data-id="<?php echo $text_id['text_2']; ?>"><?php echo $text['text_2']; ?></textarea>
                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                </form>


                <!-- link facebook & line -->
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border:none;">
                            <img src="img/line.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border: none;">
                            <img src="img/face.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                </div>
                <!-- end link -->



                <!-- review product -->
                <form action="" id="formHead_review">
                    <input type="text" name="head_review" id="head_review" value="<?php echo $text['head_review']; ?>" data-id="<?php echo $text_id['head_review']; ?>" class="form-control bg-danger p-3 text-ask rounded text-content" style="color:white;text-align:center; font-size:25px;">
                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                </form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_1']; ?>" alt="<?php echo $id_arr['review_1']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_2']; ?>" alt="<?php echo $id_arr['review_2']; ?>">
                    </div>
                </div>

                <div>
                    <img class="img-fluid col-12 img-content" src="<?php echo $img_arr['review_3']; ?>" alt="<?php echo $id_arr['review_3']; ?>">
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_4']; ?>" alt="<?php echo $id_arr['review_4']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_5']; ?>" alt="<?php echo $id_arr['review_5']; ?>">
                    </div>
                </div>

                <div>
                    <img class="img-fluid col-12 img-content" src="<?php echo $img_arr['review_6']; ?>" alt="<?php echo $id_arr['review_6']; ?>">
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_7']; ?>" alt="<?php echo $id_arr['review_7']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_8']; ?>" alt="<?php echo $id_arr['review_8']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_9']; ?>" alt="<?php echo $id_arr['review_9']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_10']; ?>" alt="<?php echo $id_arr['review_10']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_11']; ?>" alt="<?php echo $id_arr['review_11']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_12']; ?>" alt="<?php echo $id_arr['review_12']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_13']; ?>" alt="<?php echo $id_arr['review_13']; ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <img class="img-fluid img-content" src="<?php echo $img_arr['review_14']; ?>" alt="<?php echo $id_arr['review_14']; ?>">
                    </div>
                </div>


                <!-- link facebook & line -->
                <div class="row mt-4 mb-3">
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border:none;">
                            <img src="img/line.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <button style="border: none;">
                            <img src="img/face.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                </div>
                <!-- end link -->


                <form action="" id="formHeader_ask">
                    <input type="text" name="header_ask" id="header_ask" value="<?php echo $text['header_ask']; ?>" data-id="<?php echo $text_id['header_ask']; ?>" class="form-control bg-danger p-3 text-ask rounded text-content mb-3" style="color:white;text-align:center;font-size:25px;">
                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                </form>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <form action="" class="w-100" id="formHead_1">
                                    <input type="text" name="head_1" id="head_1" value="<?php echo $text['head_1']; ?>" data-id="<?php echo $text_id['head_1']; ?>" class="form-control text-content" style="width: 100%;">
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body float-start w-100">
                                <form action="" id="formtext-head_1" class="col-12">
                                    <textarea name="text_head_1" id="text_head_1" cols="30" rows="5" data-id="<?php echo $text_id['text_head_1']; ?>" class="form-control text-content col-12 w-100"><?php echo $text['text_head_1']; ?></textarea>
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <form action="" id="formtext-head_2" class="col-12 w-100">
                                    <input name="head_2" id="head_2" value="<?php echo $text['head_2']; ?>" data-id="<?php echo $text_id['head_2']; ?>" class="form-control text-content col-12 w-100">
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body float-start w-100">
                                <form action="" id="formtext_head_2" class="col-12">
                                    <textarea name="text_head_2" id="text_head_2" cols="30" rows="5" data-id="<?php echo $text_id['text_head_2']; ?>" class="form-control text-content col-12 w-100"><?php echo $text['text_head_2']; ?></textarea>
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <form action="" id="formhead_3" class="col-12">
                                    <input name="head_3" id="head_3" value="<?php echo $text['head_3']; ?>" data-id="<?php echo $text_id['head_3']; ?>" class="form-control text-content col-12 w-100">
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body float-start w-100">
                            <form action="" id="formtext_head_3" class="col-12">
                                    <textarea name="text_head_3" id="text_head_3" cols="30" rows="5" data-id="<?php echo $text_id['text_head_3']; ?>" class="form-control text-content col-12 w-100"><?php echo $text['text_head_3']; ?></textarea>
                                    <input type="submit" value="อัพเดต" style="display: none;" class="btn-submit btn btn-primary col-12">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <img class="img-fluid w-100 img-content" src="<?php echo $img_arr['content_8']; ?>" alt="<?php echo $id_arr['content_8']; ?>">
                </div>
                <div>
                    <img src="<?php echo $img_arr['content_9']; ?>" alt="<?php echo $id_arr['content_9']; ?>" class="img-fluid w-100 img-content">
                </div>
                <div>
                    <img src="<?php echo $img_arr['content_10']; ?>" alt="<?php echo $id_arr['content_10']; ?>" class="img-fluid w-100 img-content">
                </div>
                <div>
                    <img src="<?php echo $img_arr['content_11']; ?>" alt="<?php echo $id_arr['content_11']; ?>" class="img-fluid w-100 img-content">
                </div>
                <div>
                    <img src="<?php echo $img_arr['content_12']; ?>" alt="<?php echo $id_arr['content_12']; ?>" class="img-fluid w-100 img-content">
                </div>


                <!-- link facebook & line -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 mb-3">
                        <button style="border:none;">
                            <img src="img/line.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <button style="border:none;">
                            <img src="img/face.gif" alt="" class="img-fluid rounded">
                        </button>
                    </div>
                </div>
                <hr>
                <!-- end link -->
            </div>


        </div>


        <!-- Modal -->
        <div class="modal fade" id="ModalProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="text-profile">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="formContent">
                        <input type="hidden" name="id" id="id">
                        <img src="" id="output" alt="" class="form-control card-img-top">
                        <div class="modal-body">
                            <input type="hidden" name="old_img" id="old_img">
                            <input type="file" name="file" id="file" class="form-control" onchange="loadFile(event)">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            <input type="submit" value="อัพเดต" class="btn btn-primary" id="btn-submit-content" style="display:none;">
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php require_once("function/footer.php"); ?>
    <script src="js/content.js"></script>
    <script src="js/swal.js"></script>