<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Obra extends Model
{
    use HasFactory;

    public function tipo_obra(): BelongsTo
    {
        return $this->belongsTo(TipoObra::class,'tipo_id','id');
    }

    /**
     * @return BelongsToMany
     * Relação entre Obra e Autor
     */
    public function criada_por(): BelongsToMany
    {
        return $this->belongsToMany(Autor::class);
    }


    public function requisitada_por(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'requisicoes')
            ->using(Requisicao::class)
            ->as('requisicao')
            ->withTimestamps()
            ->withPivot('id','aberta');
    }



}
