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
function getData(): array {
    $array = [];
    if (($open = fopen("Tất cả sản phẩm – COLKIDSCLUBVN.xlsx - Sheet1.csv", "r")) == TRUE)
    {
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
        {
            $array[] = $data;
        }
        fclose($open);
    }
    return $array;
}
function renderData(array $data){
    foreach ($data as $ele){
        if ($ele[1] == "Title_URL"){
            continue;
        }
        echo
            '<div class="product__item">
                <div class="product__img">
                    <img src="' . $ele[2] .'" alt="">
                    <img src="' . $ele[3] .'" alt="">
                    <div class="btn">
                        <div>
                            BUY NOW
                        </div>
                    </div>
                </div>
                <div class="product__des">
                    <div class="product__name">
                        ' . $ele[0] .'
                    </div>
                    <div class="product__color">
                        Granite Green
                    </div>
                    <div class="product__price">
                        ' . $ele[4] .'
                    </div>
                </div>
            </div>';
    }
}
?>
<body>

<div class="header">
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
                <a href="./form.php">
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
</div>
<div class="banner">
    <h1>DISCOVER <span>YOU</span></h1>
    <img src="https://ananas.vn/wp-content/uploads/desktop_productlist.jpg" alt="">
</div>
<div class="product__container">
    <?php
        renderData(getData());
    ?>
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
