<?php
function filtrarNumerosPares($listaDeNumeros) {
    return array_filter($listaDeNumeros, function($numero) {
        return $numero % 2 === 0;
    });
}


$lista = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$pares = filtrarNumerosPares($lista);

// Exibir os números pares
echo implode(' ', $pares);
?>