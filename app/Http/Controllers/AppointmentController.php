<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Concatena a data e hora e converte para datetime
        $dateTime = Carbon::parse($request->date . ' ' . $request->time);

        // Verifica se o horário já está ocupado
        $exists = Appointment::where('service_id', $request->service_id)
            ->where('appointment_date', $dateTime)
            ->exists();

        if ($exists) {
            return redirect()->back()->with('mensagem', 'Esse horário já foi agendado. Escolha outro.');
        }

        // Cria o agendamento
        Appointment::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'appointment_date' => $dateTime,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('mensagem', 'Horário reservado! Agora é só realizar o pagamento.');
    }
}
