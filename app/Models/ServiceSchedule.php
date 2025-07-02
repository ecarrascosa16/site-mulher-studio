<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSchedule extends Model
{
    protected $fillable = ['service_id', 'available_date', 'time'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
