<div class="contain_product_sidebar w-100 d-f jf-b ">
    <!-- ----contain product--- -->
    <div class="contain_productDetail d-f jf-b al-c f-d">

        <?php
        $product_name = $productDetail['product_name'];
        $id = $productDetail['id'];
        $sale = $productDetail['sale'];
        $view = $productDetail['view'];
        $price = $productDetail['price'];
        $description = $productDetail['description'];
        $image_name = $productDetail['image'];
        $image_url = "upload/";
        $image = $image_url . $image_name;
        ?>

        <div class="contain_product_detail mb">
            <h2>Thông tin chi tiết</h2>
            <div class="product-detail_image w-100 d-f jf-c">
                <img src="<?= $image ?>" alt="">
            </div>
            <div class="product-detail_infor">
                <ul>
                    <li>Tên : <?= $product_name ?></li>
                    <li>ID : <?= $id ?></li>
                    <li>Giảm giá : <?= $sale ?></li>
                    <li>Số lượt xem : <?= $view ?></li>
                    <li>Giá : <?= number_format($price) ?></li>
                </ul>
            </div>
            <div class="product-detail_desc">
                <p>
                    <?php echo  $description ?>
                </p>
            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                
                    $("#comment").load("view/comment/comment.php",{id_pro: <?= $id ?>});
                
            });
        </script>
        <div class="comment mb"  id="comment"></div>
        <div class="related_products">
            <h3>Sản phẩm liên quan</h3>

            <ul class="ul_related_product">
                <?php
                for ($i = 0; $i < count($product_same_category); $i++) {
                    $name_product_same_cate = $product_same_category[$i]['product_name'];
                    $id_product = $product_same_category[$i]['id'];

                    $url_product = "index.php?act=productDetail&id=$id_product";

                ?>
                    <li>
                        <a class="link_product_same_cate" href="<?= $url_product ?>">
                            <?= $name_product_same_cate ?>
                        </a>
                    </li>
                <?php } ?>


            </ul>

        </div>





    </div>

    <!-- ---side_bar--- -->
    <?php
    include "box_right.php";
    ?>
</div>