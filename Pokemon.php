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

    public function defend($counterAttack, $enemy){
        if($enemy != NULL){
            if($enemy->energyType == $this->weakness->energyType){
                $damageDone = $counterAttack * $this->weakness->multyplier;
            }else{
                $damageDone = $counterAttack;
            }

            if($this->resistance->energyType == $enemy->energyType){
                $damageDone = $damageDone - $this->resistance->value;
            }


            $this->health = $this->health - $damageDone;
            $this->hitpoints = $this->health;

            print_r('<br><b>' . $this->name. ' </b><br>');
            print_r('<p> Health left: <b>' . $this->health . 'HP</b></p>');            
        }
    }
}