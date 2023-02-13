<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f al-c f-d ">
<?php
if(isset($list_bill) && is_array($list_bill)){
$id = isset($list_bill['id']) ? $list_bill['id'] : 0;
$bill_name = isset($list_bill['bill_name']) ? $list_bill['bill_name'] : "";
$email = isset($list_bill['email']) ? $list_bill['email'] : "";
$bill_address = isset($list_bill['bill_address']) ? $list_bill['bill_address'] : "";
$bill_tele = isset($list_bill['bill_tele']) ? $list_bill['bill_tele'] : 0;
$payment_method = isset($list_bill['payment_method']) ? $list_bill['payment_method'] : 1;
$bill_date = isset($list_bill['bill_date']) ? $list_bill['bill_date'] : 0;
$total = isset($list_bill['total']) ? $list_bill['total'] : 0;




}



?>




        <form action="" class="d-f f-d form_bill" method="POST" enctype="multipart/form-data">
            <h3 class="bill_title">Thank you</h3>
            <div class="bill">
                <div class="d-f infor_bill" style="font-weight: 600;">
                    Cám ơn quý khách đã đặt hàng tại Envidi Shop
                </div>


            </div>
            <h3 class="bill_title">Thông tin đơn hàng</h3>
            <div class="bill">

                <div class="d-f infor_bill f-d">
                    <div style="margin-bottom: 10px;">Mã đơn hàng của bạn là : ENV-<?= $id ?>00</div>
                    <div style="margin-bottom: 10px;">Ngày đặt hàng của bạn là : <?= $bill_date ?></div>
                    <div style="margin-bottom: 10px;">Tổng đơn hàng của bạn là : <?= number_format($total) ?></div>
                    
                </div>
              
            </div>

            <h3 class="bill_title">Thông tin khách hàng</h3>
            <div class="bill">

                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_user">User name</label>
                    <input class="input_bill "  disabled required type="text" id="bill_user" name="username" value="<?= $bill_name ?>" placeholder="Nhập username">
                </div>

                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_email">Email</label>
                    <input class="input_bill " disabled required type="text" id="bill_email" name="email" value="<?= $email ?>" placeholder="Email">
                </div>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_addre">Address</label>
                    <input class="input_bill " disabled required type="text" id="bill_addre" name="address" value="<?= $bill_address ?>" placeholder="Address">
                </div>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_tele">Telephone</label>
                    <input class="input_bill " disabled required type="number" id="bill_tele" name="tele" value="0<?= $bill_tele ?>" placeholder="Telephone">
                </div>
            </div>

            <h3 class="bill_title">Phương thức thanh toán</h3>
            <div class="bill">
                <input type="text" name="id" value="" hidden>
                <div class="d-f infor_bill">
                   <!-- Chuyển khoản ngân hàng -->
                   <?php
                    if($payment_method == 1)echo "Trả tiền khi nhận hàng";
                    else if($payment_method == 2)echo "Chuyển khoản ngân hàng";
                    else{
                        echo "Thanh toán online";
                    }

                    ?>

                </div>

                

            </div>
            <?php
            model_cart(0);
            ?>







            <div class="button_form">

                <input type="submit" value="Đồng ý đặt hàng" class="order mt" name="order">




            </div>
        </form>

    </div>
    <!-- ---side_bar--- -->
    <?php
    include "./view/box_right.php";
    ?>
</div>