<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f al-c f-d ">

    <table class="cart_table" style="margin-top: 10px;">
        <thead>
            <tr class="tr-thead">
                <th colspan="7" style="background-color: #cd1818;color:white; ">Giỏ hàng của bạn</th>

            </tr>
            <tr class="tr-thead">
                <th>STT</th>
                
                <th>Mã đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng mặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
          
            if(is_array($listbill)){
                for ($i = 0; $i < count($listbill); $i++) {
                    $count = select_cart_count($listbill[$i]['id']) ;                    
                    $bill_name = $listbill[$i]['bill_name'];
                    $bill_date = $listbill[$i]['bill_date'];
                    $total = $listbill[$i]['total'];
                    $status = getStatus($listbill[$i]['bill_status']); 
                 ?>   
                    
                    <tr style="margin: 10px 0px;" class="">
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                       ENV100<?= $listbill[$i]['id'] ?>
                    </td>
                    <td style="width:10%"><?= $bill_date ?></td>
                    <td><?= $count ?></td>
                    <td style="width:20%"><?= number_format($total) ?></td>
                    <td><?= $status?></td>
                    
                   
                </tr>
            
   <?php     }}

?> 
           


               
           
           

        </tbody>
    </table>
        


    </div>
    <!-- ---side_bar--- -->
    <?php
    include "./view/box_right.php";
    ?>
</div>