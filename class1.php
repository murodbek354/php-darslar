<?php
class Car{
    public $model;
    public $color;

    public function __construct($model,$color){
        if(is_string($model)){
            $this->model = $model;
            $this->color = $color;
        }   
    }                                      
    
        
    

}
?>