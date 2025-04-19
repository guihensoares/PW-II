<?php

    $alunos = [
        'aluno1' => [
            'nome' => 'LeoLeo',
            'rm' => '54981530',
            'telefone' => '99735-2851',
            'foto' => 'https://i.pinimg.com/736x/52/4e/ae/524eae5d0cee515270349290cec35377.jpg',
            
        ],
        'aluno2' => [
            'nome' => 'Neao',
            'rm' =>'62591601',
            'telefone' => '53901-6245',
            'foto' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS6WAspgwwEkXxWrskPX218lrodMRdIy9P1g&s',
           
        ],
        'aluno3' => [
            'nome' => 'Alecsander',
            'rm' =>'74510934',
            'telefone' => '91053-8152',
            'foto' =>'https://pm1.aminoapps.com/6390/943d17858b8e7d3d25faf90f0c4cc37b6eb99364_00.jpg',
            
        ],
        'aluno4' => [
            'nome' => 'Mielgu',
            'rm' =>'97153405',
            'telefone' => '93149-0289',
            'foto' =>'https://i.redd.it/daniel-fletcher-looks-just-like-rumpelstiltskin-from-shrek-v0-w0ja5csd1iva1.jpg?width=341&format=pjpg&auto=webp&s=d0e4a877d52f51e26ade7ebc35f4e929a9d67956',
            
        ]
    ];

    foreach ($alunos as $key => $value) {
        echo "<br>Alunos: " . $value['nome'];
        echo "<br>RM: " . $value['rm'];
        echo "<br>Telefone: " . $value['telefone'];
        echo "<br> <img src =" . $value['foto'] . ">";
        echo "<hr>";
    }


?>