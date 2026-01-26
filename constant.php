<?php
class Car {
    public $model;
    public const BRAND = "chevrolet";
    public function info() {
        return "Bu".self::BRAND." mashinasi!<br>";
    }
}
$onix = new Car();
echo $onix->info();
echo $onix::BRAND."<br>";

echo $onix::BRAND;
?>