<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class IndiciadoItem extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'indiciado_item';
    protected $fillable = ['users_id','indiciado_id','crime_id','esquadra_id','descricao','anexo','estado'];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function indiciados()
    {
        return $this->belongsTo(Indiciado::class, 'indiciado_id');
    }

    public function crimes()
    {
        return $this->belongsTo(Crime::class, 'crime_id');
    }

    public function esquadras()
    {
        return $this->belongsTo(Esquadra::class, 'esquadra_id');
    }
}
