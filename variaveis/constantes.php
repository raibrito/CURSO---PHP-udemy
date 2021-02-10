<div class="titulo">Constantes</div>

<?php
define(TAXA_DE_JUROS, 5.9);
echo "A taxa de juros é de: " . TAXA_DE_JUROS . " ao mês";

const NOVA_TAXA = 2.5;
echo "<br>Nossa nova taxa de juros é de " . NOVA_TAXA . " ao mês";
echo '<br>';

//atribuir o valor de uma variável para uma constante:
$valorVariavel = 1.5;
define(NOVISSIMA_TAXA, $valorVariavel); #forma correta usando variáveis.
// const NOVISSIMA_TAXA = $valorVariavel; forma errada. ERRO!
//const NOVISSIMA_TAXA = 2.8 - 1.3; #outra forma correta usando valores literais.

echo  "<br>Abaixamos nossa taxa de juros de ". TAXA_DE_JUROS . " para: "
. NOVA_TAXA . " e agora estamos com a nossa novissima taxa de: "
. NOVISSIMA_TAXA . " ao mês.";

echo '<br>';

echo '<br> Linha: ' . __LINE__;
echo '<br> Endereço do arquivo:' . __FILE__;
echo '<br> Endereço do diretório:' . __DIR__;



