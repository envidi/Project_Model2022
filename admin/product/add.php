<main class="w-100">
    <div class="add_new w-100">
        Thêm mới loại hàng hóa
    </div>
    <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
    <div class="id_category">
        auto number
    </div>
    <form action="index.php?act=add_product" class="d-f f-d" method="POST" enctype="multipart/form-data">
        <label for="name_category">Tên loại</label>
        <input type="text" id="name_category" autofocus name="name_product" placeholder="name_product">

        <label for="name_category">Price</label>
        <input type="number" id="price_product" name="price" placeholder="price">
        <span class="parseNumber"></span>

        <label for="name_category">Sale</label>
        <input type="text" id="sale_product" name="sale" placeholder="sale">

        <label for="name_category">Image</label>
        <input type="file" id="image_product" name="image" placeholder="image">

        <label for="name_category">Date</label>
        <input type="date" id="date_product" name="date" placeholder="date">

        <label for="name_category">Description</label>
        <input type="text" id="desc_product" name="desc" placeholder="desc">

        <label for="name_category">Special</label>
        <input type="text" id="special_product" name="special" placeholder="special">

        <label for="name_category">View</label>
        <input type="text" id="view_product" name="view" placeholder="view">

        <label for="name_category">Category</label>
        <select name="category_id" id="">
            <?php for ($i = 0; $i < count($category_name); $i++) { ?>
                <option value="<?php echo $category_name[$i]['id'] ?>">
                    <?php echo $category_name[$i]['category_name'] ?>
                </option>
            <?php } ?>
        </select>


        <div class="button_form">
            <input type="submit" class="btn_name_category" name="add_new" value="Add new" />

            <input type="reset" class="btn_name_category" value="reset" />

            <a href="index.php?act=list_product"><input type="button" type="text" value=" Danh sách"></a>

        </div>
        <?php
        if (isset($notify) && ($notify != "")) {
            echo $notify;
        }
        ?>
    </form>
</main>
</div>