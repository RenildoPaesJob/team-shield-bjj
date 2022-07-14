@extends('adminlte::page')

@section('title', 'Novo Historico de Pagamento')

@section('content')

    @component('components.title-header', [
        'title' => 'Novo Historico',
        'paths' => [
            'path' => [
                [
                    'name' => 'home',
                    'route' => 'home'
                ],
                [
                    'name' => 'Histórico',
                    'route' => 'historic.index'
                ]
            ]
        ],

        'titlePath' => 'Novo Histórico'
    ])
    @endcomponent

    <div class="row p-1 justify-content-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col">
                        {{-- <form action="{{ route('aluno.store') }}" method="post"> --}}
                        <form action="#" method="post">
                            @csrf
                            {{-- nome do aluno --}}
                            <div class="mb-1">
                                <div class="col-md-5 p-0">
                                    <label for="aluno_id" class="form-label">Nome do Aluno</label>
                                    @foreach($alunos as $aluno)
                                        <select class="form-control" name="aluno_id">
                                            <option value="{{ $aluno->id }}">{{ $aluno->name }}</option>
                                        </select>
                                    @endforeach
                                </div>
                            </div>

                            {{-- errors messages --}}
                            @include('layouts.errors')

                            <div class="row justify-content-center">
                                <button class="btn btn-outline-success col m-2" type="submit">Salvar</button>
                                <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger col m-2">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        @include('footer')
    @endsection
@endsection
