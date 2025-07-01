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
                <h1 class="text-studio-wine font-extrabold font-marcellus text-xl | lg:text-5xl">Sobre Nós - Lumina Beauty</h1>
                <p class="text-studio-wine font-marcellus text-base text-justify | lg:text-xl lg:py-3">Fundado em 2020, o Studio Mulher é dedicado a
                oferecer experiências personalizadas de cuidado e bem-estar. Com uma equipe qualificada e técnicas
                modernas, buscamos realçar a beleza natural de cada cliente em um ambiente acolhedor e profissional. Nosso compromisso é garantir que você se sinta confiante e renovada a cada visita</p>
                <ul class="text-base | lg:text-xl">
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span><span class="font-bold">Unhas</span> - Blindagem, tradicional, gel ou fibra? Você escolhe o destaque! Unhas que impressionam em cada detalhe.</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span><span class="font-bold">Sobrancelhas</span> - Realce seu rosto natural com sobrancelhas bem feitas.</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span><span class="font-bold">Estética</span> - Cuide da sua pele, cuide de você!</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span><span class="font-bold">Depilação</span> - Pele lisinha e toque suave. Um resultado eficaz e duradouro!</li>
                    <li class="py-1 font-marcellus text-studio-gray"><span class="material-symbols-outlined relative pr-1 top-[5px]">check</span><span class="font-bold">Cabelos</span> - Fios renovados, macios e cheios de brilho com protocolos personalizados.</li>
                </ul>
                <h2 class="text-studio-wine font-extrabold font-marcellus text-justify text-xl mt-5 | lg:text-4xl">Nossa missão</h2>
                <p class="text-studio-wine font-marcellus text-base | lg:text-xl lg:py-3">Nosso compromisso é realçar a beleza única de cada cliente, proporcionando serviços de alta qualidade e um ambiente acolhedor onde todos se sintam bem-vindos e confiantes.</p>
            </div>
            <div id="abouf-we-map" class="flex justify-center items-center flex-col">
                <h1 class="text-studio-wine font-extrabold font-marcellus text-2xl mt-5 pb-2 | lg:text-5xl">Localização</h1>
                <iframe class="border border-studio-purple w-[300px] h-[200px] p-1 | lg:w-[550px] lg:h-[300px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4352.837079460608!2d-46.5606766477427!3d-23.45017862005145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef57a81eb8301%3A0xf09c37bf09c22fab!2sMulher_Studioo!5e0!3m2!1spt-BR!2sbr!4v1748556449513!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-xs | lg:text-base lg:font-montserrat"><span class="material-symbols-outlined relative pr-1 top-[2px] text-sm | lg:text-base">location_on</span>Av. São Luíz, 418 - Vila Rosalia, Guarulhos - SP, 07072-000</p>
            </div>
    </section>
    <section id="we-services" class="flex flex-col items-center bg-studio-pink-white h-full pb-20">
        <h1 class="font-marcellus font-bold text-3xl p-6 | lg:text-6xl lg:m-5">Nossos Serviços</h1>
        <div class="grid grid-cols-1 gap-4 | lg:grid-cols-3 lg:gap-10">
            <article class="flex flex-col justify-center items-center border border-black rounded-md h-full w-64 p-5 | lg:mx-8">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2">Design personalizado</h1>
                    <img src="{{asset('images/home/servicos/design_personalizado.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 40,00</p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
            <article class="flex flex-col justify-center items-center border border-black rounded-md h-full w-64 p-5 | lg:mx-8">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2">Design com henna</h1>
                    <img src="{{asset('images/home/servicos/design_com_henna.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 50,00 <span class="text-xs line-through">R$ 60,00</span></p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
            <article class="flex flex-col justify-center items-center border border-black rounded-md h-full w-64 p-5 | lg:mx-8">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2">Manicure e pedicure tradicional</h1>
                    <img src="{{asset('images/home/servicos/manicure_pedicure_tradicional.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 70,00</p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
            <article class="hidden border border-black rounded-md h-full w-64 p-5 | lg:mx-8 lg:flex lg:flex-col lg:justify-center lg:items-center">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2" text-center pb-2>Pé esmaltação em gel</h1>
                    <img src="{{asset('images/home/servicos/pe_esmaltacao_em_gel.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 60,00</p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
            <article class="hidden border border-black rounded-md h-full w-64 p-5 | lg:mx-8 lg:flex lg:flex-col lg:justify-center lg:items-center">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2">Pé tradiciona</h1>
                    <img src="{{asset('images/home/servicos/pe_tradicional.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 40,00</p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
            <article class="hidden border border-black rounded-md h-full w-64 p-5 | lg:mx-8 lg:flex lg:flex-col lg:justify-center lg:items-center">
                    <h1 class="font-bold text-lg min-h-10 text-center pb-2">Mão tradicional</h1>
                    <img src="{{asset('images/home/servicos/mao_tradicional.jpg')}}" alt="Imagem do serviço de design personalizado" class="rounded-[4px] w-52 h-[230px]">
                    <p class="font-montserrat text-lg py-2">R$ 38,00 <span class="text-xs line-through">R$ 50,00</span></p>
                    <a href="#" class="flex justify-center items-center bg-studio-pink-black text-white font-montserrat w-full h-8 hover:bg-studio-wine">Agendar agora</a>
            </article>
        </div>
    </section>
    <section id="shop" class="bg-studio-pink h-full p-6 | lg:flex lg:justify-around">
        <div class="max-w-[400px] | lg:max-w-[500px]">
            <h1 class="text-studio-wine font-marcellus font-bold text-2xl | lg:text-4xl">Conheça nossa loja exclusiva!</h1>
            <p class="font-montserrat text-justify my-4 | lg:text-xl">Descubra itens de skincare, acessórios, cosméticos e até aqueles achadinhos queridinhos da Shopee — tudo num só lugar! Enviamos para todo o Brasil com carinho e cuidado.</p>
            <a href="#" class="bg-studio-wine text-white rounded-lg text-lg p-2">Ver todos os produtos</a>
        </div>
        <div class="hidden | lg:block">
            <img src="{{asset('images/home/Lumina_Loja_Produtos.jpg')}}" alt="Imagem dos produtos da loja" class="mix-blend-multiply w-80 rounded-xl">
        </div>
    </section>
    <section id="employers" class="flex flex-col items-center bg-studio-pink-white h-full p-6">
        <h1 class="text-studio-wine font-marcellus font-bold text-3xl | lg:text-6xl">Conheça nossa equipe!</h1>
        <h2 class="text-studio-wine font-marcellus font-bold text-base mb-5 | lg:text-3xl">Aquela que cuida de você com carinho</h2>
        <div class="flex flex-col items-center">
            <article class="border border-black rounded-lg h-full min-h-[300px] w-[250px] p-2  mb-5">
                <img src="{{asset('images/home/equipe/mulher1.jpg')}}" alt="Imagem de uma funcionaria" class="rounded-lg w-full max-w-[330px] mx-auto">
                <h1 class="text-studio-gray font-bold font-montserrat text-lg pt-3">Thailane Angelina</h1>
                <h2 class="text-studio-gray font-bold font-montserrat text-sm">Sombrancelhas - Especialista em naturalizade</h2>
                <p class="text-studio-fray font-montserrat text-sm text-justify">Seu olhar merece destaque, e a Thai sabe exatamente como valorizar cada traço</p>
                <div class="flex">
                    <a href="#"><img src="{{asset('images/home/equipe/instagram.png')}}" alt="Instagram" class="w-6 pt-2 mr-2"></a>
                    <a href="#"><img src="{{asset('images/home/equipe/linkedin.png')}}" alt="LinkedIn" class="w-6 pt-2"></a>
                </div>
            </article>
            <article class="border border-black rounded-lg h-full min-h-[300px] w-[250px] p-2  mb-5">
                <img src="{{asset('images/home/equipe/mulher2.jpg')}}" alt="Imagem de uma funcionaria" class="rounded-lg w-full max-w-[330px] mx-auto">
                <h1 class="text-studio-gray font-bold font-montserrat text-2xl pt-3">Damares Silva</h1>
                <h2 class="text-studio-gray font-bold font-montserrat text-base">Nail Designer - A beleza na ponta dos dedos</h2>
                <p class="text-studio-fray font-montserrat text-sm text-justify">Do clássico ao criativo: Damares entrega beleza em cada traço</p>
                <div class="flex">
                    <a href="#"><img src="{{asset('images/home/equipe/instagram.png')}}" alt="Instagram" class="w-8 pt-2 mr-2"></a>
                    <a href="#"><img src="{{asset('images/home/equipe/linkedin.png')}}" alt="LinkedIn" class="w-8 pt-2"></a>
                </div>
            </article>
            <article class="border border-black rounded-lg h-full min-h-[300px] w-[250px] p-2  mb-5">
                <img src="{{asset('images/home/equipe/mulher3.jpg')}}" alt="Imagem de uma funcionaria" class="rounded-lg w-full max-w-[330px] mx-auto">
                <h1 class="text-studio-gray font-bold font-montserrat text-2xl pt-3">Zuleide Carrascosa</h1>
                <h2 class="text-studio-gray font-bold font-montserrat text-base">Cabelos e depilação - Um toque profissional faz toda a diferença</h2>
                <p class="text-studio-fray font-montserrat text-sm text-justify">Transformar cabelos e corpos é mais do que mudar o visual: é elevar a autoestima</p>
                <div class="flex">
                    <a href="#"><img src="{{asset('images/home/equipe/instagram.png')}}" alt="Instagram" class="w-8 pt-2 mr-2"></a>
                    <a href="#"><img src="{{asset('images/home/equipe/linkedin.png')}}" alt="LinkedIn" class="w-8 pt-2"></a>
                </div>
            </article>
            <article class="border border-black rounded-lg h-full min-h-[300px] w-[250px] p-2  mb-5">
                <img src="{{asset('images/home/equipe/mulher4.jpg')}}" alt="Imagem de uma funcionaria" class="rounded-lg w-full max-w-[330px] mx-auto">
                <h1 class="text-studio-gray font-bold font-montserrat text-2xl pt-3">Thais Carrascosa</h1>
                <h2 class="text-studio-gray font-bold font-montserrat text-base">Nail Designer - O poder de unhas bem-feitas</h2>
                <p class="text-studio-fray font-montserrat text-sm text-justify">Com anos de experiência e amor pelo que faz, ela transforma unhas em arte.</p>
                <div class="flex">
                    <a href="#"><img src="{{asset('images/home/equipe/instagram.png')}}" alt="Instagram" class="w-8 pt-2 mr-2"></a>
                    <a href="#"><img src="{{asset('images/home/equipe/linkedin.png')}}" alt="LinkedIn" class="w-8 pt-2"></a>
                </div>
            </article>
        </div>

    </section>
</main>
@endsection