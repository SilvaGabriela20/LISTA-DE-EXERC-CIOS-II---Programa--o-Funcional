<?php
function calcularFatorial($numero) {
    if ($numero <= 1) {
        return 1; // O fatorial de 0 e 1 é 1
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}

// Exemplo de uso:
$numero = 5;
$resultado = calcularFatorial($numero);

echo "O fatorial de $numero é $resultado";
?>