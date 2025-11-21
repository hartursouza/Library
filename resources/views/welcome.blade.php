<x-home-layout>

    <section class="hero relative py-16 text-white overflow-hidden rounded-xl">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-background.jpg') }}" alt="Biblioteca com prateleiras de livros"
                class="w-full h-full object-cover">
        </div>

        <div class="absolute inset-0 bg-slate-900/70"></div>

        <div
            class="relative z-10 container max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-[1fr,420px] gap-14 items-center">

            <div>
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 leading-tight">Bem-vindo à Biblioteca Vida Nova
                </h1>
                <p class="text-slate-200 mb-6 text-lg">
                    Um espaço para conhecimento, fé e crescimento espiritual. Controle de livros, empréstimos e
                    usuários em um só lugar — pensado para a nossa comunidade.
                </p>
                <div class="actions flex gap-3">
                    <button onclick="document.getElementById('catalogo').scrollIntoView({behavior:'smooth'})"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-transform hover:scale-105">
                        Explorar Acervo
                    </button>
                    <a href="{{ url('login') }}"
                        class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border border-white/20 px-6 py-3 rounded-lg font-semibold transition-transform hover:scale-105">
                        Acessar Conta
                    </a>
                </div>
            </div>

            <aside class="hidden lg:block">
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20 text-white shadow-lg">
                    <h3 class="font-bold text-xl mt-0">Horário de Funcionamento</h3>
                    <p class="mt-2 text-slate-200">
                        Domingo 09:00 — 12:00
                    </p>
                    <hr class="border-white/20 my-4">
                    <h4 class="font-bold text-lg mb-2">Local</h4>
                    <p class="text-sm text-slate-200">IEADERN - Congregação Vida Nova
                        <br> Av Bela Parnamirim, 1175, Vida Nova, Parnamirim/RN
                    </p>
                </div>
            </aside>

        </div>
    </section>

    <section class="features grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-7" aria-label="Funcionalidades">
        <div class="feature bg-white p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
            <div class="text-2xl">📚</div>
            <h4 class="font-semibold mt-2.5 mb-1.5">Catálogo digital</h4>
            <p class="text-sm text-slate-600">Pesquise e consulte a disponibilidade do acervo.</p>
        </div>

        <div class="feature bg-white p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
            <div class="text-2xl">🔁</div>
            <h4 class="font-semibold mt-2.5 mb-1.5">Empréstimos e devoluções</h4>
            <p class="text-sm text-slate-600">Registro rápido para empréstimos e controle de prazos.</p>
        </div>

        <div class="feature bg-white p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
            <div class="text-2xl">👥</div>
            <h4 class="font-semibold mt-2.5 mb-1.5">Cadastro de membros</h4>
            <p class="text-sm text-slate-600">Perfis para membros da igreja com histórico de empréstimos.</p>
        </div>

        <div class="feature bg-white p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
            <div class="text-2xl">📈</div>
            <h4 class="font-semibold mt-2.5 mb-1.5">Relatórios</h4>
            <p class="text-sm text-slate-600">Estatísticas simples para acompanhar o uso da biblioteca.</p>
        </div>
    </section>

    <section id="catalogo" class="my-7">
        <h3 class="text-2xl font-bold">Destaques do acervo</h3>
        <p class="text-slate-600 mt-1">Alguns títulos selecionados para edificação e estudo.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
            <div class="bg-white p-3 rounded-xl flex gap-3 items-start">
                <div
                    class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                    Bí
                </div>
                <div>
                    <h5 class="font-bold text-base mb-1">Bíblia de Estudo</h5>
                    <p class="text-sm text-slate-600">Tradução atualizada — Disponível</p>
                </div>
            </div>

            <div class="bg-white p-3 rounded-xl flex gap-3 items-start">
                <div
                    class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                    DV
                </div>
                <div>
                    <h5 class="font-bold text-base mb-1">Devocionais Diários</h5>
                    <p class="text-sm text-slate-600">Autor: Maria Silva — Empréstimo: 2 semanas</p>
                </div>
            </div>

            <div class="bg-white p-3 rounded-xl flex gap-3 items-start">
                <div
                    class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                    CM
                </div>
                <div>
                    <h5 class="font-bold text-base mb-1">Comentários Bíblicos</h5>
                    <p class="text-sm text-slate-600">Autor: João Pereira — Disponível</p>
                </div>
            </div>
        </div>
    </section>

</x-home-layout>
