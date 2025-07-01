<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSchedule;
use Illuminate\Http\Request;

class ServiceScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('schedules')->get();
        return view('pages.admin.service-schedules', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'time' => 'required|date_format:H:i',
            'day_of_week' => 'required|integer|between:0,6'
        ]);

        ServiceSchedule::create([
            'service_id' => $request->service_id,
            'time' => $request->time,
            'day_of_week' => $request->day_of_week,
        ]);

        return redirect()->back()->with('success', 'Horário adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schedule = ServiceSchedule::findOrFail($id);
        $schedule->delete();

        return redirect()->back()->with('success', 'Horário removido com sucesso!');
    }
}
