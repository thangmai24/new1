<?php
require_once "db.php";
require_once "config.php";
class Product_Database extends Database
{
public function getAllProducts(){
    $sql = self::$connection->prepare("SELECT * FROM product");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
    
}
public function getproductById($id){
    $sql = self::$connection->prepare("SELECT * FROM product WHERE  id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $result = $sql->get_result()->fetch_assoc();
    return $result;
}
public function getProductsByCategoryId($category_id) {
    $sql = self::$connection->prepare("SELECT * FROM product WHERE category_id = ?");
    $sql->bind_param("i", $category_id); // Gán tham số
    $sql->execute();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC); // Lấy tất cả kết quả dưới dạng mảng kết hợp
    return $items; // Trả về mảng kết quả
}
}