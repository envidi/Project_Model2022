<main class="w-100">
    <div class="add_new w-100">Quản lý sản phẩm</div>

    <form class="form_filter_product" style="margin-top: 20px;" action="index.php?act=list_customer" method="POST">
        <input style="width:300px;" type="text" name="filter_customer" placeholder="Nhập tài khoản cần tìm kiếm">
       
        <input type="submit" name="submit_filter_customer">
    </form>

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
                <th>Check</th>
                <th>ID</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Role</th>               
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($list_customer); $i++) {
                $user = $list_customer[$i]['user'];
                $password = $list_customer[$i]['password'];
                $email = $list_customer[$i]['email'];
                $address = $list_customer[$i]['address'];
                $role = $list_customer[$i]['role'];
                $url_image = "../upload/";
                $tele = $list_customer[$i]['tele'];
                $id = $list_customer[$i]['id'];
                                               
                $url_delete = "index.php?act=delete_customer&id=$id";
                $url_edit = "index.php?act=edit_customer&id=$id";

            ?>
                <tr class="">
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td><?=  $id ?></td>
                    <td><?=  $user ?></td>
                    <td><?=  $password ?></td>
                    <td><?=    $email ?></td>
                    <td><?=  $address ?></td>                    
                    <td><?=  $tele ?></td>                   
                    <td><?=  $role ?></td>                   
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