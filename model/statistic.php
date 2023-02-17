<?php



function list_statistic()
{

    $sql = "SELECT category.id as id, category.category_name as categoryName,count(product.id) as countpro,min(product.price) as minprice,max(product.price) as maxprice, avg(product.price) as average FROM product LEFT JOIN category ON category.id = product.category_id GROUP BY category.id ORDER BY category.id DESC";
    $list_statistic = pdo_query($sql);
    return $list_statistic;
}
