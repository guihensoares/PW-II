<?php
    class Veiculos {
        private $nome_proprietario;
        private $placa;
        private $cor;

        public function __construct($nome_proprietario, $placa, $cor) {
            $this->nome_proprietario = $nome_proprietario;
            $this->placa = $placa;
            $this->cor = $cor;
        }

        public function infoVeiculo() {
            echo "<h3>Tipo de Veículo</h3>";
        }

        public function exibir() {
            echo "Nome do proprietario: $this->nome_proprietario";
            echo "<hr>";
            echo "Placa do veículo: $this->placa";
            echo "<hr>";
            echo "Cor do veículo: $this->cor";
        }


    }

    class Motos extends Veiculos {
        public function infoVeiculo() {
            echo "<h3>Info. Motos</h3>";
        }
    }

    class Carros extends Veiculos {
        public function infoVeiculo() {
            echo "<h3>Info. Carros</h3>";
        }
    }

    $veiculo1 = new Motos('guilherme soares', 'QRS-3921', 'vermelha');
    $veiculo1->infoVeiculo();
    $veiculo1->exibir();

    $veiculo2 = new Carros('chiquinho silva', 'ARG-5621', 'prata');
    $veiculo2->infoVeiculo();
    $veiculo2->exibir();

?>