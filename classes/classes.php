<?php

class Data{
    public $dia=01;
    public $mes=01;
    public $ano=1970;

    public function apresentar(){
        return $this->dia."/".$this->mes."/".$this->ano;
    }

    
}

$d = new Data;
$d->dia = 05;
$d->mes=07;
$d->ano=1997;
echo $d->apresentar().'<br>';

$d = new Data;
echo $d->apresentar();