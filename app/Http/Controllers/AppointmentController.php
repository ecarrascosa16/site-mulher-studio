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

        $datetime = Carbon::parse($request->date . ' ' . $request->time);

        Appointment::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'appointment_date' => $datetime,
            'status' => 'confirmed',
        ]);

        return redirect()->route('service.show', $request->service_id)
            ->with('mensagem', 'Agendamento realizado com sucesso!');
    }
}
