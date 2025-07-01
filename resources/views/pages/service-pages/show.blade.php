@extends('layouts.layout')

@section('content')
<main class="flex justify-center bg-studio-pink-white h-full  py-24 px-5">

    <div class="max-w-[500px] | lg:max-w-[700px]">
        <section class="border border-studio-purple rounded-md mb-6 p-3 ">
            <h1 class="font-extrabold font-marcellus text-2xl | lg:text-4xl">{{ $service->title }}</h1>
            <p class="| lg:text-2xl lg:pb-2">{{ $service->description }}</p>
            <p class="| lg:text-2xl"><strong>Valor:</strong> R$ {{ number_format($service->price, 2, ',', '.') }}</p>
            <p class="| lg:text-2xl"><strong>Duração:</strong> 2h30m</p>
        </section>
        <hr class="mb-4">
        <section>
            <h1 class="font-bold font-marcellus text-2xl mb-3 | lg:text-3xl">Faça seu agendamento:</h1>
            {{-- Formulário para escolher a data --}}
            <form method="GET" action="{{ route('service.show', $service->id) }}" class="mb-6">
                @csrf
                <label for="date" class="block mb-1 | lg:text-lg">Selecione o dia:</label>
                <input type="date" id="date" name="date" value="{{ $selectedDate ?? '' }}" required
                    class="border border-gray-300 rounded px-3 py-2 w-full">
                <button type="submit"
                    class="mt-3 w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Ver horários disponíveis</button>
            </form>
            {{-- Lista de horários --}}
            @if($selectedDate)
                <h2 class="text-lg font-semibold mb-2">Horários disponíveis em
                    {{ \Carbon\Carbon::parse($selectedDate)->format('d/m/Y') }}</h2>
                <div class="grid grid-cols-3 justify-items-center">
                    @foreach($horarios as $hora)
                        @if(in_array($hora, $bookedTimes))
                            <div>
                                <button class="bg-gray-300 text-gray-500 py-2 px-4 m-1 rounded cursor-not-allowed | lg:w-40 lg:h-16" disabled>
                                    {{ $hora }}
                                </button>
                            </div>
                        @else
                            @auth
                                <form method="POST" action="{{ route('appointments.store') }}">
                                    @csrf
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <input type="hidden" name="date" value="{{ $selectedDate }}">
                                    <input type="hidden" name="time" value="{{ $hora }}">
                                    <button type="submit"
                                        class="bg-studio-purple text-white py-2 px-4 rounded m-1 hover:bg-studio-pink | lg:w-40 lg:h-16">
                                        {{ $hora }}
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="bg-yellow-400 text-white py-2 px-4 rounded hover:bg-yellow-500 text-center block">
                                    Faça login para agendar
                                </a>
                            @endauth
                        @endif
                    @endforeach
                </div>
            @endif
        </section>
    </div>

</main>
@endsection
