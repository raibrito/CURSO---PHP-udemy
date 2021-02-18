<div class="titulo">Visibilidade</div>

<?php
//modificadores de acesso: public, protected, private.

class A{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    protected function vaiPorHeranca(){
        echo 'Serei transmitido por herança!';
    }

    public function mostrarA(){
        echo "class A: Public = {$this->public}<br>";
        echo "class A: Protected = {$this->protected}<br>";
        echo "class A: Private = {$this->private}<br>";
    }

    private function naoMostrarA(){
        echo "Não vou imprimir!";
    }
}
$a = new A();
$a->mostrarA();

class B extends A {

    public function mostrarB(){
        echo "class B: Public = {$this->public}<br>";
        echo "class B: Protected = {$this->protected}<br>";
        echo "class B: Private = {$this->private}<br>";

        parent::vaiPorHeranca();
    }
}

echo '<br>';

$b = new B();
$b->mostrarB();
