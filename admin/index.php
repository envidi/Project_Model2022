<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
            // controller category
        case 'add_category':
            if (isset($_POST['add_new']) && $_POST['add_new']) {

                $category_name = $_POST['name_category'];
                insert_category($category_name);
                $notify = "Succesfully add new category";
            }
            include "category/add.php";
            break;
        case 'list_category':
            $category_name = select_category_all();
            include "category/list.php";
            break;
        case 'delete_category':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if ($id > 0) {
                delete_category($id);
            }
            $category_name = select_category_all();

            include "category/list.php";
            break;
        case 'edit_category':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if ($id > 0) {
                $result = select_category_one($id);
            }
            include "category/update.php";
            break;
        case 'update_category':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $category_name = isset($_POST['name_category']) ? $_POST['name_category'] : "";
                $id = isset($_POST['id']) ? $_POST['id'] : 0;
                update_category($category_name, $id);
                $notify = "Update successfully";
            }

            $category_name = select_category_all();

            include "category/list.php";
            break;
            // controller product-----------------------------------------------------

        case 'add_product':
            if (isset($_POST['add_new']) && $_POST['add_new']) {

                $product_name = $_POST['name_product'];
                $price = $_POST['price'];
                $sale = $_POST['sale'];


                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                } else {
                }

                $date = $_POST['date'];
                $desc = $_POST['desc'];
                $special = $_POST['special'];
                $view = $_POST['view'];
                $category_id = $_POST['category_id'];

                insert_product($product_name, $price, $sale, $image, $date, $desc, $special, $view, $category_id);
                $notify = "Succesfully add new product";
            }
            $category_name =  select_category_all();
            include "product/add.php";
            break;
        case 'list_product':
            if (isset($_POST['submit_filter_product']) && $_POST['submit_filter_product']) {

                $keyword = $_POST['filter_product'];
                $filter_category_id = $_POST['category_id'];
            } else {
                $keyword =  "";
                $filter_category_id = 0;
            }
            $category_name =  select_category_all();
            $product_name = select_product_all($keyword, $filter_category_id);
            include "product/list.php";
            break;
        case 'delete_product':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if ($id > 0) {
                delete_product($id);
            }
            $product_name = select_product_all("", 0);
            $category_name =  select_category_all();
            include "product/list.php";
            break;
        case 'edit_product':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if ($id > 0) {
                $result = select_product_one($id);
            }
            $category_name =  select_category_all();
            include "product/update.php";
            break;
        case 'update_product':
            $price = isset($_POST['price']) ? $_POST['price'] : "";
       
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id = isset($_POST['id']) ? $_POST['id'] : 0;
                $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : "";
                $price = isset($_POST['price']) ? $_POST['price'] : "";
                $sale = isset($_POST['sale']) ? $_POST['sale'] : "";
                $date = isset($_POST['date']) ? $_POST['date'] : "";
                $desc = isset($_POST['desc']) ? $_POST['desc'] : "";
                $special = isset($_POST['special']) ? $_POST['special'] : "";
                $view = isset($_POST['view']) ? $_POST['view'] : "";
                $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : "";
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                } else {
                }
                update_product($id, $product_name, $price, $sale, $date, $desc, $special, $view, $category_id, $image);
                $notify = "Update successfully";
            }

            $product_name = select_product_all("", 0);
            $category_name =  select_category_all();

            include "product/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
