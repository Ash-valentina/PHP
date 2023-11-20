<?php
//de array maken voor de emails met de wachtwoorden eraan
    $users = [
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_POST['knop'])){ ?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
E-mail: <input type="email" name="mailadres" placeholder="email"><br>
Wachtwoord: <input type="password" name="password" placeholder="wachtwoord"><br>
<input type="submit" name="knop" value="kanker">
</form>

<?php
} else {
    //checked of het veld is ingevuld of niet
    if(!isset($_POST['mailadres']) OR empty($_POST['mailadres'])){
       header("location: " . $_SERVER['PHP_SELF']); 
    }
    if(!isset($_POST['password']) OR empty($_POST['password'])){
        header("location: " . $_SERVER['PHP_SELF']); 
    }
    $mailadres = $_POST['mailadres'];
    $password = $_POST['password'];

    foreach ($users as $key => $value){
        if($key == $mailadres AND $value == $password){
            exit("welkom!");
        }
    }

    exit("sorry, kan niet verder");
}
?>
</body>
</html>