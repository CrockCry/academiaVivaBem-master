<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index()
    {

        return view('site.contato');
    }

    public function salvarNoBanco(Request $request)
    {

        //dd($request);
        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [
            'nomeContato'       => 'required|max:100',
            'emailContato'      => 'required|email|max:100',
            'foneContato'       => 'required|max:15',
            'assuntoContato'    => 'required|max:100',
            'mensContato'       => 'required',
        ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);
        } else {

            $contato = Contato::create($validarDados->validated());

            //Por email
            Mail::to('cloudwise@smpsistema.com.br')->send(new ContatoEmail($contato));

            return response()->json(['success' => 'Email registrado com sucesso']);
        }
    }

    public function salvarEmail(Request $request) //Salvar email da news letter
    {
        $dados = $request->json()->all();

        $validarDados = Validator::make($dados, [
            'emailNews'         => 'required|email|max:100|unique:newsletters,emailNews',
        ]);

        if ($validarDados->fails()) {
            return response()->json(['errors' => $validarDados->errors()], 422);
        } else {

            $verificarEmail = NewsLetter::where('emailNews', $dados['emailNews'])->exists(); // Verificar se o email já existe antes de criar uma nova entrada

            if ($verificarEmail) {
                return response()->json(['errors' => ['emailNews' => 'Este e-mail já está registrado.']], 422); // Retorno de erro caso email já exista
            }


            NewsLetter::create($validarDados->validated()); // Criar uma nova entrada no banco de dados

            return response()->json(['success' => 'Email registrado com sucesso']); // Registro do email
        }

    }


}






    // public function salvarEmail(Request $request)
    // {

    //     // dd($request);

    //     $dados = $request->json()->all();

    //     $validarDados = Validator::make($dados, [

    //         'emailNews'      => 'required|email|max:100',

    //     ]);

    //     if ($validarDados->fails()) {
    //         return response()->json(['errors' => $validarDados->errors()], 422);
    //     } else {
    //         NewsLetter::create($validarDados->validated());

    //         return response()->json(['success' => 'Email registrado com sucesso']);
    //     }
    // }
