<?php 
/*
  Saisir N produits(libelle,prix,qté en Stock)  
  puis calcule le   montant en stock ( prix*qte Stock) 
  de chaque  produit ainsi que le montant total en stock de la boutique.

*/

include_once 'service.php';
include_once 'view.php';

//Fonction Principale 
function main():void{
       $mntTotal=0;
       $nbreProduit=saiseNombrePositifOrNull();
      for ($i=1; $i <=$nbreProduit ; $i++) { 
          $libelle= saisieChaineNotEmpty();
          $prix=saiseNombrePositif("Entrer le Prix du Produit","float");
          $qteStock=saiseNombrePositif("Entrer le QteStock du Produit","int");
          $produit=creerProduit($libelle,$prix,$qteStock);
          afficheProduit($i, $produit);
          $mntTotal=$mntTotal + $produit["mntStock"]; 
         }
          echo "Montant Total   $mntTotal\n";
}
//Fonction Principale
main();

   
         
