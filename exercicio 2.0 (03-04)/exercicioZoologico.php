<?php

    $animais = [
        'animal1' => [
            'nome' => 'Pitolomeu',
            'raca' => 'ave',
            'especie' => 'Dodô',
            'cor' => 'Branco e marrom',
            'peso' => '24kg',
            'idade' =>'16anos',
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Hoefnagel_dodo.jpg/640px-Hoefnagel_dodo.jpg',
        
        ],
        'animal2' => [
            'nome' => 'Princesa',
            'raca' =>'Rabo-Córneo Hungaro',
            'especie' => 'Dragão',
            'cor' =>'Preto',
            'peso' => '987kg',
            'idade' =>'67anos',
            'foto' => 'https://pm1.aminoapps.com/6311/5fb39066b693721a5ac7e277d3c5cff939459008_00.jpg',
       
        ],
        'animal3' => [
            'nome' => 'Fofo',
            'raca' =>'Cão de três cabeças',
            'especie' => 'cachorro',
            'cor' =>'preto',
            'peso' => '600kg',
            'idade' =>'19anos',
            'foto' => 'https://pm1.aminoapps.com/6356/9e6c76d7cd6800a7c0c4f00918bcd1d3d08b52a6_00.jpg',
        
        ],
        'animal4' => [
            'nome' => 'Bombinha',
            'raca' =>'creeper',
            'especie' => 'hostil',
            'cor' =>'verde',
            'peso' => '50kg',
            'idade' =>'2meses',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_Jwf92DZWZ_yqM2tZ06bh5nfUa0dLnfseFw&s',
        
        ]
    ];

    foreach ($animais as $key => $value) {

        echo "<br>Nome: " . $value['nome'];
        echo "<br>Raça: " . $value['raca'];
        echo "<br>Espécie: " . $value['especie'];
        echo "<br>Cor: " . $value['cor'];
        echo "<br>Peso: " . $value['peso'];
        echo "<br>Idade: " . $value['idade'];
        echo "<br> <img src =" . $value['foto'] . ">";
        echo "<hr>";

    }



?>