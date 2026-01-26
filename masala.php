<?php
class uy {
  public $xona ;
  public $nomi;
  public $qavati;
  public $manzili;
  public $sotik; 
  public function __construct($xona,$nomi,$qavati,$manzili,$sotik){
   $this->xona = $xona;
   $this->nomi = $nomi; 
   $this->qavati = $qavati; 
   $this->manzili = $manzili; 
   $this->sotik = $sotik; 
  }
}
$uy = new uy ("10 xona","Dacha","2 qavat","Xonqa",5);
var_dump($uy);   




?> 