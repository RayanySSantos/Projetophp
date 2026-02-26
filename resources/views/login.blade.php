<x-layout>

    <main class="py-10">
        <h1>
        Faça Login
        </h1>

        <section class="mt-10">
            <form action="/login" method="POST">
                @csrf

                
                @error('email')
                    <p class="text-red-500 text-xl mt-1">
                    {{$message}}
                    </p>
                @enderror
                

                <input
                    type="email"
                    name="email"
                    placeholder="your@gmail.com"
                    class="bg-white p-2 border-2"
                >

                <input
                    type="password"
                    name="password"
                    placeholder="********"
                    class="bg-white p-2 border-2"
                >

                <button type="submit" class="bg-white pt-2 border-2">
                    Entrar
                </button>
            </form>

        </section>
    </main>
    
</x-layout>