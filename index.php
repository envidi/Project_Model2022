<?php
ob_start();
session_start();
include "model/product.php";
include "model/category.php";
include "model/pdo.php";
include "model/account.php";
include "model/cart.php";
include "global.php";
if(!isset($_SESSION['mycart'])){
    $_SESSION['mycart'] = [];
}
 
if (isset($_GET['header'])  && $_GET['header'] != "") {

    $header = $_GET['header'];
    switch ($header) {
        case 'HeaderNoBanner':
            include "view/header_noBanner.php";
            break;
        case 'sign_in':

            
            if (isset($_SESSION['login'])  && $_SESSION['login'] != "") {
                $id = $_SESSION['user']['id'];
                $info_id = $id;
                $checkUserId =  checkUserId($info_id);
                $_SESSION['userId'] = $checkUserId;
                $info_user = $_SESSION['userId']['user'];
                $info_id = $_SESSION['userId']['id'];
                $info_password = $_SESSION['userId']['password'];
                $info_email = $_SESSION['userId']['email'];

                include "view/header.php";
            } else {

                include "view/header.php";
            }

            break;
        default:
            include "view/header.php";
            break;
    }
} else {
    include "view/header.php";
}


$new_product = select_product_home();
$category_home  = select_category_all();
$product_top10 = select_product_homeTop10();

if ((isset($_GET['act'])) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'productToCate':
            $id = isset($_GET['category_id']) ? $_GET['category_id'] : 0;

            $category_name = select_name_category($id);
            $productToCate = select_product_all("", $id);

            include "view/product_follow_category.php";
            break;
        case 'search_product':
            $value_search = isset($_POST['searchProduct']) ? $_POST['searchProduct'] : "";
            if ($value_search != "") {
                $productToCate = select_product_all($value_search, 0);
            }




            include "view/searchProduct.php";
            break;
        case 'productDetail':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            $productDetail = select_product_one($id);
            $category_id = $productDetail['category_id'];
            $product_same_category = select_product_same_category($id, $category_id);

            include "view/product_detail.php";
            break;


        case 'edit_account':
            $userName = $_SESSION['userId']['user'];
            $password = $_SESSION['userId']['password'];
            $email = $_SESSION['userId']['email'];
            $tele = isset($_SESSION['userId']['tele']) ? $_SESSION['userId']['tele'] : "";
            $address = isset($_SESSION['userId']['address']) ? $_SESSION['userId']['address'] : "";
            $id = $_SESSION['userId']['id'];
            if ($userName !== "" && $password != 0) {
                include "view/account/edit_account.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'update_account':

            if(isset($_POST['update']) && $_POST['update'] ){

                $id = isset($_POST['id']) ? $_POST['id'] : "";                             
                $username = isset($_POST['name']) ? $_POST['name'] : "";                             
                $pass = isset($_POST['password']) ? $_POST['password'] : "";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $tele = isset($_POST['tele']) ? $_POST['tele'] : ""; 
                $address = isset($_POST['address']) ? $_POST['address'] : ""; 
                update_customer($id, $username,$email, $pass, $tele, $address,$role);
                $notify = "Update successfully";
                $_SESSION['userId'] =  checkUserId($id);
                header("Location:index.php?act=edit_account&notify=$notify&&header=sign_in");
            }
            else{
                $notify = "Update failed";
                header("Location:index.php?act=edit_account&notify=$notify");
            }
                        
            break;
        case 'forget_password':

                if(isset($_POST['sendEmail']) && $_POST['sendEmail'] ){
                      
                    $email = isset($_POST['email']) ? $_POST['email'] : "";
                 
                    $checkEmail = checkUserEmail($email);
                    
                    if(is_array($checkEmail)){
                        $sendPass = "Your password is " .$checkEmail['password'];
                    }
                    else{
                        $sendPass = "";
                    }
                    include "./view/account/forget_password.php";
                }
                else{
                    $blank = "";
                    include "./view/account/forget_password.php";
                }
                                                                               
                break;
        case 'log_out':
                session_unset();
                include "view/home.php";
                    break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'addToCart':
            if(isset($_POST['addToCart']) && $_POST['addToCart'] ){
                $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : "";                             
                $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : 1;                             
                $image = isset($_POST['image']) ? $_POST['image'] : "";
                $id = isset($_POST['id']) ? $_POST['id'] : 0;
                $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
                // $quantity = 1;
                $total = floatval($quantity) * floatval($product_price);
                $addProduct = [$id,$image,$product_name,$product_price,$quantity,$total];
                array_push($_SESSION['mycart'],$addProduct);
                

            }
            include "view/cart/viewcart.php";
            break;
        case 'delete_cart':
                if(isset($_GET['id_Cart'])){
                    
                   unset($_SESSION['mycart'][$_GET['id_Cart']]);                     
                }
                else{
                    $_SESSION['mycart'] = [];
                }
                header("Location:index.php?act=viewCart&&header=sign_in");
                break;
        case 'viewCart':
                   
                include "view/cart/viewcart.php";
                break;
        case 'bill_confirm':
            if(isset($_POST['order']) && $_POST['order']){
                if(isset($_SESSION['userId'])){ $id_user = $_SESSION['userId']['id'];}
                else{ $id_user = 0;}
                $userName = isset($_POST['username']) ? $_POST['username'] : "";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $bill_address = isset($_POST['address']) ? $_POST['address'] : "";
                $bill_tele = isset($_POST['tele']) ? $_POST['tele'] : 0;
                $payment_method = isset($_POST['credit']) ? $_POST['credit'] : 0;
                $bill_date = date('H:i:sa d/m/Y');
                $total = total_order();
                $id_bill = insert_bill($id_user,$userName,$email,$bill_address,$bill_tele,$payment_method,$bill_date,$total);
             
                for($i = 0 ; $i < count($_SESSION['mycart']);$i++){
                    insert_cart($_SESSION['userId']['id'],
                    $_SESSION['mycart'][$i][0],                    
                    $_SESSION['mycart'][$i][1],
                    $_SESSION['mycart'][$i][2],
                    $_SESSION['mycart'][$i][3],
                    $_SESSION['mycart'][$i][4],
                    $_SESSION['mycart'][$i][5],
                    $id_bill);
                }
                

                $_SESSION['mycart'] = [];
            }
            $list_bill = select_bill_one($id_bill);
            $list_cart = select_cart_idBill($id_bill);
                   
                    include "view/cart/bill_confirm.php";
                    break;
        case 'orderCart':
                   
                    include "view/cart/bill.php";
                    break;
        case 'mybill':

            $listbill = select_bill_idUser($_SESSION['userId']['id'],0);
           
                   
                    include "view/cart/mybill.php";
                    break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";


ob_end_flush()
?>