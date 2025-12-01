<?php

    class Inventario
    {
        private int $capacidadeMaxima = 20;
        private int $ocupado = 0;
        private array $itens = [];

        public function atualizarCapacidade(int $nivel): void
        {
            $this->capacidadeMaxima = 20 + ($nivel * 3);
        }

        public function adicionarItem(Item $item): bool
        {
            if ($this->ocupado + $item->getTamanho() > $this->capacidadeMaxima) {
                echo "Inventário cheio! Não é possível adicionar {$item->getNome()}.\n";
                return false;
            }

            $this->itens[] = $item;
            $this->ocupado += $item->getTamanho();
            return true;
        }

        public function removerItem(Item $item): bool
        {
            foreach ($this->itens as $index => $i) {
                if ($i === $item) {
                    unset($this->itens[$index]);
                    $this->ocupado -= $i->getTamanho();
                    return true;
                }
            }

            echo "Item não encontrado.\n";
            return false;
        }

        public function getCapacidadeRestante(): int
        {
            return $this->capacidadeMaxima - $this->ocupado;
        }
    }
