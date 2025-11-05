<?php 
/*
Saisir une série de produits(libelle,prix,qté en Stock) 
dans un tableau  puis  calcule le   montant en stock ( prix*qte Stock) 
de chaque  produit , le montant total en stock de la boutique 
et affiche les produits du tableau.
La Saisie s'arrête si l’utilisateur donne la réponse ‘N’.

*/

$produits=[];
$mntTotal=0;
do {
     //Saisie du Produit
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
          $mntTotal=   $mntTotal + $produit["mntStock"];

         //Ajouter le produit dans le Tableau
         $produits[]=$produit;

     $rep=readline("Voulez vous continuez (O/N)");
} while ($rep==="O" || $rep==="o");


//Affichage du produits
$nbreProduit=count($produits);
for ($i=0; $i <$nbreProduit ; $i++) { 
    echo "Donnees du Produit $i\n";
    echo "Libelle du Produit ".$produits[$i]["libelle"]."\n";
    echo "Prix du Produit ".$produits[$i]["prix"]."\n";
    echo "QteStock du Produit ".$produits[$i]["qteStock"]."\n";
    echo "Montant Stock du Produit ".$produits[$i][ "mntStock"]."\n";
}
echo "Montant Total   $mntTotal\n";     