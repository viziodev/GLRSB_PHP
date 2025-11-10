<?php 
function menu():int {
    $menus=[
        "1.Ajouter Categorie", //
        "2.Liste Categorie",
        "3.Ajouter Produit",
        "4.Lister Produit",
        "5.Lister les produits par catégorie",
        "6.Produit le plus cher",
        "7.Produit le moins cher",
        "8.Quitter",
    ];
      for ($i=0; $i <count($menus) ; $i++) { 
         echo "$menus[$i]\n";
      }
    return (int)readline("Faites votre choix\n");
}

 function saisieChaineNotEmpty():string {
    do {
        $libelle=readline("Entrer le Libelle du Produit ");
    } while ($libelle==="");
    return $libelle;
 }