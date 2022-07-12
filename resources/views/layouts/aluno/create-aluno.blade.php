@extends('adminlte::page')

@section('title', 'Criar Aluno')


@section('content')
    <div class="row p-1">
        <div class="card col-md-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-4">
                        <div class="h1"><i class="fa fa-user-plus"></i> Novo Aluno</div>
                    </div>
                    <div class="col-md-8 font-italic text-right mt-3">
                        <a href="{{ route('home') }}"><span class="">Home </span></a>/
                        <a href="{{ route('aluno.index') }}"><span class="">Alunos </span></a>/
                        <span class="">Novo Aluno</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-1 justify-content-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col">
                        <form action="{{ route('aluno.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva" value="{{ old('name') }}">
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="{{ old('email') }}">
                            </div>
                            <div class="mb-1">
                                <label for="telphone" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                                <input type="text" class="form-control" id="name" name="telphone" placeholder="Celular" value="{{ old('telphone') }}">
                            </div>
                            <div class="mb-1">
                                <div class="col-md-5 p-0">
                                    <label for="belt" class="form-label">Faixa</label>
                                    <select class="form-control" name="belt" id="belt">
                                    <option value="Vermelha">Vermelha</option>
                                    <option value="Coral">Coral</option>
                                    <option value="Preta">Preta</option>
                                    <option value="Marron">Marron</option>
                                    <option value="Roxa">Roxa</option>
                                    <option value="Azul">Azul</option>
                                    <option value="Verde">Verde</option>
                                    <option value="Laranja">Laranja</option>
                                    <option value="Amarela">Amarela</option>
                                    <option value="Cinza">Cinza</option>
                                    <option value="Branca">Branca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2 mb-3">
                                <div class="col">
                                    <label for="ativo" class="form-label">Tipo</label> <br>
                                    <div class="px-3">
                                        <input type="radio" class="radio-control" name="type" value="1" checked> Academia <br>
                                        <input type="radio" class="radio-control" name="type" value="0"> Projeto Social
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <label for="ativo" class="form-label">Ativo</label> <br>
                                    <div class="px-3">
                                        <input type="radio" class="radio-control" name="active" value="1" checked> Sim <br>
                                        <input type="radio" class="radio-control" name="active" value="0"> Não
                                    </div>
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

    {{-- @component('components.form-aluno',
            [
                'routes'        => 'aluno.store',
                'method'        => 'post',
                'nameValue'     => $aluno->name,
                'emailValue'    => $aluno->email,
                'telphoneValue' => $aluno->telphone,
                'beltValue'     => $aluno->belt,
            ]
        )

    @endcomponent --}}
            
    @section('footer')
        @include('footer')
    @endsection
@endsection
