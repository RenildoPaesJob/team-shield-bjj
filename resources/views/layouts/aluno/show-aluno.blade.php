@extends('adminlte::page')

@section('title', 'Detalhes do Aluno')

@section('content')
    {{-- @dd($aluno->created_at) --}}
    {{-- listagem de usuários --}}
    <div class="row p-1">
        <div class="card col-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-6">
                        <div class="h1"><i class="fa fa-user" aria-hidden="true"></i> Aluno</div>
                    </div>

                    <div class="col-md-6 font-italic text-right mt-3">
                        <span>
                            <a href="{{ route('home') }}"><span class="">Home </span></a>/
                            <a href="{{ route('aluno.index') }}"><span class="">Alunos </span></a>/
                            <span class="">Detalhes do Aluno</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-1 justify-content-md-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="col">
                        
                        <form action="{{ route('aluno.store') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Maria da Silva" value="{{ $aluno->name }}" disabled>
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="{{ $aluno->email }}" disabled>
                            </div>
                            <div class="mb-1">
                                <label for="telphone" class="form-label">Celular</label> <i class="fa-brands fa-whatsapp"></i>
                                <input type="text" class="form-control" id="name" name="telphone" placeholder="Celular" value="{{ $aluno->telphone }}" disabled>
                            </div>
                            <div class="mb-1">
                                <label for="belt" class="form-label">Faixa</label>
                                <input type="text" class="form-control" id="faixa" name="belt" placeholder="Preta" value="{{ $aluno->belt }}" disabled>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ativo" class="form-label">Tipo</label> <br>
                                    
                                    <div class="container">
                                        @if ($aluno->type == 1)
                                            <input type="radio" class="radio-control" id="ativo" name="type" value="1" checked disabled> Academia <br>
                                            <input type="radio" class="radio-control" id="ativo" name="type" value="0" disabled> Projeto Social
                                        @else
                                            <input type="radio" class="radio-control" id="ativo" name="type" value="1" disabled> Academia <br>
                                            <input type="radio" class="radio-control" id="ativo" name="type" value="0" checked disabled> Projeto Social
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="ativo" class="form-label">Ativo</label> <br>
                                    
                                    <div class="container">
                                        @if ($aluno->active == 1)
                                            <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" checked disabled> Sim <br>
                                            <input type="radio" class="radio-control" id="ativo" name="ativo" value="0" disabled> Não
                                        @else
                                            <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" disabled> Sim <br>
                                            <input type="radio" class="radio-control" id="ativo" name="ativo" value="0" checked disabled> Não
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-end mt-2">
                            <div class="col-md-6 text-right">
                                <form action="{{ route('aluno.destroy', $aluno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger col-md-6" title="{{ 'Excluir' }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-2">
                            <div class="col-md-6 text-right">
                                <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger col-md-6">Voltar</a>
                            </div>
                        </div>
{{-- 
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('aluno.destroy', $aluno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" title="{{ 'Excluir' }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('aluno.index') }}" class="btn btn-outline-danger col-md-3">Voltar</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        @include('footer')
    @endsection
@endsection
