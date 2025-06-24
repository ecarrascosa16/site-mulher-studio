<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Plugins --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Studio Mulher</title>
</head>
<body>
    <header class="bg-studio-purple grid grid-cols-[1fr_2fr_2fr] items-center w-full h-20">
        
        {{-- <nav>
            <ul class="flex flex-row">
                <li><a href="#about" class="text-white font-marcellus">Sobre nós</a></li>
                <li><a href="#services" class="text-white font-marcellus">Serviços</a></li>
                <li><a href="#shop" class="text-white font-marcellus">Loja</a></li>
                <li><a href="#contact" class="text-white font-marcellus">Contato</a></li>
            </ul>
        </nav> --}}
        <div class="flex justify-center items-center">
            <span id="simboloMenuH" onclick="openMenu()" class="material-symbols-outlined text-white cursor-pointer">menu</span>
            <span id="simboloMenuX" onclick="closeMenu()" class="material-symbols-outlined text-white cursor-pointer">close</span>
        </div>
        <div class="flex justify-center items-center">
            <img src="{{ asset('images/logo-mulher-studio.png') }}" alt="Logo do salão" class="brightness-200 h-[70px]">
        </div>
        <div class="flex justify-center items-center">
            @guest
            <a href="{{ route('login') }}" class=" text-white border-white border px-2 py-1 text-xs mx-1">Logar</a>
            <a href="{{ route('register') }}" class="text-white border-white border px-2 py-1 text-xs">Registrar</a>
            @else 
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-transparent text-white underline">Sair</button>
            </form>
            @endguest
        </div>
    </header>
    <div id="menu">
        @auth
            <div>
                <ul class="bg-studio-purple h-screen w-[200px]">
                    <li class="py-5"><a href="#about" class="text-white text-xl font-marcellus p-3 hover:bg-studio-wine hover:rounded-r-lg">Sobre nós</a></li>
                    <li class="py-5"><a href="#about" class="text-white text-xl font-marcellus p-3 hover:bg-studio-wine hover:rounded-r-lg">Serviços</a></li>
                    <li class="py-5"><a href="#about" class="text-white text-xl font-marcellus p-3 hover:bg-studio-wine hover:rounded-r-lg">Loja</a></li>
                    <li class="py-5"><a href="#about" class="text-white text-xl font-marcellus p-3 hover:bg-studio-wine hover:rounded-r-lg">Contatos</a></li>
                </ul>
            </div>
        @else 
            <div class="border border-studio-purple p-2">
                <p class="text-red-600">Ops! Faça login para acessar esta parte do site.</p>
            </div>
        @endauth
    </div>

    <main>
        @yield('content')
    </main>

    <script>
        let menu = document.getElementById('menu');
        let simboloMenuH = document.getElementById('simboloMenuH');
        let simboloMenuX = document.getElementById('simboloMenuX');
        simboloMenuX.style.display = 'none';
        menu.style.display = 'none';
        
        function openMenu() {
            simboloMenuX.style.display = 'block';
            simboloMenuH.style.display = 'none';
            menu.style.display = 'block';
        }

        function closeMenu() {
            simboloMenuX.style.display = 'none';
            simboloMenuH.style.display = 'block';
            menu.style.display = 'none';
            
        }

        
    </script>
</body>
</html>