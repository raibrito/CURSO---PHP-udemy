<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //atributos
    public $name = 'Anônimo';
    public $age =   '18';

    public function apresentar(){
        return "Nome: {$this->name} <br> Idade: {$this->age} ano(s).<br>";
    }
}

$c1 = new Cliente();
$c1->name = 'Giulia';
$c1->age = 24;
echo $c1->apresentar();

echo '<br>';

$c2 = new Cliente;
$c2->name = 'Renne';
$c2->age = 4;
echo $c2->apresentar();

echo '<br>';

$c3 = new Cliente;
$c3->name = 'Raphael';
$c3->age = 1;
echo $c3->apresentar();