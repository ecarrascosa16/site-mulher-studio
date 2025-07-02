@extends('layouts.layout');

@section('content')
    <main class="flex flex-col items-center bg-studio-pink-white h-full pt-20">
        <h1 class="font-montserrat font-bold text-3xl mb-5">Crie um serviço:</h1>
        @if (session('mensagem'))
            <div id="mensagem" class="flex justify-between bg-green-500 mb-5 p-2 w-full">
                <p class="text-white text-lg">{{session('mensagem')}}</p>
                <span id="simboloMenuX" onclick="closeMensagem()" class="material-symbols-outlined text-white cursor-pointer">close</span>
            </div>        
        @endif
        <form action="{{route('service.store')}}" method="POST" class="w-80 | lg:w-[600px]">
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Serviço:</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required/>
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descrição:</label>
                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
            </div>
            <div class="mb-5">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Preço:</label>
                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
            </div>
            <button type="submit" class="text-white bg-studio-purple hover:bg-studio-wine focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Criar</button>
        </form>
    </main>
@endsection