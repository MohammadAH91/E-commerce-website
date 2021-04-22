<?php

    include('./db.php');

    $keyword = $_GET['keyword'];

    echo get_products($keyword);
?>    