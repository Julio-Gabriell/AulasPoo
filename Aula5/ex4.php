<?php 

    class livro
    {
        public string $titulo;
        public string $autor;
        public int $paginas;

        public function __construct(string $tituloLivro, string $autorLivro, int $paginasLivro)
        {
            $this->titulo = $tituloLivro;
            $this->autor = $autorLivro;
            $this->paginas = $paginasLivro;
        }

        public function exibirResumo()
        {
            echo $this->titulo . " | " . $this->autor . "<br>";
        }

        public function quantidadePaginas()
        {
            echo $this->paginas;
        }
    }

    $livro1 = new livro("Ultra-aprendizado: domine habilidades valiosas, seja mais esperto que a competição e dê um impulso na sua carreira", "
    Scott Young", 304);

    $livro1->exibirResumo();
    $livro1->quantidadePaginas();

?>