<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'user_name',
        'escola_id',
        'acao',
        'objeto',
        'id_objeto',
    ];

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function scopeTermino($query, $termino)
    {
        if($termino === ''){
            return;
        }
        return $query->where  ('user_name', 'LIKE', "%{$termino}%")
                     ->orWhere('escola_id', 'LIKE', "%{$termino}%")
                     ->orWhere('acao',      'LIKE', "%{$termino}%")
                     ->orWhere('id_objeto', 'LIKE', "%{$termino}%")
                     ->orWhere('id',        'LIKE', "%{$termino}%");
    }
    public function scopeCargoId($query, $cargo_id)
    {
        if($cargo_id === ''){
            return;
        }
        return $query->whereCargoId($cargo_id);
    }
    public function scopeEscolaId($query, $escola_id)
    {
        if($escola_id === ''){
            return;
        }
        return $query->whereEscolaId($escola_id);
    }
}
