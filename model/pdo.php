<?php

/** 
*             Mở kết nối đến CSDL sử dụng PDO
*/
function pdo_get_connection(){
    $dburl = 'mysql:host=127.0.0.1;dbname=model_project;charset=utf8';
    $username = 'root';
    $password = '';
    $conn = new PDO($dburl,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
}

// Thực thi câu lệnh sql thao tác dữ liệu ( insert , update delete)
/** 
*@param string $sql câu lệnh sql 
*@param array $args mảng giá trị cung cấp cho các tham số của $sql
*@throws PDOException lỗi thực thi câu lệnh
*/

function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_execute_return_lastInsertId($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $conn->lastInsertId();
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

//    Thực thi câu lệnh truy vấn dữ liệu sql SELECT
/** 
*@param string $sql câu lệnh sql 
*@param array $args mảng giá trị cung cấp cho các tham số của $sql
*@throws PDOException lỗi thực thi câu lệnh
*/



function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

//    Thực thi câu lệnh truy vấn 1 bản ghi
/** 
*@param string $sql câu lệnh sql 
*@param array $args mảng giá trị cung cấp cho các tham số của $sql
*@throws PDOException lỗi thực thi câu lệnh
*/

function pdo_query_one($sql){

    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }

}

//    Thực thi câu lệnh truy vấn một giá trị
/** 
*@param string $sql câu lệnh sql 
*@param array $args mảng giá trị cung cấp cho các tham số của $sql
*@return giá trị
*@throws PDOException lỗi thực thi câu lệnh
*/

function pdo_query_value($sql){

    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }

}



?>