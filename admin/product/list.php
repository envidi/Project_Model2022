<main class="w-100">
    <div class="add_new w-100">Quản lý sản phẩm</div>

    <form class="form_filter_product" style="margin-top: 20px;" action="index.php?act=list_product" method="POST">
        <input style="width:300px;" type="text" name="filter_product" placeholder="Nhập tên sản phẩm cần tìm kiếm">
        <select name="category_id" style="height: 37px;" id="select_category">
            <option value="0">All</option>
            <?php for ($i = 0; $i < count($category_name); $i++) { ?>
                <option value="<?php echo $category_name[$i]['id'] ?>">
                    <?php echo $category_name[$i]['category_name'] ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" name="submit_filter_product">
    </form>

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
                <th>Check</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Sale</th>
                <th>Image</th>
                <th>Date</th>
                <th>Description</th>
                <th>Special</th>
                <th>View</th>
                <th>Category</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($product_name); $i++) {
                $name_product = $product_name[$i]['product_name'];
                $id = $product_name[$i]['id'];
                $price = $product_name[$i]['price'];
                $sale = $product_name[$i]['sale'];
                $url_image = "../upload/";
                $image_name = $product_name[$i]['image'];
                $image = $url_image . $image_name;
                $date = $product_name[$i]['date'];
                $description = $product_name[$i]['description'];
                $special = $product_name[$i]['special'];
                $view = $product_name[$i]['view'];
                $category_id = $product_name[$i]['category_id'];
                $category = select_category_one($category_id);
                $category_name = $category['category_name'];
                $url_delete = "index.php?act=delete_product&id=$id";
                $url_edit = "index.php?act=edit_product&id=$id";

            ?>
                <tr class="">
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td><?= $id ?></td>
                    <td><?= $name_product ?></td>
                    <td><?php if($price != ""){ echo number_format($price);} else{$price = 0;}  ?></td>
                    <td><?= $sale ?></td>
                    <td>
                        <img style="width: 50px ;" src="<?= $image ?>" alt="" srcset="">
                    </td>
                    <td><?= $date ?></td>
                    <td><?= $description ?></td>
                    <td><?= $special ?></td>
                    <td><?= $view ?></td>
                    <td><?= $category_name ?></td>
                    <td>
                        <a href="<?= $url_edit ?>">
                            <button class="edit-category">EDIT</button>
                        </a>
                    </td>
                    <td>
                        <a href="<?= $url_delete ?>">
                            <button class="delete-category">DELETE</button>
                        </a>
                    </td>
                </tr>

            <?php } ?>





        </tbody>
    </table>

    <div class="button_form">
        <button class="btn_name_category">Chọn tất cả</button>
        <button type="reset" class="btn_name_category">Bỏ chọn tất cả</button>
        <button type="reset" class="btn_name_category">Xóa các mục đã chọn</button>

        <button class="btn_name_category">
            <a href="index.php?act=add_product"> Add more</a>
        </button>
    </div>
</main>