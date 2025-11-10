<?php 
   /*
      1-Sous Programmes
        1-Fonctions ==> Fonction avec type de Retour
        2-Procedures ==> Fonction sans type de Retour(void)
     2-Syntaxe 
      1-Fonctions 
        function nomFonction(type $argF,...type $argFn):int|float|bool|string|array|null
        {
          action1 ;
          actionn ;
          return $resultat;
        }
     2-Procedures  ==> Fonction sans type de Retour(void)
        function nomFonction(type $argF,...type $argFn):void
        {
          action1 ;
          actionn ;
        }
    NB : 
         1- Par defaut les arguments formels d'une fonction sont des donnees
         2- Pour des  arguments Donnees/Resultats on mets & devant Arguments
   
   */
//Definition
  function somme(int $a, int $b):int {
      return $a+$b;
  }
  //Appel 
  $result =somme(3,5);
  echo "La somme est $result\n";

  $x=2;$y=3;
  $result =somme($x,$y);
  echo "La somme est $result\n";
/*
     Erreur car $x et $y ne sont pas initialises
     $result =somme($x,$y);
     echo "La somme est $result\n";
*/

//Definition ==>  
echo "Fonction sans type de Retour \n ";
  function somme1(int $a, int $b):void {
        $result=$a+$b;
        echo "Resultat=$result\n";
  }

  //Appel
   somme1(2,4);
   $x=2;$y=3;
   somme1($x,$y);

   //Definition ==>  
echo "Fonction sans type de Retour et Avec Donnee/Resulat \n ";
/*
  $a,$b sont des Donnees
  $result est une Donnee/Resultat
*/
  function somme2(int $a, int $b,int &$result):void {
        $result=$a+$b;
  }

  //Appel
    $result;
    somme2(2,4,$result);
    echo "Resultat=$result\n";
    $x=2;$y=3;
    somme2($x,$y,$result);
    echo "Resultat=$result\n";