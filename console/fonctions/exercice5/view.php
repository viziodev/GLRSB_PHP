<?php 
 /*
   Range toutes les fonctions views:
            - Ceux sont les fonctions  de Lecture(readline) 
            - Ceux sont les fonctions  Ecriture(echo)
 
 */

 function saiseNombrePositifOrNull():int 
 {
    do {
    $nbreProduit=(int)readline("Entrer le Nombre de Produits ");
   } while ( $nbreProduit<0);
   return $nbreProduit;
 }

 function saisieChaineNotEmpty():string {
    do {
        $libelle=readline("Entrer le Libelle du Produit ");
    } while ($libelle==="");
    return $libelle;
 }

  function afficheProduit(int $i ,array $produit):void
  {
              echo "Donnees du Produit $i\n";
              echo "Libelle du Produit ".$produit["libelle"]."\n";
              echo "Prix du Produit ".$produit["prix"]."\n";
              echo "QteStock du Produit ".$produit["qteStock"]."\n";
              echo "Montant Stock du Produit ".$produit[ "mntStock"]."\n";
}

function saiseNombrePositif(string $sms,string $type):int 
 {
      do {
               if ($type==="float") {
                   $val=(float)readline($sms);
               }else{
                   $val=(int)readline($sms);
               }
             
        } while ($val<=0);
       return $val;
 }
