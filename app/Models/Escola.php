<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escola extends Model
{
    use HasFactory;
    use  SoftDeletes;

    protected $fillable = [
        'escola',
        'cie',
        'regiao',
        'bairro',
        'endereco',
        'telefone'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
