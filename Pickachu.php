<?php 

class Pickachu extends Pokemon{
    public function __construct($name = 'Pickachu'){
        parent::__construct(
            $name, //name
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

    public function defend($counterAttack = NULL, $enemy = NULL){
        parent::defend($counterAttack, $enemy);
    }
}