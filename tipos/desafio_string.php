<div class="titulo">Desafio String</div>
<?php

//Enunciado:
//Qual o método que a posição do texto
//'abc' na string '!AbcaBcad' retorne 1?

echo strpos('!AbcaBcad', 'abc') . '<br>'; #7
echo stripos('!AbcaBcad',  'abc') . '<br>'; # 1(correta)

echo strpos(strtolower('!AbcaBcad'), strtolower('ABC'));