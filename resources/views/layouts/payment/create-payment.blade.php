@extends('adminlte::page')

@section('title', 'Criar Status')


@section('content')
    <div class="row p-1">
        <div class="card col-md-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-6">
                        <div class="h1">Novo Status Pagamento</div>
                    </div>
                    <div class="col-md-6 font-italic text-right mt-3">
                        <a href="{{ route('home') }}"><span class="">Home </span></a>/
                        <a href="{{ route('payment.index') }}"><span class="">Status Pagam. </span></a>/
                        <span class="">Novo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-1">
        <div class="card col-md-12">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="{{ route('payment.store') }}" method="POST">
                            @csrf
                            <div class="mb-1">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Pendente" value="{{ old('name') }}">
                            </div>
                            <div class="mb-1">
                                <label for="description" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Pedente" value="{{ old('description') }}">
                            </div>
                            <div class="col">
                                <label for="ativo" class="form-label">Ativo</label> <br>
                                <div class="px-3">
                                    <input type="radio" class="radio-control" name="active" value="1" checked> Sim <br>
                                    <input type="radio" class="radio-control" name="active" value="0"> Não
                                </div>
                            </div>

                            {{-- errors messages --}}
                            @include('layouts.errors')

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

    {{-- @component('components.form-payment',
            [
                'routes'        => 'payment.store',
                'method'        => 'post',
                'nameValue'     => $payment->name,
                'emailValue'    => $payment->email,
                'telphoneValue' => $payment->telphone,
                'beltValue'     => $payment->belt,
            ]
        )

    @endcomponent --}}

    @section('footer')
        @include('footer')
    @endsection
@endsection
