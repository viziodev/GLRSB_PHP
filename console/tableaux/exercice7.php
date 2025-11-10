<?php 
/*
   produit(libelle,prix,qté en Stock,categorie(id,libelle), montant en stock ( prix*qte Stock )  
    1.Ajouter Categorie
    2.Liste Categorie
    3.Ajouter Produit
    4.Lister Produit
    5.Lister les produits par catégorie
    6.Produit le plus cher
    7.Quitter
*/
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

$categories=[];
$idCat=0;
$produits=[];
$idProd=0;
/*

//Post Increment
   $idCat=0
   $id=$idCat++;    => $id =0;    idCat=1
//PreIncrement
 $idCat=0
 $id=++$idCat;    => $id=1;    idCat=1;
*/
do {
    for ($i=0; $i <count($menus) ; $i++) { 
         echo "$menus[$i]\n";
    }
    $choix=(int)readline("Faites votre choix\n");//1=='1'

    switch ($choix) {
        case 1:
        do {

              //Afficher Ecran de Saisie
               $libelle=readline("Entrer le Libelle : ");
             //Verifier Existence du Libelle
                $pos=-1;
               for ($i=0; $i <count($categories) && $pos==-1 ; $i++) { 
                if ($categories[$i]["libelle"]== $libelle) {
                    $pos=$i;
                }
               }
            if($pos!=-1){
                echo "Le Libelle du Produit existe deja\n";
            }
            
        } while ($pos != -1);
           
        //Genere Id 
         $categorie=[
            "id"=>++$idCat,
            "libelle"=>$libelle,
            //"produits"=>[]
         ];
         //Ajouter la categorie dans le Tableau
         $categories[]= $categorie;
          echo "Une Categorie a ete ajoute avec Success\n";
        break;
        case 2:
           for ($i=0; $i <count($categories)  ; $i++) { 
                echo "ID : ".$categories[$i]["id"]."\n";
                echo "Libelle : ".$categories[$i]["libelle"]."\n";
            }
        break;

        case 3:
             do {
                 $libelle=readline("Entrer le Libelle : ");
                 $pos=-1;
               for ($i=0; $i <count($produits) && $pos==-1 ; $i++) { 
                if ($produits[$i]["libelle"]== $libelle) {
                    $pos=$i;
                }
             }
             if($pos!=-1){
                  echo "Le Libelle du Produit existe deja\n";
             }
            
          } while ($pos != -1);
           do {
              $prix=(float)readline("Entrer le Prix du Produit ");
           } while ($prix<=0);
          do {
              $qteStock=(int)readline("Entrer le QteStock du Produit ");
           } while ($qteStock<=0);
           
           //Selectionner la categorie du Produit
            do {
                for ($i=0; $i <count($categories) && $pos==-1 ; $i++) { 
                    echo ($i)."-".$categories[$i]["libelle"]."\n";
                }
                $indexCat=(int)readline("Entrer l'index de la Categorie ");
             } while ($indexCat<0 || $indexCat>=count($categories));

             $produit=[
                "id"=>++$idProd,
                "libelle"=>$libelle,
                "prix"=>$prix,
                "qteStock"=> $qteStock,
                "mntStock"=>  $prix*$qteStock,
                "categorie"=>$categories[$indexCat]
             ];
            //$categories[$indexCat]["produits"][]= $produit;

            $produits[]=$produit;
        break;
        case 4 : 
              for ($i=0; $i <count($produits)  ; $i++) { 
                  echo "ID : ".$produits[$i]["id"]."\n";
                  echo "Libelle : ".$produits[$i]["libelle"]."\n";
                  echo "Prix du Produit ".$produits[$i]["prix"]."\n";
                  echo "QteStock du Produit ".$produits[$i]["qteStock"]."\n";
                  echo "Montant Stock du Produit ".$produits[$i]["mntStock"]."\n";
                  echo "Categorie du Produit ".$produits[$i]["categorie"]["libelle"]."\n";
            } 
            break;

        case 5 :
            //Selectionner la categorie du Produit
                do {
                    for ($i=0; $i <count($categories) && $pos==-1 ; $i++) { 
                        echo ($i)."-".$categories[$i]["libelle"]."\n";
                    }
                    $indexCat=(int)readline("Entrer l'index de la Categorie ");
                } while ($indexCat<0 || $indexCat>=count($categories)); 
              for ($i=0; $i <count($produits)  ; $i++) { 
                if ($produits[$i]["categorie"]["id"]==$categories[$indexCat]["id"]) {
                    echo "ID : ".$produits[$i]["id"]."\n";
                    echo "Libelle : ".$produits[$i]["libelle"]."\n";
                    echo "Prix du Produit ".$produits[$i]["prix"]."\n";
                    echo "QteStock du Produit ".$produits[$i]["qteStock"]."\n";
                    echo "Montant Stock du Produit ".$produits[$i]["mntStock"]."\n";
                    echo "Categorie du Produit ".$produits[$i]["categorie"]["libelle"]."\n";
                }
                 
            } 
            break;
        default:
            # code...
            break;
    }

    # code...
} while ( $choix!= 7);