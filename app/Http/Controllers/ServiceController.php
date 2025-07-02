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

    public function show(Request $request, $id) {
        $service = Service::with('schedules')->findOrFail($id);
        $selectedDate = $request->input('date');

        $horarios = [];
        $bookedTimes = [];

        // Se o usuário selecionou uma data...
        if ($selectedDate) {
            // Filtra os horários para aquele dia específico
            $horarios = $service->schedules
                ->where('available_date', $selectedDate)
                ->pluck('time')
                ->map(function ($time) {
                    return Carbon::parse($time)->format('H:i');
                })->toArray();

            // Pega os horários já marcados (bookings)
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
