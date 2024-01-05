<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, tr, td {
        border: solid 1px black;
    }

    td{
        background-color: gray;
    }
</style>
<body>

<table>

<?php
    $servername = "localhost";
    $dbname = "phpschool";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=phpschool", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    $query = "SELECT * FROM cursist";
    $stmt = $conn->prepare($query) or die ("error 1");
    $stmt->execute() or die("error 2");
    
    while ($row = $stmt->fetch()){

        echo "<tr>";
        echo "<td>" . $row['cursistnr'] . "</td>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['roepnaam'] . "</td>";
        echo "<td>" . $row['straat'] . "</td>";
        echo "<td>" . $row['postcode'] . "</td>";
        echo "<td>" . $row['plaats'] . "</td>";
        echo "<td>" . $row['geslacht'] . "</td>";
        echo "<td>" . $row['geb_datum'] . "</td>";
        echo"</tr>";

    }

?>

</table>
</body>
</html>