<?php

   $nota = 8;

   if($nota < 6) {
    echo "REPROVADO";
   } elseif ($nota == 6 || $nota == 7) {
    echo "RECUPERAÇÃO";
   } else {
    echo "APROVADO";
   }
   


?>