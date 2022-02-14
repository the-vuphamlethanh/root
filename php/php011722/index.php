<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--            <head>-->
<!--                <meta charset="UTF-8">-->
<!--                <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--                <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
<!--                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>-->
<!--                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>-->
<!--                <link rel="stylesheet" href="style.css">-->
<!--                <title>Array</title>-->
<!--            </head>-->
<!--            --><?php
//            include("array.php")
//            ?>
<!--            <body>-->
<!--            <div class="container">-->
<!--                <div id="products" class="row">-->
<!--                    --><?php //echo $html ?>
<!--                </div>-->
<!--                <div class="reviewSection row">-->
<!--                    --><?php //echo $reviewHtml ?>
<!--                </div>-->
<!--        </div>-->
<!--        -->
<!--    </body>-->
<!--</html>-->
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>