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
                        <form action="{{ route('historic.store') }}" method="post">
                            @csrf
                            {{-- nome do aluno --}}
                            <div class="mb-1">
                                <div class="col p-0">
                                    <label for="aluno_id" class="form-label">Nome do Aluno</label>
                                    <select class="form-control" name="aluno_id">
                                        <option class="form-control" name="aluno_id" value="0">Selecione um Aluno!</option>
                                        @foreach($alunos as $aluno)
                                            <option value="{{ $aluno->id }}">{{ $aluno->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="payment_date" class="form-label">Data de Pagamento</label>
                                <input class="form-control" type="datetime-local" name="payment_date" value="{{ $dateNow }}">
                            </div>
                            <div class="mb-1">
                                <label for="finish_payment_date" class="form-label">Data do Vencimento</label>
                                <input class="form-control" type="datetime-local" name="finish_payment_date" value="{{ $dateVenciment }}">
                            </div>
                            <div class="mb-1">
                                <div class="col p-0">
                                    <label for="payment_statuses_id" class="form-label">Status</label>
                                    <select class="form-control" name="payment_statuses_id">
                                        <option class="form-control" name="payment_statuses_id" value="0">Selecione um Status!</option>
                                        @foreach($statuses as $status)
                                            @if ($status->active == 1)
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="valor" class="form-label">Valor</label>
                                <input class="form-control" type="text" name="valor" id="valor" value="{{ old('valor') }}">
                            </div>

                            {{-- errors messages --}}
                            @include('layouts.errors')

                            <div class="row justify-content-center">
                                <button class="btn btn-outline-success col m-2" type="submit">Salvar</button>
                                <a href="{{ route('historic.index') }}" class="btn btn-outline-danger col m-2">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('js-historic')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#valor").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false})
            })
        </script>
    @endsection

    @section('footer')
        @include('footer')
    @endsection
@endsection
