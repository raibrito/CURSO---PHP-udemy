<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construct invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'Destruct invocado!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
//$pessoa = new Pessoa(); ERRO!

$pessoA = new Pessoa('Luciano',10);
$pessoaB = new Pessoa('Lorenzo',7);
$pessoaC = new Pessoa('Sophia',4);

$pessoA->apresentar();
unset($pessoaA); //invoca o __destruct!

$pessoaB->apresentar();
$pessoaB = null;

$pessoaC->apresentar();








