<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f jf-b al-c">

        <?php
        for ($i = 0; $i < count($new_product); $i++) {
            $product_name = $new_product[$i]["product_name"];
            $product_price = $new_product[$i]["price"];
            $name_image = $new_product[$i]["image"];
            $image = $image_path . $name_image;
            $id =  $new_product[$i]["id"];
            $url_productDetail = "index.php?act=productDetail&id=$id&&header=sign_in";


        ?>

            <div class="product_main d-f al-c f-d">
                <div class="product_main_image">
                    <a href="<?= $url_productDetail ?>"><img src="<?= $image ?>" alt=""></a>
                </div>
                <div class="product_info_main">
                    <div align="center" class="product_info_main-name">
                        <a class="productName" href="<?= $url_productDetail ?>">
                            <?= $product_name ?>
                        </a>
                    </div>
                    <span class="product_info_main-price d-f jf-c">
                        
                        <?php if($product_price != ""){ echo number_format($product_price);} else{$price = 0;}  ?>
                    </span>
                    <form action="index.php?act=addToCart&&header=sign_in" method="POST" class="form_addToCart" enctype="multipart/form-data">
                        <input hidden type="text" name="product_name" value="<?= $product_name ?>">
                        <input hidden type="number" name="product_price" value="<?= $product_price ?>">
                        <input hidden type="text" name="image" value="<?= $image ?>">
                        <input hidden type="text" name="id" value="<?= $id ?>">
                        <input type="number" name="quantity" style="width:80px;margin:10px 0px;outline:none" placeholder="Số lượng">
                        <div class="btn_addToCart_icon">
                           
                        <i class="fa-solid fa-cart-shopping icon_cart"></i>
                        <input class="btn_addToCart" type="submit" name="addToCart" value="Add to cart">
                        </div>
                    </form>
                </div>
            </div>

        <?php } ?>
       




    </div>
    <!-- ---side_bar--- -->
    <?php
        include "box_right.php";
    ?>
</div>