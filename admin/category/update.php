<?php

if (isset($result['category_name']) && isset($result['id'])) {
    $value_name = $result['category_name'];
    $value_id = $result['id'];
} else {
    $value_name = "Undefined name";
    $value_id = 0;
}

?>


<main class="w-100">
    <div class="add_new w-100">
        Cập nhật loại hàng hóa
    </div>
    <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
    <div class="id_category">
        auto number
    </div>
    <form action="index.php?act=update_category" class="d-f f-d" method="POST">
        <label for="name_category">Tên loại</label>
        <input type="text" id="name_category" autofocus name="name_category" value="<?= $value_name  ?>">
        <input type="text" name="id" value="<?=  $value_id  ?>" hidden>
        <div class="button_form">
            <input type="submit" class="btn_name_category" name="update" value="Update" />

            <input type="reset" class="btn_name_category" value="reset" />

            <a href="index.php?act=list_category"><input type="button" type="text" value=" Danh sách"></a>

        </div>
        <?php
        if (isset($notify) && ($notify != "")) {
            echo $notify;
        }
        ?>
    </form>
</main>
</div>