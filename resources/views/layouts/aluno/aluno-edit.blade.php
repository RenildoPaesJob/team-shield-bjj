@extends('adminlte::page')

@section('title', 'Editar Aluno')

@section('content')
    {{-- listagem de usuários --}}
    <div class="row p-1">
        <div class="card col-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-6">
                        <div class="h1"><i class="fa fa-user" aria-hidden="true"></i> Editar Aluno</div>
                    </div>

                    <div class="col-md-6 font-italic text-right mt-3">
                        <span>
                            <a href="{{ route('home') }}"><span class="">Home </span></a>/
                            <a href="{{ route('aluno.index') }}"><span class="">Alunos </span></a>/
                            <span class="">Editar Aluno</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-1">
        <div class="card col-md-12">
            <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <form action="{{ route('aluno.update', ['id' => $aluno->id]) }}" method="post">
                            {{-- <input type="hidden" name="_method" value="PUT"> --}}
                            @method('PUT')
                            @csrf
                            <div class="mb-1">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva" value="{{ $aluno->name }}">
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="{{ $aluno->email }}">
                            </div>
                            <div class="mb-1">
                                <label for="telphone" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                                <input type="text" class="form-control" id="name" name="telphone" placeholder="Celular" value="{{ $aluno->telphone }}">
                            </div>
                            <div class="mb-1">
                                <label for="belt" class="form-label">Faixa</label>
                                <input type="text" class="form-control" id="faixa" name="belt" placeholder="Preta" value="{{ $aluno->belt }}">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ativo" class="form-label">Tipo</label> <br>
                                    
                                    <div class="container">
                                        @if ($aluno->type == 1)
                                            <input type="radio" class="radio-control" name="type" value="1" checked> Academia <br>
                                            <input type="radio" class="radio-control" name="type" value="0"> Projeto Social
                                        @else
                                            <input type="radio" class="radio-control" name="type" value="1"> Academia <br>
                                            <input type="radio" class="radio-control" name="type" value="0" checked> Projeto Social
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="active" class="form-label">Ativo</label> <br>
                                    
                                    <div class="container">
                                        @if ($aluno->active == 1)
                                            <input type="radio" class="radio-control" name="active" value="1" checked> Sim <br>
                                            <input type="radio" class="radio-control" name="active" value="0"> Não
                                        @else
                                            <input type="radio" class="radio-control" name="active" value="1"> Sim <br>
                                            <input type="radio" class="radio-control" name="active" value="0" checked> Não
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            {{-- errors messages --}}
                            @include('layouts.errors')

                            <div class="row justify-content-center">
                                <button class="btn btn-outline-success col-md-3 m-2" type="submit">Salvar</button>
                                <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger col-md-3 m-2">Voltar</a>
                            </div>
                            {{-- <button class="btn btn-outline-success" type="submit">Salvar</button>
                            <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger">Voltar</a> --}}
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
