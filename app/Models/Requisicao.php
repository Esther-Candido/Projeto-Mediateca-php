<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Requisicao extends Pivot
{
    use HasFactory;

    protected $table='requisicoes';

    public $incrementing=true;

    protected $fillable=['aberta'];

    public $timestamps=true;

    public static function total_requisicoes():int{
        return self::all()->count();
    }

    public static function requisicoes() {
        return self::select(
            'requisicoes.id as id',
            'users.name as user',
            'obras.nome as obra',
            'requisicoes.created_at',
            'requisicoes.updated_at',
            'aberta')
            ->join('users','requisicoes.user_id','=','users.id')
            ->join('obras','requisicoes.obra_id','=','obras.id')
            ->orderBy('requisicoes.created_at','desc');
    }


}
