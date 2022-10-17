<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Desaparecido extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'desaparecido';
    protected $fillable = ['fase_id','esquadra_id','users_id','nome','idade','icon','descricao'];

    public function fases()
    {
        return $this->belongsTo(Fase::class, 'fase_id');
    }

    public function esquadras()
    {
        return $this->belongsTo(Esquadra::class, 'esquadra_id');
    }
}
