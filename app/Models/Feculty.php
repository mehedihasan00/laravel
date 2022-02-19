<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feculty extends Model
{
    use HasFactory;
    protected $fillable = [
        'feculty_name',
        'feculty_image',
        
    ];

}
