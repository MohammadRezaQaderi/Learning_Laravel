<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebab extends Model
{
    protected $casts = [
        'toppings' => 'array'
    ];
}
