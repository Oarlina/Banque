<h1>POO Banque:</h1>

<?php
// Pour automatiquement chargé les classes
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$maxime = new Titulaire ("Maxime", "SMITH","05-06-2000","STRASBOURG");
$LA = new Compte ("Livret A","4566.95","€",$maxime); // déclaration du livret A
$CC = new Compte ("Compte courant","46.95","€",$maxime); // déclaration du compte courant 

// echo $LA->getInfos();
// echo $CC->getInfos();
echo $maxime-> infoTitulaire();
echo "<br>";

echo $LA->crediter(200.59);

echo "<br>".$LA->debiter(200.59);

?>