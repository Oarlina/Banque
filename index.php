<h1>Exercice banque:</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name . '.php';
});

$maxime = new Titulaire ("Maxime", "BOB", "01-01-2000", "MULHOUSE");
$LA = new Compte ("Livret A", "14.60", "€", $maxime);
$Cc = new Compte ("Compte courant", "500.0", "€", $maxime);

//Afficher les informations de bases
echo "<b>".$maxime->__toString()."</b><br>".$LA->__toString()."<br>".$Cc->__toString()."<br>";

// Afficher un crédit et le débit
echo $LA->crediter(5.48);
echo $Cc->debiter(100);

//Aficher le virement du compte Cc à LA
echo $Cc->virement($LA,150); 

// afficher les informations de Maxime puis de ces deux comptes
echo $maxime->getInfos();
echo $LA->getInfos();
echo $Cc->getInfos();
