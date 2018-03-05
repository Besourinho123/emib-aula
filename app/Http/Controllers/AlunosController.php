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
}
