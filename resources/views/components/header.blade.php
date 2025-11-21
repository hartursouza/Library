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

    <nav class="hidden md:block">
        <ul class="flex items-center gap-5">
            <li><a href="{{ url('/') }}" class="font-semibold hover:text-blue-500">Home</a></li>
            <li><a href="#sobre" class="font-semibold hover:text-blue-500">Sobre</a></li>
            <li><a href="#catalogo" class="font-semibold hover:text-blue-500">Catálogo</a></li>
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
        </ul>
    </nav>
</header>
