<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<p style="font-size: 25px;" class="mt-5">3. ที่อยู่ผู้รับสินค้า</p>
<p id="error-all" class="text-danger fw-bold" style="display: none; font-size:20px;"></p>
<div class="row">
    <div class="col-lg-6 col-md-12 col-12">

        <input type="hidden" name="product" id="product" value="<?php if(isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart']) > 0){ echo 'true'; }else{ echo '';};?>">
            <label for="">ชื่อ *</label>
            <input type="text" name="name" id="name" class="form-control">
            <p class="text-danger" id="text-error" style="display:none;"></p>
    </div>
    <div class="col-lg-6 col-md-12 col-12">
        <label for="">เบอร์มือถือ *</label>
        <input type="text" name="phone" class="form-control" id="phone" maxlength="10">
        <p class="text-danger" id="text-phoen-error" style="display: none;"></p>
    </div>
    <div class="col-12 mt-5">
        <label for="">ที่อยู่รับสินค้า *</label>
        <textarea name="address" class="form-control" id="address" cols="20" rows="5"></textarea>
        <p class="text-danger" id="text-address-error"></p>
    </div>
    <div class="col-12 mt-5">
        <input type="submit" id="order" class="btn-by w-100" value="ยืนยันคำสั่งซื้อ">
    </div>
    </form>
</div>