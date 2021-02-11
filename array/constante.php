<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS [0] = 'banana'; #php n permite alterações internas no array.

//nesse caso só poderá ser lido os elementos do array
echo FRUTAS[0];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro'; #Assim como const, o define também não permite alterações internas no array.