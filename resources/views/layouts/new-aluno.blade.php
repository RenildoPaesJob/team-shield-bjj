@extends('adminlte::page')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mt-1">
                <div class="h1">Novo Aluno</div>
            </div>
            <div class="col-md-8 mt-1 font-italic text-right">
                <a href="{{ route('home') }}"><span class="">Home </span></a>/
                <a href="{{ route('aluno') }}"><span class="">Alunos </span></a>/
                <span class="">Novo Aluno</span>
            </div>
        </div>

        <div class="row mt-1 justify-content-md-center">
            <div class="col-md-10">
                <form action="{{ route('create.aluno') }}" method="GET">
                    <div class="mb-1">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva">
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com">
                    </div>
                    <div class="mb-1">
                        <label for="celular" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                        <input type="text" class="form-control" id="name" name="celular" placeholder="Celular">
                    </div>
                    <div class="mb-1">
                        <label for="faixa" class="form-label">Faixa</label>
                        <input type="text" class="form-control" id="faixa" name="faixa" placeholder="Preta">
                    </div>
                    <div class="mb-1">
                        <label for="ativo" class="form-label">Ativo</label> <br>
                        <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" checked> Sim
                        <input type="radio" class="radio-control" id="ativo" name="ativo" value="0"> Não
                    </div>
                </form>

                <div class="mt-1">
                    <button class="btn btn-outline-success" type="submit">Salvar</button>
                    <a href="{{ route('aluno') }}" class="btn btn-outline-danger">Voltar</a>
                </div>
            </div>
        </div>

    </div>
@endsection
