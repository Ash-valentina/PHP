<?php

class Auto {
    public $merk;
    public $type;
    public $prijs;
    public $url;
}

$autos = array();

$automerk = array(
    "bmw" ,
    "audi" ,
    "mercedes" ,
    "porsche",
    "maserati",
    "fiat"
);

$autotype = array(
    "sedan",
    "coupe",
    "hatchback",
    "suv",
    "mpv"
);

foreach ($automerk as $genmerk) {
    foreach ($autotype as $gentype) {
        $genprijs = 1000 * random_int(10, 50) - 10;
        $genurl = $genmerk . $gentype;

        $genauto = new Auto;
        $genauto->merk = $genmerk;
        $genauto->type = $gentype;
        $genauto->prijs = $genprijs;
        $genauto->url = $genurl;
        array_push($autos, $genauto);
    }
}

$searchMerk = isset($_POST['zoekMerk']) ? strtolower($_POST['zoekMerk']) : '';
$searchType = isset($_POST['zoekType']) ? strtolower($_POST['zoekType']) : '';
$minPrijs = isset($_POST['minPrijs']) ? intval($_POST['minPrijs']) : 0;
$maxPrijs = isset($_POST['maxPrijs']) ? intval($_POST['maxPrijs']) : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <label for="zoekMerk">merk:</label>
        <input type="text" id="zoekMerk" name="zoekMerk" value="<?php echo $searchMerk; ?>">

        <label for="zoekType">type:</label>
        <input type="text" id="zoekType" name="zoekType" value="<?php echo $searchType; ?>">

        <br>
        <br>

        <label for="minPrijs">Min Prijs:</label>
        <input type="number" id="minPrijs" name="minPrijs" value="<?php echo $minPrijs; ?>">

        <label for="maxPrijs">Max Prijs:</label>
        <input type="number" id="maxPrijs" name="maxPrijs" value="<?php echo $maxPrijs; ?>">

        <button type="submit" name="zoek">zoek</button>
        
    </form>

    <?php
    foreach ($autos as $auto) {
        if ((empty($searchMerk) || strpos(strtolower($auto->merk), $searchMerk) !== false) &&
            (empty($searchType) || strpos(strtolower($auto->type), $searchType) !== false)&&
            ($auto->prijs >= $minPrijs && $auto->prijs <= $maxPrijs)) {
            echo "<p>$auto->merk | $auto->type | $$auto->prijs,-</p>";
        }
    }
    ?>
</body>

</html>