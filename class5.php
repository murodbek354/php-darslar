<?php
class car {
    private $model;
    protected $yili;
    public function __construct($model,$yili){
        $this->model =$model;
        $this->yili =$yili;
    }
  public function __destruct(){
    echo "Bu destructor funksiyasi!";
  }
  public function getModel(){
    return $this->model;
  }  
}
$onix = new car("onix",2024);
echo $onix->getModel()."<br>";
    
 class Ecar extends car{
    public $color;
    public function info(){
        return "Bu Ecar class!<br>";
    }
    public function getYili(){
        return $this->yili;
    }
    public function info(){
        "Bu elektrda yuradigan avtomobil!<br>";
    }
 }  
 $ecar = new Ecar("BYD",2025);
 echo $ecar->getModel();
 echo $ecar->info();
 echo $ecar->getYili();
?>