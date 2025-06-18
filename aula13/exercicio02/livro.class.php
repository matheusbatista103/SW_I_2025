<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro emprestado com sucesso.<br>";
        } else {
            echo "Livro já está emprestado.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso.<br>";
    }

    public function exibirStatus() {
        $status = $this->disponivel ? 'Disponível' : 'Emprestado';
        echo "Título: {$this->titulo} | Status: $status<br>";
    }
}
?>