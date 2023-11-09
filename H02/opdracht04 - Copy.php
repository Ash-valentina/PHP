<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            width: 200px;
        }
        img.green-border {
            border: solid 5px green;
        }

        img.red-border {
            border: solid 5px red;
        }
    </style>
</head>
<body>

<?php

for($i = 1; $i <= 9; $i++){
    if($i % 2 == 0) {
        echo '<img class="green-border" src="photos/maui' . $i . '.jpg" alt="maui ' . $i . '">';
    }else{
        echo '<img class="red-border" src="photos/maui' . $i . '.jpg" alt="maui ' . $i . '">';
    }
}

?>
    
</body>
</html>