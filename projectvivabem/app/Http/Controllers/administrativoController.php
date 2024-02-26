<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class administrativoController extends Controller
{
    //

    public function index()
    {
        return view('deshboardPaginas.administrativo.index');
    }


    public function pagFunc(){
        return view('site.home');
    }

    // funcionario
    public function indexFunc(){
        $idFunc = session('id');
        $func = Funcionario::find($idFunc);

        $listaFunc = Funcionario::all();

        dd($listaFunc);

        return view('deshboardPaginas.administrativo.funcionario.index', compact('func','listaFunc'));
    }
}
