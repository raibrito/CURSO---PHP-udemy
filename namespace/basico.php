<?php namespace contexto; ?>

<div class="titulo">Exemplo Básdico</div>

<?php
echo __NAMESPACE__ . '<br>';
const contante1 = 123;
define('contexto\constante2', 234);
define (__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo contante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>'; modo errado
echo \contexto\constante3 . '<br>'; //modo correto
echo constant(__NAMESPACE__ . '\constante3')  . '<br>';
//echo constante4 . '<br>'; errado
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>';
echo \soma(1,2) . '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}'<br>";
    return 1;
}
echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; //mesma funcao na api do php
