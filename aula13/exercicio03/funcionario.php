<?php
require_once "Funcionario.php";

$func = new Funcionario("Ana", 3000);
$func->exibirInformacoes();
$func->aumentarSalario(10);
$func->exibirInformacoes();
?>
