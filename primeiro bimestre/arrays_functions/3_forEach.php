<?php  

    $estacionamento = [
        'Fusca',
        'Uno',
        'Ferrari',
    ];

    //  foreach ($estacionamento as $key => $value) {
    //      echo '<hr>';
    //      echo "<b>Veículo " . $key . ":</b> " . $value;
    //  }

    $patio = [
        [
            'nome' => 'Fusca',
            'placa' => 'GUI123',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR40OCOQVJ0xepnF9Az4K5AH_0h--H8d-1tEA&s',
        ],
        [
            'nome' => 'Uno',
            'placa' => 'UIG231',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpwhEBWhZovxcLzLzzpKRN6nDBakOw6BWmcg&s',
        ],
        [
            'nome' => 'Ferrari',
            'placa' => 'IUG321',
            'foto' => 'https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2021/01/04194802/Screen-Shot-2021-01-03-at-12.28.00-PM-300x168.png',
        ]
    ];

    foreach ($patio as $key => $value) {
        echo "<br>Veiculo: " . $value["nome"];
        echo "<br>Placa: " . $value["placa"];
        echo "<br><img src ='" . $value["foto"] . "'>";
        echo "<hr>";
    }

?>