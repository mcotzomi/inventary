<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    protected $table = 'areas';
    
    protected $fillable = [
        'name',
        'cantidad'
    ];

    //relación uno a muchos con las bajas
    public function basura()
    {
        return $this->hasMany('App\Models\Basura');
    }
    
    //relación uno a muchos con las altas
    public function alta()
    {
        return $this->hasMany('App\Models\Alta');
    }
}