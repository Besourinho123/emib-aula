<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $dados = Teacher::all();
        return view('prof',compact('dados'));
    }

    public function create(){
        return view('cad');
    }

    public function save(Request $request){
         //$_POST['nome']
        //cria um novo acesso a model do laravel
        $teacher = new Teacher();

        //coloca na model os dados vindos do formulario
        $teacher->nome = $request->nome;
        $teacher->area = $request->area;
       
        
        
        //grava no banco (persistir os dados)
        $teacher->save();

        //substitui o Location
        return redirect('/prof');
        
    }

    public function edit(Teacher $dados){
        //$dados = Teacher::find($id);
        return view('editar', compact('dados'));
        
    }

    public function update(Request $request){

         //cria um novo acesso a model do laravel
        $teacher = Teacher::find($request -> id);

        //coloca na model os dados vindos do formulario
        $teacher->nome = $request->nome;
        $teacher->area = $request->area;
       
        
        
        //grava no banco (persistir os dados)
        $teacher->save();

        //substitui o Location
        return redirect('/prof');
        
    }

    public function delete(Teacher $teacher)
    {
        $teacher -> delete();
        return redirect('/prof');
        
        //return 'ok';
    }
    


}
