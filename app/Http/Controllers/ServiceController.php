<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.create-service');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {

        
        $service = Service::findOrFail($id);
        $selectedDate = $request->input('date');

        

        $bookedTimes = [];

        if($selectedDate) {
            $bookedTimes = Appointment::where('service_id', $service->id)
                ->whereDate('appointment_date', $selectedDate)
                ->get()  // pega os modelos completos
                ->map(function ($item) {
                    return $item->appointment_date->format('H:i');
                })
                ->toArray();
        }

        $horarios = [
            '09:00', '10:00', '11:00',
            '14:00', '15:00', '16:00',
        ];
        
        return view('pages.show', compact('service', 'selectedDate', 'horarios', 'bookedTimes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
