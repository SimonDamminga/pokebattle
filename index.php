<?php

spl_autoload_register(function ($classname){
    require $classname.'.php';
});

$pickachu = new Pickachu();
$charmeleon = new Charmeleon();


?>

<style>
    p{
        display: inline;
    }
</style>

<h1>Kies een naam voor je Pokemon</h1>
<hr><br><br>

<form action="results" action="post">
    <p><b>Pickachu is defending:</b></p><br><br>
    <p>Kies een naam</p>
    <input type="text" name="pickachu" placeholder="Naam Pickachu" value="Pickachu"><br>
    <p>Kies een attack van Charmeleon</p>
    <select name="defendPika">
        <?php 
            foreach($charmeleon->attack as $attack):
        ?>
            <option value="<?= $attack->damage ?>"><?= $attack->name ?></option>
        <?php
            endforeach;
        ?>
    </select>
    <br><br>

    <p><b>Charmeleon is defending:</b></p><br><br>
    <p>Kies een naam</p>   
    <input type="text" name="charmeleon" placeholder="Naam Charmeleon" value="Charmeleon"><br>
    <p>Kies een attack van Pickachu</p>
    <select name="defendChar">
        <?php 
            foreach($pickachu->attack as $attack):
        ?>
            <option value="<?= $attack->damage ?>"><?= $attack->name ?></option>
        <?php
            endforeach;
        ?>
    </select>
    <br><br>

    <input type="submit" value="submit">
</form>
