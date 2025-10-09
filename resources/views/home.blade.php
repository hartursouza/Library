<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 dark:bg-slate-900 dark:text-slate-50 font-sans leading-relaxed">

    <div class="px-6">

        <header class="flex items-center justify-between py-3">
            <div class="brand flex items-center gap-3">
                <div
                    class="logo w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-emerald-500 flex items-center justify-center text-white font-bold text-lg sm:w-12 sm:h-12 sm:text-base">
                    BVN
                </div>
                <div>
                    <div class="font-bold">Biblioteca Vida Nova</div>
                    <div class="text-sm text-slate-500 dark:text-slate-400">Igreja Vida Nova</div>
                </div>
            </div>

            <nav class="hidden md:block">
                <ul class="flex items-center gap-5">
                    <li><a href="#" class="font-semibold hover:text-blue-500">Home</a></li>
                    <li><a href="#sobre" class="font-semibold hover:text-blue-500">Sobre</a></li>
                    <li><a href="#catalogo" class="font-semibold hover:text-blue-500">Catálogo</a></li>
                    <li><a href="#contato" class="font-semibold hover:text-blue-500">Contato</a></li>

                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-blue-500">
                                {{ __('Dashboard') }}
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('login') }}"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-transform hover:scale-105">
                                {{ __('Log in') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ url('register') }}" class="font-semibold hover:text-blue-500">
                                    {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @endauth

                    <li>
                        <button id="themeBtn" onclick="toggleTheme()"
                            class="btn bg-slate-200 dark:bg-slate-800 text-slate-800 dark:text-slate-200 w-10 h-10 rounded-lg font-semibold flex items-center justify-center">
                            🌙
                        </button>
                    </li>
                </ul>
            </nav>
        </header>

        <main>

            <section class="hero relative py-16 text-white overflow-hidden">
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
                            <button onclick="openLogin()"
                                class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border border-white/20 px-6 py-3 rounded-lg font-semibold transition-transform hover:scale-105">
                                Acessar Conta
                            </button>
                        </div>
                    </div>

                    <aside class="hidden lg:block">
                        <div
                            class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20 text-white shadow-lg">
                            <h3 class="font-bold text-xl mt-0">Horário de Funcionamento</h3>
                            <p class="mt-2 text-slate-200">
                                Seg — Sex: 09:00 — 17:00<br>
                                Sáb (1º e 3º): 09:00 — 12:00
                            </p>
                            <hr class="border-white/20 my-4">
                            <h4 class="font-bold text-lg mb-2">Local</h4>
                            <p class="text-sm text-slate-200">Igreja Vida Nova — Rua Exemplo, 123</p>
                        </div>
                    </aside>

                </div>
            </section>
            <section class="features grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 my-7"
                aria-label="Funcionalidades">
                <div class="feature bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
                    <div class="text-2xl">📚</div>
                    <h4 class="font-semibold mt-2.5 mb-1.5">Catálogo digital</h4>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Pesquise e consulte a disponibilidade do
                        acervo.</p>
                </div>
                <div class="feature bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
                    <div class="text-2xl">🔁</div>
                    <h4 class="font-semibold mt-2.5 mb-1.5">Empréstimos e devoluções</h4>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Registro rápido para empréstimos e controle de
                        prazos.</p>
                </div>
                <div class="feature bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
                    <div class="text-2xl">👥</div>
                    <h4 class="font-semibold mt-2.5 mb-1.5">Cadastro de membros</h4>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Perfis para membros da igreja com histórico de
                        empréstimos.</p>
                </div>
                <div class="feature bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5 text-center">
                    <div class="text-2xl">📈</div>
                    <h4 class="font-semibold mt-2.5 mb-1.5">Relatórios</h4>
                    <p class="text-sm text-slate-500 dark:text-slate-400">Estatísticas simples para acompanhar o uso da
                        biblioteca.</p>
                </div>
            </section>

            <section id="catalogo" class="my-7">
                <h3 class="text-2xl font-bold">Destaques do acervo</h3>
                <p class="text-slate-600 dark:text-slate-400 mt-1">Alguns títulos selecionados para edificação e estudo.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <div class="bg-white dark:bg-slate-800 p-3 rounded-xl flex gap-3 items-start">
                        <div
                            class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 dark:from-slate-700 dark:to-slate-800 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                            Bí</div>
                        <div>
                            <h5 class="font-bold text-base mb-1">Bíblia de Estudo</h5>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Tradução atualizada — Disponível</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-3 rounded-xl flex gap-3 items-start">
                        <div
                            class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 dark:from-slate-700 dark:to-slate-800 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                            DV</div>
                        <div>
                            <h5 class="font-bold text-base mb-1">Devocionais Diários</h5>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Autor: Maria Silva — Empréstimo: 2
                                semanas</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-3 rounded-xl flex gap-3 items-start">
                        <div
                            class="cover w-[78px] h-[110px] rounded-md bg-gradient-to-br from-blue-50 to-emerald-50 dark:from-slate-700 dark:to-slate-800 flex-shrink-0 flex items-center justify-center font-bold text-slate-500">
                            CM</div>
                        <div>
                            <h5 class="font-bold text-base mb-1">Comentários Bíblicos</h5>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Autor: João Pereira — Disponível</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials grid grid-cols-1 md:grid-cols-2 gap-4 my-7">
                <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5">
                    <strong>Maria, bibliotecária</strong>
                    <p class="text-slate-500 dark:text-slate-400 mt-2">"A Biblioteca Vida Nova facilitou o controle de
                        empréstimos e aproximou mais membros do acervo da igreja."</p>
                </div>
                <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-md shadow-slate-900/5">
                    <strong>Pastor Lucas</strong>
                    <p class="text-slate-500 dark:text-slate-400 mt-2">"Um ótimo recurso para promover o estudo bíblico
                        e o crescimento espiritual da comunidade."</p>
                </div>
            </section>
        </main>

        <footer class="mt-9 pt-6 pb-6 border-t border-slate-200 dark:border-slate-800">
            <div
                class="container max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4">

                <p class="text-sm text-slate-500 dark:text-slate-400">
                    &copy; {{ date('Y') }} Biblioteca Vida Nova. Todos os direitos reservados.
                </p>

                <div class="flex items-center gap-4">

                    <a href="#" aria-label="Siga-nos no Facebook"
                        class="text-slate-500 hover:text-blue-600 dark:text-slate-400 dark:hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33V21.88A10 10 0 0022 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" aria-label="Siga-nos no Instagram"
                        class="text-slate-500 hover:text-pink-600 dark:text-slate-400 dark:hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.05 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zm-1.163 1.943a6.8 6.8 0 00-1.163.061c-1.03.048-1.637.21-2.187.417a3.099 3.099 0 00-1.127.818 3.099 3.099 0 00-.818 1.127c-.207.55-.37 1.157-.417 2.187-.05 1.04-.06 1.37-.06 3.449s.01 2.41.06 3.449c.047 1.03.21 1.637.417 2.187a3.099 3.099 0 00.818 1.127c.322.321.72.585 1.127.818.55.207 1.157.37 2.187.417 1.04.05 1.37.06 3.449.06s2.41-.01 3.449-.06c1.03-.047 1.637-.21 2.187-.417a3.099 3.099 0 001.127-.818 3.099 3.099 0 00.818-1.127c.207-.55.37-1.157.417-2.187.05-1.04.06-1.37.06-3.449s-.01-2.41-.06-3.449c-.047-1.03-.21-1.637-.417-2.187a3.099 3.099 0 00-.818-1.127 3.099 3.099 0 00-1.127-.818c-.55-.207-1.157-.37-2.187-.417C14.73 3.953 14.4 3.943 12.315 3.943h-1.163zM12 8.438a3.863 3.863 0 100 7.726 3.863 3.863 0 000-7.726zM12 14a2 2 0 110-4 2 2 0 010 4zm3.89-7.81a1.03 1.03 0 100 2.06 1.03 1.03 0 000-2.06z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                </div>

            </div>
        </footer>

    </div>

</body>

</html>
