<?php

namespace App\Models;

use App\Models\Hamburger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hamburger extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'ingredienti',
        // 'imgCibo',
    ];
}
