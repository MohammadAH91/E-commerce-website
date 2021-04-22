<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
     <!-- https://www.w3schools.com/icons/fontawesome_icons_intro.asp-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <style>
      main {
        display: grid;
        grid-template-columns: 1fr;
      }
    </style>
</head>
<body>
    <!--Header-->
    <?php include('./includes/header.php')?>
    <main>
       <!--BannerImage-->
      <img id='banner-img' src="./img/NCEMI_banner_PC.png"/>
      <!--Gateogry Products-->
      <div class="boxes">
        <div class="box">
          <img src="./img/3.jpg" />
          <p>Laptops <i>25% OFF</i></p>
        </div>
        <div class="box">
          <img src="./img/2.jpg" />
          <p>PC <i>45% OFF</i></p>
        </div>
        <div class="box">
          <img src="./img/5.jpg" />
          <p>Parts</p>
        </div>
        <div class="box">
          <img src="./img/4.jpg" />
          <p>Support</p>
        </div>
      </div>
    </main>
    <!--Footer-->
    <?php include('./includes/footer.php')?>
</body>
</html>