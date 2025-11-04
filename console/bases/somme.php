<?php 
  do {
    $nbre=(int)readline("Entrer un  nombre: ");
  } while ( $nbre<0);
  do {
   $nbre1=(int)readline("Entrer un  nombre :");
   } while ( $nbre1<0);
   $som=$nbre+$nbre1;
//==. ==> !=
//=== ==> !==
//!(condition et condition1) ==> !(condition) !et  !(condition1)
//!(Note>=0 et Note<=20)   ==>  !(Note>=0) !et !(Note<=20)
                                //Note<0    ou  Note>20
   echo "La somme est $som";
?>
