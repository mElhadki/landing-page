<?php
require('conn.php');

function printIt($value){
    echo "<pre>", print_r($value), "</pre>";
    die();
}

function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        return $stmt;
}

function selectAll($table, $condition = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($condition)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else{
        $i = 0;
        foreach($condition as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $condition);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
   
}

function selectOne($table, $condition){
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach($condition as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key=?";
        }
        else{
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $condition);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}




function brandName(){
    global $conn;
    $sql = "SELECT DISTINCT brand FROM product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

$navBar = brandName();
$allPhotos = selectAll('product');


if(isset($_GET['idPhoto'])){
    $dataPhoto = selectOne('product', ['id' => $_GET['idPhoto']]);
    $date = $dataPhoto['date'];
    $image = $dataPhoto['image'];
    $description = $dataPhoto['description'];
    $brand = $dataPhoto['brand'];
}