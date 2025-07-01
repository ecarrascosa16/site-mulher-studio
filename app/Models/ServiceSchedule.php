<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSchedule extends Model
{
    protected $fillable = ['service_id', 'time', 'day_of_week'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
