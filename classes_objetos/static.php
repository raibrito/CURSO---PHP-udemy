<div class="titulo">Membros Estáticos</div>

<?php
class A{
    public $naoStatic = 'Variável de instância(objeto)';
    public  static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        //tentativa 1
        //echo "Estática = {$this->static}<br>";
        //tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA(){
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); //não é a forma ideal!

echo '<br>';
echo A::$static, '<br>'; //forma ideal: que acessa diretamente pela classe.
A::mostrarStaticA(); //forma ideal: que acessa diretamente pela classe.

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>'; //forma ideal: que acessa diretamente pela classe.

