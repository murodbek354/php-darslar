<?php
$data = [
    'ism' => "Murodbek",
    'yosh' => 14,
    'shahar' => 'xonqa'
];
print_r($data);
echo "<br>";
$json = json_encode($data);
echo $json;
$json = '{"ism":"Murodbek","yosh":21,"shahar":"Urganch"}';
$data_object = json_decode($json);
$data_array = json_decode($json, true);

print_r($data_object);
echo "<br>";
print_r($data_array);
?>