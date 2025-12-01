<?php 

    require_once 'Gaveta.php';

    class Armario
    {
        private array $gavetas;

        public function __construct(array $gavetas)
        {
            $this->setGavetas($gavetas);
        }

        public function setGavetas($array): void
        {
            $this->gavetas = $array;
        }

        public function getGavetas(): array
        {
            return $this->gavetas;
        }

        public function adicionarGaveta(Gaveta $gaveta): void
        {
            $this->gavetas[] = $gaveta;
        }
        
        public function removerGaveta($indice): void
        {
            unset($this->itens[$indice]);
        }
         
        public function listarGaveta(): void
        {
            foreach($this->gavetas as $gaveta) {
                echo $gaveta;
            }
        }

        public function __toString(): string 
        {
            return "Armario com " . count($this->gavetas) . " gavetas";
        }
    }
?>