

<?php

function insert_user($email,$name,$password)
{
    $sql = "INSERT INTO customer (user,password,email) VALUES ('$name','$password','$email') ";
    pdo_execute($sql);
}
function insert_user_admin($email,$name,$password,$address,$tele,$role)
{
    $sql = "INSERT INTO customer (user,password,email,address,tele,role) VALUES ('$name','$password','$email','$address','$tele','$role') ";
    pdo_execute($sql);
}


function checkUser($user,$pass){
    $sql = "SELECT * FROM customer WHERE user = '$user' AND password = $pass";
   
    $result = pdo_query_one($sql);
 
    return $result;
}
function checkUserFilter($user){
    $sql = "SELECT * FROM customer WHERE user = '$user'";
   
    $result = pdo_query_one($sql);
 
    return $result;
}
function checkUserId($id){
    $sql = "SELECT * FROM customer WHERE id = $id ";
   
    $result = pdo_query_one($sql);
 
    return $result;
}
function checkUserEmail($email){
    $sql = "SELECT * FROM customer WHERE email = '$email' ";
   
    $result = pdo_query_one($sql);
 
    return $result;
}
function update_customer($id, $username,$email, $pass, $tele, $address,$role){
    if(isset($role) && $role !== ""){

        $sql = "UPDATE customer SET user ='$username',email ='$email',password ='$pass',tele ='$tele',address ='$address',role = '$role' WHERE id =$id";
    }
    else{
        $sql = "UPDATE customer SET user ='$username',email ='$email',password ='$pass',tele ='$tele',address ='$address' WHERE id =$id";

    }
    pdo_execute($sql);
}
// function select_customer_all(){
//     $sql = "SELECT * FROM customer WHERE 1 ORDER BY id DESC";
        
//     $customer = pdo_query($sql);
//     return $customer;
// }
function select_customer_all($keyword){
    $sql = "SELECT * FROM customer WHERE 1";

    if ($keyword != "") {
        $sql .= " AND user LIKE '%" . $keyword . "%'";
    }
    
    $sql .= " ORDER BY id DESC";
    $product_name = pdo_query($sql);
    return $product_name;
}
function delete_customer($id){
    $sql = "DELETE FROM customer WHERE id = $id";
    pdo_execute($sql);
}


?>