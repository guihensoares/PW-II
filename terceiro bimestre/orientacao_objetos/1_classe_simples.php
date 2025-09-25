<?php 
    class Pessoa {
        //Opções de Encapsulamento
        //public - A variável é acessível de fora da classe
        //private - É acessível somente dentro da classe
        //protected - É acessivel somente por herança
        public $nome;
        public $idade;

        public function apresentar() {
            echo "Olá, meu nome é $this->nome";
            echo "<hr>";
            echo "Tenho $this->idade anos";
            echo "<hr>";
        }
    }

    $aluno1 = new Pessoa();
    $aluno1->nome = 'Josefa';
    $aluno1->idade = '21';
    $aluno1->apresentar();

    $aluno2 = new Pessoa();
    $aluno2->nome = 'Chiquinho';
    $aluno2->idade = '17';
    $aluno2->apresentar();

?>