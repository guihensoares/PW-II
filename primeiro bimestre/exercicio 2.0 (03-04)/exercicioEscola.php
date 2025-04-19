<?php

//Foi na gambiarra, mas funcionou que nem o exemplo

    $sobreEscola = [
        'escola' => [
            'nome' => 'Etec',
        
            'nomeCurso1' => 'Desenvolvimento de Sistemas' ,
            'nomeCurso2' => 'Administração',
        
            'materia1' => 'Programação Mobile',
            'materia2' => 'Programação Web',
            'materia3' => 'Técnicas Avançadas de Programação de Algoritmos',
            'materia4' => 'Inglês',
            'materia5' => 'Recursos Humanos',
            'materia6' => 'Gestão de Pessoas',
            'materia7' => 'Teoria da Administração',
            'materia8' => 'Inglês',
        
            'moduloUm' => 'Módulo I',
            'moduloDois' => 'Módulo II',
            'moduloTres' => 'Módulo III',
            'moduloQuatro' => 'Módulo IV',
        ],
    ];

    foreach ($sobreEscola as $key => $value) {
        echo "<br> <li>" . $value['nome'];

        foreach ($sobreEscola as $key => $value) {
            echo "<br> <ul> <li>" . $value['nomeCurso1'];

            foreach ($sobreEscola as $key => $value) {
                echo "<br> <ul> <li>" . $value['materia1'];

                foreach ($sobreEscola as $key => $value) {
                    echo "<br> <ul> <li>" . $value['moduloUm'];
                    echo "<br> <li>" . $value['moduloDois'] . "</ul>";
                }

                echo "<br> <li>" . $value['materia2'];

                foreach ($sobreEscola as $key => $value) {
                    echo "<br> <ul> <li>" . $value['moduloUm'];
                    echo "<br> <li>" . $value['moduloDois'];
                    echo "<br> <li>" . $value['moduloTres'];
                    echo "<br> <li>" . $value['moduloQuatro'] . "</ul>";
                }

                echo "<br> <li>" . $value['materia3'];
                echo "<br> <li>" . $value['materia4'];

                foreach ($sobreEscola as $key => $value) {
                    echo "<br> <ul> <li>" . $value['moduloUm'];
                    echo "<br> <li>" . $value['moduloDois'];
                    echo "<br> <li>" . $value['moduloTres'] . "</ul> </ul>";
                }
            }

            echo "<br> <li>" . $value['nomeCurso2'];

            foreach ($sobreEscola as $key => $value) {
                echo "<br> <ul> <li>" . $value['materia5'];

                foreach ($sobreEscola as $key => $value) {
                    echo "<br> <ul> <li>" . $value['moduloUm'];
                    echo "<br> <li>" . $value['moduloDois'] . "</ul>";
                }

                echo "<br> <li>" . $value['materia6'];
                echo "<br> <li>" . $value['materia7'];
                echo "<br> <li>" . $value['materia8'];

                foreach ($sobreEscola as $key => $value) {
                    echo "<br> <ul> <li>" . $value['moduloUm'] . "</ul> </ul>";
                }
            }
        }
    }
?>