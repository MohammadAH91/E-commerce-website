<?php

    // Database Configuration source: https://www.w3schools.com/php/php_mysql_connect.asp
    const CONFIG = [
        "db_name" => "mysql:dbname=db@products;host=localhost",
        "db_user" => "root",
        "db_pwd"  => ""
    ];

    // Connect To Database Method
    //source: https://codereview.stackexchange.com/questions/85275/php-pdo-helper-functions
    function connect() {
        try{
            $pdo = new PDO(CONFIG['db_name'],CONFIG['db_user'],CONFIG['db_pwd']);
        }catch(PDOException $e){
            return null;
        }
        return $pdo;
    }

    // Add Product
    function upload($product) {
        $pdo   = connect();
        $query = "INSERT INTO Products(name,brand,ram,disk_capacity,disk_type,rating,price,image,description) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt  = $pdo->prepare($query);
        $stmt->execute(
            [
                $product['name'],
                $product['brand'],
                $product['ram'],
                $product['disk_capacity'],
                $product['disk_type'],
                $product['rating'],
                $product['price'],
                $product['image'],
                $product['description']
            ]
        );
    }

    // Get Produts
    function get_products($keyword){
        $pdo   = connect();
        $query = "SELECT * FROM Products WHERE 1 = 1";
        if($keyword != '') {
            $query .= " AND name LIKE '%$keyword%'";
        }
        $products = $pdo->query($query);
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($products);
    }
  
    // Get Product
    function get_product($id){
        $pdo   = connect();
        $query = "SELECT * FROM Products WHERE id = $id";
        $product = $pdo->query($query);
        $product = $product->fetchAll(PDO::FETCH_ASSOC);
        return $product[0];
    }