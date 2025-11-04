<?php 
/*
  Saisir N notes puis determiner le minimun, le maximum et la moyenne
*/

  do {
    $nbreNote=(int)readline("Entrer le Nombre de Notes ");
  } while ( $nbreNote<0);
//$i++; ==>  $i=$i+1;
//Note [0, 20].  $minNote=20   $maxNote=0
 $somNote=0;
  for ($i=1; $i <=$nbreNote ; $i++) { 
        do {
        $note=(int)readline("Entrer la note a la position $i : ");
       } while ( $note<0 || $note>20);

        $somNote= $somNote+$note;
        if($i==1){
            $minNote=$note;
            $maxNote=$note;
        }else{
             if ($note<$minNote) {
                $minNote=$note;
             }

             if ($note>$maxNote) {
                $maxNote=$note;
             }
        }
  }
    $moy=$somNote/$nbreNote;
    echo "Moyenne: $moy\n ";
    echo "Min Note: $minNote\n";
    echo "Max Note: $maxNote\n";

  

