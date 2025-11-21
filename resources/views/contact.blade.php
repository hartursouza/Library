<x-home-layout>

    {{-- HERO --}}
    <section class="hero relative py-16 text-white overflow-hidden rounded-xl">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-background.jpg') }}" alt="Biblioteca com prateleiras de livros"
                class="w-full h-full object-cover">
        </div>

        <div class="absolute inset-0 bg-slate-900/70"></div>

        <div
            class="relative z-10 container max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-[1fr,420px] gap-14 items-center">

            <div>
                <h1 class="text-4xl sm:text-5xl font-bold mb-4 leading-tight">Fale Conosco!</h1>

                <p class="text-slate-200 mb-6 text-lg">
                    Compartilhe suas dúvidas, sugestões, elogios ou comunique alguma questão que precise de nossa atenção.
                    Nossa equipe está pronta para responder todas as mensagens.
                </p>
            </div>

            <aside class="hidden lg:block">
                <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/20 text-white shadow-lg">
                    <h3 class="font-bold text-xl mt-0">Horário de Funcionamento</h3>
                    <p class="mt-2 text-slate-200">
                        Domingo 09:00 — 12:00
                    </p>
                    <hr class="border-white/20 my-4">
                    <h4 class="font-bold text-lg mb-2">Local</h4>
                    <p class="text-sm text-slate-200">
                        IEADERN - Congregação Vida Nova<br>
                        Av Bela Parnamirim, 1175, Vida Nova, Parnamirim/RN
                    </p>
                </div>
            </aside>

        </div>
    </section>

    @if(session('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-1" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif  

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 my-2">
            <strong class="font-bold">Ops! Encontramos alguns erros:</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="container mx-auto px-6 my-12">
        <form action="{{ route('contato.send') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Nome --}}
            <div>
                <label class="block text-slate-700 font-medium mb-1">Seu nome</label>
                <input type="text" name="name"
                    class="w-full border border-slate-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-slate-700 font-medium mb-1">Seu e-mail</label>
                <input type="email" name="email"
                    class="w-full border border-slate-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
            </div>

            {{-- Mensagem --}}
            <div>
                <label class="block text-slate-700 font-medium mb-1">Sua mensagem</label>
                <textarea name="message" rows="6"
                    class="w-full border border-slate-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"></textarea>
            </div>

            {{-- Botão --}}
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-bold tracking-wide">
                ENVIAR
            </button>

        </form>
    </section>

</x-home-layout>
