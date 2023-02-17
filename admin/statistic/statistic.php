<main class="w-100">
    <div class="add_new w-100">Quản lý sản phẩm</div>

   

    <table class="product_table">
        <thead>
            <tr class="tr-thead">
              
                
                <th>Mã danh mục</th>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                
                <th>Giá trung bình</th>             
             
            </tr>
        </thead>
        <tbody>

            <?php

            for ($i = 0; $i < count($list_statistic); $i++) {
                $category_id = $list_statistic[$i]['id'];
                $categoryName = $list_statistic[$i]['categoryName'];
                $countpro = $list_statistic[$i]['countpro'];
                $minprice = $list_statistic[$i]['minprice'];
                $maxprice = $list_statistic[$i]['maxprice'];
                
                $average = $list_statistic[$i]['average'];
                
              

            ?>
                <tr class="">
                                      
                    <td style="text-align:center;width:11%"><?= $category_id ?></td>
                    <td><?= $categoryName ?></td>                   
                    <td><?= $countpro ?></td>                  
                    <td><?= number_format($minprice) ?></td>
                    <td><?= number_format($maxprice) ?></td>
                    <td><?= number_format($average) ?></td>
                  
                   
                </tr>

            <?php } ?>





        </tbody>
    </table>

    <div class="button_form">      

        <button class="btn_name_category">
            <a href="index.php?act=chart_pie">See Chart</a>
        </button>
    </div>
</main>