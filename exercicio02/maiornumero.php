<?php
function encontrarMaiorNumero($lista) {
    if (empty($lista)) {
        return null; // Retorna nulo se a lista estiver vazia.
    }

    $maior = $lista[0]; // Inicializa o maior com o primeiro elemento da lista.

    foreach ($lista as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }

    return $maior;
}


$lista = array(5, 2, 9, 7, 1, 8, 4);
$maior = encontrarMaiorNumero($lista);

echo "O maior número na lista é: " . $maior;
?>