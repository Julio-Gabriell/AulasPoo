<?php 

    class Aluno
    {
        public string $nome;
        public int $matricula;
        public array $notas;

        public function __construct(string $nomeAluno, int $matriculaAluno)
        {
            $this->nome = $nomeAluno;
            $this->matricula = $matriculaAluno;
        }

        public function exibirDados()
        {
            echo $this->nome . PHP_EOL;
            echo $this->matricula . PHP_EOL;
        }

        public function calcularMedia(array $notas)
        {
            $this->notas = $notas;
            $soma = 0;
            $media = 0;

            foreach ($this->notas as $nota) {
                $soma += $nota;
            }

            echo $media = $soma / count($this->notas);
        }
    }

    $aluno1 = new Aluno("Julio Gabriel", 12345);

    $aluno1->exibirDados();

    $aluno1->calcularMedia([10, 10, 10]);

?>