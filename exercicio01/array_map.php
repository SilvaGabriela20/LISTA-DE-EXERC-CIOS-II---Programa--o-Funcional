<?php
function calcularQuadrado($numero) {
    return $numero * $numero;
}

function quadradosDaLista($lista) {
    return array_map("calcularQuadrado", $lista);
}


$numeros = [1, 2, 3, 4, 5];
$quadrados = quadradosDaLista($numeros);
print_r($quadrados);
?>