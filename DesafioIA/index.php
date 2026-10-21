<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia - Ficha de Matrícula</title>
    <!-- Tailwind CSS CDN para estilização rápida e moderna -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        // Configuração personalizada do Tailwind para usar o tom de Vinho
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        vinho: {
                            50: '#fdf2f4',
                            100: '#fce7ea',
                            500: '#a31d38',
                            600: '#800020', // Cor Vinho Clássico (Burgundy)
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
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between p-4 md:p-8">

    <!-- Container Principal Centrado -->
    <main class="max-w-4xl w-full mx-auto bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden grid grid-cols-1 md:grid-cols-5 my-auto">
        
        <!-- Painel Lateral Visual (Tom Vinho) -->
        <div class="md:col-span-2 bg-gradient-to-br from-vinho-600 to-vinho-900 p-8 text-white flex flex-col justify-between relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center space-x-2 mb-6">
                    <!-- Logo / Ícone Simplificado -->
                    <div class="w-10 h-10 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center font-black text-xl text-rose-200">
                        ⚡
                    </div>
                    <span class="text-xl font-extrabold uppercase tracking-wider italic">Apex<span class="text-rose-300">Fit</span></span>
                </div>

                <h1 class="text-3xl font-bold leading-tight">Alcance a sua melhor versão.</h1>
                <p class="text-rose-100/80 text-sm mt-3">Matricule-se em poucos passos e tenha acesso a uma estrutura completa de treino.</p>
            </div>

            <!-- Informações de Apoio -->
            <div class="relative z-10 mt-8 space-y-3 text-xs text-rose-100/90 border-t border-vinho-500/40 pt-6">
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-rose-300"></span>
                    <span>Desconto progressivo por tempo de contrato</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="w-2 h-2 rounded-full bg-rose-300"></span>
                    <span>Personal Trainer exclusivo sob demanda</span>
                </div>
            </div>
        </div>

        <!-- Formulário de Entrada de Dados -->
        <div class="md:col-span-3 p-8 md:p-10 bg-white">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Nova Matrícula</h2>
                    <p class="text-slate-500 text-xs mt-1">Preencha os campos abaixo para efetuar o cadastro.</p>
                </div>
                <a href="view_relatorio.php" class="text-xs font-semibold text-vinho-600 hover:text-vinho-700 underline">
                    Ver Cadastros
                </a>
            </div>

            <!-- Início do Formulário que envia os dados para logica.php -->
            <form action="logica.php" method="POST" class="space-y-4">
                
                <!-- Nome do Aluno -->
                <div>
                    <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">Nome Completo</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" required 
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:border-vinho-600 focus:bg-white transition">
                </div>

                <!-- Idade e Meses (Grid 2 Colunas) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">Idade</label>
                        <input type="number" name="idade" placeholder="Ex: 25" required min="12" max="100"
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:border-vinho-600 focus:bg-white transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">Duração (Meses)</label>
                        <input type="number" name="meses" min="1" max="36" placeholder="Ex: 12" required
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 text-sm placeholder-slate-400 focus:outline-none focus:border-vinho-600 focus:bg-white transition">
                    </div>
                </div>

                <!-- Escolha de Plano -->
                <div>
                    <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">Selecione o Plano</label>
                    <select name="plano" required 
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 text-sm focus:outline-none focus:border-vinho-600 focus:bg-white transition">
                        <option value="basico">Plano Básico - R$ 80,00/mês</option>
                        <option value="premium" selected>Plano Premium - R$ 120,00/mês</option>
                        <option value="vip">Plano VIP - R$ 180,00/mês</option>
                    </select>
                </div>

                <!-- Personal Trainer -->
                <div>
                    <label class="block text-xs font-bold text-slate-600 uppercase tracking-wider mb-2">Serviço de Personal Trainer</label>
                    <select name="personal" required 
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 text-sm focus:outline-none focus:border-vinho-600 focus:bg-white transition">
                        <option value="nao">Não incluir personal trainer</option>
                        <option value="sim">Sim, incluir personal (+ R$ 50,00/mês)</option>
                    </select>
                </div>

                <!-- Botão de Submissão -->
                <button type="submit" 
                        class="w-full mt-4 bg-vinho-600 hover:bg-vinho-700 text-white font-bold py-3.5 rounded-xl text-sm uppercase tracking-wider shadow-md shadow-vinho-600/20 transition transform active:scale-[0.99]">
                    Confirmar Matrícula
                </button>
            </form>
        </div>
    </main>

    <!-- Rodapé Discreto -->
    <footer class="text-center text-xs text-slate-400 py-4">
        &copy; <?= date('Y') ?> ApexFit. Todos os direitos reservados.
    </footer>

</body>
</html>