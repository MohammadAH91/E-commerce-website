<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | Page</title>
 <!--source: https://www.w3schools.com/icons/fontawesome_icons_intro.asp-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--Header & navabar Section-->
    <?php include('./includes/header.php')?>
    <main>
        <!--Filter Section-->
        <aside>
            <h2>Brand</h2>
            <ul>
                <div>
                    <input type="checkbox" name="brand" value="Apple"/>
                    <span>Apple</span>
                </div>
                <div>
                    <input type="checkbox" name="brand" value="Acer"/>
                    <span>Acer</span>
                </div>
                <div>
                    <input type="checkbox" name="brand" value="HP"/>
                    <span>HP</span>
                </div>
                <div>
                    <input type="checkbox" name="brand" value="Lenovo"/>
                    <span>Lenovo</span>
                </div>
                <div>
                    <input type="checkbox" name="brand" value="DELL"/>
                    <span>DELL</span>
                </div>
            </ul>
            <h2>Price</h2>
            <ul>
                <table>
                    <tr>
                        <td>From</td>
                        <td>
                            <input type="number" name="price" value="0"/>
                        </td>
                    </tr>
                    <tr>
                        <td>To</td>
                        <td>
                            <input type="number" name="price" value="9999"/>
                        </td>
                    </tr>
                </table>
            </ul>
            <h2>Memory</h2>
            <ul>
                <div>
                    <span>Ram</span>
                    <input id='memory-range' type="range" name="ram" min="4" max="32" value="32"/>
                    <span id='memory-range-value'>32</span><span> GB</span>
                </div>
            </ul>
            <h2>Hard Disk</h2>
            <ul>
                <div>
                    <em><b><u>Type</u></b></em>
                    <table>
                        <tr>
                            <td>HDD</td>
                            <td>
                                <input name='hd-type' type="radio" value="HDD" checked>
                            </td>
                        </tr>
                        <tr>
                            <td>SSD</td>
                            <td>
                                <input name='hd-type' type="radio" value="SSD">
                            </td>
                        </tr>
                        <tr>
                            <td><em><b><u>Capacity</em></b></u></td>
                        </tr>
                        <tr>
                            <td>
                                <input id='hd-capacity' type="number" value="9999">
                            </td>
                        </tr>
                    </table>
                </div>
            </ul>
            <h2>Rating</h2>
            <div>
                <input type="radio" name="rating" value="0">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div>
                <input type="radio" name="rating" value="1">
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div>
                <input type="radio" name="rating" value="2">
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div>
                <input type="radio" name="rating" value="3">
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div>
                <input type="radio" name="rating" value="4">
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star"></i>
            </div>
            <div>
                <input type="radio" name="rating" value="5" checked>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
                <i class="fa fa-star fa-orange"></i>
            </div>
            <button id='btn-filter'>Filter</button>
        </aside>
        <!-- Sort & reset page-->
        <div id="products">
            <div id="sort-bar">
                <input type="button" id="brand-all" value="Reset Products"/>
                <select name="sort-products">
                    <option value="">-- Sort --</option>
                    <option value="name-asc">Name : A - Z</option>
                    <option value="name-desc">Name : Z - A</option>
                    <option value="price-asc">Price : Low To High</option>
                    <option value="price-desc">Price : High To Low</option>
                    <option value="rating-asc">Rating : Low To High</option>
                    <option value="rating-desc">Rating : High To Low</option>
                </select>
            </div>
            <!--Product List-->
            <div id="products-list">

            </div>
        </div>
    </main>
    <!--Product List-->
    <?php include('./includes/footer.php')?>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $keyword = $_POST['keyword'];
        }else{
            $keyword = '';
        }
    ?>
    <script src="./js/script.js"></script>
    <script>
        search_products('<?=$keyword?>');
    </script>
</body>
</html>