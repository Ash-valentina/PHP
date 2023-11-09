<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITS WORKING</title>
</head>
<body>
    <?php
    $leeftijd = 12;
    $prijs = 10;

    if($leeftijd > 65){

        $prijs = $prijs * 0.5;

    }elseif ($leeftijd < 3){

        $prijs = 0;
    
    }elseif ($leeftijd <= 12){

        $prijs = $prijs * 0.5;

    }else{

        $prijs = 10;

    }

    echo $prijs;
    ?>

</body>
</html>