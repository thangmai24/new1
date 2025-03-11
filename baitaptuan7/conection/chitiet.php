
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .sanpham {
            height: 200px;
            width: 80%;
        }

        img {
            float: left;
        }

        .gia {
            color: rgb(108, 143, 99);
            font-size: 15pt;
            font-weight: bold;
            font-style: italic;
        }

        p {
            font-style: italic;
        }

        h1 {
            color: rgb(71, 173, 211);
        }

        h1>a:link {
            text-decoration: none;
            color: rgb(71, 173, 211);
        }

        p>a:link {
            text-decoration: none;
            color: black;
        }

        .addcart {
            background: #47add3;
            color: white;
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
        }

        .addcart:hover {
            background: #375561;
        }

        table {
            margin: 0 auto;
            width: 800px
        }
    </style>
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
require_once 'Product_Database.php';
if(isset($_GET['id'])):
    $products = new Product_Database();

    $category_id = $_GET['id'];

    foreach ($products->getProductsByCategoryId($category_id) as $product) :
?>
        <div class='sanpham'>
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h1><a href='#'><?php echo $product['name']; ?></a></h1>
            <b>Giá: </b> <span class='gia'><?php echo $product['price'] ?></span><br>
            <p><?php  echo  $product['desc_product'];?></p>
            
        </div>

    
        <?php   endforeach; endif;?>

  

</body>

</html>