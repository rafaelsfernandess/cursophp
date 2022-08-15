<div class="titulo">Tipo Inteiro</div>

<?php
    echo 11;
    echo '<br>';
    var_dump(11);
    echo '<br>';
    #constante que mostra o tamanho maximo int suportado pelo computador
    echo PHP_INT_MAX, '<br>';
    echo PHP_INT_MIN, '<br>';
    #Quando se coloca um 0 na frente ele considera um numero em outra base
    echo 011, '<br>';//Octal
    echo 0b11, '<br>';//Binario
    echo 0x11; //Hexadecimal
?>