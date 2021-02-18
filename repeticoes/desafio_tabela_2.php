<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="post">
    <div>
        <label for="lin">Qt Linhas</label>
        <input type="number" value=<?= $_POST['lin'] ?? 10 ?>
        name="lin" id="lin">
    </div>
    <div>
        <label for="colun">colun</label>
        <input type="number" value=<?= $_POST['colun'] ?? 10 ?>
        name="colun" id="colun">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
    $lin = intval($_POST['lin']);
    $colun = intval($_POST['colun']);

    if(!$lin) $lin = 10;
    if(!$colun) $colun = 10;

    $num = 1;
    for($i = 0; $i < $lin; $i++) {
        echo "<tr>";
        for($j = 0; $j < $colun; $j++) {
            echo "<td>$num</td>";
            $num++;
        }
        echo "</tr>";
    }
    ?>
</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>