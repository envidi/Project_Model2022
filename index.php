<?php
include "model/product.php";
include "model/category.php";
include "model/pdo.php";

include "global.php";
if (isset($_GET['header'])  && $_GET['header'] != "") {

    $header = $_GET['header'];
    switch ($header) {
        case 'HeaderNoBanner':
            include "view/header_noBanner.php";
            break;

        default:
            include "view/header.php";
            break;
    }
}
else{
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

        case 'contact':
            include "view/contact.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
