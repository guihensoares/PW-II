<?php
    //Classe PAI
    class Pessoa {
        public $nome;
        public $tipo;
        
        public function mostrarTipo() {
            echo "A pessoa $this->nome é do tipo $this->tipo <hr>";
        }
    }

    class PessoaComum extends Pessoa{
        public $cpf;
    }

    class Empresa extends Pessoa{
        public $cnpj;
    }

    $pessoa = new PessoaComum();
    $pessoa->nome = 'Rosalvinho';
    $pessoa->tipo = 'física';

    $empresa = new Empresa();
    $empresa->nome = 'Cabra Mole Ltda';
    $empresa->tipo = 'jurídica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();

?>