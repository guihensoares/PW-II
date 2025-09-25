<?php
    class Forma {
        public function desenhar() {
            echo "Desenhando algo";
        }
    }

    class Circulo extends Forma {
        public function desenhar() {
            echo "Desenhando um círculo";
        }
    }

    $figura = new Circulo();
    $figura->desenhar();

?>