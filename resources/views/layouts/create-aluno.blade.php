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
                <a href="{{ route('aluno.index') }}"><span class="">Alunos </span></a>/
                <span class="">Novo Aluno</span>
            </div>
        </div>

        <div class="row mt-1 justify-content-md-center">
            <div class="col-md-8">
                <form action="{{ route('aluno.store') }}" method="post">
                    @csrf
                    <div class="mb-1">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva" value="renildo">
                        {{-- {{ old('name') }} --}}
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="renildo@gmail.com">
                    </div>
                    <div class="mb-1">
                        <label for="celular" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                        <input type="text" class="form-control" id="name" name="celular" placeholder="Celular" value="61 99999-8888">
                    </div>
                    <div class="mb-1">
                        <label for="faixa" class="form-label">Faixa</label>
                        <input type="text" class="form-control" id="faixa" name="faixa" placeholder="Preta" value="Preta">
                    </div>
                    <div class="mb-1">
                        <label for="ativo" class="form-label">Ativo</label> <br>
                        <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" checked> Sim
                        <input type="radio" class="radio-control" id="ativo" name="ativo" value="0"> Não
                    </div>

                    <button class="btn btn-outline-success" type="submit">Salvar</button>
                    <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    @section('footer')
        <div class="row">
            <div class="col-md-6">
                <span>Shield Team BJJ </span><i class="fa fa-copyright"></i> 2022
            </div>
            <div class="col-md-6 justify-content-end">
                <span>versão<strong> 1.0</strong></span>
            </div>
        </div>
    @endsection
@endsection
