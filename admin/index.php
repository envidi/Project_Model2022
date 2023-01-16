<?php
include "../model/pdo.php";
include "../model/category.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
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
                update_category($category_name,$id);
                $notify = "Update successfully";
            }

            $category_name = select_category_all();

            include "category/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
