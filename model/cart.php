<?php

function model_cart($del)
{
?>
    <table class="cart_table">
        <thead>
            <tr class="tr-thead">
                <th colspan="7" style="background-color: #cd1818;color:white; ">Giỏ hàng</th>

            </tr>
            <tr class="tr-thead">
                <th>Check</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Result</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $total = 0;

            for ($i = 0; $i < count($_SESSION['mycart']); $i++) {
                $image =  $_SESSION['mycart'][$i][1];
                $product = $_SESSION['mycart'][$i][2];
                $price = $_SESSION['mycart'][$i][3];
                $quantity = $_SESSION['mycart'][$i][4];
                $result = $price * floatval($quantity);
                $total += $result;

                $url_delete = "index.php?act=delete_cart&&id_Cart=$i&&header=sign_in";





            ?>


                <tr style="margin: 10px 0px;" class="">
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td>
                        <img width="20" src="<?= $image ?>" alt="">
                    </td>

                    <td><?= $product ?></td>
                    <td><?= number_format($price) ?></td>
                    <td><?= $quantity ?></td>
                    <td><?= number_format($result); ?>
                    </td>
                    <td>
                        <?php if ($del == 1) { ?>
                            <a href="<?= $url_delete ?>" class="order link_order_delete">
                                Delete
                            </a>
                        <?php } else{ echo "";} ?>

                    </td>
                </tr>
            <?php } ?>
            <tr class="">


                <td colspan="5">Total</td>

                <td><?= number_format($total) ?></td>
                <td></td>
            </tr>


        </tbody>
    </table>

<?php
}

?>
<?php

function total_order()
{              
            $total = 0;

            for ($i = 0; $i < count($_SESSION['mycart']); $i++) {
               
                $price = $_SESSION['mycart'][$i][3];
                $quantity = $_SESSION['mycart'][$i][4];
                $result = $price * floatval($quantity);
                $total += $result;
            
            }     
            return $total;    
}
function insert_bill($bill_name,$email,$bill_address,$bill_tele,$payment_method,$bill_date,$total)
{
    $sql = "INSERT INTO bill (bill_name,email,bill_address,bill_tele,payment_method,bill_date,total) VALUES ('$bill_name','$email','$bill_address','$bill_tele','$payment_method','$bill_date','$total') ";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($id_user,$id_product,$image,$name,$price,$quantity,$cash,$id_bill)
{
    $sql = "INSERT INTO cart (id_user,id_pro,image,name,price,quantity,cash,id_bill) VALUES ($id_user,'$id_product','$image','$name','$price','$quantity','$cash','$id_bill') ";
    pdo_execute($sql);
}

function select_bill_one($id){
    $sql = "SELECT * FROM bill WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}


?>