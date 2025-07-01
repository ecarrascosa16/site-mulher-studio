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
    <header class="bg-studio-purple grid grid-cols-[1fr_2fr_2fr] items-center w-full h-20 shadow-md fixed top-0 left-0 z-50
    lg:grid-cols-[1fr_2fr_1fr]">
        <div class="flex justify-center items-center 
        lg:hidden">
            <span id="simboloMenuH" onclick="openMenu()" class="material-symbols-outlined text-white cursor-pointer">menu</span>
            <span id="simboloMenuX" onclick="closeMenu()" class="material-symbols-outlined text-white cursor-pointer">close</span>
        </div>
        <div class="flex justify-center items-center">
            <a href="{{route('home')}}"><img src="{{ asset('images/logo-mulher-studio.png') }}" alt="Logo do salão" class="brightness-200 h-[70px]"></a>
        </div>
        <nav class="hidden lg:block">
            <ul class="flex flex-row justify-around">
                <li><a href="#about" class="nav-link text-white font-marcellus 
                lg:text-2xl">Sobre nós</a></li>
                <li><a href="{{route('service.index')}}" class="nav-link text-white font-marcellus 
                lg:text-2xl">Serviços</a></li>
                <li><a href="#shop" class="nav-link text-white font-marcellus
                lg:text-2xl">Loja</a></li>
                <li><a href="#contact" class="nav-link text-white font-marcellus
                lg:text-2xl">Contato</a></li>
            </ul>
        </nav>
        <div class="flex justify-center items-center">
            @guest
            <a href="{{ route('login') }}" class=" text-white border-white border px-2 py-1 text-xs mx-1
            lg:text-lg">Logar</a>
            <a href="{{ route('register') }}" class="text-white border-white border px-2 py-1 text-xs
            lg:text-lg">Registrar</a>
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
                <ul class="bg-studio-purple h-screen w-[200px] mt-20 fixed z-50 lg:hidden p-3 ">
                    <li class="py-4"><a href="#about" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Sobre nós</a></li>
                    <li class="py-4"><a href="{{route('service.index')}}" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Serviços</a></li>
                    <li class="py-4"><a href="#about" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Loja</a></li>
                    <li class="py-4"><a href="#about" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Contatos</a></li>
                    @admin
                    <hr>
                    <p class="text-white text-xl font-marcellus text-center pt-3">Área admin</p>
                    <li class="py-4"><a href="{{route('service.create')}}" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Criar serviço</a></li>
                    <li class="py-4"><a href="{{route('admin.service-schedules.index')}}" class="text-white text-xl font-marcellus p-1 hover:bg-studio-wine hover:rounded-r-lg">Administrar horários</a></li>
                    @endadmin
                </ul>
            </div>
        @else 
            <div class="bg-white border border-studio-purple w-full p-2 mt-20 fixed z-50 lg:hidden ">
                <p class="text-red-600">Ops! Faça login para acessar esta parte do site.</p>
            </div>
        @endauth
    </div>

    @yield('content')

    <footer class="flex justify-around bg-studio-purple p-4">
        <div class="hidden | lg:block">
            <img src="{{asset('images/logo-mulher-studio.png')}}" alt="Logo Studio Mulher" class="brightness-200 h-48">
        </div>
        <div>
            <h1 class="text-white font-bold font-montserrat text-sm"><span class="material-symbols-outlined text-white relative top-[5px]">call</span> Contato</h1>
            <ul class="flex items-center flex-col | lg:block">
                <li><a href="#" class="footer-link font-montserrat">WhatsApp</a></li>
                <li><a href="#" class="footer-link font-montserrat">Telefone</a></li>
                <li><a href="#" class="footer-link font-montserrat">Email</a></li>
                <li><a href="#" class="footer-link font-montserrat">Endereço</a></li>
                <li><a href="#" class="footer-link font-montserrat">Sobre Nós</a></li>
            </ul>
        </div>
        <div>
            <h1 class="text-white font-bold font-montserrat text-sm"><span class="material-symbols-outlined text-white relative top-[5px]">mobile_2</span> Redes Sociais</h1>
            <ul class="flex items-center flex-col | lg:block">
                <li><a href="#" class="footer-link font-montserrat">Instagram</a></li>
                <li><a href="#" class="footer-link font-montserrat">Facebook</a></li>
                <li><a href="#" class="footer-link font-montserrat">TikTok</a></li>
            </ul>
        </div>
        <div>
            <h1 class="text-white font-bold font-montserrat text-sm"><span class="material-symbols-outlined text-white relative top-[5px]">link</span> Links úteis</h1>
            <ul class="flex items-center flex-col | lg:block">
                <li><a href="#" class="footer-link font-montserrat">Sobre nós</a></li>
                <li><a href="#" class="footer-link font-montserrat">Serviços</a></li>
                <li><a href="#" class="footer-link font-montserrat">Loja</a></li>
                <li><a href="#" class="footer-link font-montserrat">Contato</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>