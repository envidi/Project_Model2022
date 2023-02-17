<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f al-c f-d ">



        <?php
        if (isset($_SESSION['userId'])) {
            $info_user = $_SESSION['userId']['user'];
            $info_email = $_SESSION['userId']['email'];
            $info_address = $_SESSION['userId']['address'];
            $info_tele= $_SESSION['userId']['tele'];
            
        }
        else{
            $info_user = "";
            $info_email = "";
            $info_address = "";
            $info_tele= 0;
        }




        ?>

        <form action="index.php?act=bill_confirm&&header=sign_in" class="d-f f-d form_bill" method="POST" enctype="multipart/form-data">
            <h3 class="bill_title">Thông tin khách hàng</h3>
            <div class="bill">
                <input type="text" name="id" value="<?= $id ?>" hidden>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_user">User name</label>
                    <input class="input_bill" required type="text" id="bill_user" name="username" value="<?= $info_user ?>" placeholder="Nhập username">
                </div>

                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_email">Email</label>
                    <input class="input_bill" required type="text" id="bill_email" name="email" value="<?= $info_email ?>" placeholder="Email">
                </div>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_addre">Address</label>
                    <input class="input_bill" required type="text" id="bill_addre" name="address" value="<?= $info_address ?>" placeholder="Address">
                </div>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_tele">Telephone</label>
                    <input class="input_bill" required type="number" id="bill_tele" name="tele" value="<?= $info_tele ?>" placeholder="Telephone">
                </div>
            </div>

            <h3 class="bill_title">Phương thức thanh toán</h3>
            <div class="bill">
                
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_user">Trả tiền khi nhận hàng</label>
                    <input class="input_bill" required type="radio" id="bill_user" checked  name="credit" value="1" placeholder>
                </div>

                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_email">Chuyển khoản ngân hàng</label>
                    <input class="input_bill" required type="radio" id="bill_email" name="credit" value="2">
                </div>
                <div class="d-f infor_bill">
                    <label class="label_bill" for="bill_addre">Thanh toán online</label>
                    <input class="input_bill" required type="radio" id="bill_addre" name="credit" value="3">
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