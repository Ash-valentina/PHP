<?php

class programma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegliederenToe($liedje){
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

    function getProgramma() {
        return array("naam" => $this->naam,
                     "omschrijving" => $this->omschrijving);
    }

    public function setNaam($n) {
        if(strlen($n)>=2) {
            $this->naam = $n;
        }
    }

    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }
}
?>