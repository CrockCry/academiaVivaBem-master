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


        session(['email'=> $usuario->email]);

        if ($tipoUsuario instanceof Aluno) {

            session([
                'id'               => $tipoUsuario->idAluno,
                'nome'             => $tipoUsuario->nomeAluno,
                'email'            => $tipoUsuario->email,
                'tipo_usuario'     => 'Aluno'
            ]);

            // dd($tipoUsuario);

            return redirect()->route('deshboardPaginas.aluno'); // redireciona para a pagina principal do aluno

        } elseif ($tipoUsuario instanceof Funcionario) {
            if ($tipoUsuario->tipoFuncionario == 'administrativo') {
                
                session([
                    'id'               => $tipoUsuario->idFuncionario,
                    'nome'             => $tipoUsuario->nomeFuncionario,
                    'email'            => $tipoUsuario->email,
                    'tipoFuncionario'  => $tipoUsuario->tipoFuncionario,
                ]);
                return redirect()->route('deshboardPaginas.administrativo'); // redireciona para a pagina principal do administrador


            } elseif ($tipoUsuario->tipoFuncionario == 'instrutor') {

                session([
                    'id'               => $tipoUsuario->idFuncionario,
                    'nome'             => $tipoUsuario->nomeFuncionario,
                    'email'            => $tipoUsuario->email,
                    'tipoFuncionario'  => $tipoUsuario->tipoFuncionario,
                ]);
                return redirect()->route('deshboardPaginas.instutor'); // redireciona para a pagina principal do instrutor
            }
        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação']);
    }
}
