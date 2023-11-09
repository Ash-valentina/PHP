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

$zwemclubs = array(
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "bommetje" => 23
);
//slaat de namen en aantal leden op

foreach ($zwemclubs as $clubnaam => $memberCount){
    echo $clubnaam;

//print de clubnaam op het scherm en maakt temporary variables aan

    if($memberCount >= 6){
//checkt of er tenminste 5 leden in de club zitten
        $fotos = ($memberCount / 5);
    //devide aantal leden door 5 om het aantal fotos te bepalen

        for($i = 0; $i < $fotos; $i++){

            echo '<img src="photos/maui' . $i . '.png" alt="maui' . $i . '">';

        }
    }

    echo "<br>";
}

?>
</body>
</html>