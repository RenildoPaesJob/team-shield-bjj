@extends('adminlte::page')

@section('title', 'Historico de Pagamento')

@section('content')
    {{-- listagem de usuários --}}
    <div class="content-fluid">

        {{-- title --}}
        @component('components.title-header', [
            'title' => 'Histórico de Pagamento',
            'paths' => [
                'path' => [
                    [
                        'name' => 'home',
                        'route' => 'home'
                    ]
                ]
            ],

            'titlePath' => 'Histórico'
        ])
            <a type="button" href="{{ route('historic.create') }}" class="btn btn-outline-primary">
                <i class="fa fa-plus"></i> Novo
            </a>
        @endcomponent

        {{-- registros --}}
        <div class="row p-1">
            <div class="card col-md-12">
                <div class="card-body">

                    @component('vendor.adminlte.components.tool.datatable',
                            [
                                'id'    => 'table-list-historic',
                                'heads' => [
                                    'Nome do Aluno',
                                    'Status',
                                    'Data de Pagamento',
                                    'Data de Vencimento',
                                    'Ações',
                                ],
                            ]
                        )
                        @foreach ($historics as $historic)
                            <tr class="text-center">
                                <td>{{ $historic->name_aluno }}</td>
                                <td>{{ $historic->name_payment_statuses }}</td>
                                {{-- <td>{{ date_format($historic->payment_date, "D M Y") }}</td> --}}
                                <td>{{ $historic->payment_date }}</td>
                                <td>{{ $historic->finish_payment_date }}</td>

                                <td class="text-center">
                                    <a href="{{ route('historic.show', $historic->id) }}"
                                        title="{{ 'Detalhes' }}" class="btn btn-outline-warning"
                                        type="submit"><i class="fa fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @section('footer')
        @include('footer')
    @endsection
@endsection
