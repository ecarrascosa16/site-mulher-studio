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
        <a href="#" class="bg-studio-pink-black hover:bg-studio-purple rounded-sm shadow-sm flex justify-center items-center font-montserrat font-semibold text-white  text-xs p-3 h-10 lg:h-20
        lg:text-lg lg:p-5">AGENDE SEU HORÁRIO</a>
    </section>
</main>
@endsection