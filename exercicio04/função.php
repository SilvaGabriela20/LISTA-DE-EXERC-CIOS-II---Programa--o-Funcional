<?php
function composicao($funcao1, $funcao2) {
    return function ($x) use ($funcao1, $funcao2) {
        return $funcao2($funcao1($x));
    };
}

// Exemplo de uso:
// Duas funções de exemplo
$funcaoDobro = function ($x) {
    return $x * 2;
};

$funcaoSomaUm = function ($x) {
    return $x + 1;
};

// Compondo as duas funções
$funcaoComposta = composicao($funcaoDobro, $funcaoSomaUm);

// Testando a função composta
$resultado = $funcaoComposta(5); // Deve retornar (5 * 2) + 1 = 11

echo "Resultado da composição: " . $resultado;
?>