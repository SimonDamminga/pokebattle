<?php 

class Pickachu extends Pokemon{
    public function __construct(){
        parent::__construct(
            'Pickachu', //name
            'Lightning', //energytype
            60, //hitpoints / health
            new Weakness('Fire', 1.5), //weakness
            new Resistance('Fighting', 20), //resistance
            array(
                new Attack('Electric Ring', 50), //attacks
                new Attack('Pika Punch', 20)
            )
        );
    }

    public function defend($counterAttack, $enemy){
        if($enemy->energyType == $this->weakness->energyType){
            $damageDone = $counterAttack->damage * $this->weakness->multyplier;
        }else{
            $damageDone = $counterAttack->damage;
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