<div class="titulo">Interface</div>

<?php
interface Animal{
    function respirar();
}
interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar(){
        return "Irei usar oxigênio!";
    }

    function latir(): string{
        return 'Au Au';
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>' ;
echo $animal->latir(), '<br>';

