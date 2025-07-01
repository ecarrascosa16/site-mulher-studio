@extends('layouts.layout')

@section('content')
    <main class="flex flex-col items-center bg-studio-pink-white h-full py-24">
        @foreach ($services as $service)
          <div class="flex bg-studio-pink-black rounded-lg shadow-xl w-[320px] h-full p-4 my-3">
            <div class="w-[200px]">
                <h1 class="text-white">{{$service->title}}</h1>
                <p class="text-white">{{$service->description}}</p>
            </div>
            <div class="flex flex-col justify-around">
                <p class="text-white text-right font-bold">{{$service->price}}</p>
                <a href="{{route('service.show', $service->id)}}" class="bg-studio-purple p-2 rounded-lg text-white">Agendar</a>
            </div>
        </div>  
        @endforeach
    </main>
@endsection