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
    new Art('https://drscdn.500px.org/photo/1044259080/m%3D256/v2?sig=19f266e83c9304270e52d2556672c13b8474cdac111a686141b3667d542864d3', 'art 2', 1000),
    new Art('https://drscdn.500px.org/photo/1044259079/m%3D256/v2?sig=14fa71ed6f37ca88d4cadddf88b0a51d93bcd522e0bb6b40d0b8334a3d144f9d', 'art 3', 1000),
    new Art('https://drscdn.500px.org/photo/1044259075/m%3D256/v2?sig=ffb130405919d2adf8c9bffd4f96cf76332a47869746a1e174eee8770b34bde7', 'art 4', 1000),
    new Art('https://drscdn.500px.org/photo/1044259076/m%3D256/v2?sig=d68b3f8d7e15ce364586de07dbe3550742f98423701de37988bf72e04741ca85', 'art 5', 1000),
    new Art('https://drscdn.500px.org/photo/1044259078/m%3D256/v2?sig=7cdc0f56b8dbd13e740a438029087affa7d657c357dc12cf648bce8cd7e2656e', 'art 6', 1000)
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

function search(string $keyword, $artListData): array{
    $result = array();
    foreach ($artListData as $art){
        if (str_contains($art->getArtName(), $keyword)){
            $result[] = $art;
        }
    }
    return $result;
}

?>
<body>


<div class="menu">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="optional">
        <div class="optional__btn">
            <span>see all</span>
        </div>
        <input type="text" value=" " name="keyword">
        <input type="submit" name="search" value="search">
        <div class="optional--inside optional__gallery">
            <?php
            if(array_key_exists('search', $_POST)) {
                $result = search($_REQUEST['keyword'], $artListData);
                if (empty($result)){
                    echo "KHONG CO CAI GI CA";
                } else {
                    printArtHtml($result);
                }
            } else {
                printArtHtml($artListData);
            }
            ?>
        </div>
    </form>
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