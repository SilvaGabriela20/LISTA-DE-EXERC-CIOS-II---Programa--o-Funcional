<?php
function filtrarPessoasPorIdade($pessoas, $idadeMinima) {
    $pessoasFiltradas = array();

    foreach ($pessoas as $pessoa) {
        if (isset($pessoa['idade']) && $pessoa['idade'] >= $idadeMinima) {
            $pessoasFiltradas[] = $pessoa;
        }
    }

    return $pessoasFiltradas;
}

// Exemplo de uso:
$pessoas = array(
    array('nome' => 'João', 'idade' => 30),
    array('nome' => 'Maria', 'idade' => 25),
    array('nome' => 'Pedro', 'idade' => 35),
    array('nome' => 'Ana', 'idade' => 22)
);

$idadeMinima = 30;

$pessoasFiltradas = filtrarPessoasPorIdade($pessoas, $idadeMinima);

// Exibir as pessoas com idade igual ou superior a $idadeMinima
print_r($pessoasFiltradas);
?>
