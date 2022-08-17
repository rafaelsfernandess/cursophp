<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($palavra){
    $ultimoIndice = strlen($palavra)-1;
    for ($i=0; $i <= $ultimoIndice ; $i++) { 
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}
echo palindromo('arara').'<br>';
echo palindromo('ana').'<br>';
echo palindromo('bola').'<br>';
echo '<br><br>';
function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ?'Sim':'Não';
}

echo palindromo('arara').'<br>';
echo palindromo('ana').'<br>';
echo palindromo('bola').'<br>';