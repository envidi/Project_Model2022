<?php
$arrStatus = ['Đơn hàng mới','Đang xử lý','Đang giao hàng','Đã hoàn tất'];

if (isset($result['bill_name']) && isset($result['id'])) {
    $value_id = isset($result['id']) ? $result['id'] : 0;
    $value_name = isset($result['bill_name']) ? $result['bill_name'] : "";
    $value_total =isset( $result['total']) ?  $result['total'] : 100;
    $value_status = isset($result['bill_status']) ? $result['bill_status'] : 0;
    $value_date = isset($result['bill_date']) ? $result['bill_date'] : "";
   
    
  
    
} else {
    $value_name = "Undefined name";
    $value_id = 0;
}


?>



<main class="w-100">
    <div class="add_new w-100">
        Cập nhật đơn hàng
    </div>
    <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
    <div class="id_category">
        ENV100<?= $value_id  ?>
    </div>
    <form action="index.php?act=update_bill" class="d-f f-d" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $value_id  ?>" hidden>
        <label for="name_category">Customer</label>
        <input type="text" id="name_category" autofocus name="customer_name" value="<?= $value_name  ?>">
       

        

        <label for="name_category">Total value</label>
        <input type="text" id="price_product" name="total" value="<?= $value_total ?>" placeholder="Total">
        <span class="parseNumber"><?= number_format($value_total) ?></span>

        <label for="name_category">Date</label>
        <input type="text" id="image_product" value="<?= $value_date ?>" name="date" placeholder="Date">       
          

        <label for="name_category">Status</label>        
        <select style="padding: 10px 0px;" name="status_bill" id="">
            <!-- <option value="0">
                All
            </option> -->
            <?php for ($i = 0; $i < count($arrStatus); $i++) { ?>

                <option value="<?= $i ?>" 
                <?php if($i === $value_status){echo "selected";} ?>
                >
                    <?php echo $arrStatus[$i] ?>
                </option>

            <?php } ?>
        </select>

        <?php
        if (isset($notify) && ($notify != "")) {
            echo $notify;
        }
        ?>
        <div class="button_form">
            <input type="submit" class="btn_name_category" name="update" value="Update" />

            <input type="reset" class="btn_name_category" value="reset" />

            <a href="index.php?act=listBill"><input type="button" type="text" value="Danh sách"></a>

        </div>
       
    </form>
</main>
</div>