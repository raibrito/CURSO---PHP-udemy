<?php namespace Outro\Nome; ?>
    <div class="titulo">Use/As</div>

    <?php

echo __NAMESPACE__ . '<br>';

include ('use_as_arquivo.php');

function soma ($a,$b){
    return $a . $b; //erro proposital
}

class Classe
{
    public $var;

    function func()
    {
        echo __NAMESPACE__ . ' -> ' .
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;
echo soma(1,2) . '<br>'; //resultado será 12, pois está concatenando 1e2.
echo ctx\soma(1,2) . '<br>'; //resultado será 3 (1+2) do outro arquivo.

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(5,1) . '<br>';

$a = new Classe();
$a->func();

//acessando classe do outro arquivo usando o caminho absoluto:
$b = new \Nome\Bem\Grande\Classe();
$b->func();

//acessando classe usando o Alias do namespace:
$c = new ctx\Classe();
$c->func();

//aplicando Alias específico para a classe:
use Nome\Bem\Grande\Classe as D;
//referenciando a classe usando o "apelido" D:
$d = new D();
$d->func();