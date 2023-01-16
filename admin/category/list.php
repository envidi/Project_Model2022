<main class="w-100">
    <div class="add_new w-100">Quản lý loại hàng</div>

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
                <th>Check</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           
            <?php

                for($i=0; $i < count($category_name); $i++){
                    $name_category = $category_name[$i]['category_name'];
                    $id = $category_name[$i]['id'];
                    $url_delete = "index.php?act=delete_category&id=$id";
                    $url_edit = "index.php?act=edit_category&id=$id";
            ?>
             <tr class="">
                <td>
                    <input type="checkbox" />
                </td>
                <td><?=  $id;  ?></td>
                <td><?= $name_category ?></td>
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
            <a href="index.php?act=add_category"> Add more</a>
        </button>
    </div>
</main>