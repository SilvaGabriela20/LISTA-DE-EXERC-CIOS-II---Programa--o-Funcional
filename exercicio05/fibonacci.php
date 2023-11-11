<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n; // Condição de parada: Fibonacci de 0 é 0, e de 1 é 1.
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Exemplo de uso:
$n = 10; // Número do termo da sequência de Fibonacci desejado
$resultado = fibonacci($n);

echo "O $n-ésimo termo da sequência de Fibonacci é: $resultado";
?>