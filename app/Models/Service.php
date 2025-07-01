<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'description',
        'price',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function schedules() {
        return $this->hasMany(ServiceSchedule::class);
    }
}

