<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunosController extends Controller
{
    public function index()
    {
        $dados = Aluno::all();
        return view('alunos', compact('dados'));
        //return view('alunos', ['dados' => $dados]);
        
    }

    public function create()
    {
        return view('cadastro');
    }

    public function save(Request $request)
    {
        //$_POST['nome']
        //cria um novo acesso a model do laravel
        $aluno = new Aluno();

        //coloca na model os dados vindos do formulario
        $aluno->nome = $request->nome;
        $aluno->idade = $request->idade;
        $aluno->email = $request->email;
        $aluno->data = $request->nascimento;
        
        //grava no banco (persistir os dados)
        $aluno->save();

        //substitui o Location
        return redirect('/');
        
        
    }
}
