@extends('adminlte::page')

@section('title', 'Detalhes do Status')

@section('content')
    {{-- listagem de usuários --}}
    <div class="row p-1">
        <div class="card col-12 mt-1 mb-1">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col-md-6">
                        <div class="h1">Detalhes do Status</div>
                    </div>

                    <div class="col-md-6 font-italic text-right mt-3">
                        <span>
                            <a href="{{ route('home') }}"><span class="">Home </span></a>/
                            <a href="{{ route('aluno.index') }}"><span class="">Status de Pagam. </span></a>/
                            <span class="">Detalhes do Status</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-1 justify-content-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="col-md">
                        <div class="mb-1">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $payment->name }}" disabled>
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $payment->description }}" disabled>
                        </div>

                        <div class="col-md-6">
                            <label for="ativo" class="form-label">Ativo</label> <br>

                            <div class="container">
                                @if ($payment->active == 1)
                                    <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" checked disabled> Sim
                                    <input type="radio" class="radio-control" id="ativo" name="ativo" value="0" disabled> Não
                                @else
                                    <input type="radio" class="radio-control" id="ativo" name="ativo" value="1" disabled> Sim
                                    <input type="radio" class="radio-control" id="ativo" name="ativo" value="0" checked disabled> Não
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end mt-2">
                    <div class="col-md-6 text-right">
                        <form action="#" method="POST">
                            {{-- {{ route('aluno.destroy', $payment->id) }} --}}
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
                        <a href="{{ route('payment.index') }}" class="btn btn-outline-danger col-md-6">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        @include('footer')
    @endsection
@endsection
