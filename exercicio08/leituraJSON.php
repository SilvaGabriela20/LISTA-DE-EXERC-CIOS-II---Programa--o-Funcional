<?php
function filtrarJSON($caminhoArquivoEntrada, $caminhoArquivoSaida, $condicao) {
    // Lê o conteúdo do arquivo de entrada
    $conteudoEntrada = file_get_contents($caminhoArquivoEntrada);

    if ($conteudoEntrada === false) {
        die("Erro ao ler o arquivo de entrada.");
    }

    // Decodifica o JSON para um array associativo
    $dados = json_decode($conteudoEntrada, true);

    if ($dados === null) {
        die("Erro ao decodificar o JSON.");
    }

    // Filtra os objetos com base na condição
    $dadosFiltrados = array_filter($dados, $condicao);

    // Codifica os dados filtrados de volta para JSON
    $jsonSaida = json_encode(array_values($dadosFiltrados), JSON_PRETTY_PRINT);

    if ($jsonSaida === false) {
        die("Erro ao codificar o JSON de saída.");
    }

    // Salva os dados filtrados no arquivo de saída
    if (file_put_contents($caminhoArquivoSaida, $jsonSaida) === false) {
        die("Erro ao escrever o arquivo de saída.");
    }

    echo "Filtragem concluída e resultado salvo em $caminhoArquivoSaida";
}

// Exemplo de uso:
$caminhoEntrada = 'entrada.json'; // Substitua pelo caminho do seu arquivo de entrada JSON
$caminhoSaida = 'saida.json';     // Caminho para o arquivo de saída

// Condição para filtrar objetos (exemplo: filtrar objetos com "idade" maior ou igual a 30)
$condicao = function ($objeto) {
    return isset($objeto['idade']) && $objeto['idade'] >= 30;
};

filtrarJSON($caminhoEntrada, $caminhoSaida, $condicao);
?>