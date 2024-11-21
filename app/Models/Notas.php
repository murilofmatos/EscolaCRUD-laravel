<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $fillable = [
        'aluno_id',
        'portugues',
        'matematica',
        'ciencias',
        'historia',
        'ingles',
        'geografia'
    ];

    public function alunos()
    {
        return $this->belogsTo(Alunos::class);
    }
}
