<main class="w-100">
    <div class="add_new w-100">Quản lý sản phẩm</div>

    <form class="form_filter_product" style="margin-top: 20px;" action="index.php?act=comment_list" method="POST">
        <input type="submit" name="allComment" value="All">
        <input style="width:300px;" type="text" name="filter_comment" placeholder="Nhập tên bình luận cần tìm kiếm">
       
        <input type="submit" name="submit_filter_comment">
    </form>

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
                <th>Check</th>
                <th>ID</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Content</th>
                <th>Product Id</th>                
                <th>Date</th>                
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($list_comment); $i++) {
                $id = $list_comment[$i]['id'];
                $customer_id = $list_comment[$i]['customer_id'];
                $checkUserName = checkUserId($customer_id);
                $userName = $checkUserName['user'];
                $content = $list_comment[$i]['content'];
                $product_id = $list_comment[$i]['product_id'];
                $date = $list_comment[$i]['date'];
                
                                               
                $url_delete = "index.php?act=delete_comment&id=$id";
                $url_edit = "index.php?act=edit_comment&id=$id";

            ?>
                <tr class="">
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td><?=  $id ?></td>
                    <td><?=  $customer_id ?></td>
                    <td><?=  $userName ?></td>
                    <td><?=    $content ?></td>
                    <td><?=  $product_id ?></td>                    
                    <td><?=  $date ?></td>                   
                             
                    <td>
                        <a href="<?= $url_edit ?>">
                            <button class="edit-category">EDIT</button>
                        </a>
                    </td>
                    <td>
                        <a href="<?= $url_delete ?>" onclick="confirm('Are you sure to delete ?')">
                            <button  class="delete-category">DELETE</button>
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
            <a href="index.php?act=add_customer"> Add more</a>
        </button>
    </div>
</main>





