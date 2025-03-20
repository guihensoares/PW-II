<?php  

    $pessoa1 = [];
    $pessoa1['nome'] = 'Amaurizinho';
    $pessoa1['sobrenome'] = 'Verdinho Marciano';
    $pessoa1['idade'] = 60;

    $pesssoa2 = [];
    $pessoa2['nome'] = 'Diogao';
    $pessoa2['sobrenome'] = 'Paulino';
    $pessoa2['idade'] = 30;

    $lista_pessoas = [
        $pessoa1,
        $pessoa2
    ];

    echo "<h1>O nome é: " . $lista_pessoas[0]['nome'] . "</h1>";

?>