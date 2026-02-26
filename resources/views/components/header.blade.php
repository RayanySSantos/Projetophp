<header class="bg-white border-b-2 border-gray-400 px-6 py-3 flex items-center justify-between">

    {{-- Logo --}}
    <div class="flex items-center gap-3">
        <div class="bg-orange-500 text-white font-bold px-3 py-1 border border-black">
            Logo
        </div>
        <span class="font-semibold text-gray-800">Projeto</span>
    </div>

    {{-- Botões direita --}}
    <div class="flex items-center gap-3">
        
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="bg-orange-500 text-black font-semibold px-4 py-1 border border-black hover:bg-orange-600 transition">
                    Sair
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('site.login')}}" class="bg-orange-500 text-black font-semibold px-4 py-1 border border-black hover:bg-orange-600 transition">
                Login
            </a>
        @endguest

        <div class="border border-black p-1 bg-white hover:bg-gray-100 transition cursor-pointer">
            GitHub
        </div>

    </div>

</header>
