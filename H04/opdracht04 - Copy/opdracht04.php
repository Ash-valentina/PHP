<?php
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

function check_credentials($mailadres, $password, $users) {
    foreach ($users as $key => $value){
        if($key == $mailadres AND $value == $password){
            exit("welkom!");
        }
    }

    exit("sorry, kan niet verder");
}


    session_start();
//de array maken voor de emails met de wachtwoorden eraan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.error {
            color: red;
        }
    </style>
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
if(isset($_SESSION['error']) AND !empty($_SESSION['error'])) {
    echo '<div class="error">' . $_SESSION['error'] . "</div>";
    $_SESSION['error'] = null;
}
?>

<?php
} else {
    //checked of het veld is ingevuld of niet
    if(!isset($_POST['mailadres']) OR empty($_POST['mailadres'])){
        $_SESSION['error'] = "je bent vergeten je email adres in te voeren";
       header("location: " . $_SERVER['PHP_SELF']); 
    }
    if(!isset($_POST['password']) OR empty($_POST['password'])){
        $_SESSION['error'] = "je bent vergeten je wachtwoord in te voeren";
        header("location: " . $_SERVER['PHP_SELF']); 
    }
    $mailadres = $_POST['mailadres'];
    $password = $_POST['password'];

check_credentials($mailadres, $password, $users);

   
}
?>
</body>
</html>