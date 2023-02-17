<main class="w-100">
    <div class="add_new w-100">Quản lý đơn hàng</div>

    <form class="form_filter_product" style="margin-top: 20px;" action="index.php?act=listBill" method="POST">
        <input type="submit" name="allComment" value="All">
        <input style="width:300px;" type="text" name="filter_bill" placeholder="Nhập tên đơn hàng cần tìm kiếm">

        <input type="submit" name="submit_filter_bill">
    </form>

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
                <th>Check</th>
                <th>ID</th>
                <th>Customer</th>
                <th>Address</th>
                <th>Quantity</th>
                <th>Total value</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($list_bill); $i++) {
                $id = $list_bill[$i]['id'];
                $customer = $list_bill[$i]['bill_name'];
                $email = $list_bill[$i]['email'];
                $bill_address = $list_bill[$i]['bill_address'];
                $bill_tele = $list_bill[$i]['bill_tele'];

                $total = $list_bill[$i]['total'];
                $date = $list_bill[$i]['bill_date'];
                $status = getStatus($list_bill[$i]['bill_status']);

                $count = select_cart_count($id);

                $url_delete = "index.php?act=delete_bill&id=$id";
                $url_edit = "index.php?act=edit_bill&id=$id";

            ?>
                <tr class="">
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td>ENV100<?= $id ?></td>
                    <td>
                        <?= $customer ?> 
                        

                        

                    </td>
                    <td >
                        <?= $bill_address ?>
                    </td>
                    <td style="width:9%"><?= $count ?></td>
                    <td><?= number_format($total) ?></td>
                    <td><?= $date  ?></td>
                    <td><?= $status ?></td>


                    <td>
                        <a href="<?= $url_edit ?>">
                            <button class="edit-category">EDIT</button>
                        </a>
                    </td>
                    <td>
                        <a href="<?= $url_delete ?>" onclick="confirm('Are you sure to delete ?')">
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
            <a href="index.php?act=add_customer"> Add more</a>
        </button>
    </div>
</main>