<?php

if ( isset($result['id'])) {
    $id = $result['id'];
    $user = $result['user'];
    $password = $result['password'];
    $email = $result['email'];
    $address = $result['address'];
    $tele = $result['tele'];
    $role = $result['role'];
   
} else {
    $id = 0;
    $user = "Undefined name";
}

?>


<main class="w-100">
    <div class="add_new w-100">
        Cập nhật tài khoản
    </div>
    <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">User ID</label>
    <div class="id_category">
        auto number
    </div>
    <form action="index.php?act=update_customer" class="d-f f-d" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $id ?>" hidden>
        <label for="name_category">User name</label>
        <input type="text" id="name_category" autofocus name="username" value="<?= $user ?>" placeholder="Nhập username">

        <label for="name_category">Password</label>
        <input type="text" id="price_product" name="password" value="<?= $password ?>" placeholder="Password">
        <span class="parseNumber"></span>

        <label for="name_category">Email</label>
        <input type="text" id="sale_product" name="email" value="<?= $email ?>" placeholder="Email">

        <label for="name_category">Address</label>
        <input type="text" id="image_product" name="address" value="<?= $address ?>" placeholder="Address">
        

        <label for="name_category">Telephone</label>
        <input type="number" id="date_product" name="tele" value="<?= $tele ?>" placeholder="Telephone">

        <label for="desc_product">Role</label>
        <input type="text" id="desc_product" name="role" value="<?= $role ?>" placeholder="Role">

        <div style="color:green">
            <?php
            if (isset($notify) && ($notify != "")) {
                echo $notify;
            } else {
                echo "";
            }
            ?>
        </div>
        


        <div class="button_form">
            <input type="submit" class="btn_name_category" name="update_customer" value="Update" />

            <input type="reset" class="btn_name_category" value="reset" />

            <a href="index.php?act=list_customer"><input type="button" type="text" value="Danh sách"></a>

        </div>
       
    </form>
</main>
</div>