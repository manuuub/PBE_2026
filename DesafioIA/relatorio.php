<?php
/**
 * TELA DE RELATÓRIO E CONFIRMAÇÃO
 * Exibe o comprovante da matrícula recém-efetuada e apresenta a tabela geral de cadastros.
 */

require_once "funcoes.php";

// Busca os registros atualizados do banco JSON
$todosAlunos = carregarAlunos($arquivoJson);
$totalInscritos = count($todosAlunos);

// Calcula o faturamento previsto somando todos os contratos
$faturamentoTotal = 0;
foreach ($todosAlunos as $aluno) {
    $faturamentoTotal += $aluno['valor_total'] ?? 0;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante & Relatório de Cadastros</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        vinho: {
                            50: '#fdf2f4',
                            100: '#fce7ea',
                            500: '#a31d38',
                            600: '#800020',
                            700: '#66001a',
                            900: '#3d0010',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen p-4 md:p-8">

    <div class="max-w-5xl mx-auto space-y-8">

        <!-- Topo da Página / Ações -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 border-b border-slate-200 pb-4">
            <div>
                <h1 class="text-2xl font-black text-vinho-600 italic uppercase">Apex<span class="text-slate-800">Fit</span></h1>
                <p class="text-xs text-slate-500">Comprovante de Inscrição & Gestão de Alunos</p>
            </div>
            <a href="index.php" class="px-5 py-2.5 bg-vinho-600 hover:bg-vinho-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition shadow-md shadow-vinho-600/10">
                + Novo Cadastro
            </a>
        </div>

        <!-- Seção 1: Comprovante da Última Matrícula (Se acessado via formulário) -->
        <?php if (isset($nome)): ?>
            <div class="bg-white border border-vinho-100 rounded-3xl p-6 md:p-8 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-vinho-600"></div>

                <div class="flex items-center space-x-3 mb-6">
                    <span class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-sm">✓</span>
                    <h2 class="text-xl font-bold text-slate-900">Matrícula Realizada com Sucesso!</h2>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100 text-xs">
                    <div>
                        <span class="text-slate-400 font-semibold block uppercase">Aluno</span>
                        <span class="text-slate-800 font-bold text-sm"><?= htmlspecialchars($nome) ?> (<?= $idade ?> anos)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold block uppercase">Plano</span>
                        <span class="text-slate-800 font-bold text-sm"><?= $nome_plano ?></span>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold block uppercase">Duração</span>
                        <span class="text-slate-800 font-bold text-sm"><?= $meses ?> mês(es)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 font-semibold block uppercase">Personal Trainer</span>
                        <span class="text-slate-800 font-bold text-sm"><?= $personal === 'sim' ? 'Sim' : 'Não' ?></span>
                    </div>
                </div>

                <!-- Detalhes do Pagamento -->
                <div class="mt-6 flex flex-col md:flex-row justify-between items-start md:items-center pt-4 border-t border-slate-100 gap-4">
                    <div>
                        <p class="text-xs text-slate-500">
                            <b>Valor Base do Plano:</b> R$ <?= number_format($valor_plano, 2, ',', '.') ?>/mês
                        </p>
                        <?php if ($desconto > 0): ?>
                            <p class="text-xs text-emerald-600 font-semibold mt-0.5">
                                🎉 Desconto especial aplicado: <?= $porcentagem_desconto ?>% (- R$ <?= number_format($desconto, 2, ',', '.') ?>)
                            </p>
                        <?php else: ?>
                            <p class="text-xs text-slate-400 mt-0.5">Sem desconto aplicado (contratos a partir de 6 meses garantem até 15% OFF).</p>
                        <?php endif; ?>
                    </div>

                    <div class="text-right">
                        <span class="text-xs font-semibold text-slate-400 uppercase">Valor Total do Contrato</span>
                        <p class="text-2xl font-black text-vinho-600">R$ <?= number_format($total, 2, ',', '.') ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Seção 2: Métricas Gerais -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total de Alunos</span>
                <p class="text-3xl font-extrabold text-slate-900 mt-1"><?= $totalInscritos ?></p>
            </div>
            <div class="bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Faturamento Total Previsto</span>
                <p class="text-3xl font-extrabold text-vinho-600 mt-1">R$ <?= number_format($faturamentoTotal, 2, ',', '.') ?></p>
            </div>
        </div>

        <!-- Seção 3: Tabela Geral de Cadastros -->
        <div class="bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm">
            <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h3 class="text-lg font-bold text-slate-900">Relatório Geral de Membros</h3>
                    <p class="text-xs text-slate-400">Lista completa de alunos cadastrados no sistema.</p>
                </div>
                <input type="text" id="filtro" placeholder="Buscar por aluno..." onkeyup="filtrarTabela()"
                       class="bg-slate-50 border border-slate-200 text-xs px-4 py-2.5 rounded-xl text-slate-800 placeholder-slate-400 focus:outline-none focus:border-vinho-600 w-full sm:w-64">
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm" id="tabelaAlunos">
                    <thead class="bg-slate-50 text-xs font-bold text-slate-400 uppercase border-b border-slate-100">
                        <tr>
                            <th class="px-6 py-4">Data</th>
                            <th class="px-6 py-4">Aluno</th>
                            <th class="px-6 py-4">Idade</th>
                            <th class="px-6 py-4">Plano</th>
                            <th class="px-6 py-4">Duração</th>
                            <th class="px-6 py-4">Personal</th>
                            <th class="px-6 py-4">Desconto</th>
                            <th class="px-6 py-4 text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php if (empty($todosAlunos)): ?>
                            <tr>
                                <td colspan="8" class="px-6 py-8 text-center text-slate-400">
                                    Nenhum aluno cadastrado até o momento.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($todosAlunos as $aluno): ?>
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="px-6 py-4 text-xs text-slate-400"><?= $aluno['data_cadastro'] ?? '-' ?></td>
                                    <td class="px-6 py-4 font-semibold text-slate-800"><?= htmlspecialchars($aluno['nome']) ?></td>
                                    <td class="px-6 py-4 text-slate-600"><?= $aluno['idade'] ?> anos</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-block px-2.5 py-1 text-xs font-semibold rounded-lg bg-vinho-50 text-vinho-600 border border-vinho-100">
                                            <?= htmlspecialchars($aluno['plano']) ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600"><?= $aluno['meses'] ?> mes(es)</td>
                                    <td class="px-6 py-4 text-slate-600"><?= $aluno['personal'] ?></td>
                                    <td class="px-6 py-4 text-emerald-600 text-xs">
                                        R$ <?= number_format($aluno['desconto'] ?? 0, 2, ',', '.') ?>
                                    </td>
                                    <td class="px-6 py-4 font-bold text-vinho-600 text-right">
                                        R$ <?= number_format($aluno['valor_total'], 2, ',', '.') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Script de Filtro Dinâmico -->
    <script>
        function filtrarTabela() {
            const busca = document.getElementById('filtro').value.toLowerCase();
            const linhas = document.querySelectorAll('#tabelaAlunos tbody tr');

            linhas.forEach(linha => {
                const textoLinha = linha.innerText.toLowerCase();
                linha.style.display = textoLinha.includes(busca) ? '' : 'none';
            });
        }
    </script>
</body>
</html>