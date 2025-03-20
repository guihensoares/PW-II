<?php

    // Vetor = array de unidimensional
    $lista_frutas = [];

    // Array sequencial Utiliza Números
    $lista_frutas[0] = 'Banana';
    $lista_frutas[1] = 'Manga';
    $lista_frutas[2] = 'Morango';
    $lista_frutas[3] = 'Uva';

    echo '<pre>';
    echo var_dump($lista_frutas);

    $lista_objetos = [];

    // Array associativo utiliza texto
    $lista_objetos['objeto1'] = 'boneca';
    $lista_objetos['objeto2'] = 'bola';

    echo '<pre>';
    echo var_dump($lista_objetos);

?>