<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Indiciado extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'indiciado';
    protected $fillable = ['users_id','esquadra_id','nome','endereco','foto','fingerprint','assinatura','estado'];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function esquadras()
    {
        return $this->belongsToMany(Esquadra::class, 'indiciado_item', 'indiciado_id','esquadra_id');
    }
   

    public function crimes()
    {
        return $this->belongsToMany(Crime::class, 'indiciado_item', 'indiciado_id','crime_id')->withPivot(['descricao']);
    }
}
