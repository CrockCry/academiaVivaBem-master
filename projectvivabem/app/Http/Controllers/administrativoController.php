<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administrativoController extends Controller
{
    //

    public function index()
    {

        return view('deshboardPaginas.administrativo.index');
    }
}
