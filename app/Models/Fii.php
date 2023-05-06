<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fii extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'fiis';

    protected $fillable = ['tipo', 'ativo_renda_variavel_id'];

    protected $with = ['ativo'];

    public function ativo(): BelongsTo
    {
        return $this->belongsTo(AtivoRendaVariavel::class, 'ativo_renda_variavel_id');
    }
}
