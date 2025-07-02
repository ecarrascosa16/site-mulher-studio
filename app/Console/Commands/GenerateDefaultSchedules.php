<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ServiceSchedule;
use Carbon\Carbon;

class GenerateDefaultSchedules extends Command
{
    protected $signature = 'schedules:generate-default {service_id} {start_date} {end_date}';

    protected $description = 'Gera horários padrão para um serviço entre datas';

    public function handle()
    {
        $serviceId = $this->argument('service_id');
        $startDate = Carbon::parse($this->argument('start_date'));
        $endDate = Carbon::parse($this->argument('end_date'));

        $this->info("Gerando horários para o serviço $serviceId de $startDate até $endDate");

        // Dias da semana que tem folga: domingo (0) e segunda (1)
        $offDays = [0, 1];

        // Horários de trabalho: das 10:00 às 21:00
        $startTime = Carbon::createFromTime(9, 0, 0);
        $endTime = Carbon::createFromTime(18, 0, 0);
        $intervalMinutes = 30;

        // Loop para cada dia entre as datas
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            if (in_array($date->dayOfWeek, $offDays)) {
                continue; // pula domingo e segunda
            }

            $time = $startTime->copy();

            while ($time->lte($endTime)) {
                $availableAt = $date->copy()->setTime($time->hour, $time->minute);

                // Verifica se já existe o horário pra evitar duplicidade
                $exists = ServiceSchedule::where('service_id', $serviceId)
                    ->where('available_date', $availableAt->format('Y-m-d H:i:s'))
                    ->exists();

                if (!$exists) {
                    ServiceSchedule::create([
                        'service_id' => $serviceId,
                        'available_date' => $availableAt,
                        'time' => $time,           
                    ]);
                    $this->info("Horário criado: " . $availableAt->format('Y-m-d H:i'));
                }

                $time->addMinutes($intervalMinutes);
            }
        }

        $this->info("Processo concluído.");
    }
}
