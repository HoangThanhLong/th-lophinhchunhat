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
<?php
include_once "rectangle.php";
$rectangle = new Rectangle($width, $height);
$width = 10;
$height = 20;
$rectangle->width;
$rectangle->height;
$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->height . "<br>";
echo $rectangle->width . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";
echo "Area: " . $rectangle->getArea() . "<br>";
echo("Your " . $rectangle->display());
?>

</body>
</html>