<?php
function obterComprimentosDasStrings($listaDeStrings) {
    $comprimentos = array();

    foreach ($listaDeStrings as $string) {
        $comprimentos[] = strlen($string);
    }

    return $comprimentos;
}

// Exemplo de uso:
$listaDeStrings = array("Maçã", "Banana", "Pera", "Uva");
$comprimentos = obterComprimentosDasStrings($listaDeStrings);

// Exibir os comprimentos das strings
print_r($comprimentos);
?>