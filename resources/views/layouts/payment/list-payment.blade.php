@extends('adminlte::page')

@section('title', 'Pagamento')

@section('content')
    {{-- listagem de usuários --}}
    <div class="content-fluid">
        <div class="row p-1">
            <div class="card col-12 mt-1 mb-1">
                <div class="card-body">
                    <div class="row align-middle">
                        <div class="col-md">
                            <div class="h1">Status de Pagamento
                                    {{-- <a type="button" href="{{ route('payment.create') }}" class="btn btn-outline-primary"> --}}
                                    <a type="button" href="#" class="btn btn-outline-primary">
                                        <i class="fa fa-user-plus"></i> Novo
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-8 font-italic text-right mt-3">
                            <span>
                                <a href="{{ route('home') }}"><span class="">Home </span></a>/
                                <span class="">Status de Pagamento</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-1">
            <div class="card col-md-12">
                <div class="card-body">
                    @component('vendor.adminlte.components.tool.datatable',
                            [
                                'id'    => 'table-list-payment',
                                'heads' => [
                                    'Nome',
                                    'descrição',
                                    'Ativo',
                                    'Ações',
                                ],
                            ]
                        )
                        @foreach ($payments as $payment)
                            <tr class="text-center">
                                <td>{{ $payment->name }}</td>
                                <td>{{ $payment->description }}</td>
                                <td>
                                    @if ($payment->active == 1)
                                        {{ 'Ativo' }}
                                    @elseif($payment->active == 0)
                                        {{ 'Inativo' }}
                                    @endif
                                </td>

                                <td class="text-center">
                                    {{-- <a href="{{ route('payment.show', ['id' => $payment->id]) }}" 
                                        title="{{ 'Detalhes' }}" class="btn btn-outline-warning" 
                                        type="submit"><i class="fa fa-search"></i>
                                    </a>

                                    <a href="{{ route('payment.update', $payment->id) }}" 
                                        title="{{ 'Editar' }}"
                                        class="btn btn-outline-primary"
                                        type="submit"><i class="fa fa-pencil"></i>
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    @section('footer')
        @include('footer')
    @endsection
@endsection
