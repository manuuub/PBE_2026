<?php
/**
 * ARQUIVO DE FUNÇÕES E GERENCIAMENTO DE DADOS
 * Este arquivo centraliza a leitura e escrita dos cadastros no arquivo JSON.
 */

// Definimos o caminho absoluto onde os dados serão salvos
$arquivoJson = __DIR__ . '/cadastros.json';

/**
 * Lê todos os registros de alunos do arquivo JSON.
 * @param string $caminho Caminho do arquivo JSON.
 * @return array Lista de alunos cadastrados.
 */
function carregarAlunos($caminho) {
    if (!file_exists($caminho)) {
        return [];
    }
    $conteudo = file_get_contents($caminho);
    return json_decode($conteudo, true) ?? [];
}

/**
 * Salva um novo registro no início da lista do arquivo JSON.
 * @param string $caminho Caminho do arquivo JSON.
 * @param array $novoAluno Dados do aluno a ser salvo.
 */
function salvarAluno($caminho, $novoAluno) {
    $alunos = carregarAlunos($caminho);
    // Adiciona o novo cadastro no topo da lista
    array_unshift($alunos, $novoAluno);
    file_put_contents($caminho, json_encode($alunos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
?>