<?php 

    class Player
    {
        private string $nickname;
        private int $nivel;
        private Inventario $inventario;

        public function __construct(string $nickname, int $nivel, Inventario $inventario)
        {
            $this->setNickName($nickname);
            $this->setNivel($nivel);
            $this->inventario = $inventario;
        }

        public function setNickName($nickname): void
        {
            if (!empty(trim($nickname))) {
                $this->nickname = $nickname;
            } else {
               $this->nickname = "Viajante"; 
            }
        }

        public function getNickName(): string
        {
            return $this->nickname;
        }

        public function setNivel($nivel): void
        {
            $this->nivel = $nivel;
            $this->inventario->atualizarCapacidade($nivel);
        }

        public function getNivel(): int
        {
            return $this->nivel;
        }
        public function coletarItem(Item $item): bool
        {
            return $this->inventario->adicionarItem($item);
        }

        public function soltarItem(Item $item): bool
        {
            return $this->inventario->removerItem($item);
        }
    }