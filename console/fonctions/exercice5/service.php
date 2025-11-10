<?php 
 /*
   Range toutes les fonctions metiers(Use case Interne):
            - Ceux sont toutes les fonctions executees par le systeme
            - Use Case Analyse = Fonction views +  Fonction metiers(use case internes) 
 */

 function calculMntStock(float $prix,int $qteStock):float{
    return  $qteStock*$prix; 
 }

function creerProduit(string $libelle,float $prix,int $qteStock):array{
   return [
    "libelle"=>$libelle,
    "prix"=>$prix,
    "qteStock"=>$qteStock,
    "mntStock"=>calculMntStock($prix,$qteStock)
   ];

}