
<div class="contain_product_sidebar w-100 d-f jf-b ">
    <!-- ----contain product--- -->

    <div class="contain_productDetail d-f jf-b f-w  ">




        <?php
        for ($i = 0; $i < count($productToCate); $i++) {
            $product_name = $productToCate[$i]["product_name"];
            $product_price = $productToCate[$i]["price"];
            $name_image = $productToCate[$i]["image"];
            $image = $image_path . $name_image;
            $id =  $productToCate[$i]["id"];
            $url_productDetail = "index.php?act=productDetail&id=$id";


        ?>

            <div class="product_main d-f al-c f-d ">

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

                        <?php if ($product_price != "") {
                            echo number_format($product_price);
                        } else {
                            $price = 0;
                        }  ?>
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