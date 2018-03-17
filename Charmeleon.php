<?php 

class Charmeleon extends Pokemon{
    public function __construct(){
        parent::__construct(
            'Charmeleon',
            'Fire',
            60,
            new Weakness('Water', 2),
            new Resistance('Lightning', 10),
            array(
                new Attack('Head Butt', 10),
                new Attack('Flare', 30)
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