<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = [
        'appointment_id',
        'diagnosis',
        'treatment',
        'documentation'
    ];
}
