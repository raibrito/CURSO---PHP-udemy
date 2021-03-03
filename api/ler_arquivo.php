<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo "Tamanho arquivo: $tamanho <br>";
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

//ler linha por linha:
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo); //não retornará nada, pois valor falso

echo '<hr>';

//percorrer todas as linhas de um arquivo, sem saber qts linhas o mesmo possui:
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)){
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

//ler caractere por caractere:
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)){
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';
//ler e alterar o arquivo:
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura do arquivo.");
fclose($arquivo);

