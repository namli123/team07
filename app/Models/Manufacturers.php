<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufacturers extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'capital',
        'found_at',
        'national',
        'created_at',
        'updated_at'
    ];
}
