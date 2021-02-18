<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá!";
    echo "Até a próxima!! <br>";
}

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();
echo '<br>';

$variavel = 1;

function trocaValor() {
    $variavel =2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes da função: $variavel<br>";
trocaValor();
echo "Depois da função: $variavel<br>";
echo '<br>';

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}
echo "Antes da função: $variavel<br>";
trocaValorDeVerdade();
echo "Depois da função: $variavel<br>";

var_dump(trocaValorDeVerdade());
echo '<br.';

