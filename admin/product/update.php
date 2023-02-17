<?php

if (isset($result['product_name']) && isset($result['id'])) {
    $value_id = $result['id'];
    $value_name = $result['product_name'];
    $value_price = $result['price'];
    $value_sale = $result['sale'];
    $value_date = $result['date'];
    $value_description = $result['description'];
    $value_special = $result['special'];
    $value_view = $result['view'];
    $value_cate = $result['category_id'];
    $url_image = "../upload/";
    $image_name = $result['image'];
    $image = $url_image . $image_name;
    
} else {
    $value_name = "Undefined name";
    $value_id = 0;
}

?>


<main class="w-100">
    <div class="add_new w-100">
        Cập nhật sản phẩm
    </div>
    <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
    <div class="id_category">
        auto number
    </div>
    <form action="index.php?act=update_product" class="d-f f-d" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $value_id  ?>" hidden>
        <label for="name_category">Tên loại</label>
        <input type="text" id="name_category" autofocus name="product_name" value="<?= $value_name  ?>">

        <label for="name_category">Price</label>
        <input type="number" id="price_product" name="price" value="<?= $value_price ?>" placeholder="price">
        <span class="parseNumber"><?= number_format($value_price) ?></span>

        <label for="name_category">Sale</label>
        <input type="text" id="sale_product" name="sale" value="<?= $value_sale ?>" placeholder="sale">

        <label for="name_category">Image</label>
        <input type="file" id="image_product" name="image" placeholder="image">
        <div>
            <img width="100" src="<?= $image ?>" alt="">
        </div>

        <label for="name_category">Date</label>
        <input type="date" id="date_product" name="date" value="<?= $value_date ?>" placeholder="date">

        <label for="desc_product">Description</label>
        <input type="text" id="desc_product" name="desc" value="<?= $value_description ?>" placeholder="desc">

        <label for="name_category">Special</label>
        <input type="text" id="special_product" name="special" value="<?= $value_special ?>" placeholder="special">

        <label for="name_category">View</label>
        <input type="text" id="view_product" name="view" value="<?= $value_view ?>" placeholder="view">

        <label for="name_category">Category</label>        
        <select style="padding: 10px 0px;" name="category_id" id="">
            <!-- <option value="0">
                All
            </option> -->
            <?php for ($i = 0; $i < count($category_name); $i++) { ?>

                <option value="<?php echo $category_name[$i]['id'] ?>" 
               <?php if($category_name[$i]['id'] == $value_cate){echo "selected";} ?>
                >
                    <?php echo $category_name[$i]['category_name'] ?>
                </option>

            <?php } ?>
        </select>


        <div class="button_form">
            <input type="submit" class="btn_name_category" name="update" value="Update" />

            <input type="reset" class="btn_name_category" value="reset" />

            <a href="index.php?act=list_product"><input type="button" type="text" value="Danh sách"></a>

        </div>
        <?php
        if (isset($notify) && ($notify != "")) {
            echo $notify;
        }
        ?>
    </form>
</main>
</div>