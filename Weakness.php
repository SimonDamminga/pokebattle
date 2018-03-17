<?php 


class Weakness{
    public $energyType;
    public $multyplier;

    public function __construct($energyType, $multyplier){
        $this->energyType = $energyType;
        $this->multyplier = $multyplier;
    }
}