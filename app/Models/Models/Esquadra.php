<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Esquadra extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'esquadra';
    protected $fillable = ['distrito_id','nome','endereco','contacto','estado']; 
    
    public function distritos()
    {
        return $this->belongsTo(Distrito::class, 'distrito_id');
    }
}
