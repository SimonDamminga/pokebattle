<?php 

class Pokemon{
    public $name;
    public $energyType;
    public $hitpoints;
    public $health;
    public $weakness; //new class
    public $resistance; //new class
    public $attack; //new class

    public function __construct($name, $energyType, $hitpoints, $weakness, $resistance, $attack){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attack = $attack;
    }

    public function __toString(){
        return json_encode($this);
    }
}