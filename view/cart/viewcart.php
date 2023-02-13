<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f al-c f-d ">

        <?php
            model_cart(1)
        ?>
        <div class="button_order_form mt">
            <form action="index.php?act=orderCart&&header=sign_in" method="POST" class="d-f">
                <input type="submit" value=" Đặt hàng" class="order" name="order">
                


                <a href="index.php?act=add_customer" class="order link_order_delete"> Xóa giỏ hàng</a>

            </form>
        </div>


    </div>
    <!-- ---side_bar--- -->
    <?php
    include "./view/box_right.php";
    ?>
</div>