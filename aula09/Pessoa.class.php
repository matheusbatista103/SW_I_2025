<?php

    class Pessoa{
    // Atributos da Classe
    public $Nome;
    public $Peso;
    public $Altura;    
    
    // Métodos
    public function MostrarDados(){
        echo "Nome da Pessoa: " . $this->Nome . "<br>";
        echo "Peso da Pessoa: " . $this->Peso . "<br>";
        echo "Altura da Pessoa: " . $this->Altura . "<br>";
        echo "<hr>";
        }
    }


?>