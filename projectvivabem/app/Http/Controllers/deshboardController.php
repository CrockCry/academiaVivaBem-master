<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class deshboardController extends Controller
{
    public function index()
    {
        return view('site.deshboard');
    }

    public function autenticar(Request $request)
    {

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

        //  Recupera os dados do formulário
        $email = $request->get('email');
        $senha = $request->get('password');




        $usuario = Usuario::where('email', $email)->first(); // retorna o primeiro usuário que corresponde com o email digitado

        if (!$usuario) {
            return back()->withErrors(['email' => 'O email usuario não esta cadastrado']);
        } // redireciona com erro

        if ($usuario->senha  != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta']);
        } // redireciona com erro



        $tipoUsuario = $usuario->tipo_usuario;

        if ($tipoUsuario instanceof Aluno) {
            dd($tipoUsuario);
        } elseif ($tipoUsuario instanceof Funcionario) {
            dd($tipoUsuario);
        } else{
            dd("to aqui");
        }

    }
}
