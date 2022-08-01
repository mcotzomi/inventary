<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basura extends Model
{
    use HasFactory;

    //relación uno a muchos (inversa)

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }



    protected $table = 'basuras';
    protected $fillable = [
        'decremento',
        'description',
        'id_area'
    ];
}