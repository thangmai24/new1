<?php
require_once 'Category_Database.php';
$category = new Category_Database();
if (isset($_GET['id']) && isset($_GET['action'])) {
    $category->deleteCategory($_GET['id']);
    header('location: category_manerger.php');
}
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $category->createCategory($_POST['category_id'], $_POST['category_name']);
    header('location: category_manerger.php');
}
