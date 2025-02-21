<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concesionario extends Model
{
    use HasFactory;

    protected $fillable = ['id'];

    public function motos() {
        return $this->hasMany(Moto::class);
    }
}
