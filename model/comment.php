<?php
function insert_comment($content,$user_id,$id_pro,$date_comment)
{
    $sql = "INSERT INTO comment (content,product_id,customer_id,date) VALUES ('$content','$id_pro','$user_id','$date_comment') ";
    pdo_execute($sql);
}

function select_comment_all($id_product)
{
    $sql = "SELECT * FROM comment WHERE product_id = '$id_product' ORDER BY id DESC ";
    $comment = pdo_query($sql);
    return $comment;
}
function select_comment_list($id_user)
{
    $sql = "SELECT * FROM comment WHERE 1";

    if($id_user>0){
        $sql.= " AND customer_id = $id_user";
    }
    else{
        $sql.= " ORDER BY id DESC";
    }
    
    $comment = pdo_query($sql);
    return $comment;
}
function delete_comment($id){
    $sql = "DELETE FROM comment WHERE id = $id";
    pdo_execute($sql);
}





?>