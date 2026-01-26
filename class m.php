<?php
class Mahsulotlar {
    public $nomi;
    public $kirim_narxi;
    public $sotuv_narxi;
    public $birligi;
    public function __construct($nomi,$kirim_narxi) {
        $this->nomi = $nomi;
        $this->kirim_narxi =$kirim_narxi;
    }
    public function setBirligi($birligi){

    }
}
$snikers = new Mahsulotlar();

$snikers->nomi = "snikers";
$snikers->kirim_narxi = 8000;
$snikers->sotuv_narxi =10000;
var_dump($snikers); 
?>