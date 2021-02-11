<div class="titulo">Desafio Sorteio</div>

<?php
//Imprimir nomes aleatoriamente:

$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de Neve",
    "Cinderela",
];

$index = array_rand($nomes);
echo "<div center><h1> $nomes[$index]</div></h1>";
echo '<br>';

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>


