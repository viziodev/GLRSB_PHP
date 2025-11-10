<?php 
include_once('service.php');
include_once('view.php');


function main(){
       $categories=[];
       $idCat=0;
    do {
        $choix=menu();
        switch ($choix) {
          case 1:
          do {
             $libelle=saisieChaineNotEmpty();
             $pos=searchProduitByLibelle($categories,$libelle);
             if($pos!=-1){
                echo "Le Libelle de la Categorie existe deja\n";
             }
           } while ($pos!=-1);
             addCategorie($categories,$idCat,$libelle);
            break;
         }
    } while ($choix!= 7);
}

main();