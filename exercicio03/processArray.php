<?php
function processArray($lista, $funcaoTransformacao) {
    return array_map($funcaoTransformacao, $lista);
}

// Exemplo de uso:
$lista = array(1, 2, 3, 4, 5);

// Função de transformação que eleva cada número ao quadrado
$funcaoQuadrado = function($numero) {
    return $numero * $numero;
};

$novaLista = processArray($lista, $funcaoQuadrado);

// Exibir a nova lista resultante
print_r($novaLista);
?>