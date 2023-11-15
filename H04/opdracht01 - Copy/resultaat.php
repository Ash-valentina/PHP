<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*if(isset($_POST['naam']) && !empty($_POST['naam'])) {
        $naam = $_POST['naam'];
    }else{
        echo "je hebt geen naam ingevoerd.<br>\n";
    }

    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $naam = $_POST['email'];
    }else{
        echo "je hebt geen email ingevoerd.";
    }

    if(isset($_POST['password']) && !empty($_POST['password'])) {
        $naam = $_POST['password'];
    }else{
        echo "je hebt geen password ingevoerd.";
    }

    if (!isset($naam) || !isset($email) || !isset($password)) {
        exit("het script is gestopt");
    }
    */
    function validateData($index){
        if(isset($_POST[$index]) && !empty($_POST[$index])){
            $naam = $_POST[$index];
        } else {
            echo "let op: je hebt geen naam ingevuld";
        }
    }
        $naam = $_POST['naam'];
        $adres = $_POST['adres'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "Je hebt de volgende gegevens ingevuld:<br>\n";
        echo "Naam: {$naam}<br>\n";
        echo "adres: {$adres}<br>\n";
        echo "email: {$email}<br>\n";
        echo "wachtwoord: {$password}<br>\n";

    ?>
</body>
</html>