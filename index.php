<?php


spl_autoload_register(function ($classname){
    require $classname.'.php';
});

$pickachu = new Pickachu();
$charmeleon = new Charmeleon();

$pickachu->defend($charmeleon->attack[1], $charmeleon);

echo '<br><br>';

$charmeleon->defend($pickachu->attack[0], $pickachu);
