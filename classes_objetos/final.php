<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata{
    public abstract function metodo1();

    public final function metodo2(){
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata{
    public function metodo1(){
        echo "Executando método 1<br>";
    }

//    public function metodo2(){
//        echo 'Executando método 2<br>';
//    }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica{
    public $attr = 'Valor único';
}

//Classe final não pode receber herança!!
//class Duplicata extends Unica{
//    public $attr2;
//}

//mas é possivel instanciar uma classe final:
$unica = new Unica();
$unica->attr;

