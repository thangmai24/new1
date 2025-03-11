<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">San pham</a>
          <ul class="dropdown-menu">

           
           
            <?php
            require_once 'category_Database.php';
            $categories = new Category_Database();
            foreach ($categories->getAllCategories() as $value) {
               echo  '<li><a class="dropdown-item" href="chitiet.php?id='. $value['id'] .'">'. $value['name'] . '</a></li>';
            }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php
    include_once "Product_Database.php";
    $category  = new Category_Database();
    $categories = $category->getAllCategories();
    var_dump($categories);
    $product = new Product_Database();
    $products = $product->getProductsByCategoryId(2);
    var_dump($products);
    ?>
</body>

</html>