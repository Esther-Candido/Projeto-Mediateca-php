<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoObra extends Model
{
    use HasFactory;

    protected $table='tipos_obra';

    public function obras(): HasMany
    {
        return $this->hasMany(Obra::class,'tipo_id',);
    }
}
