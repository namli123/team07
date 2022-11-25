<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogs extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'mid',
        'price',
        'evaluaation',
        'issue_date',
        'revenue',
        'game_type',
        'created_at',
        'updated_at'
    ];
    public function manufacturers(){
        return $this->belongsTo("App\Models\manufacturers",'mid', 'id');
    }
}
