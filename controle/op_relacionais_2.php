<div class="titulo">Op. Relacionais II</div>

<p>Escreva uma idade:</p>
<form method="POST">
    <input type="text" name="idade">
</form>
<div><button><?= "Enter"?></button></div>

<style>
    button {
        margin-bottom: -18px;
        background-color: #7f76e2;
        border-bottom: 1px solid #999;
    }
    p {
        margin-bottom: -18px;
    }
</style>

<?php
if(isset($_POST ['idade'])){
    $idade = $_POST['idade'];

    if($idade < 18){
        echo "A idade é de uma criança ou de um(a) adolescente";
    }elseif ($idade >= 18 and $idade < 60) {
        echo "A idade é de um adulto";
    } else {
        echo "A idade é de uma pessoa da terceira idade";
    }
}
?>


