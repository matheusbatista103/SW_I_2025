<?php
require_once "usarLivro.php";

$livro = new Livro("1984", "George Orwell");
$livro->exibirStatus();
$livro->emprestar();
$livro->exibirStatus();
$livro->devolver();
$livro->exibirStatus();
?>
