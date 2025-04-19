<?php
/*
 Crie um script que no qual contém uma 
 variável com a idade e exiba se a pessoa é:
   criança
   adolescente
   adulto
   idoso
*/


    $idade = 60;

    if ($idade <= 12) {
        echo "Criança";
    } else if ($idade < 18) {
        echo "Adolescente";
    } else if ($idade < 60) {
        echo "Adulto";
    } else {
        echo "Idoso";
    }
?>