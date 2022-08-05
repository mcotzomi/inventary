<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alta extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    protected $table = 'altas';
    protected $fillable = [
        'incremento',
        'id_area'
    ];
}