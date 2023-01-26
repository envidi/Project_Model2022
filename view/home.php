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
            $url_productDetail = "index.php?act=productDetail&id=$id";


        ?>

            <div class="product_main d-f al-c f-d">
                <div class="product_main_image">
                    <a href="<?= $url_productDetail ?>"><img src="<?= $image ?>" alt=""></a>
                </div>
                <div class="product_info_main">
                    <div align="center" class="product_info_main-name">
                        <a href="<?= $url_productDetail ?>">
                            <?= $product_name ?>
                        </a>
                    </div>
                    <span class="product_info_main-price d-f jf-c">
                        
                        <?php if($product_price != ""){ echo number_format($product_price);} else{$price = 0;}  ?>
                    </span>
                </div>
            </div>

        <?php } ?>
       




    </div>
    <!-- ---side_bar--- -->
    <?php
        include "box_right.php";
    ?>
</div>