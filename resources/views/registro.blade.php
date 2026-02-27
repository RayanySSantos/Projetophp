<x-layout>
    <main class="flex-1 bg-[#efe0c9] [background-image:linear-gradient(rgba(0,0,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,0.05)_1px,transparent_1px)] [background-size:42px_42px] flex items-center justify-center px-4 overflow-hidden">
        <section class="w-full max-w-[460px] border-4 border-[#0f5f8f] bg-[#f7f7f7] p-3 shadow-[0_0_0_2px_#222]">
            <div class="border border-[#cfd3d6] bg-[#f3f4f5] p-5 md:p-6">
                <div class="flex items-start justify-between">
                    <h1 class="text-4xl font-black text-[#1b1f23] leading-none">Registre-se</h1>
                    <span class="text-[#1b1f23] text-lg leading-none mt-1">▸</span>
                </div>

                <p class="mt-4 text-[#4b4f54] text-xl">Preencha as informações para cadastrar seus hábitos</p>

                <form action="{{ route('auth.registro')}}" method="POST" class="mt-6 space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-[#33373d] font-semibold mb-1">Nome</label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Seu nome"
                            class="w-full bg-white px-3 py-2 border-2 border-[#565a5f] focus:outline-none focus:border-black @error ('name') border-red-500 @enderror"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-[#33373d] font-semibold mb-1">Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="your@gmail.com"
                            class="w-full bg-white px-3 py-2 border-2 border-[#565a5f] focus:outline-none focus:border-black @error ('email') border-red-500 @enderror"
                        >
                       @error('email')
                            <p class="text-red-500 text-sm">
                            {{ $message }}
                            </p>
                       @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-[#33373d] font-semibold mb-1">Senha</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="********"
                            class="w-full bg-white px-3 py-2 border-2 border-[#565a5f] focus:outline-none focus:border-black @error ('password') border-red-500 @enderror"
                        >
                        @error('password')
                            <p class="text-red-500 text-sm">
                            {{ $message }}
                            </p>
                       @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-[#33373d] font-semibold mb-1">Repita sua Senha</label>
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="********"
                            class="w-full bg-white px-3 py-2 border-2 border-[#565a5f] focus:outline-none focus:border-black @error ('password_confirmation') border-red-500 @enderror"
                        >
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full mt-2 bg-[#ff5c2f] text-[#191919] font-bold py-2 border-2 border-black shadow-[inset_0_-2px_0_#d4471f] hover:brightness-95 transition">
                        Registrar-se
                    </button>
                    <p class="text-center text-[#4b4f54] pt-2">
                        Já tem conta?
                        <a href="{{'site.login'}}" class="underline font-semibold hover:opacity-50 transition">Faça login</a>
                    </p>
                </form>
            </div>
        </section>
    </main>
</x-layout>
