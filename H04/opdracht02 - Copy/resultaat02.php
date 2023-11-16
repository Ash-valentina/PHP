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
    </style>
</head>
<body>
    <?php
    if (isset($_GET['animalnames']) && is_array($_GET['animalnames'])) {
    foreach ($_GET['animalnames'] as $animalname) {
        echo '<img src="animals/'. $animalname . '.jpg" alt="' . $animalname .'">' . "<br>\n";
        echo "{$animalname}<br>\n";
    }
} 
    ?>

    
</body>
</html>