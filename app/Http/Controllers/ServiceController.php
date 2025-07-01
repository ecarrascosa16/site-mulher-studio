<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function create()
    {
        return view('pages.admin.create-service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'admin_id' => auth()->id(),
        ]);

        return redirect()->back()->with('mensagem', 'Serviço criado com sucesso');
    }

    public function show(Request $request, $id){
        $service = Service::findOrFail($id);

        $selectedDate = $request->input('date');

        $dayOfWeek = null;
        if ($selectedDate) {
            // Converte a data para o dia da semana (0 = domingo, 6 = sábado)
            $dayOfWeek = Carbon::parse($selectedDate)->dayOfWeek;
        }

        // Busca os horários cadastrados para o serviço e para o dia da semana
        $horarios = $dayOfWeek !== null
            ? $service->schedules()->where('day_of_week', $dayOfWeek)->pluck('time')->toArray()
            : [];

        // Pega os horários já marcados para essa data (agendamentos)
        $bookedTimes = [];
        if ($selectedDate) {
            $appointments = Appointment::where('service_id', $id)
                ->whereDate('appointment_date', $selectedDate)
                ->pluck('appointment_date');

            $bookedTimes = $appointments->map(function ($datetime) {
                return Carbon::parse($datetime)->format('H:i');
            })->toArray();
        }

        return view('pages.service-pages.show', compact(
            'service',
            'selectedDate',
            'horarios',
            'bookedTimes'
        ));
    }

}
