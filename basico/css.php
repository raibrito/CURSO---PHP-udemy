<div class="titulo"> Integração HTML</div>
<h1 center>
    <?php
        echo 'Olá,';
        echo '<small>';
        echo 'mundo!';
        echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>"?>

<br>
<div><button dobro><?= "Legal"?></button></div>

<style>
    button {
        padding: 5px <?= 2* 10 ?>px;
        background-color: #7f76e2;
        color: #EEE;
        font-weight: bold;
        border-radius: <?= 10 - 5?>px;
    }
    [center] {
        display: flex;
        justify-content: center;
    }
    [azul] {
        color: #7f76e2;
    }
    [dobro] {
        font-size: <?= 10 - 8?>rem;
    }

</style>
