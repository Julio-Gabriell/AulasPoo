<?php 

    require_once 'Item.php';

    class Gaveta
    {
        private array $itens;

        public function __construct(array $itens){
            $this->setItens($itens);
        }

        public function setItens($array = []): void
        {
            $this->itens = $array;
        }

        public function getItens(): array
        {
            return $this->itens;
        }

        public function adicionarItem(Item $item): void
        {
            $this->itens[] = $item;
        }
    
        public function removerItem($nome): void
        {
            foreach (array_keys($this->itens, $nome) as $indice) {
                echo "<strong> Item {$this->itens[$indice]} retirado </strong> <br>";
                unset($this->itens[$indice]);
            }
        }

        public function listarItens(): string
        {
            $retorno = "";

            foreach($this->itens as $item){
                $retorno .= "<ul><li>{$item}</li></ul> <br>";
            }

            return "Itens da gaveta:" . $retorno;
        }

        public function __toString(): string 
        {
            return "Gaveta com " . count($this->itens) . " itens";
        }
    }

?>