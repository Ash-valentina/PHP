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
?>
