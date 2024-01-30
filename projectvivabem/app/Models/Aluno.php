<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $primaryKey = "idAluno";

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario'); //morphOne permite fazer uma relação com outra tabela em especifico
    }
}
