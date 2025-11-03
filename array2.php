<?php
$sonlar = array(4,6,45,23,24,7, "tast");
$sonlar1 = [4,67,87,3,5,6,67,98, "test"];
$cars = array("volov" , "bmw","toyota",);
// var_dump($cars);
print_r($cars);
print_r($sonlar);
echo $sonlar[2];
echo "\n";
echo $sonlar[2];
echo $sonlar[4];
$sonlar[4] = 45;
echo "\n";
echo $sonlar[4];
echo "\n";
foreach($sonlar as $iteam){
    echo $item. " ";
}
// massivga yangi qiymat qo'shish;
$cars = array("volvo","bmw","toyota");
array_push($cars, "chevrallet");
echo "\n";
print_r($cars);
$cars[]= "BYD";
print_r($cars);
$son = [5,8, "test"];
echo $son[2];
echo "\n";
$user = ["ism"=> "Murodbek", "familya" => "jumanazarov", "t__yili "=> 2011];
echo $user['ism'];
?>