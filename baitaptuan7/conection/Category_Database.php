<?php
require_once "db.php";
require_once "config.php";
class Category_Database extends Database
{
    public function getAllCategories()
    {
        $sql = self::$connection->prepare("SELECT * FROM category");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
    public function getCategoryById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM category WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $result = $sql->get_result()->fetch_assoc();
        return $result;
    }
    public function deleteCategory($id)
    {
        $sql = self::$connection->prepare("delete FROM category WHERE id = ?");
        $sql->bind_param("i", $id);
        $result = $sql->execute();
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function createCategory($id, $name)
    {
        $sql = self::$connection->prepare("INSERT INTO `category` (`id`, `name`) VALUES (?, ?)");

        $sql->bind_param("is", $id, $name);
        $result = $sql->execute();
        if ($result > 0) {
            return true;
        } else {
            return false;
        }
    }
}
