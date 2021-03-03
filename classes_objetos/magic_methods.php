<div class="titulo">Magic Methods</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {

        echo 'Construct invocado <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo '<br> Destruct invocado';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declado: {$atrib}<br>";
    }

    public function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params)
    {
        echo "Tentando executar método '${metodo}'";
        echo ", com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';

// chama o método diretamente sem __call
$pessoa->apresentar();

$pessoa->nomeCompleto = 'Muito Legal!'; // __set
$pessoa->nomeCompleto; // __get

// acessa o atributo diretamente sem __get
echo $pessoa->nome;

// __call pq o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1,2,3]);

$pessoa = null; // __destruct
























