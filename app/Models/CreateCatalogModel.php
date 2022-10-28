<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateCatalogModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'mid',
        'price',
        'evaluation',
        'issue_date',
        'revenue',
        'game_type',
        'created_at',
        'updated_at'
    ];
}
