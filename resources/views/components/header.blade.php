<header class="flex items-center justify-between py-3">
    <div class="brand flex items-center gap-3">
        <div
            class="logo w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-emerald-500 flex items-center justify-center text-white font-bold text-lg sm:w-12 sm:h-12 sm:text-base">
            BVN
        </div>
        <div>
            <div class="font-bold">Biblioteca Vida Nova</div>
            <div class="text-sm text-slate-500 dark:text-slate-400">IEADERN - Congregação Vida Nova</div>
        </div>
    </div>

    <!-- Botão mobile -->
    <button id="menuBtn" class="md:hidden text-3xl px-3">
        ☰
    </button>

    <!-- Menu Desktop -->
    <nav class="hidden md:block">
        <ul class="flex items-center gap-5">
            <li><a href="{{ url('/') }}" class="font-semibold hover:text-blue-500">Home</a></li>
            <li><a href="#sobre" class="font-semibold hover:text-blue-500">Sobre</a></li>
            <li><a href="#destaques" class="font-semibold hover:text-blue-500">Destaques</a></li>
            <li><a href="{{ url('/contato') }}" class="font-semibold hover:text-blue-500">Contato</a></li>

            @auth
                <li>
                    <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-blue-500">
                        {{ __('Dashboard') }}
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ url('login') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-semibold">
                        {{ __('Entrar') }}
                    </a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ url('register') }}" class="font-semibold hover:text-blue-500">
                            {{ __('Registre-se') }}
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
    </nav>
</header>

<!-- Menu Mobile (oculto por padrão) -->
<nav id="mobileMenu" class="hidden md:hidden mt-3 bg-white rounded-lg p-4 shadow-lg">
    <ul class="flex flex-col gap-3 text-lg">
        <li><a href="{{ url('/') }}" class="font-semibold">Home</a></li>
        <li><a href="#sobre" class="font-semibold">Sobre</a></li>
        <li><a href="#destaques" class="font-semibold">Destaques</a></li>
        <li><a href="{{ url('/contato') }}" class="font-semibold">Contato</a></li>

        @auth
            <li><a href="{{ url('/dashboard') }}" class="font-semibold">Dashboard</a></li>
        @else
            <li>
                <a href="{{ url('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold inline-block">
                    Entrar
                </a>
            </li>
            @if (Route::has('register'))
                <li><a href="{{ url('register') }}" class="font-semibold">Registre-se</a></li>
            @endif
        @endauth
    </ul>
</nav>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
