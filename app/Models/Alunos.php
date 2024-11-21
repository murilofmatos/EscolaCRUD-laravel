<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\NivelEnsino;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'matricula',
        'nivel_ensino',
        'ano'
    ];

    protected $casts = [
        'nivel_ensino' => NivelEnsino::class,
    ];

    public function notas()
    {
        return $this->hasMany(Notas::class);
    }
}
