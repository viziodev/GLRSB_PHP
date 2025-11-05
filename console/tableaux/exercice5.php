<?php 
/*
  Saisir N produits(libelle,prix,qté en Stock)  
  puis calcule le   montant en stock ( prix*qte Stock) 
  de chaque  produit ainsi que le montant total en stock de la boutique.

*/

//Represente un Produit
$produit=[
    "libelle"=>"",
    "prix"=>0,
    "qteStock"=>0,
    "mntStock"=>0
];

  do {
    $nbreProduit=(int)readline("Entrer le Nombre de Produits ");
  } while ( $nbreProduit<0);

    $mntTotal=0;
    for ($i=1; $i <=$nbreProduit ; $i++) { 
        do {
              $produit["libelle"]=readline("Entrer le Libelle du Produit ");
        } while ($produit[ "libelle"]==="");

          do {
              $produit["prix"]=(float)readline("Entrer le Prix du Produit ");
        } while ($produit[ "prix"]<=0);

         do {
              $produit["qteStock"]=(int)readline("Entrer le QteStock du Produit ");
        } while ($produit[ "qteStock"]<=0);
      
            $produit["mntStock"]= $produit["qteStock"]*$produit["prix"]; 
     
              echo "Donnees du Produit $i\n";
              echo "Libelle du Produit ".$produit["libelle"]."\n";
              echo "Prix du Produit ".$produit["prix"]."\n";
              echo "QteStock du Produit ".$produit["qteStock"]."\n";
              echo "Montant Stock du Produit ".$produit[ "mntStock"]."\n";
              $mntTotal=   $mntTotal + $produit["mntStock"];
         }

          echo "Montant Total   $mntTotal\n";     
