<?php
    class Pessoa {
        public $nome;
        public $idade;
        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function exibir() {
            echo "Meu nome é $this->nome e tenho $this->idade anos";
        }
    }

    $pessoa = new Pessoa('Guizito', 21);
    $pessoa->exibir();

?>