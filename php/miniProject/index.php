<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>mini project</title>
</head>
<?php

//include 'Art.php';
include 'ArtList.php';

$artListData = array(
    new Art('https://drscdn.500px.org/photo/1044259079/m%3D256/v2?sig=14fa71ed6f37ca88d4cadddf88b0a51d93bcd522e0bb6b40d0b8334a3d144f9d', 'art 1', 1000),
    new Art('https://drscdn.500px.org/photo/1044259079/m%3D256/v2?sig=14fa71ed6f37ca88d4cadddf88b0a51d93bcd522e0bb6b40d0b8334a3d144f9d', 'art 1', 1000),
    new Art('https://drscdn.500px.org/photo/1044259079/m%3D256/v2?sig=14fa71ed6f37ca88d4cadddf88b0a51d93bcd522e0bb6b40d0b8334a3d144f9d', 'art 1', 1000)
);

$artList = new ArtList($artListData);

function printArtHtml($artListData){
    foreach ($artListData as $art){
        echo
            '<div class="item">
                <img src="' . $art->getArtUrlImage() .'" alt="" class="item__image">
                <div class="item__specification">
                    <h2 class="item__specification__name">' . $art->getArtName() .'</h2>
                    <p class="item__specification__price">' . $art->getArtPrice() .'$$$</p>
                </div>
            </div>'
        ;
    }
}

?>
<body>

<div class="menu">
    <div class="optional">
        <div class="optional__btn">
            <span>see all</span>
        </div>
        <div class="optional--inside optional__gallery">
            <?php
            printArtHtml($artListData);
            ?>
        </div>
    </div>
    <div class="optional">
        <div class="optional__btn">
            <span>add</span>
        </div>
        <div class="optional--inside">

        </div>
    </div>
    <div class="optional">
        <div class="optional__btn">
            <span>update</span>
        </div>
        <div class="optional--inside">

        </div>
    </div>
    <div class="optional">
        <div class="optional__btn">
            <span>remove</span>
        </div>
        <div class="optional--inside">

        </div>
    </div>
</div>

</body>
</html>