<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlunoRequest;
use App\Models\Aluno;
use Illuminate\Http\Request;


class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::get();
        // dd($alunos);

        return view('layouts.aluno.list-aluno', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.aluno.create-aluno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunoRequest $request)
    {
        Aluno::create($request->all());

        return redirect()->route('aluno.index');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $aluno = Aluno::where('id', $id)->first();
        $aluno = Aluno::find($id);

        //if is null
        if(is_null($aluno)){
            return redirect()->route('aluno.index');
        }

        return view('layouts.aluno.show-aluno', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno) {
            return redirect()->route('aluno.index');
        }

        return view('layouts.aluno.aluno-edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunoRequest  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAlunoRequest $request, $id)
    {
        Aluno::find($id);

        Aluno::updateAluno($request, $id);

        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
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
