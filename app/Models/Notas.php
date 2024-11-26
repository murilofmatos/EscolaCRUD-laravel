<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id',
        'portugues',
        'matematica',
        'ciencias',
        'historia',
        'ingles',
        'geografia',
        'bimestre'
    ];

    public $incrementing = false;

    public function alunos()
    {
        return $this->belogsTo(Alunos::class);
    }
}
