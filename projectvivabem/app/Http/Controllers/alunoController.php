<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alunoController extends Controller
{
    //

    public function index()
    {

        return view('deshboardPaginas.aluno.index');
    }
}
