<?php



spl_autoload_register(function ($classname){
    require $classname.'.php';
});

echo '<br><br>';

$pickachu = new Pickachu($_GET['pickachu']);
$charmeleon = new Charmeleon($_GET['charmeleon']);

$pickachu->defend($_GET['defendPika'], $charmeleon);
$charmeleon->defend($_GET['defendChar'], $pickachu);

