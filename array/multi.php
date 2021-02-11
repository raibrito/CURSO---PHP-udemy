<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo",
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia",
    ]
];

print_r($dados);
echo '<br>' . $dados [0] ['idade']; #imprimir dados do array com indice 0, no caso "Roberto".
echo '<br>' . $dados [1] ['idade']; #imprimir dados do array com indice 1, no caso "Maria".

$dados [] = [           #adicionando novo elemento ao dentro de dados.
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México",
];

echo '<br><hr>';
print_r($dados);
echo '<br>' . $dados [2] ['idade']; #buscar um elemento. nesse caso, a idade de "Florinda".

$dados [2]["vizinho"] = "Chaves"; #adicionar um novo atributo a um elemento.
echo '<br><hr>';
print_r($dados);

unset($dados[1]); #eliminar um indice, porém n será reodernado os outros arrays.
echo '<br>';
var_dump($dados[1]);