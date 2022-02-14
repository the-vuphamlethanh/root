<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>mini project</title>
</head>
<body>

<form class="form-add" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label>
        <span>url img</span>
        <input type="text" name="url-img">
    </label>
    <label>
        <span>product name</span>
        <input type="text" name="product-name">
    </label>
    <label>
        <span>product price</span>
        <input type="text" name="product-price">
    </label>
    <button type="submit" name="add">add</button>
</form>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="form-show">
    <button type="submit" name="show">show</button>
</form>

<div class="container">
    <div class="item">
        <div class="item__image">
            <img src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
        </div>
        <div class="item__content">
            <h2 class="item__content__name">
                iphone 13
            </h2>
            <p class="item__content__price">
                1000$
            </p>
        </div>
    </div>
    <div class="item">
        <div class="item__image">
            <img src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
        </div>
        <div class="item__content">
            <h2 class="item__content__name">
                iphone 13
            </h2>
            <p class="item__content__price">
                1000$
            </p>
        </div>
    </div>
    <div class="item">
        <div class="item__image">
            <img src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
        </div>
        <div class="item__content">
            <h2 class="item__content__name">
                iphone 13
            </h2>
            <p class="item__content__price">
                1000$
            </p>
        </div>
    </div>
    <div class="item">
        <div class="item__image">
            <img src="https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png" alt="">
        </div>
        <div class="item__content">
            <h2 class="item__content__name">
                iphone 13
            </h2>
            <p class="item__content__price">
                1000$
            </p>
        </div>
    </div>
</div>

<?php

class Product
{
    private $urlImg;
    private $name;
    private $price;

    /**
     * @param $urlImg
     * @param $name
     * @param $price
     */
    public function __construct($urlImg, $name, $price)
    {
        $this->urlImg = $urlImg;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getUrlImg()
    {
        return $this->urlImg;
    }

    /**
     * @param mixed $urlImg
     */
    public function setUrlImg($urlImg)
    {
        $this->urlImg = $urlImg;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$productList = array(
    new Product('https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png','iphone abc','1000'),
    new Product('https://cdn.hoanghamobile.com/i/productlist/dsp/Uploads/2021/09/15/image-removebg-preview-15.png','iphone abc','1000'),
    new Product ('https://www.google.com/url?sa=i&url=https%3A%2F%2Fhoanghamobile.com%2Fdien-thoai-di-dong%2Fapple-iphone-13-pro-max-128gb-chinh-hang-vn-a&psig=AOvVaw0qsNd1JL2y74ofLSVgqujZ&ust=1644917893732000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJCAmKLz_vUCFQAAAAAdAAAAABAD','iphone 11','11000000')
);

if(array_key_exists('add', $_POST)) {
    add();
}
if(array_key_exists('show', $_POST)) {
    show();
}

function add(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $urlImg = htmlspecialchars($_REQUEST['url-img']);
        $name = htmlspecialchars($_REQUEST['product-name']);
        $price = htmlspecialchars($_REQUEST['product-price']);

        if (empty($name)) {
            echo "Name is empty";
        } else {
            $product = new Product($urlImg, $name, $price);
            $GLOBALS['productList[]'] = $product;
        }
    }
}

function show(){
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        foreach ($GLOBALS['productList[]'] as $product) {
            echo
                '
                <div class="item">
                    <div class="item__image">
                        <img src=" ' . $product->getUrlImg() . ' " alt="">
                    </div>
                    <div class="item__content">
                        <h2 class="item__content__name">
                    ' . $product->getName() . '
                    </h2>
                        <p class="item__content__price">
                    ' . $product->getPrice() . '
                        </p>
                    </div>
                </div>
                ';
        }
    }
}

?>

</body>
</html>
