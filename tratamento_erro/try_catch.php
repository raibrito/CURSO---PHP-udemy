<div class="titulo">Try/Catch</div>

<?php

//echo 7 / 0; //não gera erro. resultado = INF(infinito).
//echo intdiv(7,0); não mostrará nada na aplicação, porque o erro não foi tratado!

try{
    echo intdiv(7,0);
}catch (Error $e){
    echo 'Teve um erro aqui <br>';
}

try{
    throw new Exception('Um erro muito estranho');
    echo intdiv(7,0);
}catch (DivisionByZeroError $e){
    echo 'Division By Zero<br>';
}catch (Throwable $e){
    echo 'Erro encontrado ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua...';