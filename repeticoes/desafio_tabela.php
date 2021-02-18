<div class="titulo">Desafio Tabela #01</div>

<?php
//Criar duas tabelas com os números que contém no array abaixo.
//1 tabela: normal.
//2 tabela: cada linha de uma cor

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

foreach($matriz as $linha) {
    foreach($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}
?>

<table>
    <?php
    //metodo 1 professor:
    foreach($matriz as $linha) {
        echo '<tr>';
        foreach($linha as $valor) {
            echo "<td>$valor</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<br>

<table>
    <?php
    //metodo 2 professor:
    foreach($matriz as $index => $linha) {
        $style = $index % 2 === 0 ?
            'background-color: lightblue;' : '';
        echo "<tr style='{$style}'>";
        foreach($linha as $valor) {
            echo "<td>$valor</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<br>

<table border="1">
    <tr>
        <td>01</td>
        <td>02</td>
        <td>03</td>
        <td>04</td>
        <td>05</td>
    </tr>
    <tr>
        <td>06</td>
        <td>07</td>
        <td>08</td>
        <td>09</td>
        <td>10</td>
    </tr>
    <tr>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
    </tr>
    <tr>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
    </tr>
</table>

<br>

<table border="1">
    <tr>
        <td>01</td>
        <td>02</td>
        <td>03</td>
        <td>04</td>
        <td>05</td>
    </tr>
    <tr color>
        <td>06</td>
        <td>07</td>
        <td>08</td>
        <td>09</td>
        <td>10</td>
    </tr>
    <tr>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
    </tr>
    <tr color>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
    </tr>
</table>

<style>

    table {
        border:  1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    [color] {
        background-color: #7f76e2;
    }

    table td {
        padding: 10px 20px;
    }

</style>
