<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model // Verander de klasse naam naar Travel
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'begin',
        'end',
    ];
}
