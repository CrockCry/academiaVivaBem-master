<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deshboardController extends Controller
{
    public function index(){
        return view('site.deshboard');
    }

    public function autenticar(Request $request){

        $regras = [
            'email'     => 'required|email',
            'password'  => 'required'
        ];

        $msg = [
            'email.required'        => 'Campo de email obrigatório',
            'email.email'           => 'O e-mail informado não é valido',
            'password.required'     => 'Campo senha é obrigatório'
        ];

        $request->validate($regras, $msg);

        print_r($request->all());

    }
}
