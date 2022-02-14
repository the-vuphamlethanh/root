<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
    <input type="text" name="name">
    <button type="submit">submit</button>
</form>

<?php
$nameList = array(
    "VU",
    "Yeu",
    "UYEN"
);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['name']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        $nameList[] = $name;
        echo implode(" | ",$nameList);
    }
}
?>

</body>
</html>