<?php 
    $pessoas = [
    [
        'nome' => 'Guilherme',
        'idade' => 83
    ],
    [
        'nome' => 'Guilhermina',
        'idade' => 33
    ],
    [
        'nome' => 'Guilhermão',
        'idade' => 14
    ]  
    ];

    verificarIdade($pessoas);


    function verificarIdade($pessoas) {
        foreach ($pessoas as $key => $pessoa) {
            if ($pessoa ['idade'] >= 18 && $pessoa ['idade'] <= 70) {

                echo $pessoa['nome'] . ' pode votar e o voto é obrigatório';

            } elseif ($pessoa ['idade'] == 16 || $pessoa ['idade'] == 17 || $pessoa ['idade'] < 70) {

                echo $pessoa['nome'] . ' pode votar, mas não é obrigatório';
 
            } else {

                echo $pessoa['nome'] . ' não pode votar';

            }
        
            echo '<br>';
        }
    }
?>