<div class="titulo">Argumentos & Retorno</div>

<?php

function  obterMensagem(){
    return 'Seja bem vindo!<br>';
}

echo obterMensagem();
$mensagem = obterMensagem();
echo strtoupper($mensagem);
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}";
}

echo obterMensagemComNome('Rafael');

function soma($a, $b){
    return $a+$b;
}

echo "<br> A soma é: ".soma(1,2);

$x=4;
$y=5;
function somaComVariavel($a, $b){
    return $a+$b;
}

echo "<br> A soma é: ".somaComVariavel($x,$y);

function trocarValor($a, $novoValor){
    $a= $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;