<?php 

function searchProduitByLibelle(array $categories,string $libelle):int{
               for ($i=0; $i <count($categories) ; $i++) { 
                if ($categories[$i]["libelle"]== $libelle) {
                    return $i;
                }
               }
               return -1;
  }

  function addCategorie(array &$categories,int &$idCat,string $libelle):void{
     //Genere Id 
         $categorie=[
            "id"=>++$idCat,
            "libelle"=>$libelle,
         ];
         //Ajouter la categorie dans le Tableau
         $categories[]= $categorie;
  }