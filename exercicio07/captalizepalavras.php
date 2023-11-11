<?php
function capitalizePalavras($frase) {
    return ucwords($frase);
}

// Exemplo de uso:
$frase = "isso é um exemplo de capitalização de palavras";
$fraseCapitalizada = capitalizePalavras($frase);

echo $fraseCapitalizada;
?>
