<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weatherdata extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'temperature',
        'feels',
        'humidity'
    ];
}
