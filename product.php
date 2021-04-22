<?php include('./db.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product | Page</title>
    <!--source: https://www.w3schools.com/icons/fontawesome_icons_intro.asp-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <style>
      main {
        grid-template-columns: 1fr;
      }
    </style>
  </head>
  <!--Header & navbar Section-->
  <body>
    <?php include('./includes/header.php')?>
    <!--Product Section-->
    <main>
      <?php
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : -1;
        if($id < 0) {
            header('Location: ./search.php');
            exit;
        }
        $product = get_product($id);
      ?>
      <div class="product-show">
        <img src="<?=$product['image']?>" />
        <h1>
          <?=$product['name']?> /
          <?=$product['brand']?> /
          <?=$product['ram']?>GB RAM /
          <?=$product['disk_capacity'] . ' GB ' . $product['disk_type'] ?> 
        </h1>
        <h2>$<span id="price">
            <?=$product['price']?>
        </span></h2>
        <div id="product-quantity">
          <button id="quantity-dec">-</button>
          <input type="text" disabled />
          <button id="quantity-inc">+</button>
        </div>
        <button>Add to cart</button>
        <div>
          <?php
            switch($product['rating']){
                case 0:
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    break;
                case 1:
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    break;
                case 2:
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    break;
                case 3:
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star"></i>';
                    echo '<i class="fa fa-star"></i>';
                    break;
                case 4:
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star"></i>';
                    break;
                case 5:
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    echo '<i class="fa fa-star fa-orange"></i>';
                    break;
            }
          ?>
        </div>
        <h3>Product details</h3>
        <article>
          <?=$product['description']?>
        </article>
      </div>
    </main>
    <!--Footer-->
    <?php include('./includes/footer.php')?>
    <!--Product and quntity Section-->
    <script src="./js/quantity.js"></script>
  </body>
</html>
