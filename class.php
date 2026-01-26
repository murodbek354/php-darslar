<?php
class car{
    public $model;
    public $color;
    public $probeg;
    public function drive(){
        echo "Mashina  harakatlanmayapdi!";
    }

}
// $bmw = new car();
// $bmw->model = "Bmw x5";
// $bmw->color = "black";
// $bmw->probeg = 0;
// print_r($bmw);
// echo "<br>";
// var_dump($bmw);
// echo "<br>";
// echo "Mashina modeli: ".$bmw->model."<br>";
// echo "Mashina rangi: ".$bmw->color."<br>";
$cobalt = new car();
$cobalt->model = "cobalt mitlene";
$cobalt->color = "white";
$cobalt->probeg = 0;
print_r($cobalt);
echo "<br";
var_dump($cobalt);
echo "<br>";
echo "Mashina modeli: ".$cobalt->model."<br>";
echo "Mashina rangi: ".$cobalt->color."<br>";
?>