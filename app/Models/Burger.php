<?php

namespace App\Models;

use App\Models\Burger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Burger extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'ingredienti',
        'imgCibo',
    ];
}
