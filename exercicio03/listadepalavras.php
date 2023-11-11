<?php
function transformarPalavras($lista, $funcaoTransformacao) {
    $palavrasTransformadas = array_map($funcaoTransformacao, $lista);
    return $palavrasTransformadas;
}

// Função que transforma uma palavra em maiúsculas
$funcaoMaiusculas = function($palavra) {
    return strtoupper($palavra);
};

// Função que transforma uma palavra em minúsculas
$funcaoMinusculas = function($palavra) {
    return strtolower($palavra);
};

$listaDePalavras = array("Maçã", "Banana", "Pera", "Uva");

// Converter todas as palavras em maiúsculas
$palavrasMaiusculas = transformarPalavras($listaDePalavras, $funcaoMaiusculas);

// Converter todas as palavras em minúsculas
$palavrasMinusculas = transformarPalavras($listaDePalavras, $funcaoMinusculas);

// Exibir as palavras transformadas
echo "Palavras em maiúsculas: " . implode(", ", $palavrasMaiusculas) . "<br>";
echo "Palavras em minúsculas: " . implode(", ", $palavrasMinusculas);
?>