<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;
use App\Enums\NivelEnsino;

class Alunos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'nivel_ensino',
        'ano'
    ];

    protected $casts = [
        'nivel_ensino' => NivelEnsino::class,
    ];

    public function setnivelEnsinoAttribute($value)
    {
        $cases = [];
        foreach(NivelEnsino::cases() as $case){
            $cases[] = $case->name;
        }

        if(in_array($value, $cases, false)){
            switch($value){
                case 'F1': $this->attributes['nivel_ensino'] = NivelEnsino::from('Fundamental 1')->value;
                break;
                case 'F2': $this->attributes['nivel_ensino'] = NivelEnsino::from('Fundamental 2')->value;
                break;
                case 'EM': $this->attributes['nivel_ensino'] = NivelEnsino::from('Ensino Médio')->value;
                break;

            }
        }
    }

    public function notas()
    {
        return $this->hasMany(Notas::class);
    }
}
