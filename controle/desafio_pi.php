<div class="titulo">Desafio PI</div>

<?php
//igualar o valor real de pi(3.1415926535898) com o valor da $pi (3.14).

echo pi();
$pi = 3.14;
if($pi - pi() <=0.01) {
    echo "<br>Iguais!";
} else {
    echo"<br>Diferentes!";
}

