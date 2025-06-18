<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Fulano1", 10, 7);

    $nome = $fulano->getNome();
    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();

    echo "ALUNO: ".$fulano->getNome()."<br>";
    echo "MÉDIA: ".$fulano->Media($nota1, $nota2)."<br>";
    echo "SITUAÇÃO: ".$fulano->VerificarSituacao($fulano->Media($nota1, $nota2))."<br>";
?>
