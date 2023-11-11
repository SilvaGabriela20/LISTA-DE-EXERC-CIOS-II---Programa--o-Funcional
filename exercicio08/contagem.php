<?php
function contarPalavrasNoArquivo($caminhoArquivo) {
    $conteudo = file_get_contents($caminhoArquivo);

    // Remove possíveis caracteres especiais que podem interferir na contagem
    $conteudo = preg_replace('/[^\p{L}\p{N}\s]/u', '', $conteudo);

    $palavras = str_word_count($conteudo, 0, 'àáãâçéèêíìóõôúùûüñ');

    return $palavras;
}

// Exemplo de uso:
$caminhoDoArquivo = 'caminho/do/seu/arquivo.txt';
$numeroDePalavras = contarPalavrasNoArquivo($caminhoDoArquivo);

echo "O arquivo tem $numeroDePalavras palavras.";
?>