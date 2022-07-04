<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index (){
        return view('layouts.list-aluno');
    }

    public function newAluno (){
        return view('layouts.new-aluno');
    }
    
}
