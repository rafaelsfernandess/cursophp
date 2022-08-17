<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade=18){
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct(){
        echo "Morreu";
    }
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Rafael', 25);
$pessoa->apresentar();

unset($pessoa);

