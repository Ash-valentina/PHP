<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kerstboom {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class ="kerstboom">
<?php

for($i = 1; $i <= 9; $i++){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>
</div>
</body>
</html>