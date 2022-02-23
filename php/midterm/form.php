<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php
function addData(){
    if (isset($_POST["urlImgA"]) && isset($_POST["productName"]) && isset($_POST["productPrice"]) &&
        isset($_POST["urlImgB"])) {
        $urlImgA = $_POST["urlImgA"];
        $urlImgB = $_POST["urlImgB"];
        $title_URL = 'Vu Yeu Uyen';
        $productName = $_POST["productName"];
        $productPrice = $_POST["productPrice"];
        $file = fopen("Tất cả sản phẩm – COLKIDSCLUBVN.xlsx - Sheet1.csv", "a") or die("You can not open this file !!");
        $line = array($productName, $title_URL, $urlImgA, $urlImgB, $productPrice);
        fputcsv($file, $line);
        fclose($file);
    }
}
?>

<body>

<header class="header">
    <div class="header--primary">
        abc
    </div>
    <div class="header--middle">
        <div class="logo">
            <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Header.svg" alt="">
        </div>
        <ul class="header--middle__nav">
            <li class="item">
                <a href="./index.php">
                    PRODUCT
                </a>
            </li>
            <li class="item">MEN</li>
            <li class="item">WOMEN</li>
            <li class="item">
                <a href="">
                    ADD NEW PRODUCT
                </a>
            </li>
            <li class="item">
                <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/DiscoverYOU.svg" alt="">
            </li>
        </ul>
        <label for="search">
            <input type="text" name="search" placeholder="search">
        </label>
    </div>
    <div class="header--final"></div>
</header>

<div class="form__container">
    <form class="form" action="<?php addData(); ?>" method="post">
        <label for="urlImgA">
            <span>URL image A</span>
            <input name="urlImgA" type="text">
        </label>
        <label for="urlImgB">
            <span>URL image B</span>
            <input name="urlImgB" type="text">
        </label>
        <label for="productName">
            <span>Product name</span>
            <input name="productName" type="text">
        </label>
        <label for="productColor">
            <span>Color</span>
            <input name="productColor" type="text">
        </label>
        <label for="">
            <span>Price</span>
            <input name="productPrice" placeholder="vnd" type="number">
        </label>
        <button type="submit">SUBMIT</button>
    </form>
</div>

<footer>
    <div class="footer__item">
        <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Store.svg" alt="">
    </div>
    <div class="footer__item">
        <h2>PRODUCT</h2>
        <ul>
            <li>Men Shoes</li>
            <li>Women Shoes</li>
            <li>Fashion & accesori</li>
            <li>Sale of</li>
        </ul>
    </div>
    <div class="footer__item">
        <h2>PRODUCT</h2>
        <ul>
            <li>Men Shoes</li>
            <li>Women Shoes</li>
            <li>Fashion & accesori</li>
            <li>Sale of</li>
        </ul>
    </div>
    <div class="footer__item">
        <h2>PRODUCT</h2>
        <ul>
            <li>Men Shoes</li>
            <li>Women Shoes</li>
            <li>Fashion & accesori</li>
            <li>Sale of</li>
        </ul>
    </div>
    <div class="footer__item">
        <h2>PRODUCT</h2>
        <ul>
            <li>Men Shoes</li>
            <li>Women Shoes</li>
            <li>Fashion & accesori</li>
            <li>Sale of</li>
        </ul>
    </div>
    <div class="footer__item footer__btn">
        <span>FIND STORE</span>
    </div>
    <div class="footer__item footer__icon">
        <h2>ANANAS SOCIAL</h2>
        <ul>
            <li>
                <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_youtube.svg" alt="">
            </li>
            <li>
                <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_instagram.svg" alt="">
            </li>
            <li>
                <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_facebook.svg" alt="">
            </li>
        </ul>
    </div>
    <div class="footer__item">
        <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Logo_Ananas_Footer.svg" alt="">
    </div>
</footer>


</body>
</html>
