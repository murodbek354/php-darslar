<?php
$int = 5;
$kasr = 16.5;
$string_number =  "14";

// integer
var_dump(is_int ($int)); //true
var_dump(is_int ($kasr)); //false
var_dump(is_int ($string_number)); //false
//float
var_dump(is_float ($int)); //false
var_dump(is_float ($kasr));//true
var_dump(is_float ($string_number));
var_dump(is_numeric ($int));
var_dump(is_numeric ($kasr));
var_dump(is_numeric ($string_number));

$a = 5; // integer
$b = 5.34; //float
$c = "hello"; //string
$d = true;//boolen

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

echo pi();
echo "\n";
echo min(5,46,2,8,45,-6,12,0);
echo "\n";
echo max(5,46,2,8,45,-6,12,0);
echo "\n";
echo abs(-6);
echo "\n";






?>