<?php
    function graden(){
        $C = 30;

        $F = ($C * 1.8) + 32;

        echo $F;
    }

   
?>

<?php
graden();

echo "<br>\n";
?>


<?php
    function delen($a){
        return($a % 3 == 0);
    }

    $a = 30;
    $antwoord = delen($a);
    
    if($antwoord){
        echo "je kan " . $a . " delen door drie.";
    } else {
        echo "je kan " . $a . " niet delen door drie.";
    }

    echo "<br>\n"
?>


<?php

function letters(){
    $a = "dit is een tekst";

    echo strrev($a);
}
?>

<?php letters(); ?>