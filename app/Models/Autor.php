<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Autor extends Model
{
    use HasFactory;

    //norma 1 - autors
    protected $table='autores';

    //protected $fillable=['nome','bio'];

    protected $guarded=[];

    //norma 2 - Existe uma chave primaria chamada id
    //protected $primaryKey='obra_id';

    //norma 3 - A chave primaria é unsigned big integer
    //protected $keyType='string';

    //norma 4 - A chave primaria é autoincrement
    //public $incrementing=false;

    //norma 5 - Existem timestamps
    //public $timestamps=false;

    public function criou(): BelongsToMany
    {
        return $this->belongsToMany(Obra::class);
    }
}
