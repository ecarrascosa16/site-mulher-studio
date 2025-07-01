@extends('layouts.layout')

@section('content')
<main class="bg-studio-pink-white h-full  py-24 px-5">

    <h1 class="text-2xl font-bold mb-6">Gerenciar Horários dos Serviços</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.service-schedules.store') }}" method="POST" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="service_id" class="block font-semibold mb-1">Selecione o serviço:</label>
            <select name="service_id" id="service_id" class="border rounded p-2 w-full" required>
                <option value="">-- Escolha um serviço --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="day_of_week" class="block font-semibold mb-1">Dia da semana:</label>
            <select name="day_of_week" id="day_of_week" class="border rounded p-2 w-full" required>
                <option value="">-- Escolha um dia --</option>
                <option value="0">Domingo</option>
                <option value="1">Segunda-feira</option>
                <option value="2">Terça-feira</option>
                <option value="3">Quarta-feira</option>
                <option value="4">Quinta-feira</option>
                <option value="5">Sexta-feira</option>
                <option value="6">Sábado</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="time" class="block font-semibold mb-1">Hora disponível (HH:mm):</label>
            <input type="time" name="time" id="time" class="border rounded p-2 w-full" required>
        </div>
        <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Adicionar Horário</button>
    </form>

    <h2 class="text-xl font-semibold mb-4">Horários cadastrados</h2>

    @foreach($services as $service)
        <div class="mb-6">
            <h3 class="font-bold mb-2">{{ $service->title }}</h3>
            <div class="flex flex-wrap gap-2">
                @forelse($service->schedules as $schedule)
                    <form method="POST" action="{{ route('admin.service-schedules.destroy', $schedule->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 flex items-center gap-1"
                            title="Remover horário">
                            {{ $schedule->time }} 
                            <span class="text-lg leading-none">&times;</span>
                        </button>
                    </form>
                @empty
                    <span class="text-gray-500">Nenhum horário cadastrado para este serviço.</span>
                @endforelse
            </div>
        </div>
    @endforeach

</main>
@endsection
