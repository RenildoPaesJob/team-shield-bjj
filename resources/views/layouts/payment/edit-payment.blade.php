@extends('adminlte::page')

@section('title', 'Editar Status')

@section('content')
    {{-- listagem de usuários --}}
    <div class="row p-1">
        <div class="card col-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-6">
                        <div class="h1"><i class="fa fa-user" aria-hidden="true"></i> Editar Status</div>
                    </div>

                    <div class="col-md-6 font-italic text-right mt-3">
                        <span>
                            <a href="{{ route('home') }}"><span class="">Home </span></a>/
                            <a href="{{ route('aluno.index') }}"><span class="">Status de pagam. </span></a>/
                            <span class="">Editar Status</span>
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
                        <form action="{{ route('payment.update', ['id' => $payment->id]) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="mb-1">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Pendente" value="{{ $payment->name }}">
                            </div>
                            <div class="mb-1">
                                <label for="description" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Pedente" value="{{ $payment->description }}">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="active" class="form-label">Ativo</label> <br>

                                    <div class="container">
                                        @if ($payment->active == 1)
                                            <input type="radio" class="radio-control" name="active" value="1" checked> Sim <br>
                                            <input type="radio" class="radio-control" name="active" value="0"> Não
                                        @else
                                            <input type="radio" class="radio-control" name="active" value="1"> Sim <br>
                                            <input type="radio" class="radio-control" name="active" value="0" checked> Não
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button class="btn btn-outline-success col-md-3 m-2" type="submit">Salvar</button>
                                <a href="{{ route('payment.index') }}" class="btn btn-outline-danger col-md-3 m-2">Voltar</a>
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
