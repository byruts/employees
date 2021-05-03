<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'uuid',
        'name',
        'description',
        'code',
        'status'
    ];

}
