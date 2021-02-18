<div class="titulo">Desafio Classe</div>

<?php
echo '<p>Criar uma classe com o nome Data. A mesma terá os atributos: dia, mês e ano. 
Por padrão o dia será 01/01/1970. Além dos três atributos, definir um método chamado
apresentar e esse método terá que apresentar a data.</p>';

class Date{
    public $day = 01;
    public $month = 01;
    public $year = 1970;

    public function apresentar(){
        return "{$this->day}/{$this->month}/{$this->year}";
    }
}

$d1 = new Date();
$d1->day = 01;
$d1->month = 01;
$d1->year = 1970;
echo $d1->apresentar();