<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AtivoRendaVariavel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'ativos_renda_variavel';

    protected $fillable = ['nome', 'codigo', 'preco_atual', 'cnpj'];

    public function acao(): HasOne
    {
        return $this->hasOne(Acao::class);
    }

    public function fii(): HasOne
    {
        return $this->hasOne(Fii::class);
    }
}
