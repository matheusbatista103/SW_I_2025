<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($porcentagem) {
        $this->salario += $this->salario * ($porcentagem / 100);
        echo "Salário aumentado em {$porcentagem}%.<br>";
    }

    public function exibirInformacoes() {
        echo "Funcionário: {$this->nome} | Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}
?>
