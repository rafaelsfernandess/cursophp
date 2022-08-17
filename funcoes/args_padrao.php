<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome= 'Senhor(a)', $sobreNome = 'Cliente'){
    return "Bem vindo, $nome $sobreNome! <br>";
}

echo saudacao();
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    return "Para comer: $comida
    <br> Para beber: $bebida<br>";
}

echo anotarPedido('Hamburger');
echo "<br>";
echo anotarPedido('Hamburger', 'Refri');

function anotarPedido2($bebida = 'Água', $comida){
    return "Para comer: $comida 
    <br> Para beber: $bebida<br>";
}
echo "<br>";
echo anotarPedido2('Refrigerante2', 'Pizza2');