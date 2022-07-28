<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area2 extends Model
{
    use HasFactory;
    protected $table = 'area2s';
    protected $fillable = [
        'name',
        'cantidad'
    ];
}