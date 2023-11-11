<?php
function somaCurrying($numero1) {
    return function ($numero2) use ($numero1) {
        return $numero1 + $numero2;
    };
}

// Etapa 1: Passando o primeiro número
$passo1 = somaCurrying(5);

// Etapa 2: Passando o segundo número e obtendo o resultado
$resultado = $passo1(3);

echo "O resultado da soma é: " . $resultado;
?>