<?php include('./db.php') ?>

<?php
    // Source : https://tutorialehtml.com/en/php-tutorial-superglobal-arrays/
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name          = $_POST['name'];
        $brand         = $_POST['brand'];
        $ram           = $_POST['ram'];
        $disk_capacity = $_POST['disk_capacity'];
        $disk_type     = $_POST['disk_type'];
        $rating        = $_POST['rating'];
        $description   = $_POST['description'];
        $price         = $_POST['price'];
        $tmp_image     = $_FILES['image']['tmp_name'];
        //source:https://wlearnsmart.com/store-and-retrieve-image-from-database-in-php/
        $image_name    = $_FILES['image']['name'];
        $dest          = './upload/products/' . $image_name;
        move_uploaded_file($tmp_image,$dest);
        $product = [
            'name'          => $name,
            'brand'         => $brand,
            'ram'           => $ram,
            'disk_capacity' => $disk_capacity,
            'disk_type'     => $disk_type,
            'rating'        => $rating,
            'price'         => $price,
            'image'         => $dest,
            'description'   => $description
        ];
        upload($product);
        header('Location: ./search.php');
        exit;
    }else{
        header('Location: ./index.php');
        exit;
    }
?>