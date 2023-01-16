<?php

function insert_category($category_name)
{
    $sql = "INSERT INTO category (category_name) VALUES ('$category_name') ";
    pdo_execute($sql);
}
function delete_category($id)
{
    $sql = "DELETE FROM category WHERE id = $id";
    pdo_execute($sql);
}
function select_category_all()
{
    $sql = "SELECT * FROM category ORDER BY id DESC ";
    $category_name = pdo_query($sql);
    return $category_name;
}
function update_category($category_name, $id)
{
    $sql = "UPDATE category SET category_name ='$category_name' WHERE id =$id";
    pdo_execute($sql);
}
function select_category_one($id)
{
    $sql = "SELECT * FROM category WHERE id= $id";
    $result = pdo_query_one($sql);
    return $result;
}
