<?php 

    class carros
    {
        public string $marca;
        public string $modelo;
        public int $ano;

        public function __construct(string $marcaCarro, string $modeloCarro, int $anoCarro)
        {
            $this->marca = $marcaCarro;
            $this->modelo = $modeloCarro;
            $this->ano = $anoCarro;
        }

        public function exibirCarro(){
            echo $this->marca . PHP_EOL;
            echo $this->modelo . PHP_EOL;
            echo $this->ano . PHP_EOL;
        }
    }

    $primeiroCarro = new carros('Nissan', 'Skyline', 2006);

    $primeiroCarro->exibirCarro();

?>