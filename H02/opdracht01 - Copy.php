<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            display: block;
        }
    </style>
</head>
<body>

<?php
$mauiImages = array(
    'maui1.jpg',
    'maui2.jpg',
    'maui3.jpg',
    'maui4.jpg',
    'maui5.jpg',
    'maui6.jpg',
    'maui7.jpg',
    'maui8.jpg',
    'maui9.jpg',
    'maui10.jpg'
);
$teller = 1;

foreach ($mauiImages as $image) {
    echo '<img src="photos/' . $image . '" alt="maui ' . $teller .'">';
    $teller++;
}
?>

</body>
</html>