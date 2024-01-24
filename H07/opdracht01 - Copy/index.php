<?php

    include_once('liederen.php');
    include_once('programma.php');

    $ditprogramma = new programma();
    $ditprogramma->setNaam("mijn eerste programma");
    $ditprogramma->setOmschrijving("even testen");

    foreach($ditprogramma->getProgramma() as $p){
        echo $p."<br>";
    }

    $nieuwLiedje = new Liedje("dit is de titel", "rolling stones");

    $ditprogramma->voegliederenToe($nieuwLiedje);

    foreach($ditprogramma->getLiedjes() as $liedje){
        echo $liedje->getTitel(). " - " .$liedje->getArtiest()."<br>";
    }
    ?>