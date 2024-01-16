<?php
session_start();

if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    $_SESSION['logged_in'] = false;
}

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
    if($_SESSION['logged_in'] === true){
        echo "je bent ingelogd. " . '<a href="' . $_SERVER['PHP_SELF'] . '?logout=true">log uit</a>';
        echo '<a href="welkom.php?logout=true">coole page</a>';

    }else{
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">GO!</button> 
    </form>
    <?php } ?>

</body>
</html>

<?php

if($_SESSION['logged_in'] === true){
    exit();
}
if (!isset($_POST['submit'])){
    exit("welkom, log in");
}

if(empty($_POST['username'])){
    exit("you forgot something");
}

if(empty($_POST['password'])){
    exit("you forgot something");
}

$username = $_POST['username'];
$password = $_POST['password'];


//echo "{$username} / {$password}";

$users = [
    [
        "username" => "henk",
        "password" => "1234",
        "admin" => false
    ],
    [
        "username" => "bob",
        "password" => "4321",
        "admin" => false
    ],
    [
        "username" => "tim",
        "password" => "5555",
        "admin" => true
        
    ]
];

$adminCheck = checkRole($users);
$check = false;

foreach($users as $user){
    if($user['username'] === $username && $user['password'] === $password){
        $check = true;
        $adminCheck = $user['admin'];

        if($user['admin']){
        $_SESSION['logged_in'] = true;
        header("location: " . $_SERVER['PHP_SELF']);
        exit;
        }else{
            break;
        }
    }
}

if(!$check){
    echo 'wat je hebt ingevuld klopt niet.';
}elseif(!$adminCheck){
    echo 'je hebt geen admin rechten.';
}

/*if(!$adminCheck && $check){
    echo 'je hebt geen admin rechten';
}*/

function checkRole($users){
    foreach($users as $user){
        if($user['admin']){
            return true;
        }
    }
    return false;
}
?>