@extends('layouts.layout')

@section('content')
<main class="p-4 max-w-md mx-auto">

    <h1 class="text-xl font-bold mb-4">{{ $service->title }}</h1>
    <p class="mb-4">{{ $service->description }}</p>
    <p class="mb-4 font-semibold text-purple-700">R$ {{ number_format($service->price, 2, ',', '.') }}</p>

    {{-- Formulário para selecionar o dia --}}
    <form method="GET" action="{{ route('service.show', $service->id) }}" class="mb-6">
        <label for="date" class="block text-sm mb-1">Escolha o dia:</label>
        <input type="date" id="date" name="date" value="{{ $selectedDate }}" class="border p-2 rounded w-full" required>
        <button type="submit" class="mt-2 w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">
            Ver horários disponíveis
        </button>
    </form>

    {{-- Agenda com horários disponíveis --}}
    @if($selectedDate)
        <h2 class="text-lg font-semibold mb-2">Horários disponíveis em {{ \Carbon\Carbon::parse($selectedDate)->format('d/m/Y') }}</h2>

        <div class="grid grid-cols-3 gap-2">
            @foreach($horarios as $hora)
                @if(in_array($hora, $bookedTimes))
                    <button class="bg-gray-300 text-gray-500 py-2 px-4 rounded cursor-not-allowed" disabled>
                        {{ $hora }}
                    </button>
                @else
                    <form method="POST" action="{{ route('appointments.store') }}">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <input type="hidden" name="date" value="{{ $selectedDate }}">
                        <input type="hidden" name="time" value="{{ $hora }}">
                        <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                            {{ $hora }}
                        </button>
                    </form>
                @endif
            @endforeach
        </div>
    @endif

</main>
@endsection
