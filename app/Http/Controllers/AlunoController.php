<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::get();

        return view('layouts.aluno.list-aluno', compact('alunos'));
    }

    public function create()
    {
        return view('layouts.aluno.create-aluno');
    }

    public function store(StoreAlunoRequest $request)
    {
        Aluno::create($request->all());

        return redirect()->route('aluno.index');
    }

    public function show($id)
    {
        // $aluno = Aluno::where('id', $id)->first();
        $aluno = Aluno::find($id);

        if(is_null($aluno)){
            return redirect()->route('aluno.index');
        }

        return view('layouts.aluno.show-aluno', compact('aluno'));
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno) {
            return redirect()->route('aluno.index');
        }

        return view('layouts.aluno.aluno-edit', compact('aluno'));
    }

    public function update(StoreAlunoRequest $request, $id)
    {
        Aluno::find($id);

        Aluno::updateAluno($request, $id);

        return redirect()->route('aluno.index');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno) {
            return redirect()->route('aluno.index');
        }

        $aluno->delete();

        return redirect()->route('aluno.index');
    }
}
