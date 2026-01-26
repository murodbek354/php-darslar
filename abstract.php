<?php
abstract class Animal {
    public function eat() {
        return "Hayvon ovqat yemoqda!<br>";
    }
    abstract public function sound();
}
class Dog extends Animal {
    public function sound() {
        return "wow wow <br>";
    }
}
$dog = new Dog();
echo $dog->eat();
echo $dog->sound();
?>