<?php
    include_once 'Pessoa.class.php';

    // Instanciar um objeto (Pessoa)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    // Atribuir alguns valores
    $pessoa1->Nome = 'Fulano da Silva';
    $pessoa1->Peso = 85.3;
    $pessoa1->Altura = 1.82;

    // Atribuir alguns valores
    $pessoa2->Nome = 'Victor Pacheco';
    $pessoa2->Peso = 79;
    $pessoa2->Altura = 1.69;

    // Chamando um método da classe pessoa
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();


?>