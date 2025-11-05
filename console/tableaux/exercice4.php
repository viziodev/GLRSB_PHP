<?php 
/*
  Ecrire un algorithme qui remplit des valeurs paires dans un tableau  puis affiche le tableau . La saisie s'arrête lorsque l’utilisateur donne un nombre négatif.
*/

$numbersPairs=[];
//Saisie du tableau
do {
       $nbre=(int)readline("Entrer un  nombre :");
       if ($nbre%2==0 && $nbre>0) {
           $numbersPairs[]=$nbre;
       }
} while ($nbre >=0);

//Affichage du tableau
$nbreValeur=count($numbersPairs);
for ($i=0; $i <$nbreValeur ; $i++) { 
    echo "Tab[$i] = $numbersPairs[$i]\n";
}