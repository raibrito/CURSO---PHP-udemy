<div class="titulo"> Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem-vindo(a)!';
}

obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());
echo '<br>';

function obterMensagemComNome($nome){
    return "Bem vindo(a), {$nome}!";
}
echo '<br>', obterMensagemComNome('Luciano');
echo '<br>', obterMensagemComNome('Lorenzo');
echo '<br>';

function soma($a, $b) {
    return $a + $b;
}
$x = 6;
$y = 1;
echo '<br>', soma(5,1);
echo '<br>', soma ($x, $y);

function trocarValor($a, $novoValor){
   $a = $novoValor;
}

$variavel = 6;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}
trocaValorDeVerdade($variavel, 1);
echo '<br>', $variavel;