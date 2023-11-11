<?php
function reduzirSoma($lista) {
    return array_reduce($lista, function ($acumulador, $elemento) {
        return $acumulador + $elemento;
    }, 0);
}

// Exemplo de uso:
$lista = array(1, 2, 3, 4, 5);
$soma = reduzirSoma($lista);

echo "A soma dos elementos é: " . $soma;
?>