<div class="contain_sidebar">
        <div class="product_category">
            <ul>
                <li>Danh mục</li>
                <?php
                for($i = 0  ; $i < count($category_home); $i++){
                    $category_name = $category_home[$i]['category_name'];
                    $category_id = $category_home[$i]['id'];
                    $product_of_category = "index.php?act=productToCate&category_id=$category_id";
                
                ?>
                 <li><a href="<?= $product_of_category ?>"><?= $category_name ?></a></li>
                <?php } ?>
                <!-- <li><a href="#">Điện thoại</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">PC - Lắp ráp</a></li>
                <li><a href="#">Máy tính bảng</a></li>
                <li><a href="#">Thiết bị thông minh</a></li>
                <li><a href="#">Gia dụng</a></li>
                <li><a href="#">Phụ kiện</a></li>
                <li><a href="#">Màn hình</a></li> -->
                <li>
                    <form action="index.php?act=search_product&header=HeaderNoBanner" class="d-f" method="POST">
                        <input class="w-100" type="text" placeholder="Tìm kiếm theo tên" id="search_product" name="searchProduct">
                        <button class="search_product_btn">
                            Search
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="product_top_10_favorite">
            <div class="top_10_favorite w-100">
                Top 10 yêu thích
            </div>
            <ul>
            <?php
                for($i = 0  ; $i < count($product_top10); $i++){
                    $top10_product_name = $product_top10[$i]['product_name'];
                    $top10_product_image_name = $product_top10[$i]['image'];
                    $top10_product_image_url = "upload/";
                    $top10_product_image = $top10_product_image_url . $top10_product_image_name;
                    $top10_product_id = $product_top10[$i]['id'];
                    $url_productDetail = "index.php?act=productDetail&id=$top10_product_id";
                ?>
                 <li class="d-f al-c">
                    <div class="contain_img_favorite">
                        <a href="<?= $url_productDetail ?>">
                            <img src="<?= $top10_product_image ?>" alt="">
                        </a>
                    </div>
                    <div class="name_favorite_product">
                        <a href="<?= $url_productDetail ?>"> <?= $top10_product_name ?></a>
                    </div>
                </li>
                <?php } ?>
              

            </ul>
        </div>
    </div>