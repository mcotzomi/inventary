<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basura extends Model
{
    use HasFactory;
    protected $table = 'basuras';
    protected $fillable = [
        'name',
        'cantidad',
        'description'
    ];
}