<div class="titulo">Closure & Callable</div>

<?php
echo '<p><strong>Closure:</strong> Classe usada para representar funções anônimas.<br>
      <strong>Callable:</strong> Verifica se o conteúdo da variável pode ser chamado como uma função. 
      Isto pode verificar se uma simples variável contêm o nome de uma função válida,
      ou que um array contêm uma propriedade de um objeto e nome de função.</p>';

$soma1 = function ($a,$b){
    return $a + $b;
};

function soma2($a,$b){
    return $a + $b;
}
echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2,3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';
var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar2(2,3, '+', $soma1); #executará.
executar2(2,3, '+', soma2); #não executará

