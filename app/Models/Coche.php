<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coche extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'modelo', 'anio', 'precio'];


    public function scopeprecioMenorQue($query, $precio)
    {
        return $query->where('precio', '<=', $precio);
    }

    public function scopeanioMayorQue($query, $anio) {
        return $query->where('anio', '>=', $anio);
    }
}
