@extends('layouts.layout')

@section('content')


<main class="pt-20">
    <div class="swiper z-10">
        <div class="swiper-wrapper">
        <!-- Slides -->
            <div class="swiper-slide">
                <img class="w-full" src="{{ asset('images/home/1.png') }}" alt="Apresentação do salão">
            </div>
            <div class="swiper-slide">
                <img class="w-full" src="{{ asset('images/home/2.png') }}" alt="Apresentação das seções do site">
            </div>
        </div>
        <div class="swiper-pagination !text-studio-pink ! fill-studio-pink !stroke-studio-pink !opacity-50"></div>
        <div class="swiper-button-prev !text-studio-pink !fill-studio-pink !stroke-studio-pink !opacity-50"></div>
        <div class="swiper-button-next !text-studio-pink !fill-studio-pink !stroke-studio-pink !opacity-50"></div>
    </div>
    <section class="bg-studio-pink-white flex justify-center items-center h-40 lg:m-13">
        <a href="#" class="bg-studio-pink-black hover:bg-studio-purple rounded-sm shadow-md flex justify-center items-center font-montserrat font-semibold text-white  text-xs p-3 h-10 
        lg:text-lg lg:p-6 lg:hover:bg-studio-wine">AGENDE SEU HORÁRIO</a>
    </section>
    <section id="about-studio-mulher" class="bg-studio-pink h-full p-6 | lg:flex lg:justify-around items-center lg:p-16">
        <div id="about-we-inf" class="max-w-2xl | lg:mr-20">
                <h1 class="text-studio-wine font-extrabold font-marcellus text-2xl | lg:text-5xl">Sobre Nós - Lumina Beauty</h1>
                <p class="text-studio-wine font-marcellus text-lg | lg:text-xl lg:py-3">Fundado em 2020, o Studio Mulher é dedicado a
                oferecer experiências personalizadas de cuidado e bem-estar. Com uma equipe qualificada e técnicas
                modernas, buscamos realçar a beleza natural de cada cliente em um ambiente acolhedor e profissional. Nosso compromisso é garantir que você se sinta confiante e renovada a cada visita</p>
                <ul class="text-lg | lg:text-xl">
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span>Unhas - Blindagem, tradicional, gel ou fibra? Você escolhe o destaque! Unhas que impressionam em cada detalhe.</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span>Sobrancelhas - Realce seu rosto natural com sobrancelhas bem feitas.</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span>Estética - Cuide da sua pele, cuide de você!</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span>Depilação - Pele lisinha e toque suave. Um resultado eficaz e duradouro!</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span>Cabelos - Fios renovados, macios e cheios de brilho com protocolos personalizados.</li>
                </ul>
                <h2 class="text-studio-wine font-extrabold font-marcellus text-xl mt-5 | lg:text-4xl">Nossa missão</h2>
                <p class="text-studio-wine font-marcellus text-lg | lg:text-xl lg:py-3">Nosso compromisso é realçar a beleza única de cada cliente, proporcionando serviços de alta qualidade e um ambiente acolhedor onde todos se sintam bem-vindos e confiantes.</p>
            </div>
            <div id="abouf-we-map" class="flex justify-center items-center flex-col">
                <h1 class="text-studio-wine font-extrabold font-marcellus text-2xl mt-5 pb-2 | lg:text-5xl">Localização</h1>
                <iframe class="border border-studio-purple w-[300px] h-[200px] p-1 | lg:w-[550px] lg:h-[300px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4352.837079460608!2d-46.5606766477427!3d-23.45017862005145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef57a81eb8301%3A0xf09c37bf09c22fab!2sMulher_Studioo!5e0!3m2!1spt-BR!2sbr!4v1748556449513!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-xs"><span class="material-symbols-outlined relative pr-1 top-[2px] text-sm | text-lg">location_on</span>Av. São Luíz, 418 - Vila Rosalia, Guarulhos - SP, 07072-000</p>
            </div>
    </section>
    <section id="we-services" class="bg-studio-pink-white h-screen">
        <h1 class="flex justify-center font-marcellus font-bold text-3xl p-6">Nossos Serviços</h1>
        <div>
            
        </div>
    </section>
</main>
@endsection