@extends('adminlte::page')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mt-1">
                <div class="h1">Novo Alunos</div>
            </div>
            <div class="col-md-8 mt-1 font-italic text-right">
                <a href="{{ route('home') }}"><span class="">Home </span></a>/
                <a href="{{ route('aluno') }}"><span class="">Alunos </span></a>/
                <span class="">Novo Aluno</span>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12 justify-content">
                {{-- @component('vendor.adminlte.components.form.input',
                    [
                        'id'         => 'form-new-aluno',
                        'name' => 'nome',
                        'class' => 'form-control',
                        'value' => 'Nome',
                        'setErrorsBag' => [
                            'errors' => ['1', '2']
                        ]

                    ])
                @endcomponent --}}
            </div>
        </div>

    </div>
@endsection
